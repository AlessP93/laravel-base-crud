@extends('layouts.base')

@section('page-title')
    creazione prodotto
@endsection

@section('page-content')
    <h1>crea un prodotto</h1>
    <form action="{{route('comics.store')}} method="POST>
        @csrf
        
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">tipologia</label>
            <select class="form-select" id="tipo" name="tipo">
                <option value="type">comic book</option>
                <option value="type">graphic novel</option>
            </select>
        </div>
{{-- 
        <div class="mb-3">
            <label for="tipo" class="form-label">tipologia</label>
            <input type="text" class="form-control" id="titolo" name="title">
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection