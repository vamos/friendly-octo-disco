{{-- Autor: Lukas Erlich(xerlic00) --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Nauč se</title>
@endsection

<style>
    .btn-img{
        width: 25%;
        margin-left: 5%;
        margin-top: 10px;
        border-radius: 25px;
        background-color: rgba(255, 255, 255, 0.8) !important;
        /*background-image: url("../eagle.jpg") no-repeat;*/
    }

    .btn-img:hover{
        background-color: rgba(0, 0, 0, 0) !important;
    }

    @media only screen and (max-width:500px) {
        .btn-img{
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 10px;
            border-radius: 25px;
            /*background: 0;*/
        }
    }
</style>

@section('content')

    <button class="btn-img" onclick="location.href='/vyuka/orel'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/orel_skalni/orel_skalni1.jpg') }}" alt="eagle">Orel skalní</button>
    <button class="btn-img" onclick="location.href='/vyuka/stehlik'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/stehlik_obecny/stehlik-obecny1.jpg') }}" alt="bird2">Stehlík obecný</button>
    <button class="btn-img" onclick="location.href='/vyuka/sojka'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/sojka_obecna/sojka-obecna1.jpg') }}" alt="bird1">Sojka obecná</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/datel_cerny2.jpg') }}" alt="datel">Datel černý</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/lednacek_ricni.jpg') }}" alt="ladnacek">Ledňáček říční</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/labut_zpevna.jpg') }}" alt="labut">Labuť zpěvná</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/sykora_modrinka2.jpg') }}" alt="sykora">Sýkora modřinka</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/dlask_tlustozoby.jpg') }}" alt="dlask">Dlask tlustozobý</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/vlastovka_obecna.jpg') }}" alt="vlastovka">Vlašťovka obecná</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/volavka_popelava.jpg') }}" alt="volavka">Volavka popelavá</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/koliha_velka.jpg') }}" alt="koliha">Koliha velká</button>
    <button class="btn-img" onclick="location.href='#'"><img class="card-img-top" style="border-radius: 25px;" src="{{ asset('img/kalous_usaty.jpg') }}" alt="bird1">Kalous ušatý</button>

@endsection