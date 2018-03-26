<template lang="pug">
  .hero
    b-container.p-0(fluid)
      b-row
        b-col.p-0
          b-img(:src="require('@/assets/img/hero.png')", fluid, alt="hero")
</template>

<script>
  export default {
    name: "Hero",
    props: {

    }
  };
</script>

<style scoped lang="scss">

</style>
