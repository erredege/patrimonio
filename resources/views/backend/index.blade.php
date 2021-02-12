@extends("layouts.master")

@section("title", "Administración de marcadore")

@section("header", "Administración de marcadore")

@section("content")
<br>
<a href="{{ route('marker.create') }}">Nuevo</a>
<table border='1'>
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
            <td>E-mail</td>
            <td>Puntuacion</td>
            <td>Tipo</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$marker->latitude}}</td>
            <td>{{$marker->length}}</td>
            <td>{{$marker->name}}</td>
            <td>{{$marker->information}}</td>
            <td>{{$marker->type}}</td>
            <td>{{$marker->start_point}}</td>
            <td>{{$marker->radio}}</td>
            <td>{{$marker->border_color}}</td>
            <td>{{$marker->background_color}}</td>
            <td><a href="{{route('marker.edit', $marker->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('marker.destroy', $marker->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>

                {{--<button type="button" onclick="destroy('{{route('marker.destroy',$marker->id)}}')">Eliminar</button>--}}
            </td>
        <br>
    @endforeach
</table>
@endsection