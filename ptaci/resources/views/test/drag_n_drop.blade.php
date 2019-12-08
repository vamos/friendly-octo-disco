{{-- ITU projekt - Vyukovy program na znalost ptaku CR --}}
{{-- autor : Tomas Kiss --}}
{{-- login : xkisst00  --}}

{{-- Test in drag and drop format. User can drag one picture from 4 and drop it to the answer field.  --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Drag & Drop</title>
@endsection

@section('content')               
    <div id="app">
        <div class="container">
            @if (auth()->user())
            {{-- Using Vue.js component representing the test. --}}
            <drag_n_drop :user="{{ Auth::user() }}"></drag_n_drop>
            @else    
            <drag_n_drop :user="null"></drag_n_drop>   
            
            @endif   
        </div>
    </div>            
@endsection

