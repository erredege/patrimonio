@extends("layouts.master")

{{--@section("title", "Inserción de usuario")
@section("header", "Inserción de usuario")--}}

@section("content")
    @isset($image)
        <form action="{{ route('image.update', ['id' => $image->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('image.store') }}" method="POST">
    @endisset
        @csrf
        Titulo:<input type="text" name="title" value="{{$image->title ?? '' }}"><br>
        Descripcion:<input type="text" name="description" value="{{$image->description ?? '' }}"><br>
        Orden Prioridad:<input type="number" name="order" value="{{$image->order ?? '' }}"><br>
        Imagen:<input type="file" name="imageFile" value=""><br>
        
        <input type="submit">
        </form>

@endsection