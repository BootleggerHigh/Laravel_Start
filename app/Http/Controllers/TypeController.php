<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = Type::all();
        return view('place.index_place', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(route('place.create'),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Type::create(['place' => $request->type, 'name' => $request->type_name]);
        return response(route('place.index'),200);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Type $type
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $info = Type::findOrFail($type);
        if (!empty($info->images[0]->type_id)) {
            $image_ = (Storage::allFiles('public/' . $info->images[0]->type_id));
            $image = str_replace('public/', '', $image_);
            $extra = $info->images;
            return view('place.show_places', compact('info','image','extra'));
        }
        return view('place.show_places', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Type $type
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        $model = Type::findOrFail($type);
        return view('place.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Type $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type)
    {
        Type::findOrFail($type)->update(['name' => $request->type_name, 'place' => $request->type]);
        return response(route('place.index'),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Type $type
     * @return \Illuminate\Http\Response
     */
    public function destroy($type)
    {
        Type::find($type)->delete();
        return response(route('place.index'),200);
    }
}
