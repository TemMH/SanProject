<template>
    <section class="mt-48 w-full">

        <PartnerTicker :logos="topLogos" direction="left" />

        <PartnerTicker :logos="bottomLogos" direction="right" class="mt-12" />

    </section>
</template>

<script setup>
import PartnerTicker from "@/components/PartnerTicker.vue";
import topLogos from '@/Constants/PartnersLogoTop.js';
import bottomLogos from '@/Constants/PartnersLogoBottom.js';


</script>
<style></style>
