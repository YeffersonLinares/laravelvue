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
            <td>PruebaName</td>
            <td>PruebaEmail</td>
            <td>op</td>
        </tbody>
    </table>
</div>
@endsection
