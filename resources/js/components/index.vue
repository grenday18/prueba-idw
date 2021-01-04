<template>
<div>
    <top-movies></top-movies>
    <v-row>
        <v-col md="9">
            
        </v-col>
        <v-col md="3">

        </v-col>
    </v-row>
</div>
</template>
<script>
export default {
    data: () => ({
      model: null,
    }),
    mounted(){
        this.cargarLista();
    },
    methods : {
        cargarLista(){
            axios
            .get('https://api.themoviedb.org/3/movie/top_rated',{
                params:{
                    api_key : '57c8d6ba95b91b202242bb2d1495b0ee',
                    language : 'es-PE',
                    page : 1,
                }
            })
            .then(response => (this.info = response))
        }
    }
  }
</script>

<style>

</style>