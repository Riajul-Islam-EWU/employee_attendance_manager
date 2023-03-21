<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    public function googleRedirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        $userData = Socialite::driver('google')->user();
        // dd($userData);

        $finduser = User::where('google_id', $userData->id)->first();

        if ($finduser) {

            Auth::login($finduser);

            return redirect('/');
        } else {
            $user = new User();
            $uuid = Str::uuid()->toString();
            $user->name = $userData->name;
            $user->email = $userData->email;
            $user->auth_type = 'google';
            $user->dob = '2000-10-10';
            $user->google_id = $userData->id;
            $user->avatar = $userData->avatar;
            $user->password = Hash::make($uuid . now());
            $user->save();

            Auth::login($user);

            return redirect('/');
        }
    }
}
