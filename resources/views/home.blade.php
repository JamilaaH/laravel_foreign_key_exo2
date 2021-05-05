@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <a href={{ route('admin') }} class="btn btn-primary">Admin</a>
    </div>
@endsection