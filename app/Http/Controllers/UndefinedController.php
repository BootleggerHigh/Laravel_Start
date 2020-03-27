<?php
//
//namespace App\Http\Controllers;
//
//use App\Http\Requests\PlaceRequest;
//use App\Models\Dislike;
//use App\Models\Like;
//use App\Models\Type;
//use App\Models\Image;
//use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Str;
//
//class UndefinedController extends Controller
//{
//    public function show()
//    {
//        $model = Type::all();
//        return view('show_point', ['info' => $model]);
//    }
//    public function ratings()
//    {
//        $model = Type::all();
//        return view('ratings',['ratings'=>$model]);
//    }
//    public function create(PlaceRequest $request)
//    {
//        if ($request->isMethod('GET')) {
//            return view('create');
//        } else {
//            if ($request->isMethod('POST')) {
                Type::create(['place' => $request->type, 'name' => $request->type_name]);
                return redirect('/');
//            }
//        }
//        return redirect('/');
//    }
//
//    public function show_places($id)
//    {
        $model = Type::findOrFail($id);
        if (!empty($model->images[0]->type_id)) {
            $image = (Storage::allFiles('public/' . $model->images[0]->type_id));
            $new_image = str_replace('public/', '', $image);
            $extra_info = $model->images;
            return view('show_places', ['info' => $model, 'image' => $new_image, 'extra' => $extra_info]);
        }
        return view('show_places', ['info' => $model]);
    }
//
    public function uploads_image(PlaceRequest $request)
    {
        if ($request->isMethod('GET')) {
            $models = Type::all('name', 'id');
            return view('image_upload', ['objects' => $models]);
        } else {
            if ($request->isMethod('POST')) {

        }
//        return redirect('/');
//    }
//
//    public function assessment(PlaceRequest $request)
//    {

//}
