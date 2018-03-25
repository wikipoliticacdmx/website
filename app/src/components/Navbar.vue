<template lang="pug">
  .navbar-component
    b-navbar(variant="faded", type="light")
      b-container
        b-row
          b-col.d-flex.justify-content-center.align-items-center(cols="2")
            b-img(:src="require('@/assets/img/wikilogo.png')", fluid, alt="wikilogo")
          b-col(cols="6", offset="1")
            b-row
              b-col.d-flex.justify-content-center.align-items-center
                p.m-0.text-center Inicio
              b-col.d-flex.justify-content-center.align-items-center
                p.m-0.text-center Conócenos
              b-col.d-flex.justify-content-center.align-items-center
                p.m-0.text-center Foro
              b-col.d-flex.justify-content-center.align-items-center
                p.m-0.text-center Únete
              b-col.d-flex.justify-content-center.align-items-center
                p.m-0.text-center Contacto
          b-col(cols="3")
            b-row
              b-col.d-flex.justify-content-center.align-items-center(cols="6")
                b-button.join(variant="primary")
                  | ¡ÚNETE!
              b-col.d-flex.justify-content-center.align-items-center(cols="6")
                b-button.donate(variant="danger")
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
  .navbar {
    .container {
      .row {
        width: 100%;
        height: 80px;
        img {
          height: 70px;
        }
        p {
          font-weight: bold;
        }
        .join {
          background-color: #95D4CB;
          border-color: #95D4CB;
          border-radius: 25px;
          width: 120px;
          font-weight: bold;
        }
        .donate {
          background-color: #DA6D72;
          border-color: #DA6D72;
          border-radius: 25px;
          width: 120px;
          font-weight: bold;
        }
      }
    }
  }
</style>
