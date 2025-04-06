<template>
    <section class="mt-48 w-full flex flex-row items-center overflow-hidden">
        <div
            class="flex flex-row items-center justify-start grow-0 shrink-0"
            id="ticker-track"
        >
            <div
                v-for="(logo, index) in visibleLogos"
                :key="index"
                class="px-6 h-10"
            >
                <a :href="logo.url" target="_blank" rel="noopener noreferrer">
                    <img
                        :alt="logo.alt"
                        class="h-full w-auto dark:brightness-0 dark:grayscale dark:invert"
                        :src="logo.src"
                    />
                </a>
            </div>
        </div>

        <div
            class="flex flex-row items-center justify-start grow-0 shrink-0"
            id="ticker-track"
        >
            <div
                v-for="(logo, index) in visibleLogos"
                :key="index"
                class="px-6 h-10"
            >
                <a :href="logo.url" target="_blank" rel="noopener noreferrer">
                    <img
                        :alt="logo.alt"
                        class="h-full w-auto  dark:brightness-0 dark:grayscale dark:invert"
                        :src="logo.src"
                    />
                </a>
            </div>
        </div>
    </section>
</template>

<script>
import Logo1 from "@/Assets/Partners/aquatek.webp";
import Logo2 from "@/Assets/Partners/aquanet.svg";
import Logo3 from "@/Assets/Partners/aquaton.svg";
import Logo4 from "@/Assets/Partners/aqwella.png";
import Logo5 from "@/Assets/Partners/alcaplast.png";
import Logo6 from "@/Assets/Partners/azario.png";
import Logo7 from "@/Assets/Partners/am_pm.svg";
import Logo8 from "@/Assets/Partners/sanriks.svg";
import Logo9 from "@/Assets/Partners/ceramicanova.png";
import Logo10 from "@/Assets/Partners/ceruttispa.png";
import Logo11 from "@/Assets/Partners/laufen.png";
import Logo12 from "@/Assets/Partners/roca.webp";
import Logo13 from "@/Assets/Partners/ravak.png";
import Logo14 from "@/Assets/Partners/grohe.png";
import Logo15 from "@/Assets/Partners/hansgrohe.svg";
import Logo16 from "@/Assets/Partners/belbagno.png";
import Logo17 from "@/Assets/Partners/bettoserb.svg";
import Logo18 from "@/Assets/Partners/caprigo.svg";
import Logo19 from "@/Assets/Partners/cersanit.webp";
import Logo20 from "@/Assets/Partners/cezares.png";

export default {
    data() {
        return {
            logos: [
                {
                    src: Logo1,
                    alt: "Partner Logo 1",
                    url: "https://www.aquatek-rf.ru",
                },
                {
                    src: Logo2,
                    alt: "Partner Logo 2",
                    url: "https://www.aquanet.ru",
                },
                {
                    src: Logo3,
                    alt: "Partner Logo 3",
                    url: "https://aquaton.ru",
                },
                {
                    src: Logo4,
                    alt: "Partner Logo 4",
                    url: "https://www.aqwella.com",
                },
                {
                    src: Logo5,
                    alt: "Partner Logo 5",
                    url: "https://alcaplast.shop",
                },
                {
                    src: Logo6,
                    alt: "Partner Logo 6",
                    url: "https://azario.ru",
                },
                {
                    src: Logo7,
                    alt: "Partner Logo 7",
                    url: "https://ampm-store.ru",
                },
                {
                    src: Logo8,
                    alt: "Partner Logo 8",
                    url: "https://sanriks.ru",
                },
                {
                    src: Logo9,
                    alt: "Partner Logo 9",
                    url: "https://ceramicanova.com",
                },
                {
                    src: Logo10,
                    alt: "Partner Logo 10",
                    url: "https://www.ceruttispa-shop.ru",
                },
                {
                    src: Logo11,
                    alt: "Partner Logo 11",
                    url: "https://www.laufen.com",
                },
                {
                    src: Logo12,
                    alt: "Partner Logo 12",
                    url: "https://www.roca.ru",
                },
                {
                    src: Logo13,
                    alt: "Partner Logo 13",
                    url: "https://www.ravak.ru",
                },
                {
                    src: Logo14,
                    alt: "Partner Logo 14",
                    url: "https://grohe-russia.shop",
                }, //Для мониторов 2к 14 логотипов 150px хватает
                {
                    src: Logo15,
                    alt: "Partner Logo 15",
                    url: "https://www.hansgrohe.ru",
                },
                {
                    src: Logo16,
                    alt: "Partner Logo 16",
                    url: "https://belbagno.ru",
                },
                {
                    src: Logo17,
                    alt: "Partner Logo 17",
                    url: "https://bettoserb.com",
                },
                {
                    src: Logo18,
                    alt: "Partner Logo 18",
                    url: "https://www.caprigo.ru",
                },
                {
                    src: Logo19,
                    alt: "Partner Logo 19",
                    url: "https://cersanit.ru",
                },
                {
                    src: Logo20,
                    alt: "Partner Logo 20",
                    url: "https://cezares.ru",
                },
            ],
        };
    },
    computed: {
        visibleLogos() {
            return [...this.logos];
        },
    },
};
</script>

<style>
@keyframes ticker {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-100%);
    }
}

#ticker-track {
    animation: ticker 30s linear infinite;
}
</style>
<!-- ещё Iddis, Jacob Delafon, Lemark, Paini, Ulgran, Vitra, Vincea, Grossman, Fabia, Ростовская Мануфактура Сантехника, Iddis, Kaiser, ODA ODA, RGW, Maxonor, ДВИН, Melana, Boheme -->