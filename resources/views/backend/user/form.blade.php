@extends("layouts.master")

{{--@section("title", "Inserción de Caracteristicas de Mapa")
@section("header", "Inserción de Caracteristicas de Mapa")--}}

@section("content")
    @isset($user)
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('user.store') }}" method="POST">
    @endisset
        @csrf
        <div class="form-group">
            <label class="control-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{$user->name ?? '' }}">
        </div>
        <div class="form-group">
            <label class="control-label">E-mail</label>
            <input type="email" class="form-control" name="email" value="{{$user->email ?? '' }}">
        </div>
        <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label class="control-label">Tipo</label>
            <select class="form-control" name="type" id="type">
                @isset($user)

                    @if ($user->type == "0")
                        <option value="0" selected>Pendiente de Asignación</option>
                        <option value="1">Admin</option>
                    @else
                        <option value="0">Pendiente de Asignación</option>
                        <option value="1" selected>Admin</option>
                    @endif
                @else
                    <option value="0" selected>Pendiente de Asignación</option>
                    <option value="1">Admin</option>
                @endisset
            </select>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
        </form>

@endsection