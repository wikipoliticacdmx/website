<template lang="pug">
  .manifest
    b-container.py-5(fluid)
      b-row.d-flex.justify-content-center
        b-col(cols="8")
          b-row
            b-col(cols="8")
              p.mb-0
                strong Te invitamos a leer nuestros valores y creencias en el Manifiesto de la red nacional de Wikipolítica:
            b-col(cols="4").d-flex.justify-content-center.align-items-center
              b-button(variant="primary")
                strong MANIFIESTO
</template>

<script>
export default {
  name: "Manifest",
  props: {

  }
};
</script>

<style scoped lang="scss">
  .manifest {
    background-color: #88D6C6;
    p {
      font-size: 22px;
    }
    button {
      width: 200px;
      height: 60px;
      background-color: white;
      border-color: white;
      color: black;
      font-size: 20px;
    }
  }
</style>
