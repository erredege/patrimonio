<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use App\Models\Option;
use App\Models\Point;
use App\Models\Image;

class MapController extends Controller
{
    public function index() {
        $data['markerList'] = Marker::all();
        $data['optionList'] = Option::all();
        $data['pointsList'] = Point::all();
        $data['imageList'] = Image::all();
        return view('frontend.map.index', $data);
    }
}
