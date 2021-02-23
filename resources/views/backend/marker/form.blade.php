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
        Titulo:<input type="text" name="title" value="{{$marker->title ?? '' }}"><br>
        Latitud:<input type="number" name="latitude" value="{{$marker->latitude ?? '' }}"><br>
        Longitud:<input type="number" name="length" value="{{$marker->length ?? '' }}"><br>
        Nombre:<input type="text" name="name" value="{{$marker->name ?? '' }}"><br>
        Pnto de inicio:<input type="number" name="start_point" value="{{$marker->start_point ?? '' }}"><br>
        Radio:<input type="number" name="radio" value="{{$marker->radio ?? '' }}"><br>
        Color del borde:<input type="text" name="border_color" value="{{$marker->border_color ?? '' }}"><br>
        Color del fondo:<input type="text" name="background_color" value="{{$marker->background_color ?? '' }}"><br>
        Opacidad:<input type="number" name="opacity" value="{{$marker->opacity ?? '' }}"><br>
        Informacion:<br><input type="text" name="information" value="{{$marker->information ?? '' }}" size=20 style="height:250px"><br>
        Tipo:
        <select name="type">
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
            
        </select>
        <input type="submit">
        </form>

@endsection
