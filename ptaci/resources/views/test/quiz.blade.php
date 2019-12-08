{{-- ITU projekt - Vyukovy program na znalost ptaku CR --}}
{{-- autor : Tomas Kiss --}}
{{-- login : xkisst00  --}}

{{-- Classical quiz where user have to recognize birds based on their picture or voice, can choose from 2 or 4 answers, always just one
    answer is true.  --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Kvíz</title>
@endsection

@section('content')
    <div id="app">
        <div class="container">
        @if (auth()->user())
            <test :user="{{ Auth::user() }}"></test>
        @else
            <test :user="null"></test>
        @endif
    
        </div>
    </div>            
@endsection
