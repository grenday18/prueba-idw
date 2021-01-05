<template>
    <v-card>
        <v-card-title>Agregar pelicula</v-card-title>
        <v-container fluid>
            <v-form ref="form">
                <v-text-field
                    v-model="movie.nombre"
                    :rules="rules"
                    label="Titulo"
                ></v-text-field>

                <v-text-field
                    v-model="movie.duracion"
                    label="Duracion"
                    :rules="rules"
                    hide-details="auto"
                ></v-text-field>

                <v-text-field
                    v-model="movie.date_publish"
                    :rules="rules"
                    label="Fecha de publicacion"
                ></v-text-field>

                <v-row justify="center">
                    <v-date-picker v-model="movie.date_publish"></v-date-picker>
                </v-row>

                <v-file-input
                    v-model="movie.banner_img"
                    :rules="rules"
                    accept="image/png, image/jpeg, image/bmp"
                    placeholder="Imagen de portada"
                    prepend-icon="mdi-camera"
                    label="Avatar"
                ></v-file-input>

                <v-textarea
                    v-model="movie.sinopsis"
                    name="input-7-1"
                    filled
                    label="Sinopsis"
                    auto-grow
                ></v-textarea>
            </v-form>
        </v-container>
    </v-card>

</template>

<script>
export default {
    data: () => ({
        movie : {
            nombre : '',
            duracion : '',
            date_publish : '',
            banner_img : '',
            sinopsis : ''
        }
    }),
    methods: {
        agregar: function(){
            axios
            .post('/api/movies',this.movie)
            .then(response => (this.info = response))

        }
    },
}
</script>

<style>

</style>
