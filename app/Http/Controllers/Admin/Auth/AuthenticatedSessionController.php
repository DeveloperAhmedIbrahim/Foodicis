<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail; // Import your email class

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin_panel.login.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(AdminLoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login');
    }

    /**
     * Show the form for requesting a password reset link.
     */
    public function showForgotPasswordForm(): View
    {
        return view('admin_panel.auth.forgot-password'); // Create this view
    }

    /**
     * Handle sending the password reset link.
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }

    /**
     * Validate the email address.
     */
    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:admins,email']);
    }

    /**
     * Show the form for resetting the password.
     */
    public function showResetForm(Request $request, $token = null): View
    {
        return view('admin_panel.auth.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    /**
     * Handle the password reset.
     */
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        // Attempt to reset the password
        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($admin) use ($request) {
            $admin->forceFill([
                'password' => bcrypt($request->password),
            ])->save();
        });

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('admin.login')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
}
