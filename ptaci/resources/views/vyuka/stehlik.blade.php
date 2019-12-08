{{-- Autor: Lukas Erlich(xerlic00) --}}
{{-- ITU projekt - Výukový program na znalost ptáků ČR --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Stehlík obecný</title>
@endsection

<style>
    .bird-main{
        float: left;
        width: 50%;
        padding: 10 20px;
        margin-right: 2%;
        margin-left: 5%;
        margin-bottom: 50px;
        border-radius: 25px;
        text-align: justify;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .bird-sound{
        float: left;
        width: 100%;
        border-radius: 25px;
        margin-bottom: 2%
    }

    .bird-carousel{
        width: 40%; 
        float: left;
    }

    .bird-img{
        float: left;
        width: 40%;
        padding: 10px 15px;
        /*margin-top: 7px;*/
        margin-bottom: 7px;
        border-radius: 25px;
    }

    .bird-map{
        float: left;
        width: 40%;
        height: 40px;
        padding-left: 10px;
        padding-top: 5px;
        margin-bottom: 10px;
        border-radius: 25px;
        background-color: rgba(255, 255, 255, 0.8);
        /*text-align: center;*/
    }

    .bird-title{
        margin-left: 5%;
        font-size: 7vw;
        color: white;
    }

    @media only screen and (max-width:500px) {
        /* For mobile phones: */

        .bird-main, .bird-sound, .bird-img {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 0;
        }

        .bird-map{
            width: 100%;
            margin-top: 7px;
            text-align: center;
            margin-bottom: 30px;
        }

        .bird-title{
            font-size: 12vw;
        }

        .bird-carousel{
            width: 100%;
            margin-bottom: 50px;
        }
    }
</style>

@section('content')
    <div id="container" style="float: left;">
        <div id="jmeno" class="bird-title">
            Stehlík obecný
        </div>
        <div class="bird-main">
            <div id="spev">
                <audio class="bird-sound" controls preload="auto" alt="spev">
                    <source src="{{ asset('sound/stehlik-obecny.mp3') }}" type="audio/mp3">
                        Your browser does not support the audio element.
                </audio>
            </div>
            <div>
                <p>
                    Stehlík obecný má štíhlé tělo, dlouhá křídla, silný, poměrně dlouhý, hodně špičatý zobák barvy slonoviny 
                    až zarůžovělý a hnědé končetiny. Je pestře zbarvený, svrchu béžově, křídla má zčásti černá s bílými skvrnami 
                    a jasným žlutým pruhem, zespodu je bílý, hlava má charakteristickou červenou masku, zbytek hlavy je černobílý. 
                </p>
                
                <p>
                    Obě pohlaví jsou zbarvena téměř stejně a bývá obtížné je rozlišit. Samec má však výraznější a větší červenou 
                    masku – pokrývá větší část hlavy než u samice a zasahuje až za oko; ramena křídel má samec celá černá, 
                    zatímco samice z části šedivá. Jiná je také geometrie zobáku, samec mívá zobák delší a užší, není to však pravidlem. 
                    Mladí ptáci až do podzimního pelichání nemají červenou masku. Hlava je šedohnědá a rozpitě čárkovaná, kresba černobílá; 
                    záda a spodní strana jsou světle hnědé, tmavě čárkované; křídla černá se žlutými poli. 
                </p>
            </div>
        </div>
        
        <div class="bird-map">
            <a style="color: #2b7e75; font-size:20px;" href="https://birds.cz/avif/atlas_nest_map.php?rok=all&druh=Carduelis_carduelis">
                <i style="font-size:25px" class="fas fa-map-marked-alt"></i>
                Možný výskyt
            </a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide bird-carousel" data-ride="carousel" style="margin-bottom:50px !important;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/stehlik_obecny/stehlik-obecny1.jpg') }}" alt="stehlik1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/stehlik_obecny/stehlik-obecny2.jpg') }}" alt="stehlik2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/stehlik_obecny/stehlik-obecny3.jpg') }}" alt="stehlik3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Předchozí</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Další</span>
            </a>
        </div>

    </div>
@endsection