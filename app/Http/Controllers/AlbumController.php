<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\Auth;
use App\Image;

class AlbumController extends Controller
{
    public function store(Request $request)
    {
        $newAlbum = new Album;
        $newAlbum->user_id = Auth::id();
        $newAlbum->name = $request->name;
        $newAlbum->save();

        return back();
    }

    public function albums()
    {
        $albums = Album::all();
        return view('albums', ['albums' => $albums]);
    }
    public function album($album)
    {
        $album = Album::find($album);

        $images = Image::where([
            ['album_id', $album->id]
        ])->get();

        $cost = count($images) * 40;
        
        return view('album', ['album' => $album, 'images' => $images, 'cost' => $cost]);
    }
}
