<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use App\Models\Option;

class MapController extends Controller
{
    public function index() {
        $data['markerList'] = Marker::all();
        $data['optionList'] = Option::all();
        return view('frontend.map.index', $data);
    }
}
