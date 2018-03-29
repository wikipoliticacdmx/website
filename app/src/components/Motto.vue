<template lang="pug">
  .motto.py-5
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
    name: "Motto",
    props: {

    }
  };
</script>

<style scoped lang="scss">
  .container {
    background-color: white;
    p {
      font-size: 25px;
      font-weight: bold;
      .horizontal {
        color: #43D3AF;
      }
      .feminist {
        color: #E13771;
      }
      .progressist {
        color: #E2CF3E;
      }
      .sustainable {
        color: #CD7F87;
      }
    }
  }
</style>
