<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionsController extends Controller
{
    public function index() {
        $optionList = Option::all();
        return view('backend/marker.index', ['markersList'=>$markersList]);
    }

    public function show($id) {
        $marker = Option::find($id);
        return view('backend/marker.show', ['marker'=>$marker]);
    }

    public function create() {
        return view('backend/masker.form');
    }

    public function store(Request $r) {
        $marker = new Option();
        $marker->latitude = $r->latitude;
        $marker->length = $r->length;
        $marker->name = $r->name;
        $marker->information = $r->information;
        $marker->type = $r->type;
        $marker->start_point = $r->start_point;
        $marker->radio = $r->radio;
        $marker->border_color = $r->border_color;
        $marker->background_color = $r->background_color;
        $marker->save();
        return redirect()->route('marker.index');
    }

    public function edit($id) {
        $marker = Option::find($id);
        return view('backend/marker.form', array('marker' => $marker));
    }

    public function update(Request $r) {
        $marker = Option::find($r->id);
        $marker->latitude = $r->latitude;
        $marker->length = $r->length;
        $marker->name = $r->name;
        $marker->information = $r->information;
        $marker->type = $r->type;
        $marker->start_point = $r->start_point;
        $marker->radio = $r->radio;
        $marker->border_color = $r->border_color;
        $marker->background_color = $r->background_color;
        $marker->save();
        return redirect()->route('marker.index');
    }

    public function destroy($id) {
        $marker = Option::find($id);
        $marker->delete();
        return redirect()->route('markers.index');
    }
}
