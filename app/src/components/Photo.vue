<template lang="pug">
  .photo
    b-container.p-0(fluid)
      b-row
        b-col.p-0
          b-img(:src="require('@/assets/img/photo2.png')", fluid, alt="photo2")
</template>

<script>
export default {
  name: "Photo",
  props: {

  }
};
</script>

<style scoped lang="scss">

</style>
