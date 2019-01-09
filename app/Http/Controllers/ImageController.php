<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $album = Album::where([
            ['user_id', Auth::id()],
            ['paid', false],
        ])->first();

        $newImage = new Image;
        $newImage->album_id = $album->id;
        $newImage->provider_id = $request->providerId;
        $newImage->uri = $request->uri;
        $newImage->save();

        return back()->with('status', 'Photo added to '. $album->name );
    }

    public function destroy($image)
    {
        $image = Image::where([ ['album_id', Album::where([ ['user_id', Auth::id()], ['paid', false], ])->first()->id], ['provider_id', $image], ])->first();
        Image::destroy($image->id);
        return back()->with('status', 'Photo removed from this album');
    }

    public function remove($image)
    {
        Image::destroy($image);
        return back()->with('status', 'Photo removed from this album');
    }
}
