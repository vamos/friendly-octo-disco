@extends('layouts.layout')

@section('title')
    <title>Ptáci</title>
@endsection

@section('content')
  <div class="title" style="margin-left:5%; font-size:8vw;">
      <a  href="/">  Ptáci </a>
  </div>
  
  {{-- Search bar --}}
  <div class="search-conatainer">
    <form class="example" action="/search">
      @csrf
      <input type="text" placeholder="Vrána.." name="search">
      <button type="submit" class="btn btn-info text-center" style="background-color: #94d3cd" value="Hladat ptáka">Hledat ptáka</button>
    </form>
  </div>
  
  <div class="side-block">
    {{-- <button  class="button" onclick="location.href='/vyuka'">Nauč sa</button>
    <button  class="button" onclick="location.href='/test'">Otestuj sa</button>
    <button class="button" onclick="location.href='/progress'" style="{{ (auth()->user()) ? "" : "visibility: hidden;" }}">Progres</button>                 --}}
  </div>
@endsection
