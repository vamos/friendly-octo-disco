<template>
    <div
        :id = "id"
        class="card"
        :draggable="dragabble"
        @dragstart="dragStart"
        @dragover.stop
    >
     <slot />   
    </div>
</template>

<script>
// ITU projekt - Vyukovy program na znalost ptaku CR
// autor : Tomas Kiss
// login : xkisst00

//Component representing "card" in drag & drop which are representing the answers.

export default {
    props: ['id','dragabble'],
    methods: {
        dragStart(e){
            //this card    
            const target = e.target;
            
            //haw to match bord id, target.id is the id of this card
            e.dataTransfer.setData('card_id',target.id);
            
            //to delay the code, to not set the card immedietly to invisible 
            // setTimeout(() => {
            //     target.style.display = "none";

            // },0);
        }
    }
}
</script>