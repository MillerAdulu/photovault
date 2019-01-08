<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\Auth;

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
}
