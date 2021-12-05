<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $pinguser = User::where('google_id',$user->getId())->first();
            if($pinguser){
                //   dd($user->id);
                // Auth::login($pinguser->hasRole == "member");
                Auth::login($pinguser);
                // Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('home');
            } else{
                $newUser = user::create([
                    'name' => $user->name,
                    'username' => $user->email,
                    'avatar' => $user->name,
                    'phone' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('admin123')
                ]);

                Auth::login($newUser);
                // Alert::success('Success', 'Hello Broooo');
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {

        }
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {
            $member = Socialite::driver('github')->user();
            // dd($member);
            $msukuser = User::where('github_id',$member->getId())->first();
            if($msukuser){
                //   dd($user->id);
                // Auth::login($pinguser->hasRole == "member");
                Auth::login($msukuser);
                // Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('home');
            } else{
                $baruUser = user::create([
                    'name' => $member->name,
                    'username' => $member->email,
                    'avatar' => $member->name,
                    'phone' => $member->name,
                    'email' => $member->email,
                    'github_id' => $member->id,
                    'password' => bcrypt('admin123')
                ]);

                Auth::login($baruUser);
                // Alert::success('Success', 'Hello Broooo');
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {

        }
    }

}
