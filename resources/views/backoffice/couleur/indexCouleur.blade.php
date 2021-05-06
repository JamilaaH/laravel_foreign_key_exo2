@extends('layout.index')

@section('content')
    <div class="container">
        <h1>Toutes les couleurs</h1>
        <a href={{ route('admin') }}>Admin</a> <br>
        <a href={{ route('couleur.create') }} class="btn btn-primary mb-1">Add</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Couleur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($couleurs as $couleur)
                    <tr>
                        <th scope="row">{{$couleur->id}}</th>
                        <td>{{$couleur->nom}}</td>
                        <td>
                            <a href="" class="btn btn-primary">edit</a>
                            <form action={{route('couleur.destroy', $couleur->id)}} method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1">delete</button>
                            </form>
                        </td>
                    </tr>
    
                @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
