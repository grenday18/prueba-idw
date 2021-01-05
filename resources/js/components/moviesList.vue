<template>
  <v-row>
    <v-col
      v-for="movie in movies"
      :key="movie"
      class="d-flex child-flex"
      cols="4"
    >
      <v-img
        :src="movie.banner_img"
        :lazy-src="movie.banner_img"
        aspect-ratio="1"
        class="grey lighten-2"
      >
        <template v-slot:placeholder>
          <v-row
            class="fill-height ma-0"
            align="center"
            justify="center"
          >
            <v-progress-circular
              indeterminate
              color="grey lighten-5"
            ></v-progress-circular>
          </v-row>
        </template>
      </v-img>
    </v-col>
  </v-row>
</template>

<script>
export default {
    data: () => ({
      model: null,
      movies : []
    }),
    mounted(){
        this.cargarLista();
    },
    methods : {
        cargarLista(){
            axios
            .get('./api/movies/',{
                params:{
                    api_key : '57c8d6ba95b91b202242bb2d1495b0ee',
                    language : 'es-PE',
                    page : 1,
                }
            })
            .then(response => (this.movies = response.data))
        }
    }
  }
</script>

<style>

</style>