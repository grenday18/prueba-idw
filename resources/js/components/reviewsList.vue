<template>
    <div>
        <v-row v-for="review in reviews" :key="review.id">
            <v-col md="3" sm="3">
                <v-avatar>
                <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                >
                </v-avatar>
            </v-col>
            <v-col md="3" sm="3">
                <label for=""> <strong> {{review.title}}</strong></label>
                <span>{{review.author}}</span>
            </v-col>
            
        </v-row>
    </div>
</template>

<script>
export default {
    data () {
            return {
                reviews : [
                ]
            }
        },
        methods : {
            obtenerInformacion: function(){
                axios.get("api/reviews/listar", {
                }).then(response => {
                    this.reviews = response.data;
                }).catch(e => {
                    console.log(e);
                });
            }
        }
}
</script>

<style>

</style>