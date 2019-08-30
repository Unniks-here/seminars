<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Socialite;

class SocialiteController extends Controller
{

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        $url = action('Auth\SocialiteController@handleFacebookCallback', [], true);
        return Socialite::driver('facebook')
            ->redirectUrl($url)
            ->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        $url = action('Auth\SocialiteController@handleFacebookCallback', [], true);
        $user = Socialite::driver('facebook')
            ->redirectUrl($url)
            ->user();

        $authUser = $this->findOrCreateUser($user, 'facebook');

        Auth::login($authUser, true);

        return redirect()->intended('/');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToGoogle()
    {
        //  ->scopes(['scope1', 'scope2'])
        $url = action('Auth\SocialiteController@handleGoogleCallback', [], true);
        return Socialite::driver('google')
            ->redirectUrl($url)
            ->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleGoogleCallback()
    {
        $url = action('Auth\SocialiteController@handleGoogleCallback', [], true);
        $user = Socialite::driver('google')
            ->redirectUrl($url)
            ->user();

        $authUser = $this->findOrCreateUser($user, 'google');

        Auth::login($authUser, true);

        return redirect()->intended('/');
    }

    /**
     * Return user if exists; create and return if it does not
     *
     * @param $user
     *
     * @return User
     */
    private function findOrCreateUser($user, $provider)
    {
        $fieldName = "{$provider}_id";
        if ($authUser = User::where($fieldName, $user->id)->first()) {
            return $authUser;
        }

        if ($authUser = User::where('email', $user->email)->first()) {
            // user has used several accounts.
            $authUser->{$fieldName} = $user->id;
            $authUser->password = '!'; // for security reasons password reset.
            $authUser->avatar = $user->avatar;
            $authUser->save();

            return $authUser;
        }

        return User::create([
            'name' => $user->name,
            'email' => $user->email,
            $fieldName => $user->id,
            'avatar' => $user->avatar,
            'password' => '!'
        ]);
    }
}
