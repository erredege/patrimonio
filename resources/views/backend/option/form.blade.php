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
        <div class="form-group">
            <label class="control-label">Clave</label>
            <input type="text" class="form-control" name="key" value="{{$option->key ?? '' }}">
        </div>
        <div class="form-group">
            <label class="control-label">Valor</label>
            <input type="text" class="form-control" name="value" value="{{$option->value ?? '' }}">
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        </form>

@endsection