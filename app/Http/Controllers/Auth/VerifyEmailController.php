<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(\Illuminate\Http\Request $request): RedirectResponse
    {
        $user = User::find($request->route('id'));
        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException;
        }
        if ($user->markEmailAsVerified())
            event(new Verified($user));

        // if ($request->user()->hasVerifiedEmail()) {
        //     return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        // }
        // if ($request->user()->markEmailAsVerified()) {
        //     event(new Verified($request->user()));
        // }
        // return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        
        return redirect(route('login'))->with('status', 'You email verified successfully.');
    }
}
