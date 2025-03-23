<template>
    <header class="fixed mt-2 w-full px-4 lg:px-6 py-2 z-50">
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
                    <img class="object-fill" :src="whatsapp" alt="" />
                    <!-- Whatsapp -->
                </a>
                <a
                    href="#"
                    class="aspect-square overflow-hidden rounded-full focus:ring-4 transform transition duration-500 hover:scale-105  focus:ring-primary-300 p-1 bg-[#61A8DE]" 
                    >
                    <img class="object-fill" :src="telegram" alt="" />
                    <!-- Telegram -->
                </a>
                <a
                    href="#"
                    class="aspect-square overflow-hidden rounded-full focus:ring-4  transform transition duration-500 hover:scale-105 focus:ring-primary-300 p-1 bg-[#44678D]" 
                    >
                    <img class="object-fill" :src="vkontakte" alt="" />
                    <!-- Vkontakte -->
                </a>
            </div>
        </nav>
    </header>
</template>
<script>
import Whatsapp from "@/Assets/Icons/whatsapp_icon.svg";
import Telegram from "@/Assets/Icons/telegram_icon.svg";
import Vkontakte from "@/Assets/Icons/vkontakte_icon.svg";

export default {
    data() {
        return {
            whatsapp: Whatsapp,
            telegram: Telegram,
            vkontakte: Vkontakte,
        };
    },
};
</script>
<style lang=""></style>
