<template lang="pug">
  .banner
    b-container.container
      b-row
        b-col
          p.text-center.mb-0 Hay una nueva política, la posibilidad de un futuro distinto.
          p.text-center.mb-0
            | Una política
            span.horizontal &nbsp;horizontal
            | ,
            span.feminist &nbsp;feminista
            | ,
            span.progressist &nbsp;progresista&nbsp;
            | y
            span.sustainable &nbsp;sustentable
            | .
</template>

<script>
  export default {
    name: "Banner",
    props: {

    }
  };
</script>

<style scoped lang="scss">
  .container {
    background-color: white;
    p {
      font-size: 25px;
      .horizontal {
        color: green;
      }
      .feminist {
        color: pink;
      }
      .progressist {
        color: yellow;
      }
      .sustainable {
        color: beige;
      }
    }
  }
</style>
