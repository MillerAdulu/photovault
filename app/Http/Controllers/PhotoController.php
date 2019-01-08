<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\ProviderCredential;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function facebookPhotos(Request $request)
    {

        if($this->isLoggedInToFacebook())
        {

            $user = ProviderCredential::where([
                ['user_id', Auth::id()],
                ['provider', 'facebook']
            ])->first();

            $facebookClient = new Client;

            $photos = json_decode($facebookClient->get('https://graph.facebook.com/'. $user->provider_given_id .'/photos/uploaded', [
                'query' => [
                    'access_token' => $user->token,
                    'fields' => 'images,name,album'
                ],
            ])->getBody());
        } 
        else if(!$this->isLoggedInToFacebook()) {
            return redirect()->action('FacebookController@redirectToProvider');
        }

        return view('photos.facebook', ['photos' => $photos->data]);
    }

    public function isLoggedInToFacebook()
    {
        if(ProviderCredential::where([
            ['user_id', Auth::id()],
            ['provider', 'facebook']
        ])->first() == null
        ) return false;
        else return true;
    }
}
