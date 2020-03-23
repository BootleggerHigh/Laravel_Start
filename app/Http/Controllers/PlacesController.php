<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Models\Place;
use Illuminate\Support\Facades\Storage;

class PlacesController extends Controller
{
    public function show()
    {
        $model = Place::all();
        return view('show_point',['info'=>$model]);
    }
    public function create(PlaceRequest $request)
    {
        if($request->isMethod('GET'))
        {
            return view('create');
        }
        else if ($request->isMethod('POST'))
        {
            Place::create(['name'=>$request->name,'type'=>$request->type]);
        }
        return redirect('/');
    }
    public function show_places($id)
    {
        $model = Place::findOrFail($id);
        $image = (Storage::allFiles('public/'.$id));
        $new_image = str_replace('public/','',$image);
     return view('show_places',['info'=>$model,'image'=>$new_image]);
    }
    public function uploads_image(PlaceRequest $request,$id)
    {
        if($request->isMethod('GET'))
        {
            if(Place::findOrFail($id))
            {
                return view('image_upload',['id'=>$id]);
            }
        }
        else if ($request->isMethod('POST'))
        {
            if($request->hasFile('file'))
            {
                $files = $request->file('file');
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $file->move('../storage/app/public'."/".$id, $filename);
    }
}
        }
    }
}
