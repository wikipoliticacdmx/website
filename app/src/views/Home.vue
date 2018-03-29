<template lang="pug">
  .home
    Navbar
    Hero
    Motto
    Node
    Manifest
    Photo
    Banner
</template>

<script>
import Navbar from "@/components/Navbar.vue"
import Hero from "@/components/Hero.vue"
import Motto from "@/components/Motto.vue"
import Node from "@/components/Node.vue"
import Manifest from "@/components/Manifest.vue"
import Photo from "@/components/Photo.vue"
import Banner from "@/components/Banner.vue"

export default {
  name: "home",
  components: {
    Navbar,
    Hero,
    Motto,
    Node,
    Manifest,
    Photo,
    Banner
  }
};
</script>
