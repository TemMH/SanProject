<template>
    <div
        class="relative overflow-hidden mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5"
    >
        <div
            ref="logosContainer"
            class="flex space-x-8"
            :style="{ transform: `translateX(${offset}px)` }"
        >
            <div
                v-for="(logo, index) in visibleLogos"
                :key="index"
                class="flex-shrink-0"
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
            return [...this.logos, ...this.logos, ...this.logos];//Тройное дублирование *фикс*
        },
    },
    mounted() {
        this.calculateWidths();
        this.startAnimation();
        window.addEventListener("resize", this.calculateWidths);
    },
    beforeDestroy() {
        window.removeEventListener("resize", this.calculateWidths);
    },
    methods: {
        calculateWidths() {
            this.containerWidth = this.$refs.logosContainer.clientWidth;
            this.logosWidth = this.$refs.logosContainer.scrollWidth / 2;
        },
        startAnimation() {
            const animate = () => {
                this.offset -= this.speed;
                if (Math.abs(this.offset) >= this.logosWidth) {
                    this.offset = 0;
                }
                requestAnimationFrame(animate);
            };
            animate();
        },
    },
};
</script>

<style lang=""></style>
