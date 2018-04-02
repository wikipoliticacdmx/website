<template lang="pug">
  .contact
    b-container.py-5(fluid)
      b-row.d-flex.justify-content-center
        b-col(cols="5")
          b-row.d-flex.flex-column.justify-content-center.align-items-center
            p.mb-0.text-center
              | Tu llegada aquí significa que crees en nosotros,
              | te sabemos indispensable.
            p.text-center
              strong Tú puedes hacer realidad este esfuerzo.
            p.mb-5.text-center
              | Escribe a &nbsp;
              strong financiamiento@wikipoliticacd.mx
              | &nbsp;para saber cómo nos puedes apoyar.
            b-button(variant="primary")
              strong ESCRÍBENOS
</template>

<script>
export default {
  name: "Contact",
  props: {

  }
};
</script>

<style scoped lang="scss">
  .contact {
    background-color: white;
    p {
      font-size: 22px;
    }
    button {
      width: 200px;
      height: 60px;
      background-color: #43D3AF;
      border-color: #43D3AF;
      color: black;
      font-size: 20px;
    }
  }
</style>
