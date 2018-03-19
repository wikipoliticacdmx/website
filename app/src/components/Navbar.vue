<template>
  <div class="navbar">
    <b-navbar variant="faded" type="light">
      <b-container class="bv-example-row">
        <b-row>
          <b-col>Inicio</b-col>
          <b-col>Conócenos</b-col>
          <b-col>Foro</b-col>
          <b-col>Únete</b-col>
          <b-col>Contacto</b-col>
          <b-button variant="primary">
            ¡ÚNETE!
          </b-button>
          <b-button variant="danger">
            DONA
          </b-button>
        </b-row>
      </b-container>
    </b-navbar>
  </div>
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
