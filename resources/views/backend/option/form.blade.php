@extends("layouts.master")

{{--@section("title", "Inserción de Caracteristicas de Mapa")
@section("header", "Inserción de Caracteristicas de Mapa")--}}

@section("content")
    @isset($option)
        <form action="{{ route('option.update', ['id' => $option->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('option.store') }}" method="POST">
    @endisset
        @csrf
        Clave:<input type="text" name="key" value="{{$option->key ?? '' }}"><br>
        Valor:<input type="text" name="value" value="{{$option->value ?? '' }}"><br>
        <input type="submit">
        </form>

@endsection