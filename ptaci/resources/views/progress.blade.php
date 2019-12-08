{{-- Autor: Libor Dvořáček(xdvora2t) --}}


@extends('layouts.layout')

@section('title')
    <title>Ptáci - Profil</title>
@endsection
<style type="text/css">
        .container {
            width:2000px !important;
            height:190px;
            padding-top:20px;
            padding-left:15px;
            padding-right:15px;
        }
        .container-vertical {
            display: inline-block;
            width:275px;
            height:580px;
            padding-top:20px;
            padding-left:5px;
            padding-right:15px;
        }
        #profile-box {
            border-radius: 25px;
            float:left;
            width:77%;
            height:160px;
            background-color: rgba(255, 255, 255, 0.8);
            font-size: 40;
        }
        #test_count-box {
            border-radius: 25px;
            float:left;
            width:200px;
            height:160px;
            background-color: rgba(255, 255, 255, 0.8);
            margin-left:20px;
        }
        #stats-box {
            border-radius: 25px;
            float:left;
            width:92%;
            height:450px;
            background-color:white;
            background-color: rgba(255, 255, 255, 0.8);
            margin-right:20px;
        }
    @media only screen and (max-width:500px) {
        #test_count-box, #profile-box{
            width: 11.5%;
            margin-left: 2%;
            margin-right: 5%;
            /*margin-bottom: 10px;*/
            border-radius: 25px;
            font-size: 0;
            /*background: 0;*/
        }
        #stats-box{
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 1px;
            margin-bottom: 10px;
            border-radius: 25px;
            /*background: 0;*/
        }
    }
        h1 {
            color:Green;
        }
        .container pvdsfds {
           margin: 4%;
        }
        left-text {
           float:left;
           margin-left: 10px;
        }
        right-text {
           float:right;
           margin-right: 10px;
        }
        </style>
@section('content')


<center>

    <div class="container" style="float:center">
        <div id="profile-box" style="font size:7">
            <img src="img/icon.png" alt="ikona" width="120" height="120" hspace="20" vspace="20" align="left">
            <div style="margin-left:20px" align="center">Bolek Polívka</div>
            <div style="margin-right:20px" align="center">6150 bodů zkušeností</div>
            <div style="margin-right:20px" align="center"><font size="3"><i>odpovídá letové výšce Kondora andského</i></font></div>
        </div>

        <div id="test_count-box">
            <p margin="10"><font size="5">Absolvováno <br>testů:</font></p>
            <p><font size="8">23</font></p>
        </div>

    </div>

    <div class="container-vertical" style="float:center">
        <div id="stats-box">
            <p style="float:center">Quiz úspěšnost: <a style="color:green">78%</a><br>
               <br>
               <left-text>datum</left-text><right-text>výsledek</right-text><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................6/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................3/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................6/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................3/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">28.11.2019................................2/15</button></td><br>
        </div>
                <button style="width: 230px ;float:left; margin-right:25px; margin-top:20px" class="myButton text-center" onclick="location.href='/test/quiz'">Quiz</button>
     </div>
    <div class="container-vertical" style="float:center">
        <div id="stats-box">
            <p style="float:center">Drag&Drop úspěšnost: <a style="color:red">26%</a><br>
               <br>
               <left-text>datum</left-text><right-text>výsledek</right-text><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019.................................15/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................8/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................7/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................7/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................6/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................3/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................5/15</button></td><br>
        </div>
                <button  style="width:230px ; float:left; margin-left: 2%; margin-right:25px; margin-top:20px" class="myButton text-center" onclick="location.href='/test/drag_n_drop'">Drag&Drop</button>
        </div>
    <div class="container-vertical" style="float:center">
        <div id="stats-box">
            <p style="float:center">Time Attack úspěšnost: 53%<br>
               <br>
               <left-text>datum</left-text><right-text>výsledek</right-text><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................4/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................6/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019.................................10/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................6/15</button></td><br>
               <td><button type="button" style="padding-top:0px;padding-bottom:0px;" class=" btn btn-link " id="pop" data-toggle="popover" data-trigger="hover" title="Špatné odpovědi" data-html="true" data-content="Patří zpěv orlu skalnímu: ANO<br>Je na obrázku Jíkavec severní:ANO<br>Je na obrázku jiný pták než Kos černý:NE<br>Jaký pták je na obrázku:Brkoslav severní<br>Je na obrázku Brhlík lesní:ANO<br>Jaký pták je na obrázku:Červenka obecná<br>Patří zpěv Sojce obecné:ANO<br>">1.12.2019...................................2/15</button></td><br>
        </div>
                <button  style="width:230px ;float:left; margin-left: 2%; margin-right:25px; margin-top:20px" class="myButton text-center" onclick="location.href='/test/time_attack'">Time attack</button>
    </div>
    <div class="container-vertical" style="float:center">
        <div id="stats-box">
            <p style="float:center">Témata k procvičení<br><br><a href="/vyuka/orel">Orel skalní</a><br><a href="/vyuka/sojka">Sojka obecná</a></p>
        </div>
    </div>
    </center>
</body>


@endsection



<script type="text/javascript">

window.onload = function() {
    //enable all poppovers on the page!
    $(function () {
    $('[data-toggle="popover"]').popover()
    })
}

function sub(){
    let a = document.getElementById("formfield");
    a.submit();
}
</script>
