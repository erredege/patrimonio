@extends("layouts.master")

{{--@section("title", "Inserción de usuario")
@section("header", "Inserción de usuario")--}}

@section("content")
    @isset($marker)
        <form action="{{ route('marker.update', ['id' => $marker->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('marker.store') }}" method="POST">
    @endisset
        @csrf
            <div class="form-group">
                <label class="control-label">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{$marker->title ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Latitud</label>
                <input type="number" class="form-control" name="latitude" value="{{$marker->latitude ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Longitud</label>
                <input type="number" class="form-control" name="length" value="{{$marker->length ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{$marker->name ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Pnto de inicio</label>
                <input type="number" class="form-control" name="start_point" value="{{$marker->start_point ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Radio</label>
                <input type="number" class="form-control" name="radio" value="{{$marker->radio ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Color del borde</label>
                <input type="text" class="form-control" name="border_color" value="{{$marker->border_color ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Color del fondo</label>
                <input type="text" class="form-control" name="background_color" value="{{$marker->background_color ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Opacidad</label>
                <input type="number" class="form-control" name="opacity" value="{{$marker->opacity ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Informacion</label>
                <input type="text" class="form-control" name="information" value="{{$marker->information ?? '' }}" size=20 style="height:250px">
            </div>
            <div class="form-group">
                <label class="control-label">Tipo</label>
                <select class="form-control" name="type">
                    @isset($marker)
                        
                        @if ($marker->type == "0")
                            <option value="0" selected>Marcador</option>
                            <option value="1">Circulo</option>
                            <option value="2">Poligono</option>
                        @elseif($marker->type == "1")
                            <option value="0">Marcador</option>
                            <option value="1" selected>Circulo</option>
                            <option value="2">Poligono</option>
                        @elseif($marker->type == "2")
                            <option value="0">Marcador</option>
                            <option value="1">Circulo</option>
                            <option value="2" selected>Poligono</option>
                        @endif
                    @else
                        <option value="0" selected>Marcador</option>
                        <option value="1">Circulo</option>
                        <option value="2">Poligono</option>
                    @endisset   
            </select><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

@endsection
