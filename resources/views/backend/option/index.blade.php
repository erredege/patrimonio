@extends("layouts.master")

@section("title", "Administración de Generar del Mapa")

@section("header", "Administración de General del Mapa")

@section("content")
<br>
<a href="{{ route('option.create') }}"><button id="buttonNew" type="button" class="btn btn-primary" >Nuevo</button></a>
<table border='1' class="table">
    @foreach ($optionsList as $option)

        <tr>
            <td>Clave</td>
            <td>Valor</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$option->key}}</td>
            <td>{{$option->value}}</td>
            <td><a href="{{route('option.edit', $option->id)}}"><button id="buttonNew" type="button" class="btn btn-warning" >Modificar</button></a></td>
            <td>
                <form action = "{{route('option.destroy', $option->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger" type="submit" value="Borrar">
                </form>
                   {{--<button type="button" onclick="destroy('{{route('option.destroy',$option->id)}}')">Eliminar</button>--}}
            </td>
    @endforeach
</table>
@endsection
