<?php

namespace App\Http\Controllers\Waiter\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\WaiterLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('waiter.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(WaiterLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('waiter.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('waiter')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/order-taker/login');
    }
}
