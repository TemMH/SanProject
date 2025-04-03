<template>
    <div
        class=" mt-48 w-full flex flex-row items-center overflow-hidden">

        <div class="flex flex-row items-center justify-start  grow-0 shrink-0" id="ticker-track">
            
            <div
                v-for="(logo, index) in visibleLogos"
                :key="index"
                class="px-4"
            >
                <a :href="logo.url" target="_blank" rel="noopener noreferrer">
                    <img
                        :alt="logo.alt"
                        class="rounded-lg shadow-lg"
                        height="100"
                        :src="logo.src"
                        width="150"
                    />
                </a>
            </div>

        </div>

        <div class="flex flex-row items-center justify-start  grow-0 shrink-0" id="ticker-track">
            
            <div
                v-for="(logo, index) in visibleLogos"
                :key="index"
                class="px-4"
            >
                <a :href="logo.url" target="_blank" rel="noopener noreferrer">
                    <img
                        :alt="logo.alt"
                        class="rounded-lg shadow-lg"
                        height="100"
                        :src="logo.src"
                        width="150"
                    />
                </a>
            </div>

        </div>


    </div>

</template>

<script>
export default {
    data() {
        return {
            logos: [
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 1",
                    url: "https://example.com",
                },
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 2",
                    url: "https://example.com",
                },
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 3",
                    url: "https://example.com",
                },
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 4",
                    url: "https://example.com",
                },
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 5",
                    url: "https://example.com",
                },
                {
                    src: "https://placehold.co/150x100",
                    alt: "Partner Logo 6",
                    url: "https://example.com",
                },
            ],
            offset: 0,
            speed: 1,
            containerWidth: 0,
            logosWidth: 0,
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
