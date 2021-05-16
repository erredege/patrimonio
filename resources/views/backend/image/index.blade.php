@extends("layouts.master")

@section("title", "Administración de Imagenes")

@section("header", "Administración de Imagenes")

@section("content")
<br>
<a href="{{ route('image.create') }}"><button id="buttonNew" type="button" class="btn btn-primary" >Nuevo</button></a>
<table border='1' class="table">
    @foreach ($imagesList as $image)

        <tr>
            <td>Titulo</td>
            <td>Descripcion</td>
            <td>Orden prioridad</td>
            <td>Imagen</td>
            <td colspan="2">Opciones</td>
        </tr>
        <tr>
            <td>{{$image->title}}</td>
            <td>{{$image->description}}</td>
            <td>{{$image->order}}</td>
            <td><img src="{{url($image->route)}}" style="width: 45%" style="height: 30%" ></td>
            <td><a href="{{route('image.edit', $image->id)}}"><button id="buttonNew" type="button" class="btn btn-warning" >Modificar</button></a></td>
            <td>
                <form action = "{{route('image.destroy', $image->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input class="btn btn-danger" type="submit" value="Borrar">
                </form>

                {{--<button type="button" onclick="destroy('{{route('marker.destroy',$marker->id)}}')">Eliminar</button>--}}
            </td>

    @endforeach
</table>
@endsection
