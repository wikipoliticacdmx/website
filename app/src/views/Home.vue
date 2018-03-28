<template lang="pug">
  .home
    Navbar
    Hero
    Banner
    Node
    Manifest
</template>

<script>
import Navbar from "@/components/Navbar.vue"
import Hero from "@/components/Hero.vue"
import Banner from "@/components/Banner.vue"
import Node from "@/components/Node.vue"
import Manifest from "@/components/Manifest.vue"

export default {
  name: "home",
  components: {
    Navbar,
    Hero,
    Banner,
    Node,
    Manifest
  }
};
</script>
