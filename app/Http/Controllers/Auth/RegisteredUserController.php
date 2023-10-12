<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Monarobase\CountryList\CountryListFacade;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $countries = CountryListFacade::getList('en');
        return view('auth.register', compact('countries'));
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
            'agent_company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'mobile' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $slug = "";
        if($request->agent_company !== ""){
            $slug =  preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($request->agent_company));
        }
        else{
            $slug =  preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($request->name));
        }
        // echo $slug;exit;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
        ]);
        $agent = Agent::create([
            'user_id' => $user->id,
            'agent_company' => $request->agent_company,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'slug' => $slug,
        ]);
        event(new Registered($user));
        // Auth::login($user);
        return redirect(route('login'))->with('verify_status', 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.');
        // if($user->user_type == "Agent")
        //     return redirect(RouteServiceProvider::AGENT_HOME);
        // else
        //     return redirect(RouteServiceProvider::HOME);
    }
}
