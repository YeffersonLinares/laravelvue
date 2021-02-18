@extends('plantilla')
@section('content')

<div class="container mt-5">
    <a class="btn btn-success" href="{{ route('user.create') }}">Crear</a>
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>opciones</th>
        </thead>
        <tbody>
            @foreach ($users as $row)
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>Opciones</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
