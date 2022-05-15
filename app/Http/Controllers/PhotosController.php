<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    //
    public function create($album_id)
    { 
        return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request)
    {
          $this->validate($request,[

            'title' => 'required',
            'description' => 'required',
            'photo' => 'required|image|max:2048'
          ]);

          $filenamewithExt = $request->file('photo')->getClientOriginalName();

          $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);

          $extension = $request->file('photo')->getClientOriginalExtension();

          $fileToStore = $filename.'_'.time().'.'.$extension;

          $path = $request->file('photo')->storeAs('public/photos'.$request->input('album_id'),$fileToStore);

          $photo = new Photo();
        
          $photo->album_id    = $request->input('album_id');
          $photo->title       = $request->input('title');
          $photo->description = $request->input('description');
          $photo->size        = $request->file('photo')->getSize();
          $photo->photo       = $fileToStore;

          $photo->save();

          return redirect('/albums/'.$request->input('album_id'))->with('success','Photo Uploaded');

    }

    public function show($id)
    {
        $photo = Photo::find($id);
        return view('photos.show')->with('photo',$photo);
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo))
        {
            $photo->delete();

            return redirect('/');
        }

    }
}
