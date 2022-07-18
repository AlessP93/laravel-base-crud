@extends('layouts.base')

@section('page-title')
    {{$comic->title}}   
@endsection

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <div>
        {!!$comic->description!!}
    </div>
    <ul>
        <li>Titolo: {{$comic->title}}</li>
        <li>Titolo: {{$comic->title}}</li>
    </ul>
    <p>
        <a href="{{route('comics.index')}}">Torna alla pagina precedente</a>
    </p>
@endsection

