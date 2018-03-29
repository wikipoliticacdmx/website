<template lang="pug">
  .home
    Navbar
    Hero
    Motto
    Node
    Manifest
</template>

<script>
import Navbar from "@/components/Navbar.vue"
import Hero from "@/components/Hero.vue"
import Motto from "@/components/Motto.vue"
import Node from "@/components/Node.vue"
import Manifest from "@/components/Manifest.vue"

export default {
  name: "home",
  components: {
    Navbar,
    Hero,
    Motto,
    Node,
    Manifest
  }
};
</script>
