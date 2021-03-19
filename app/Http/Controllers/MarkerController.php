<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marker;
use App\Models\Point;
use DB;
use PhpParser\Node\Stmt\For_;

class MarkerController extends Controller
{
    public function index() {
        $markersList = Marker::all();
        return view('backend.marker.index', ['markersList'=>$markersList]);
    }

    public function show($id) {
        $marker = Marker::find($id);
        return view('backend.marker.show', ['marker'=>$marker]);
    }

    public function create() {
        return view('backend.marker.form');
    }

    public function store(Request $r) {
        $marker = new Marker();
        

        $marker->title = $r->title;
        $marker->latitude = $r->latitude;
        $marker->length = $r->length;
        $marker->name = $r->name;
        $marker->information = $r->information;
        $marker->type = $r->type;
        //$marker->start_point = $r->start_point;
        $marker->radio = $r->radio;
        $marker->border_color = $r->border_color;
        $marker->background_color = $r->background_color;
        $marker->opacity = $r->opacity;
                
        $arrayPuntos = explode("/",$r->puntosPoligono);

        if($r->type == '2'){
            foreach($arrayPuntos as $punto){
                $point = new Point();
                $cordenada = explode(",",$punto);
                echo(var_dump($cordenada));
                $point->latitude = $cordenada[0];
                $point->length = $cordenada[1];
                $point->marker_name = $marker->name;
               
                $point->save();
            }
        }
        $marker->save();
        return redirect()->route('marker.index');
    }

    public function edit($id) {
        $marker = Marker::find($id);
        return view('backend.marker.form', array('marker' => $marker));
    }

    public function update(Request $r) {
        $marker = Marker::find($r->id);
        $marker->latitude = $r->latitude;
        $marker->length = $r->length;
        $marker->name = $r->name;
        $marker->information = $r->information;
        $marker->type = $r->type;
        $marker->start_point = $r->start_point;
        $marker->radio = $r->radio;
        $marker->border_color = $r->border_color;
        $marker->background_color = $r->background_color;
        $marker->opacity = $r->opacity;
        $marker->save();
        return redirect()->route('marker.index');
    }

    public function destroy($id) {
        $marker = Marker::find($id);
        $marker->delete();
        return redirect()->route('marker.index');
    }

    public function getInfo($id) {
        $data = Marker::find($id);
        $data = DB::table('markers')
        ->join('images', 'markers.name', '=', 'images.title')
        ->select('markers.information', 'images.route', 'markers.title')
        ->where('markers.id', '=', $id)
        ->get();
        return response()->json($data);
    }
}
