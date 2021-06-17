@extends("layouts.master")

@section('title', 'Administración de Marcadores')

@section('header', 'Administración de Marcadores')

@section('content')
    <br>
    <a href="{{ route('marker.create') }}"><button id="buttonNew" type="button" class="btn btn-primary">Nuevo</button></a>
    <table border='1' class="table table-hover">
        @foreach ($markersList as $marker)

            @if ($marker->type == 0)
                @php
                    $valor = 'marcador';
                @endphp
            @elseif($marker->type == 1)
                @php
                    $valor = 'circulo';
                @endphp
            @else
                @php
                    $valor = 'poligono';
                @endphp
            @endif
            <thead>
                <tr>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Latitud</th>
                    <th class="text-center">Longitud</th>
                    <th class="text-center">Informacion</th>
                    <th class="text-center">Tipo</th>

                    <th class="text-center">Radio</th>
                    <th class="text-center">Color Borde</th>
                    <th class="text-center">Color Fondo</th>
                    <th class="text-center">Opacidad</th>
                    <th class="text-center" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $marker->title }}</td>
                    <td class="marker">{{ $marker->name }}</td>
                    <td class="marker">{{ $marker->latitude }}</td>
                    <td class="marker">{{ $marker->length }}</td>
                    <td class="informacion">{{ $marker->information }}</td>
                    <td>{{ $valor }}</td>

                    <td>{{ $marker->radio }}</td>
                    <td>{{ $marker->border_color }}</td>
                    <td>{{ $marker->background_color }}</td>
                    <td>{{ $marker->opacity }}</td>
                    <td><a href="{{ route('marker.edit', $marker->id) }}"><button id="buttonNew" type="button"
                                class="btn btn-warning">Modificar</button></a></td>
                    <td>
                        <form action="{{ route('marker.destroy', $marker->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn btn-danger" type="submit" value="Borrar">
                        </form>

                        {{-- <button type="button" onclick="destroy('{{route('marker.destroy',$marker->id)}}')">Eliminar</button> --}}
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
