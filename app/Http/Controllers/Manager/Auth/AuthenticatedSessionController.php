<?php

namespace App\Http\Controllers\Manager\Auth;

// use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\ManagerLoginRequest;
// use App\Models\Manager; // Use the Manager model
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\View\View;
// use Illuminate\Support\Facades\Password;
// use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ManagerLoginRequest;
use App\Models\Manager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\ingredient_name;
use App\Models\PurchaseIngredient;
use App\Models\Order;
use App\Models\Waste;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Waiter;

class AuthenticatedSessionController extends Controller
{
    // Existing methods ...
/**
 * Display the dashboard view with all the required data.
 */
public function index(): View
{
    $managerId = Auth::id(); // Get the authenticated manager's ID

    // Fetch data specific to the manager
    $totalIngredients = ingredient_name::where('manager_id', $managerId)->count();
    $todaySales = Order::where('manager_id', $managerId)
        ->whereDate('created_at', today())
        ->sum('total');
    $totalSaleAmount = Order::where('manager_id', $managerId)->sum('total');
    $totalPurchaseAmount = PurchaseIngredient::where('manager_id', $managerId)->sum('amount');
    $chefsCount = Chef::where('manager_id', $managerId)->count();
    $totalMenuItems = Menu::where('manager_id', $managerId)->count();
    // $waitersCount = Waiter::where('manager_id', $managerId)->count();
    $totalWasteCount = Waste::where('manager_id', $managerId)->count();

    // Fetch the chart data (e.g., total sales by year) for the specific manager
    $chartData = Order::selectRaw('YEAR(created_at) as year, SUM(total) as total_sales')
        ->where('manager_id', $managerId) // Filter by manager ID
        ->groupBy('year')
        ->orderBy('year', 'asc')
        ->get();

    // Pass the data to the view
    return view('manager_panel.admin_dashboard.dashboard', compact(
        'totalIngredients',
        'todaySales',
        'totalSaleAmount',
        'totalPurchaseAmount',
        'chefsCount',
        // 'waitersCount',
        'totalWasteCount',
        'totalMenuItems',
        'chartData' // Pass the chart data to the view
    ));
}

// public function getYearlyChartData()
// {
//     $managerId = Auth::id(); 

//     return response()->json(Order::selectRaw('YEAR(created_at) as period, SUM(total) as total_sales')
//         ->where('manager_id', $managerId)
//         ->groupBy('period')
//         ->orderBy('period', 'asc')
//         ->get());
// }

// public function getMonthlyChartData()
// {
//     $managerId = Auth::id();

//     return response()->json(Order::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as period, SUM(total) as total_sales')
//         ->where('manager_id', $managerId)
//         ->groupBy('period')
//         ->orderBy('period', 'asc')
//         ->get());
// }
public function getYearlyChartData()
{
    $managerId = Auth::id();
    
    $data = Order::selectRaw('YEAR(created_at) as period, SUM(total) as total_sales')
        ->where('manager_id', $managerId)
        ->groupBy('period')
        ->orderBy('period', 'asc')
        ->get();

    return response()->json($data);
}



    /**
     * Display the login view.
     */
    public function create(): View
    {

        return view('manager_panel.login.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(ManagerLoginRequest $request): RedirectResponse
    {
        $manager = Manager::where('email', $request->email)->first();

        if (!$manager || $manager->status !== 1) {
            session()->flash('status_error', 'Your account is inactive. Please contact the administrator.');
            return redirect()->back();
        }
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->route('manager.dashboard');
    }

    /**
     * Handle sending the password reset link.
     */
    public function sendResetLinkEmail(Request $request): RedirectResponse
    {
        $request->validate(['email' => 'required|email|exists:managers,email']);

        // Send the password reset link
        Password::sendResetLink($request->only('email'));

        return back()->with('status', 'Password reset link sent!');
    }

    /**
     * Show the form for requesting a password reset link.
     */
    public function showLinkRequestForm(): View
    {
        return view('manager_panel.auth.forgot-password');
    }

    /**
     * Show the form for resetting the password.
     */
    public function showResetForm(Request $request, $token = null): View
    {
        return view('manager_panel.auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    /**
     * Handle updating the password.
     */
    public function reset(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required'
        ]);

        $resetStatus = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($manager) use ($request) {
            $manager->password = bcrypt($request->password);
            $manager->save();
            event(new PasswordReset($manager));
        });

        if ($resetStatus === Password::PASSWORD_RESET) {
            return redirect()->route('manager.login')->with('status', 'Password has been reset!');
        }

        return back()->withErrors(['email' => 'Failed to reset password.']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        Auth::guard('manager')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/manager/login');
    }
}
