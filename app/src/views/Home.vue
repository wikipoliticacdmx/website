<template>
  <div class="home">
    <Navbar />
    <Banner />
  </div>
</template>

<script>
  import Navbar from "@/components/Navbar.vue"
  import Banner from "@/components/Banner.vue"

  export default {
    name: "home",
    components: {
      Navbar,
      Banner
    }
  };
</script>
