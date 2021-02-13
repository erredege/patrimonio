@extends("layouts.master")

@section("title", "Administración de Generar del Mapa")

@section("header", "Administración de General del Mapa")

@section("content")
<br>
<a href="{{ route('option.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($markersList as $marker)
    
        <tr>
            <td>Clave</td>
            <td>Valor</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$option->key}}</td>
            <td>{{$option->value}}</td>
            <td><a href="{{route('option.edit', $option->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('option.destroy', $option->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
                   {{--<button type="button" onclick="destroy('{{route('option.destroy',$option->id)}}')">Eliminar</button>--}}
            </td>
        <br>
    @endforeach
</table>
@endsection