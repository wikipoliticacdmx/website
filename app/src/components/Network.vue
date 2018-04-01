<template lang="pug">
  .network
    b-container.p-0
      b-row
        b-col.p-5.left(cols="6")
          p.pl-5
            | La red nacional de Wikipolítica ha impulsado
            | diversas iniciativas como &nbsp;
            strong #SinVotoNoHayDinero
            | &nbsp;y &nbsp;
            strong #AlcaldíasAbiertas
            | , la ciudadanización de
            | la política y la limitación de los privilegios de la
            | clase gobernante.
          p.pl-5
            | Continuamente participamos en la promoción
            | de la pedagogía política y la creación colectiva
            | que se refleja en las actividades diarias de la red.
        b-col.p-5.right(cols="6")
          p.pr-5
            | Entre nuestros logros más conocidos está
            | el apoyo a la candidatura para el congreso
            | local de Pedro Kumamoto en Jalisco
            | en 2015 y el impulso a la red nacional &nbsp;
            strong #VamosAReemplazarles
            | &nbsp;en 2018. Además,
            | tenemos una entrega semanal en &nbsp;
            strong sopitas.com, &nbsp;
            | la cual busca socializar temas de relevancia
            | para las personas que integramos el nodo.
</template>

<script>
export default {
  name: "Network",
  props: {

  }
};
</script>

<style scoped lang="scss">
  .network {
    background-color: #F2F2F2;
    p {
      font-size: 17px;
    }
    .left {

    }
    .right {

    }
  }
</style>
