<template>
    <section class="mt-48 w-full">

        <PartnerTicker :logos="topLogos" direction="left" />

        <PartnerTicker :logos="bottomLogos" direction="right" />

    </section>
</template>

<script setup>
import PartnerTicker from "@/components/PartnerTicker.vue";
import topLogos from '@/Constants/PartnersLogoBottom.js';
import bottomLogos from '@/Constants/PartnersLogoTop.js';


</script>
<!-- Для нижних Iddis, Jacob Delafon, Lemark, Paini, Ulgran, Vitra, Vincea, Grossman, Fabia, Ростовская Мануфактура Сантехника, Iddis, Kaiser, ODA ODA, RGW, Maxonor, ДВИН, Melana, Boheme -->
<style></style>
