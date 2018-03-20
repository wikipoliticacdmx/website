<template>
  <div class="banner">
    <b-container class="container">
      <b-row>
        <b-col>
          <p class="text-center mb-0">
            Hay una nueva política, la posibilidad de un futuro distinto.
          </p>
          <p class="text-center mb-0">
            Una política <span class="horizontal">horizontal</span>, <span class="feminist">feminista</span>, <span class="progressist">progresista</span> y <span class="sustainable">sustentable</span>.
          </p>
        </b-col>
      </b-row>
    </b-container>
  </div>
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
