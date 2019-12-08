{{-- ITU projekt - Vyukovy program na znalost ptaku CR --}}
{{-- autor : Tomas Kiss --}}
{{-- login : xkisst00  --}}

{{-- Classical quiz with countdown where user have to recognize birds based on pictures, can choose from 2 or 4 answers, always just one
    answer is true. True answers have value +10s and false -5s. --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Time attack</title>
@endsection

@section('content')
    <div id="app">
        <div class="container">
            @if (auth()->user())
                <time_attack :user="{{ Auth::user() }}"></time_attack>
            @else
                <time_attack :user="null"></time_attack>
            @endif
        </div>
    </div>
@endsection
