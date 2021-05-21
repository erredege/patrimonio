<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagesList = Image::all();
        return view('backend.image.index', ['imagesList'=>$imagesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.image.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();

       if ($request->hasFile('imageFile')) {
            $image->title = $request->title;
            $image->description = $request->description;
            $image->order = $request->order;
            $extension = $request->file('imageFile')->extension();
            $imgFileName = time() * rand(1, 10000) . "." . $extension;
            $imgPath = "assets/images/" . $imgFileName;

            $request->file('imageFile')->move(public_path('assets/images'),$imgFileName);
        $image->route =$imgPath;
        $image->save();
        }


         return redirect()->route('image.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        return view('backend.image.show', ['image'=>$image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('backend.image.form', array('image' => $image));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Image::find($request->id);
        $image->title = $request->title;
        $image->description = $request->description;
        $image->order = $request->order;

        $image->save();

        return redirect()->route('image.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('image.index');
    }

    public function getInfo($id) {
        $data = Image::find($id);
        return response()->json($data);
    }
}
