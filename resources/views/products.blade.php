@extends('layouts.app')
@section('title','Prodotti')

@section('content')
  <div class="all-cards">
    @foreach($formati as $tipo => $formato)
      <h2>{{$tipo}}</h2>
      @foreach($formato as $key => $pasta)
      <div class="card">
        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
        <div class="over">
          <div class="text">
            <a href="{{ route('pagina-dettagli',['id' => $key])}}">{{$pasta['titolo']}}</a>
          </div>
        </div>
      </div>

      @endforeach
    @endforeach
  </div>


@endsection
