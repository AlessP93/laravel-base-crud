@extends('layouts.base')

@section('page-title')
    Tutti i fumetti
@endsection

@section('page-content')
    <h1>Tutti i Fumetti</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td><img width="100" src="{{$comic->thumb}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection


