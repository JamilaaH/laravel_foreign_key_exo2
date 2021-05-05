@extends('layout.index')

@section('content')
    <div class="container">
        <h1>back office</h1>
        <div class="row">
            <div class="col-6 d-flex">
                <a href="{{ route('voiture.index') }}" class="btn btn-primary">Voitures</a>
            </div>
        </div>
    </div>
@endsection