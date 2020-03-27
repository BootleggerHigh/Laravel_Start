<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Models\Image;
use App\Models\Like;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $get_id_Type = (Type::where($request->name)->get('id'));
        $id_Image = Image::where('name',
            ($request->get($request->get('like_photo') ? 'like_photo' : 'dislike_photo')))->get('id');
        if (!empty($request->get('like_place'))) {
            Like::create(['liktable_id' => $get_id_Type[0]->id, 'liktable_type' => Type::class]);
        } else {
            if (!empty($request->get('dislike_place'))) {
                Dislike::create(['disliktable_id' => $get_id_Type[0]->id, 'disliktable_type' => Type::class]);
            }
        }
        if (!empty($request->get('like_photo'))) {
            Like::create(['liktable_id' => $id_Image[0]->id, 'liktable_type' => Image::class]);
        } else {
            if (!empty($request->get('dislike_photo'))) {
                Dislike::create(['disliktable_id' => $id_Image[0]->id, 'disliktable_type' => Image::class]);
            }
        }
        return Redirect::back();
//    }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
