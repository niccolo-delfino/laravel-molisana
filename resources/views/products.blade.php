@extends('layouts.app')
@section('title','Prodotti')

@section('content')
  <div class="all-cards">
    @foreach($formati as $key => $formato)
      <div class="card">
        <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
        <div class="over">
          <div class="text">
            <a href="{{ route('pagina-dettagli',['id' => $key])}}">{{$formato['titolo']}}</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>


@endsection
