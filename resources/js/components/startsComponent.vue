<template>
    <div>
        <label v-for="item in itemson" class="start-on">★</label>
        <label v-for="item in itemsoff" class="start-off">★</label>
    </div>
</template>

<script>
export default {
    data () {
            return {
                itemson : 0,
                itemsoff : 5,
            }
        },
    mounted() {
            this.calcular();
            console.log(this.points)
        },
    methods: {
        calcular: function(){
            this.itemson = this.points;
            this.itemsoff = 5 - this.points;
        }
    },
    props : {
            points: Number,
        }
}
</script>
<style>
    .start-on{
        color:blue;
        font-size: 24px;
    }
    .start-off{
        font-size: 24px;
    }
</style>