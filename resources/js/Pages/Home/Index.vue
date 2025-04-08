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
    <Head title="YYYY"  />

    <NavBar />

    <Welcome />

    <Strengths />

    <Experts />
<!-- <blockquote class="text-2xl font-semibold text-center text-slate-900">
  <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 w-full before:bg-yellow-500 relative inline-block">
    <span class="relative text-white">30% за приглашение</span>,
  </span>
</blockquote> -->
    <Gallery />

    <Workflow />

    <Partners />

    <Map />

    <!-- </Layout> -->
</template>

