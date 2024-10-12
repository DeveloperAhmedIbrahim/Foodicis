<?php

namespace App\Http\Controllers\Chef\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChefLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Order;
use App\Models\Dish;
use App\Models\Waste;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('chef_panel.login.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(ChefLoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Redirect to the chef dashboard
        return redirect()->route('chef.dashboard');
    }

    /**
     * Display the chef dashboard.
     */
    public function index(): View
    {
        $activeOrders = Order::where('status', 'active')->count();
        $completeOrders = Order::where('status', 'completed')->count();
        $totalDishes = Dish::count();
        $totalWasteAmount = Waste::count();

        return view('chef_panel.admin_dashboard.dashboard', compact(
            'activeOrders',
            'completeOrders',
            'totalDishes',
            'totalWasteAmount'
        ));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // dd('asa');
        Auth::guard('chef')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/chef/login');
    }

    /**
     * Show the form for requesting a password reset link.
     */
    public function showLinkRequestForm(): View
    {
        return view('chef_panel.auth.forgot-password');
    }

    /**
     * Handle sending the password reset link.
     */
    public function sendResetLinkEmail(Request $request): RedirectResponse
    {
        $request->validate(['email' => 'required|email|exists:chefs,email']); // Adjust for your chef's table

        // Send the password reset link
        Password::sendResetLink($request->only('email'));

        return back()->with('status', 'Password reset link sent!');
    }

    /**
     * Show the form for resetting the password.
     */
    public function showResetForm(Request $request, $token = null): View
    {
        return view('chef_panel.auth.reset-password', ['token' => $token, 'email' => $request->email]);
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

        $resetStatus = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($chef) use ($request) {
            $chef->password = bcrypt($request->password);
            $chef->save();
            event(new PasswordReset($chef));
        });

        if ($resetStatus === Password::PASSWORD_RESET) {
            return redirect()->route('chef.login')->with('status', 'Password has been reset!');
        }

        return back()->withErrors(['email' => 'Failed to reset password.']);
    }
}
