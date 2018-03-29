<template lang="pug">
  .banner
    b-container.p-0(fluid)
      b-row
        b-col.p-0
          b-img(:src="require('@/assets/img/banner.png')", fluid, alt="banner")
</template>

<script>
export default {
  name: "Banner",
  props: {

  }
};
</script>

<style scoped lang="scss">

</style>
