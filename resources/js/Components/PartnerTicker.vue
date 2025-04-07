<template>

    <div class="flex flex-row items-center overflow-hidden">
        <div
            class="flex flex-row items-center justify-start grow-0 shrink-0"

                  :class="animationClass"
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
    </div>


</template>
<script setup>
import { computed } from 'vue';
import defaultLogos from '@/Constants/PartnersLogoTop.js';

const props = defineProps({
  direction: {
    type: String,
    default: 'left',
  },

  logos: {
    type: Array,
    default: () => defaultLogos,
  },
});

const visibleLogos = computed(() => [...props.logos, ...props.logos]);

const animationClass = computed(() => {
  return props.direction === 'right'
    ? 'animate-ticker-reverse'
    : 'animate-ticker';
});


</script>
<style scoped>
    @keyframes ticker {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}

@keyframes ticker-reverse {
  0% {
    transform: translateX(-50%);
  }
  100% {
    transform: translateX(0%);
  }
}

.animate-ticker {
  animation: ticker 30s linear infinite;
}

.animate-ticker-reverse {
  animation: ticker-reverse 30s linear infinite;
}
</style>