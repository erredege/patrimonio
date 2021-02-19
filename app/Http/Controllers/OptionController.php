<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index() {
        $optionsList = Option::all();
        return view('backend.option.index', ['optionsList'=>$optionsList]);
    }

    public function show($id) {
        $option = Option::find($id);
        return view('backend.option.show', ['option'=>$option]);
    }

    public function create() {
        return view('backend.option.form');
    }

    public function store(Request $r) {
        $campos = Option::get();  // Esto nos devuelve un array con todos los campos del formulario, con sus nombres y sus valores
        foreach ($campos as $campo => $vlaue) {
           $option = new Option();
           $option->key = $r->key;
           $option->value = $r->value;
        }
        $option->save();
        return redirect()->route('option.index');
    }

    public function edit($id) {
        $option = Option::find($id);
        return view('backend.option.form', array('option' => $option));
    }

    public function update(Request $r) {
        $option = Option::find($r->id);
        $option->value = $r->value;
        $option->key = $r->key;
        $option->save();
        return redirect()->route('option.index');
    }

    public function destroy($id) {
        $option = Option::find($id);
        $option->delete();
        return redirect()->route('option.index');
    }
}
