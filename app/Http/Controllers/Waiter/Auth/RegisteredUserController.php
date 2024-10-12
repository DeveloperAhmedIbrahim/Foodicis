<?php

namespace App\Http\Controllers\waiter\Auth;

use App\Http\Controllers\Controller;
use App\Models\Waiter;
use DeepCopy\Filter\ChainableFilter;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('waiter.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Waiter::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $waiter = Waiter::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($waiter));

        Auth::guard('waiter')->login($waiter);

        return redirect(route('waiter.dashboard', absolute: false));
    }
}
