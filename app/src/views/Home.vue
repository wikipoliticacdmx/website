<template lang="pug">
  .home
    Navbar
    Hero
    Banner
</template>

<script>
import Navbar from "@/components/Navbar.vue"
import Hero from "@/components/Hero.vue"
import Banner from "@/components/Banner.vue"

export default {
  name: "home",
  components: {
    Navbar,
    Hero,
    Banner
  }
};
</script>
