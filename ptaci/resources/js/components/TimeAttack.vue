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
                <p style="font-size:25px">
                    Prosím vyberte jednu odpověď z uvedených možností pro každou otázku.
                </p>
        
            </div>
        </div>        
        <div class="row" style="height:10%">
            <div class="col-12 text-center" style="background:#94d3cd; padding: 10px 0;">        
                <button class="btn btn-primary badge-danger badge-pill" style=" border:1px solid black;" @click="startQuiz">START!</button>
            </div>
        </div>
    </div>
    <!-- /intro -->

    <div class=" shadow-lg own_container" v-if="questionStage">
      <div class="row" >
        <div class="col-12 text-center" style="background: #94d3cd;border-bottom:1px solid grey;height:20%; font-size:10vw">
            <h1 class=" font-weight-bold">{{questions[currentQuestion].text}}</h1>
        </div>
      </div>    
        <!--timer-->
      <div class="row">
        <div class="col-12 text-center" style="height:10%;">

            <div id="time" class="col text-center font-weight-bold my-4" style="font-size:26px">
                <show_time :time="timerCount" :key="timerKey"></show_time>
            </div>
        </div>
        <!--/timer-->
      </div>
    <!-- img -->
        <div class="row" >
            <div class="col-12 text-center" style="height:20%; margin:0px auto;">
                <img :src="questions[currentQuestion].picture" style="width:35%;"/>  
            </div>    
        </div>
    <!-- /img -->

    <!--qestion-->
    <!-- <div > -->
        <div v-if="questions[currentQuestion].type === 'tf'">
            <div class="row py-2"  style="margin-bottom:10px">
                <div class="col-12" style="height:50%; margin: auto 0px">
                <table class="my-4 mx-auto">
                <tr>
                    <td class="mx-2 " style="width:30%">
                        <label for="trueAnswer" style="font-size:1.5rem;font-weight:bold">Áno</label><br/>
                    </td>
                    <td class="mx-2" style="width:30%">
                        <input type="radio" id="trueAnswer" v-model="answers[currentQuestion]" v-bind:class="[{checked: ((answers[currentQuestion]) )}]" value="t">
                    </td>
                        
                    <td class="mx-2 " style="width:30%;margin-bottom:1%">
                        <label for="falseAnswer" style="font-size:1.5rem;font-weight:bold">Nie</label><br/>
                    </td>
                    <td class="mx-2 " style="width:30%;margin-bottom:1%">
                        <input type="radio"  id="falseAnswer" v-model="answers[currentQuestion]" value="f">
                    </td>

                </tr>
                </table>
                </div>
            </div>
        </div>

        <div class="row" v-if="questions[currentQuestion].type === 'mc'" >
            <!-- <div v-for="(mcanswer,index) in questions[currentQuestion].answers" v-bind:key="index"> -->
            <div  class="col-12 my-4" style="height:50%; ">    
            <table class="mx-auto" style="margin: auto 0px ">    
            <tr>
                <td >
                    <input type="radio" :id="'answer'+0" name="currentQuestion" v-model="answers[currentQuestion]" :value="questions[currentQuestion].answers[0]">
                </td>
                <td >
                    <label style="font-size:3vh;font-weight:bold" :for="'answer'+0">{{questions[currentQuestion].answers[0]}}</label>
                </td>
                
                <td >
                    <input type="radio" :id="'answer'+1" name="currentQuestion" v-model="answers[currentQuestion]" :value="questions[currentQuestion].answers[1]">
                </td>
                <td >
                    <label style="font-size:3vh;font-weight:bold" :for="'answer'+1">{{questions[currentQuestion].answers[1]}}</label>
                </td>

            </tr>
            <tr>
                <td >
                    <input type="radio" :id="'answer'+2" name="currentQuestion" v-model="answers[currentQuestion]" :value="questions[currentQuestion].answers[2]">
                </td>
                <td>
                    <label style="font-size:3vh;font-weight:bold" :for="'answer'+2">{{questions[currentQuestion].answers[2]}}</label>
                </td>


                <td >
                    <input type="radio" :id="'answer'+3" name="currentQuestion" v-model="answers[currentQuestion]" :value="questions[currentQuestion].answers[3]">
                </td>
                <td>
                    <label style="font-size:3vh;font-weight:bold" :for="'answer'+3">{{questions[currentQuestion].answers[3]}}</label>
                </td>

            </tr>
            </table>
            </div>    
        </div>

            <!-- buttons -->
            <div class="row" style="height:10%; background:#94d3cd; padding-bottom:5px; padding-top:5px; border-top:1px solid grey">

                <div class="col-12 text-center  btn_holder" style="margin-right:auto; margin-top:5px">
                    <button id="sub" class="btn btn_hover badge-pill" style="color:white; border:1px solid brown; background:#d18f02" :style="{disabled: (timerCount <= '0' )}" @click="handleAnswer">DÁLE</button>
                </div>
            </div>
            <!-- /buttons -->

            <!-- </div> -->
        <!--/qestion-->
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
                Odpovedali ste správne na {{correct}} z {{totalQuestions}} otázok.<br /> Vaša úspešnosť je {{perc}}%.
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

//Component representing the TimeAttack test which is using component show_time.

import show_time from  '../components/ShowTime.vue';
export default {
    name:'test',
    props: ['user'],
    components:{
       show_time
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
            totalQuestions:1,
            // perc:null,
            timerCount:30,
            timerKey:0,
        }
    },
   created(){
      //function called at the begining of the quize, function is fetching questions and answers from .json file
       this.fetchQuestons();
       console.log(this.user);
   },
   methods:{
       autoIncrementTimer(){
           window.setInterval( () => { 
           if ( this.timerCount == "0" )
           {
                clearInterval();
                // document.getElementById('sub').disabled = true;  
                this.handleResults();
                this.questionStage = false;
                this.resultsStage = true;
           }
            this.timerCount -= 1;
            this.timerKey += 1;
        },1000);
        },
       fetchQuestons(){
         //https://api.myjson.com/bins/ahn1p
           fetch('https://api.myjson.com/bins/qfn4q')
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
            this.autoIncrementTimer();

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
            this.timerCount = 30;
            this.timerKey = 0;

        },

        //storing the answer which was choosen for the current question
        handleAnswer() {
            if(this.timerCount == "0"){
                this.handleResults();
                this.questionStage = false;
                this.resultsStage = true;
            }
           console.log('answer event ftw',this.questions[this.currentQuestion].answer ,this.answers[this.currentQuestion]);
           if(this.questions[this.currentQuestion].answer == this.answers[this.currentQuestion])
           {
               this.correct++;
               this.timerCount += 10;
           } else {
               this.timerCount -= 5;
                if(this.timerCount <= "0"){
                this.handleResults();
                this.questionStage = false;
                this.resultsStage = true;
            }
           }
          //controlling if it is not the end of the quiz
          if((this.currentQuestion+1) === this.questions.length) {
              this.currentQuestion = 0;
          } else {
              this.currentQuestion++;
          }
          this.totalQuestions++;
        },
        //controlling the answers and counting out the result
        handleResults() {
          console.log('handle results');
        //   this.questions.forEach((a, index) => {
        //       if(this.answers[index] === a.answer)
        //        this.correct++;        
        //   });
          this.perc = ((this.correct / this.totalQuestions)*100).toFixed(2);
          console.log(this.correct+' '+this.perc);
          
          if(this.user !== null){
              axios.post(`/api/users/`+this.user.id, {
                  time_n: this.totalQuestions,
                  time_c: this.correct,
                  _method: 'patch'
              } );
          }
        },

  }
 

}

</script>

<style scoped>
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