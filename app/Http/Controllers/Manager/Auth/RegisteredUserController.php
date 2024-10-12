<?php

namespace App\Http\Controllers\Manager\Auth;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Mail\ManagerRegistrationPending;
use Illuminate\Support\Facades\Mail;
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
        // dd('register');
        return view('manager_panel.login.register');
        // return view('manager.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Manager::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $Manager = Manager::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($Manager));

    //     Auth::guard('manager')->login($Manager);

    //     return redirect(route('manager.dashboard', absolute: false));
    // }

    // -----------------------------------21/8/24 old
    // public function store(Request $request): RedirectResponse
    // {
    //     // Validate and create the manager (or use existing logic)
    //     $manager = Manager::create($request->all());

    //     // Flash a session message to trigger the modal
    //     session()->flash('registration_pending', 'Your registration has been sent for approval. Please wait for admin approval.');

    //     // Redirect back to the login or registration page
    //     return redirect()->route('manager.login'); // or another route if needed
    // }

    public function store(Request $request): RedirectResponse
    {
        // Validate and create the manager
        $manager = Manager::create($request->all());

        // Send registration pending email
        Mail::to($manager->email)->send(new ManagerRegistrationPending($manager));

        // Flash a session message to trigger the modal
        session()->flash('registration_pending', 'Your registration has been sent for approval. Please wait for admin approval.');

        // Redirect back to the login or registration page
        return redirect()->route('manager.login');
    }
}
