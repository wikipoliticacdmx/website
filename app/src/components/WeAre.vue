<template lang="pug">
  .we-are
    b-container.p-0(fluid)
      b-row
        b-col.p-5.left(cols="6")
          p.pl-5.mb-0
            | Somos un grupo de personas como tú.
            | La situación del país nos colmó la paciencia
            | y decidimos usar todas las herramientas
            | a nuestra disposición para incidir. Somos
            | una organización joven, aunque muchas y
            | muchos de nuestros miembros tengan canas
            | y familias. Somos un experimento continuo y
            | siempre creativo, aunque tengamos sistemas
            | y procesos pensados con rigor. Somos
            | un grupo divertido y amigable, aunque
            | discrepamos y confrontamos ideas.
        b-col.p-0.right(cols="6")
</template>

<script>
export default {
  name: "WeAre",
  props: {

  }
};
</script>

<style scoped lang="scss">
  .we-are {
    .left {
      background-color: #F2F2F2;
      p {
        font-size: 20px;
      }
    }
    .right {
      background-image: url('../assets/img/photo3.png');
      background-size: cover;
    }
  }
</style>
