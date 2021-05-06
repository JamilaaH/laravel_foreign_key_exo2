@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <a href={{ route('admin') }} class="btn btn-primary">Admin</a>
        <hr>
        <section>
            @foreach ($couleurs as $couleur)
            <h2>Les voitures {{$couleur->nom}}s</h2>
                <div class="row">
                    @foreach ($voitures as $voiture)
                        @if ($voiture->couleur->nom == $couleur->nom)
                        <div class="col-4">
                            <div class="card" >
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
                        @endif
                    @endforeach
    
                </div>
                @endforeach

        </section>
    </div>
@endsection