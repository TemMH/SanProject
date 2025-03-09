<script setup>
// import Layout from './Layout';
import { Head } from "@inertiajs/vue3";
import Partners from "../../Components/Partners.vue";
import NavBar from "../../Components/NavBar.vue";
import Map from "../../Components/Map.vue"
import Workflow from "../../Components/Workflow.vue";
import Gallery from "../../Components/Gallery.vue";
import Experts from "../../Components/Experts.vue";
import Strengths from "../../Components/Strengths.vue";
import Welcome from "../../Components/Welcome.vue";

// defineProps({ user: Object })
</script>
<template>
    <!-- <Layout> -->
    <Head title="YYYY" />

    <NavBar />

    <Welcome />

    <Strengths />

    <Experts />

    <Gallery />

    <Workflow />

    <Partners />

    <Map />

    <!-- </Layout> -->
</template>
<!-- <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
  Когда вы все время выглядите
  <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
    <span class="relative text-white">раздраженным</span>,
  </span>
  люди думают, что вы заняты.
</blockquote> -->
