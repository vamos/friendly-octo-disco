{{-- Autor: Lukas Erlich(xerlic00) --}}
{{-- ITU projekt - Výukový program na znalost ptáků ČR --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Sojka obecná</title>
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
            Sojka obecná
        </div>
        <div class="bird-main">
            <div id="spev">
                <audio class="bird-sound" controls preload="auto" alt="spev">
                    <source src="{{ asset('sound/orel-skalni.mp3') }}" type="audio/mp3">
                        Your browser does not support the audio element.
                </audio>
            </div>
            <div>
                <p>
                    Sojka obecná je středně velký pták, délka jejího těla dosahuje 32–35 cm, rozpětí křídel 52–58 cm a hmotnost 150–180 g. 
                    Je to nejpestřejší evropský zástupce čeledi krkavcovitých. Je celkově oranžovohnědá s černým ocasem a zobákem, 
                    růžovooranžovými končetinami, hnědýma očima a bílým kostřecem, který je zvlášť nápadný při letu.
                </p>
                <p>
                    Na černobílých křídlech má sojka známá modrá pírka s černými příčnými proužky, která sloužila jako častá ozdoba mysliveckých klobouků. 
                    Na hlavě má malou chocholku, jejíž pera zpravidla mají černé špičky. Vztyčuje ji při rozčílení. Pod okem směrem k zobáku má 
                    černou oválnou skvrnu, připomínající vous. Některé poddruhy (např. z Turecka, Kavkazu, Íránu a severní Afriky) mají na hlavě 
                    černou čepičku, ostře kontrastující s bílými lícemi.
                </p>
                <p>
                    Sojka létá těžce, vlnovitě a třepotavě, na zemi poskakuje. Pohlaví se od sebe zbarvením neliší, mladí ptáci 
                    jsou tmavší a mají méně výrazná modrá pírka na křídlech. 
                </p>
            </div>
        </div>
        
        <div class="bird-map">
            <a style="color: #2b7e75; font-size:20px;" href="https://birds.cz/avif/atlas_nest_map.php?rok=all&druh=Garrulus_glandarius">
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
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/sojka_obecna/sojka-obecna1.jpg') }}" alt="sojka1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/sojka_obecna/sojka-obecna2.jpg') }}" alt="sojka2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/sojka_obecna/sojka-obecna3.jpg') }}" alt="sojka3">
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