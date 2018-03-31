<template lang="pug">
  .believe
    b-container.py-5(fluid)
      b-row.d-flex.justify-content-center
        b-col(cols="8")
          b-row
            b-col(cols="12")
              p.mb-0.text-center
                strong Creemos en el esfuerzo colectivo para desarrollar estrategias innovadoras inspiradas en los valores de la economía colaborativa.
</template>

<script>
export default {
  name: "Believe",
  props: {

  }
};
</script>

<style scoped lang="scss">
  .believe {
    background-color: #D76E72;
    p {
      font-size: 25px;
      color: white;
    }
  }
</style>
