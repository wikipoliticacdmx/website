<template lang="pug">
  .node
    b-container.p-0(fluid)
      b-row
        b-col.p-0.left(cols="6")
        b-col.p-5.right(cols="6")
          p
            strong Wikipolítica CDMX
            | &nbsp;es el nodo de la red Wikipolítica en la Ciudad de México.
          p
            strong Wikipolítica
            | &nbsp;es un movimiento que nace del hartazgo y la esperanza. Nuestro objetivo es construir un futuro; un país donde todas las personas puedan tener una vida digna, libre y plena. Nuestra estrategia es la construcción de una nueva política y la doble ocupación de sociedad y gobierno para reconectarlas.
</template>

<script>
  export default {
    name: "Node",
    props: {

    }
  };
</script>

<style scoped lang="scss">
  .node {
    .left {
      background-image: url('../assets/img/photo1.png');
      background-size: cover;
    }
    .right {
      background-color: #F2F2F2;
      p {
        font-size: 20px;
      }
    }
  }
</style>
