<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GoogleLoginController extends Controller
{
    // ====================================================
    // ================ GOOGLE LOGIN START ================
    // ====================================================
    // google login start
    final public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    final public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();

            // First its checking is user is exixts or not
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                 // If user not exist, it will create a user in User table
                $saveUser = User::updateOrCreate(
                    [
                        'google_id' => $user->getId()
                    ],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]
                );

            } else{
                // If user is exist, then it will update the existing user.
                User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);

                $saveUser = User::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect('/home');


        } catch (\Throwable $th) {
            throw $th;
        }

    }


    // ====================================================
    // ================ GITHUB LOGIN START ================
    // ====================================================

    final public function loginWithGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    final public function callbackFromGithub()
    {
        try {
            $user = Socialite::driver('github')->user();

            // First its checking is user is exixts or not
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                 // If user not exist, it will create a user in User table
                $saveUser = User::updateOrCreate(
                    [
                        'github_id' => $user->getId()
                    ],
                    [
                        'name' => $user->getName(),
                        'username' => $user->getNickname(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]
                );

            } else{
                // If user is exist, then it will update the existing user.
                User::where('email', $user->getEmail())->update([
                    'github_id' => $user->getId(),
                ]);

                $saveUser = User::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect('/home');


        } catch (\Throwable $th) {
            throw $th;
        }

    }


    // ====================================================
    // ================ LINKED LOGIN START ================
    // ====================================================

    final public function loginWithLinkedin()
    {
        return Socialite::driver('linkedin-openid')->redirect();
    }

    final public function callbackFromLinkedin()
    {
        try {
            $user = Socialite::driver('linkedin-openid')->user();

            // First its checking is user is exixts or not
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){
                 // If user not exist, it will create a user in User table
                $saveUser = User::updateOrCreate(
                    [
                        'linkedin_id' => $user->getId()
                    ],
                    [
                        'name' => $user->getName(),
                        'username' => $user->getNickname(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]
                );

            } else{
                // If user is exist, then it will update the existing user.
                User::where('email', $user->getEmail())->update([
                    'linkedin_id' => $user->getId(),
                ]);

                $saveUser = User::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect('/home');


        } catch (\Throwable $th) {
            throw $th;
        }

    }







}


//
// Google Credentials
// Client Id = 345910235402-52q7lqub67qg7gmv6sca2k2335kpku2l.apps.googleusercontent.com
// Client Secredt Id = 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

// https://github.com/settings/applications
// Github Credentials
// Client Id = Ov23liM9iukWLmpHBa6W
// Client Secret Id = fb9fd048cee780f19efd835ff7a117d2c00b1bdf
//

// https://www.linkedin.com/developers
// a valid linkedin page need, then need to verify that linkedin page,
// must request access to two product 'Share on Linkedin' and 'Sign In with LinkedIn using OpenID Connect'
// need min 100px with logo and don't need privacy policy link
// ==Linkedin Credentials==
// Client Id = 86ea7yyntw7bcy
// Client Secret Id = wmSAukb7tx3nHrUc
//


// https://www.linkedin.com/developers/apps/verification/62774b8f-680b-47fc-b075-df882fa7e405
