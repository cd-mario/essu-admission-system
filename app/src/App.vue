<script setup>
import { RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
</script>

<template>
    <div class="wrapper">
      <Navbar />
      <RouterView />
      <Footer />
    </div>
</template>

<style scoped>
  .wrapper {
    padding-bottom: 20vh;
  }
</style>
