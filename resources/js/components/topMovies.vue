<template>
  <v-sheet
    class="mx-auto"
    elevation="8"
    max-width="90%"
  >
    <v-slide-group
      v-model="model"
      class="pa-4"
      center-active
      show-arrows
    >
      <v-slide-item
        v-for="(movie,index) in movies"
        :key="index"
        v-slot="{ active, toggle }"
      >
        <v-card
          :color="active ? 'primary' : 'grey lighten-1'"
          class="ma-4"
          height="200"
          width="100"
          @click="toggle"
        >
          <v-row
            class="fill-height"
            align="center"
            justify="center"
          >
            <v-img :src="'https://developers.themoviedb.org'+movie.backdrop_path">

            </v-img>
            <v-scale-transition>
              <v-icon
                v-if="active"
                color="white"
                size="48"
                v-text="'mdi-close-circle-outline'"
              ></v-icon>
            </v-scale-transition>
          </v-row>
          <span class="number-top">{{index}}</span>
        </v-card>
      </v-slide-item>
    </v-slide-group>
  </v-sheet>
</template>

<script>
export default {
    data: () => ({
      model: null,
      movies : []
    }),
    mounted(){
        axios
            .get('https://api.themoviedb.org/3/movie/top_rated',{
                params:{
                    api_key : '57c8d6ba95b91b202242bb2d1495b0ee',
                    language : 'es-PE',
                    page : 1,
                }
            })
            .then(response => {this.movies = response.data.results })
    },
  }
</script>

<style>
    .number-top{
        color : white;
        font-size: 24px;
        border-radius: 50%;
        position: absolute;
        top: 10px;
        right: 10px;
    }
</style>