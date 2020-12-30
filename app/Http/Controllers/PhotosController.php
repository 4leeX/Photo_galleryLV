<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function create(int $albumId){
        return view('photos.create')->with('albumId', $albumId);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover-image' => 'required|image'
        ]);



        $filenemeWithExtension = $request->file('cover-image')->getClientOriginalName();

        $filename = pathinfo($filenemeWithExtension, PATHINFO_FILENAME);

        $extension = $request->file('cover-image')->getClientOriginalExtension();

        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $request->file('cover-image')->storeAs('public/album_covers', $filenameToStore);


        $album = new Photo();
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;
        $album->save();

        return redirect('/albums')->with('success', 'Album created successfully!');
    }
}
