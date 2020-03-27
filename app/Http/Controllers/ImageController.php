<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objects = Type::all('name', 'id');
        return view('image.image_upload', compact('objects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Image::create(['name' => $request->name_image, 'type_id' => $request->id]);
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $file) {
                $file->move('../storage/app/public' . "/" . $request->id, Str::random(20));
            }
        }
        return response(route('place.index'), 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $image)
    {
        Image::find($image)->delete();
        Storage::delete('/public/' . $id . '/' . $image);
        return response(route('place.index'), 200);
    }
}
