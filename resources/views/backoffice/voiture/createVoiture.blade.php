@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Add une voiture</h1>
        <a href={{ route('admin') }}>Admin</a>

        <form action={{route('voiture.store')}} method="POST" class="w-50 mx-auto">
            @csrf
            <div class="form-group">
                <label for="marque">Marque: </label>
                <input type="text" id="marque" name="marque" value="{{old('marque')}}" class="form-control  @error ('marque') is-invalid @enderror">
                @error('marque')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="annee">Année: </label>
                <input type="number" name="annee" id="annee" value="{{old('annee')}}" class="form-control  @error ('annee') is-invalid @enderror">
                @error('annee')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror

            </div>
            <div class="form-group">
                <label for="couleur">Couleur</label>
                <select name="couleur_id" id="couleur"  class="form-control  @error ('couleur_id') is-invalid @enderror">
                    <option selected></option>
                    @foreach ($couleurs as $couleur)
                        <option value="{{$couleur->id}}" >{{$couleur->nom}}</option>
                    @endforeach
                </select>
                @error('couleur_id')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
                
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection