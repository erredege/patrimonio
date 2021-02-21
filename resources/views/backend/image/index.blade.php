@extends("layouts.master")

@section("title", "Administración de Imagenes")

@section("header", "Administración de Imagenes")

@section("content")
<br>
<a href="{{ route('image.create') }}">Nuevo</a>
<table border='1'>
    @foreach ($imagesList as $image)
   
        <tr>
            <td>Titulo</td>
            <td>Descripcion</td>
            <td>Orden prioridad</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$image->title}}</td>
            <td>{{$image->description}}</td>
            <td>{{$image->order}}</td>
            
            <td><a href="{{route('image.edit', $image->id)}}">Modificar</a></td>
            <td>
                <form action = "{{route('image.destroy', $image->id)}}" method="POST">
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