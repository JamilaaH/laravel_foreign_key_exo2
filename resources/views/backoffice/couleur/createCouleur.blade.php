@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Add une couleur</h1>
        <a href={{ route('admin') }}>Admin</a>
        <form action={{route('couleur.store')}} method="POST" class="w-50 mx-auto">
            @csrf
            <div class="form-group">
                <label for="couleur">Couleur: </label>
                <input type="text" id="couleur" name="couleur" class="form-control @error ('couleur') is-invalid @enderror">
                @error('couleur')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection