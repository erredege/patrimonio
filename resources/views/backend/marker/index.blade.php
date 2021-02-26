@extends("layouts.master")

@section("title", "Administración de marcadores")

@section("header", "Administración de marcadores")

@section("content")
<br>
<a href="{{ route('marker.create') }}">Nuevo</a>
<table border='1' class="table">
    @foreach ($markersList as $marker)

    @if ($marker->type == 0)
        @php 
            $valor = "marcador" 
        @endphp
    @elseif($marker->type == 1) 
        @php 
            $valor = "circulo" 
        @endphp
    @else
        @php
            $valor = "poligono"   
        @endphp
    @endif

        <tr>
            <td>Titulo</td>
            <td>Nombre</td>
            <td>Latitud</td>
            <td>Longitud</td>
            <td>Informacion</td>
            <td>Tipo</td>
            <td>Punto Inicio</td>
            <td>Radio</td>
            <td>Color Borde</td>
            <td>Color Fondo</td>
            <td>Opacidad</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$marker->title}}</td>
            <td>{{$marker->name}}</td>
            <td>{{$marker->latitude}}</td>
            <td>{{$marker->length}}</td>
            <td class="marker">{{$marker->information}}</td>
            <td>{{$valor}}</td>
            <td>{{$marker->start_point}}</td>
            <td>{{$marker->radio}}</td>
            <td>{{$marker->border_color}}</td>
            <td>{{$marker->background_color}}</td>
            <td>{{$marker->opacity}}</td>
            <td><a href="{{route('marker.edit', $marker->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('marker.destroy', $marker->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>

                {{--<button type="button" onclick="destroy('{{route('marker.destroy',$marker->id)}}')">Eliminar</button>--}}
            </td>
    @endforeach
</table>
@endsection