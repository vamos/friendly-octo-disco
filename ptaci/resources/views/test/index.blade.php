{{-- ITU projekt - Vyukovy program na znalost ptaku CR --}}
{{-- autor : Tomas Kiss --}}
{{-- login : xkisst00  --}}

{{-- Menu of tests. User can choose from 3 type of tests.  --}}

@extends('layouts.layout')    

@section('title')
    <title>Ptáci - Testy</title>
@endsection

@section('content')
    
<div id="app">
    <div class="container">
        <div style="margin:0 auto; margin-top:5vh" class="text-center">
                <div>
                    <button style="width:180px; margin:0 auto; margin-bottom:50px; margin-top:50px" class="myButton text-center" onclick="location.href='/test/quiz'">Quiz</button>
                </div>
                <div>
                    <button  style="width:180px; margin:0 auto; margin-bottom:50px;" class="myButton text-center" onclick="location.href='/test/drag_n_drop'">Drag&Drop</button>        
                </div>
                <div>
                    <button  style="width:180px; margin:0 auto; margin-bottom:50px;" class="myButton text-center" onclick="location.href='/test/time_attack'">Time attack</button>        
                </div>
                <div style=" ">
                    <p class="myButton myLevel text-center" style="font-size:1.5rem;width:180px; margin:0 auto; margin-bottom:20px;padding-top:0px; padding-bottom:0px;">Obtížnost</p>
                </div>
                <div style="width:180px; margin:0 auto; margin-bottom:30px;">
                    <i class="fas fa-feather fa-3x" style="color:yellow"></i>
                    <i class="fas fa-feather fa-3x" style="color:yellow"></i>
                    <i class="fas fa-feather fa-3x" style="color:white"></i>
                </div> 
            </div> 
        </div>
    </div>            
@endsection