<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\ProviderCredential;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    private $apiHost = 'https://graph.facebook.com';

    public function facebookPhotos(Request $request)
    {
        if($this->isConnected())
        {
            $user = ProviderCredential::where([
                ['user_id', Auth::id()],
                ['provider', 'facebook']
            ])->first();

            $facebookClient = new Client;

            $photos = json_decode($facebookClient->get($this->apiHost . '/'. $user->provider_given_id .'/photos/uploaded', [
                'query' => [
                    'access_token' => $user->token,
                    'fields' => 'images,name,album'
                ],
            ])->getBody());

            $photoData = $photos->data;
        } else $photoData = null;

        return view('photos.facebook', ['photos' => $photoData]);
    }

    public function isConnected()
    {
        $connected = @fsockopen($this->apiHost, 80|443);

        if($connected) {
            $isConnected = true;
            fclose($connected);
        } else {
            $isConnected = false;
        }

        return $isConnected;
    }
}
