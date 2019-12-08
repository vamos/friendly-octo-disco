{{-- Autor: Lukas Erlich(xerlic00) --}}

@extends('layouts.layout')

@section('title')
    <title>Ptáci - Orel skalný</title>
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
            Orel skalní
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
                    Orel je společné české jméno pro příslušníky několika různých rodů dravců z čeledi jestřábovitých. Jedná se o velké ptáky obývající převážně Starý svět.
                    Známí jsou orlové rodu Aquila, kam patří orel skalní (Aquila chrysaetos) nebo orel královský (Aquila heliaca), nebo orlové rodu Haliaeetus, kam patří orel mořský (Haliaeetus albicilla) nebo orel bělohlavý (Haliaeetus leucocephalus), symbol Spojených států amerických.
                </p>
                <p>
                    Několik druhů orlů hnízdí i na území Česka. Jsou to orel královský, orel skalní a orel mořský. Všechny zmíněné druhy jsou v Česku přísně chráněny zákonem 114/1992 Sb. a doprovodnými vyhláškami klasifikovány jako kriticky ohrožené. 
                </p>
                <p>
                    Orel je společné české jméno pro příslušníky několika různých rodů dravců z čeledi jestřábovitých. Jedná se o velké ptáky obývající převážně Starý svět.
                    Známí jsou orlové rodu Aquila, kam patří orel skalní (Aquila chrysaetos) nebo orel královský (Aquila heliaca), nebo orlové rodu Haliaeetus, kam patří orel mořský (Haliaeetus albicilla) nebo orel bělohlavý (Haliaeetus leucocephalus), symbol Spojených států amerických.
                </p>
                <p>
                    Několik druhů orlů hnízdí i na území Česka. Jsou to orel královský, orel skalní a orel mořský. Všechny zmíněné druhy jsou v Česku přísně chráněny zákonem 114/1992 Sb. a doprovodnými vyhláškami klasifikovány jako kriticky ohrožené. 
                </p>    
            </div>
        </div>
        
        <div class="bird-map">
            <a style="color: #2b7e75; font-size:20px;" href="https://birds.cz/avif/atlas_nest_map.php?rok=all&druh=Aquila_chrysaetos">
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
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/orel_skalni/orel_skalni1.jpg') }}" alt="eagle1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/orel_skalni/orel_skalni2.jpg') }}" alt="eagle2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="border-radius: 25px;" src="{{ asset('img/orel_skalni/orel_skalni3.jpg') }}" alt="eagle3">
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