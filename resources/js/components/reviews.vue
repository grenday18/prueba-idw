<template>
    <v-card>
        <v-row>
            <v-col cols="12" md="4">
                <v-img
                    lazy-src="https://picsum.photos/id/11/10/6"
                    class="movie-img"
                    src="https://picsum.photos/id/11/500/300"
                    ></v-img>
            </v-col>
            <v-col cols="12" md="8" v-for="review in reviews" :key="review">
                <v-card-title> {{review.title}}</v-card-title>
                <v-card-subtitle>{{review.subtitle}}{{review.fecha}}</v-card-subtitle>
                <v-card-text>
                    {{review.text}}
                    <!-- <router-link></router-link> -->
                    <a href="">[ver más]</a>
                </v-card-text>
                <v-card-actions>
                    <startsComponent v-bind:points="review.points"></startsComponent>
                </v-card-actions>
            </v-col> 
        </v-row>
    </v-card>       
</template>

<script>
export default {
    data () {
            return {
                reviews : [
                    {
                        title : 'titulo de la critica',
                        subtitle : 'subtitulo',
                        fecha:'19-12-2020',
                        text : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam minima molestiae, ipsa qui consequatur voluptates tempore perspiciatis nulla, illum architecto, laudantium vero velit obcaecati reprehenderit. Necessitatibus facilis quidem temporibus labore.',
                        points :  2,
                    }
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
    .movie-img{
        max-height: 350px;
        max-width: 300px;
        margin-left:15px;
        margin-top : 20px;
        position: relative;
        margin:auto;
    }
</style>