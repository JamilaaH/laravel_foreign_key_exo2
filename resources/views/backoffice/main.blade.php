@extends('layout.index')

@section('content')
@include('partial.bo.nav')
    <div class="container">

        <h1>back office</h1>
        <div class="row">
            <div class="col-6 d-flex">
                <a href="{{ route('voiture.index') }}" class="btn btn-primary">Voitures</a>
                <a href="{{ route('couleur.index') }}" class="btn btn-primary ml-1">Couleurs</a>
            </div>
        </div>
    </div>
@endsection