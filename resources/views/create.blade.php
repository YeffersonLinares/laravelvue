@extends('plantilla')

@section('content')
<div class="container mt-5">
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <button class="btn btn-success" type="submit">Guardar</button>
    </form>
</div>
@endsection
