<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionsController extends Controller
{
    public function index() {
        $optionList = Option::all();
        return view('backend/option/option.index', ['optionList'=>$optionList]);
    }

    public function show($id) {
        $option = Option::find($id);
        return view('backend/option/option.show', ['option'=>$option]);
    }

    public function create() {
        return view('backend/option/option.form');
    }

    public function store(Request $r) {
        $campos = Option::get();  // Esto nos devuelve un array con todos los campos del formulario, con sus nombres y sus valores
        foreach ($campos as $campo => $valor) {
           $option = new Option();
           $option->clave = $campo;
           $option->valor = $valor;
           $option->save();
        }
        return redirect()->route('option/option.index');
    }

    public function edit($id) {
        $option = Option::find($id);
        return view('backend/option/option.form', array('option' => $option));
    }

    public function update(Request $r) {
        $option = Option::find($r->id);
        $option->value = $r->value;
        $option->key = $r->key;
        $option->save();
        return redirect()->route('option/option.index');
    }

    public function destroy($id) {
        $option = Option::find($id);
        $option->delete();
        return redirect()->route('option/option.index');
    }
}
