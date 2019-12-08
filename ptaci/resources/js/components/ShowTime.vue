<template>
    <div v-if="time > 0">
        Time : {{time}} s
    </div>
    <div v-else>
        TIME IS OVER!
    </div>
</template>

<script>
// ITU projekt - Vyukovy program na znalost ptaku CR
// autor : Tomas Kiss
// login : xkisst00

//Component representing the countdown timer in TimeAttack test.

export default {
    name: 'show_time',
    props:['time']
}
</script>