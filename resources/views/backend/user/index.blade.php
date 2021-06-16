@extends("layouts.master")

@section('title', 'Administración de Usuarios')

@section('header', 'Administración de Usuarios')

@section('content')
    <br>
    <a href="{{ route('user.create') }}"><button id="buttonNew" type="button" class="btn btn-primary">Nuevo</button></a>
    <table border='1' class="table">
        @foreach ($usersList as $user)

            @if ($user->type == 0)
                @php
                    $valor = 'Pendiente de Asignación';
                @endphp
            @elseif($user->type == 1)
                @php
                    $valor = 'Admin';
                @endphp
            @endif
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>E-mail</td>
                    <td>Tipo</td>
                    <td colspan="2">Opciones</td>
                </tr>
                <thead>
                <tbody>
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $valor }}</td>
                        <td><a href="{{ route('user.edit', $user->id) }}"><button id="buttonNew" type="button"
                                    class="btn btn-warning">Modificar</button></a></td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn-danger" type="submit" value="Borrar">
                            </form>
                            {{-- <button type="button" onclick="destroy('{{route('option.destroy',$option->id)}}')">Eliminar</button> --}}
                        </td>
            <tbody>
        @endforeach
    </table>
@endsection
