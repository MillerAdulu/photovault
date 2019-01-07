<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

use Illuminate\Support\Facades\Auth;
use App\ProviderCredential;

class FacebookController extends Controller
{
    private $provider = 'facebook';
    
    public function redirectToProvider()
    {
        return Socialite::driver($this->provider)->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver($this->provider)->stateless()->user();

        if(ProviderCredential::where([
            ['user_id', Auth::id()],
            ['provider_given_id', $user->getId()],
            ['provider', 'facebook']
        ])->first() != null)
        {
            $credentials = ProviderCredential::where([
                ['user_id', Auth::id()],
                ['provider_given_id', $user->getId()],
                ['provider', 'facebook']
            ])->first();

            $credentials->token = $user->token;
            $credentials->save();

        }
        else
        {
            $credentials = ProviderCredential::create([
                'user_id' => Auth::id(),
                'provider_given_id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'token' => $user->token,
                'provider' => 'facebook',
            ]);
        }

        return redirect()->route('home');
    }
}
