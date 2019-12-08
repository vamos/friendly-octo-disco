<template>
    <div
        :id="id"
        :class="clas"
        @dragover.prevent
        @drop.prevent="drop"
    >
        <slot />
    </div>
</template>

<script>
// ITU projekt - Vyukovy program na znalost ptaku CR
// autor : Tomas Kiss
// login : xkisst00

//Component representing "board" in drag & drop where user can place the answer or from can drag the possible answers.

export default {
    props: ['id','clas'],
    data(){
        return{
            answer:''
        }
    },
    created(){

    },
    methods: {
        
        drop(e) {
            //getting the card element
            const card_id = e.dataTransfer.getData('card_id');

            const card = document.getElementById(card_id);
            //set the card to back to block from none
            card.style.display = "block";

            if(this.id == 'board-1' ){
                card.style.margin= "0 2.5%";
                card.style.width = "20%";
            } else if(this.id == 'board-2'){
                card.style.margin = "0px";
                card.style.width = "100%";

            }
            console.log(this.id,card.style.margin);
            //connect card to board
            e.target.appendChild(card);
            this.answer = card_id;

            console.log(card_id);
            // e.target.removeChild(card);
            this.$emit('answer', {answer:this.answer})
        },

    }
}
</script>