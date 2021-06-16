@extends("layouts.master")

{{-- @section('title', 'Inserción de usuario')
@section('header', 'Inserción de usuario') --}}

@section('content')
    @isset($image)
        <form action="{{ route('image.update', ['id' => $image->id]) }}" method="POST" enctype="multipart/form-data">
            @method("PUT")
        @else
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @endisset
            @csrf
            <div class="form-group">
                <label class="control-label">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{ $image->title ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Descripcion</label>
                <input type="text" class="form-control" name="description" value="{{ $image->description ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Orden Prioridad</label>
                <input type="number" class="form-control" name="order" value="{{ $image->order ?? '' }}">
            </div>
            <div class="form-group">
                <label class="control-label">Orden Prioridad</label>
                <input type="file" class="form-control" name="imageFile" value="">
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>

    @endsection
