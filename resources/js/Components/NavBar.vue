<template>
<header
  :class="[
    'fixed top-0 mt-2 w-full px-4 lg:px-6 py-2 z-50 transition-transform duration-500',
    isVisible ? 'translate-y-0' : '-translate-y-full'
  ]"
  id="navbar"
>
  <nav
    class="flex h-12 justify-between items-center mx-auto dark:bg-white/30 backdrop-blur-md rounded-xl max-w-screen-xl px-5 py-1 shadow-xl"
  >
            <a href="" class="flex items-center">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                    >IRKUTSUN</span
                >
            </a>
            <div class="flex gap-2 h-full">
                <a
                    href="#"
                    class="aspect-square overflow-hidden rounded-full focus:ring-4 transform transition duration-500 hover:scale-105  focus:ring-primary-300 p-1 bg-[#1BD741]" 
                    >
                    <img class="object-fill" :src="Whatsapp" alt="" />
                    <!-- Whatsapp -->
                </a>
                <a
                    href="#"
                    class="aspect-square overflow-hidden rounded-full focus:ring-4 transform transition duration-500 hover:scale-105  focus:ring-primary-300 p-1 bg-[#61A8DE]" 
                    >
                    <img class="object-fill" :src="Telegram" alt="" />
                    <!-- Telegram -->
                </a>
                <a
                    href="#"
                    class="aspect-square overflow-hidden rounded-full focus:ring-4  transform transition duration-500 hover:scale-105 focus:ring-primary-300 p-1 bg-[#44678D]" 
                    >
                    <img class="object-fill" :src="Vkontakte" alt="" />
                    <!-- Vkontakte -->
                </a>
            </div>
        </nav>
    </header>
</template>
<script setup>
import Whatsapp from "@/Assets/Icons/whatsapp_icon.svg";
import Telegram from "@/Assets/Icons/telegram_icon.svg";
import Vkontakte from "@/Assets/Icons/vkontakte_icon.svg";
import { ref, onMounted, onUnmounted } from 'vue'

const isVisible = ref(true)
let lastScrollTop = 0

const handleScroll = () => {
  const currentScroll = window.scrollY
  if (currentScroll > lastScrollTop && currentScroll > 50) {
    // Прокрутка вниз
    isVisible.value = false
  } else {
    // Прокрутка вверх
    isVisible.value = true
  }
  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})

</script>
<style></style>
