@extends("layouts.master")

@section("title", "Administración de marcadores")

@section("header", "Administración de marcadores")

@section("content")
<br>
<a href="{{ route('marker.create') }}">Nuevo</a>
<table border='1' class="table table-hover">
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
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Nombre</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Informacion</th>
                <th>Tipo</th>
                <th>Punto Inicio</th>
                <th>Radio</th>
                <th>Color Borde</th>
                <th>Color Fondo</th>
                <th>Opacidad</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$marker->title}}</td>
                <td class="marker">{{$marker->name}}</td>
                <td class="marker">{{$marker->latitude}}</td>
                <td class="marker">{{$marker->length}}</td>
                <td class="overflow-auto">{{$marker->information}}</td>
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
            </tr>
        </tbody>
    @endforeach
</table>
@endsection
