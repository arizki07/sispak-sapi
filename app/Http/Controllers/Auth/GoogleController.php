<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $existingUser = User::where('email', $googleUser->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Buat pengguna baru jika tidak ada yang cocok
            $newUser = new User();
            $newUser->name = $googleUser->getName();
            $newUser->email = $googleUser->getEmail();
            $newUser->google_id = $googleUser->getId();
            $newUser->google_refresh_token = $googleUser->token;
            $newUser->avatar = $googleUser->getAvatar();
            $newUser->password = Hash::make('Admin.123');
            $newUser->save();

            Auth::login($newUser);
        }

        return redirect()->route('dashboard');
    }
}
