<template>
    <!-- <div class="container" > -->
<div style="background:transparent; width:50vw; min-width:300px; height:auto; max-height:80vh; padding:0; margin-left:auto;margin-right:auto; margin-top:5vh;"> 
    <!-- intro -->
    <div class=" shadow-lg own_container" style="" v-if="introStage">
        <div class="row" style="height:20%; max-height:330px;">
    
            <div class="col text-center rounded" style="background:#94d3cd;">
                <h1 class="my-5 font-weight-bold" style="font-size:45px;">Vítejte v testu</h1>
            </div>
        </div>      
        <div class="row" style="height:70%">
            <div class="col text-center py-5" >
                <p style="font-size:25px; margin-top:5%">
                    Prosím odpověď pro každou otázku umístěte tahem do vyznačeného místa.
                </p>
            </div>
        </div>        
        <div class="row" style="height:10%">
            <div class="col-12 text-center" style="background:#94d3cd; padding: 1% 0;">        
                <button class="btn btn-primary badge-danger badge-pill" style=" border:1px solid black;" @click="startQuiz">START!</button>
            </div>
        </div>
    </div>
    <!-- /intro -->


    <!-- question -->

    <div class=" shadow-lg own_container" v-if="questionStage">
      <div class="row" >
        <div class="col-12 text-center" style="background: #94d3cd;border-bottom:1px solid grey;height:20%; font-size:10vh">
            <h1 class=" font-weight-bold">{{questions[currentQuestion].text}}</h1>
        </div>
      </div>  
            <!--progressbar-->
        <div class="row" >
            <div class="col-12 text-center" style="height:10%;">
                <div class="progress" style="width:80%; margin-left:auto;margin-right:auto; margin-top:10px;  margin-bottom:10px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" :style="{width:(currentQuestion/questions.length)*100 + '%'}"   ></div>
                </div>
                <p id="progP" style="margin-bottom:25px;">{{(currentQuestion/questions.length)*100}}% complete</p>
            </div>
        </div>                
        <!--/progressbar-->
        <div class="row" style="height:30%; " >
            <div class="col text-center">

                <Board id="board-1" class="options_board" :key="componentKey">
                    <!-- cards -->
                    <div v-for="(img,index) in questions[currentQuestion].cards" v-bind:key="index">
                        <div v-if="answers[currentQuestion] !== 'card-'+index ">
                        <Card :style="{ backgroundImage:'url('+img+')' } " :id="'card-'+index" dragabble="true" :transfer-data="{}">
                            <!-- <p>Card one</p> -->
                            <!-- <img :src="img" width="100%" /> -->
            
                        </Card>
                        </div>
                    </div>
                    <!-- /cards -->
                </Board> 
            </div>
        </div>

        <div class="row">

            <div class="col-12 text-center"  style="height:30% "> 
                <p style="font-size:3vh; margin:0 auto">Odpověď <i style="width:3vh" class="fas fa-level-down-alt"></i></p>
                <div style="width:90%; margin: 0 auto;">
                    <Board id="board-2" v-on:answer="handleAnswer" class="answer_board" :key="componentKey">                    
                    <!-- Here is dropped the answer in form of an image.     -->
                    <div v-for="(img,index) in questions[currentQuestion].cards" v-bind:key="index">
                        <div v-if="answers[currentQuestion] === 'card-'+index ">
                        <Card :style="{ backgroundImage:'url('+img+')',  width:'100%' } " :id="'card-'+index" dragabble="true" :transfer-data="{}">
                            <!-- <p>Card one</p> -->
                            <!-- <img :src="img" width="100%" /> -->
            
                        </Card>
                        </div>
                    </div>

                    </Board>
                </div> 
            </div>

        </div>

        <!-- buttons -->
        <div id="btn2" class="row" style="height:10%;background: #94d3cd; padding-bottom:5px; padding-top:5px; border-top:1px solid grey">
            <div class="col btn_holder" style="margin-left:25px;">
                <button class="btn btn-warning badge-pill" style="color:black; border:1px solid black;" :style="{disabled: !((currentQuestion-1) >=0 )}" id="back" @click="prev">ZPĚT</button>
            </div>
            <div class="col text-right btn_holder" style="margin-right:25px">
                <button id="dale" class="btn badge-pill btn_hover" style="color:white; border:1px solid brown; background:#d18f02" @click="nextQuestion">DÁLE</button>
            </div>
        </div>
        <!-- /buttons -->

    </div>

    <!-- result -->
    
    <div class=" shadow-lg own_container" v-if="resultsStage">
        <div class="row" style="height:20%; border-bottom:1px solid grey">
            <div class="col-12 text-center rounded" style="background:#94d3cd;">
                <h1 class="my-3 font-weight-bold">Výsledky</h1>
            </div>
        </div>    
        <!-- body -->
        <div class="row" style="height:70%">
            <div class="col-12 text-center py-5 font-weight-bold" style="height:80%;font-size:30px">
                Odpovedali ste správne na {{correct}} z {{questions.length}} otázok.<br /> Vaša úspešnosť je {{perc}}%.
            </div>
        </div>
        <!-- button -->
    
        <div class="row" style="height:10%;background:#94d3cd;padding-top:10px;padding-bottom:10px; border-top:1px solid grey">
            <div class="col-12 text-center" >
                <button class="btn btn-primary" style="margin-left:auto;margin-right:auto;" @click="restartQuiz">RESTART!</button>
            </div>
        </div>
        <!-- /button -->
    
    </div>

    <!-- /result -->

  </div>

</template>

<script>
// ITU projekt - Vyukovy program na znalost ptaku CR
// autor : Tomas Kiss
// login : xkisst00

//Component representing the "drag & drop" test which is using the components card and board.

import Board from '../components/Board.vue';
import Card from '../components/Card.vue';

export default {
   name:'drag_n_drop',
   props: ['user'], 
   components: {
       Board,
       Card
   },
   data(){
        return{
            introStage:false,
            questionStage:false,
            resultsStage:false,
            title:'',
            questions:[],
            currentQuestion:0,
            answers:[],
            correct:0,
            perc:null,
            componentKey:0
        }
    },
   created(){
      //function called at the begining of the quize, function is fetching questions and answers from .json file
       this.fetchQuestons();
   },
   methods:{
       fetchQuestons(){
         //https://api.myjson.com/bins/1ekbfi
           fetch('https://api.myjson.com/bins/hgpfq')
           .then((res) => res.json())
            .then((data) => {
                console.log(data)
                this.title = data.title;
                this.questions = data.questions;
                this.introStage = true;
            })
       },
       //first stage of the quiz
       startQuiz() {
        this.introStage = false;
        this.questionStage = true;
        console.log('test'+JSON.stringify(this.questions[this.currentQuestion]));
       },
        //restarting the quize from the first question
        restartQuiz() {
            this.introStage = false;
            this.resultsStage = false;
            this.questionStage = true;
            this.perc = null;
            this.correct = 0;
            this.answers = Array(this.questions.length).fill(null);
            console.log(this.answers);
            this.currentQuestion = 0;
            console.log('test'+JSON.stringify(this.questions[this.currentQuestion]));
        },
        //storing the answer which was choosen for the current question
        handleAnswer(e) {
          console.log('answer event ftw',e);
          if(e.answer){
            this.answers[this.currentQuestion]=e.answer;
          }  
          console.log(this.answers);
        },
        nextQuestion(){
           console.log('content after asnwering',this.answers); 
            //controlling if it is not the end of the quiz
            while (this.firstChild) {
                this.removeChild(this.firstChild);
            } 
          if((this.currentQuestion+1) === this.questions.length) {
              this.handleResults();
              this.questionStage = false;
              this.resultsStage = true;
          } else {
              this.currentQuestion++;
              this.componentKey += 1;
              if((this.currentQuestion+1) === this.questions.length){
                document.getElementById('dale').innerHTML = "VYHODNOTIT";
              } else {
                document.getElementById('dale').innerHTML = "DÁLE";
              } 
          }
        },
        //controlling the answers and counting out the result
        handleResults() {
          console.log('handle results');
          this.questions.forEach((a, index) => {
              if(this.answers[index] === a.answer)
               this.correct++;        
          });
          this.perc = ((this.correct / this.questions.length)*100).toFixed(2);
          console.log(this.correct+' '+this.perc);
            if(this.user !== null){
                axios.post(`/api/users/`+this.user.id, {
                dd_n: this.questions.length,
                dd_c: this.correct,
                _method: 'patch'
                } );
            }


        },
        //going back to the previous qestion
        prev(){
            //if it is not the first question from which we want to go back to other qest.
            if((this.currentQuestion-1) >= 0) {
                this.currentQuestion--;
            //   document.getElementById("back").disabled = false;

            } else {
            //   document.getElementById("back").disabled = true;
            }
        }
   }
}
</script>

<style scoped>
.options_board{
    display: block;
    width:90%;
    height:100%;
    margin: 0 auto;
    background-color: #94d3cd;
}
.answer_board{
    display: block;
    width:25%;
    height:17vh;
    padding: 5px;

    border: 5px black dashed;
    margin: 2% auto;

    background: white;
}

.card{
    display: block;
    float: left ;
    width:20%;
    height:15vh;
    padding: 5px;
    background-color: #F3F3F3;
    cursor: pointer;
    margin: 0px 2.5%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center; 
    border: 2px double black;
}
.own_container{
    margin-bottom: 10%;
    margin-right:auto;
    background:white;
    border-radius: 1rem;
	overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.btn_hover:hover {
    background-color: #b45e00 !important;
}
</style>

