@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Toutes les voitures</h1>
        <a href={{ route('admin') }}>Admin</a> <br>
        <a href="{{route('voiture.create')}}" class="btn btn-primary">Add</a>
        <div class="row">
            @foreach ($voitures as $voiture)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <p>{{$voiture->marque}}</p>
                        </div>
                        <div class="card-body">
                            <p><span class="font-weight-bold">Marque : </span> {{$voiture->marque}} </p>
                            <p><span class="font-weight-bold">Année : </span> {{$voiture->annee}} </p>
                            <p><span class="font-weight-bold">Couleur : </span> {{$voiture->couleur->nom}} </p>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection