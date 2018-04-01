<template lang="pug">
  .home
    Navbar
    Hero
    Motto
    Node
    Manifest
    Photo
    Network
    WeAre
    Believe
    Banner
</template>

<script>
import Navbar from "@/components/Navbar.vue"
import Hero from "@/components/Hero.vue"
import Motto from "@/components/Motto.vue"
import Node from "@/components/Node.vue"
import Manifest from "@/components/Manifest.vue"
import Photo from "@/components/Photo.vue"
import Network from "@/components/Network.vue"
import WeAre from "@/components/WeAre.vue"
import Believe from "@/components/Believe.vue"
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
    Network,
    WeAre,
    Believe,
    Banner
  }
};
</script>
