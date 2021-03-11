@extends('layouts.app')
@section('title', $formato['titolo'])

@section('content')

<div class="prodotto">
  <div class="container">
    <h1>{{$formato['titolo']}}</h1>
  </div>
  <div class="prodotto-img">
    <img src="{{$formato['src-h']}}" alt="Pasta Molisana">
    <img src="{{$formato['src-p']}}" alt="Pasta Molisana">
  </div>
  <div class="descrizione">
    <div class="container">
      {!!$formato['descrizione']!!}
    </div>
  </div>
</div>

@endsection
