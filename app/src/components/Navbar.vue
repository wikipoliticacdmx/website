<template lang="pug">
  .navbar
    b-navbar(variant="faded", type="light")
      b-container.bv-example-row
        b-row
          b-col
            b-img(:src="require('@/assets/img/wikilogo.png')", fluid alt="wikilogo")
          b-col Inicio
          b-col Conócenos
          b-col Foro
          b-col Únete
          b-col Contacto
          b-button(variant="primary")
            | ¡ÚNETE!
          b-button(variant="danger")
            | DONA
</template>

<script>
  export default {
    name: "Navbar",
    props: {

    }
  };
</script>

<style scoped lang="scss">

</style>
