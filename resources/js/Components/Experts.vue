<template>
    <section class="w-full mt-24 h-96 bg-[#222425]">
        <div
            class="relative flex h-full w-full place-self-center max-w-screen-xl max-xl:w-full max-xl:px-5"
        >
            <div class="relative w-1/3 h-full z-10">
                <transition name="fade-slide" mode="out-in">
                    <div
                        :key="experts[currentExpert].image"
                        class="aspect-[3/4] overflow-hidden absolute w-5/6 inset-x-0 mx-auto inset-y-0 my-auto rounded-xl transform transition-transform duration-500 hover:scale-105 before:absolute before:inset-0 before:bg-black/30 before:rounded-xl before:pointer-events-none before:[mask-image:radial-gradient(circle,rgba(0,0,0,0)_50%,rgba(0,0,0,1)_100%)]"
                    >
                        <img
                            :src="experts[currentExpert].image"
                            class="w-full h-full object-cover"
                            alt="Example Image"
                        />
                    </div>
                </transition>
            </div>

            <div
                class="flex flex-col justify-between w-2/3 text-white text-lg py-20"
            >
                <transition name="text-slide" mode="out-in">
                    <div
                        class="pr-48 cursor-default"
                        :key="experts[currentExpert].text"
                    >
                        {{ experts[currentExpert].text }}
                    </div>
                </transition>
                <div class="absolute flex top-5">

                    <svg
                    width="15%"
                    height="auto"
                    viewBox="0 0 125 200"
                    class="blur-[2px]"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
              
                        <path
                            d="M116.414 136.684C100.814 98.6837 71.4142 110.686 56.9143 119.185C42.4498 127.663 34.1205 108.802 43.9143 82.6855C55.9143 50.6855 84.4143 34.1855 107.414 25.1848C125.957 17.9283 116.414 3.18467 105.914 5.18471C52.5416 15.3511 20.4143 48.6838 8.41434 91.6838C-3.58566 134.684 17.9871 175.651 42.9143 189.184C77.9143 208.185 132.425 175.685 116.414 136.684Z"
                            stroke="white"
                            stroke-opacity="0.2"
                            stroke-width="2"
                        />
               
                    <defs></defs>
                </svg>

                <svg
                    width="15%"
                    height="auto"
                    viewBox="0 0 125 200"
                    class="blur-[2px]"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
              
                        <path
                            d="M116.414 136.684C100.814 98.6837 71.4142 110.686 56.9143 119.185C42.4498 127.663 34.1205 108.802 43.9143 82.6855C55.9143 50.6855 84.4143 34.1855 107.414 25.1848C125.957 17.9283 116.414 3.18467 105.914 5.18471C52.5416 15.3511 20.4143 48.6838 8.41434 91.6838C-3.58566 134.684 17.9871 175.651 42.9143 189.184C77.9143 208.185 132.425 175.685 116.414 136.684Z"
                            stroke="white"
                            stroke-opacity="0.2"
                            stroke-width="2"
                        />
               
                    <defs></defs>
                </svg>


                </div>
        

                <div class="flex">
                    <transition name="text-slide" mode="out-in">
                        <div
                            class="block w-4/5 cursor-default"
                            :key="experts[currentExpert].name"
                        >
                            <p>{{ experts[currentExpert].name }}</p>
                            <p>{{ experts[currentExpert].position }}</p>
                        </div>
                    </transition>

                    <button
                        class="w-1/5 bg-yellow-400 content-center rounded-xl"
                        @click="nextExpert"
                        :disabled="isTransitioning"
                    >
                        Дальше
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Experts1 from "@/Assets/Experts/example_experts1.jpg";
import Experts2 from "@/Assets/Experts/example_experts2.avif";
import Experts3 from "@/Assets/Experts/example_experts3.webp";

export default {
    data() {
        return {
            experts: [
                {
                    image: Experts1,
                    name: "Зимина Марина",
                    position: "Дизайнер",
                    text: "Приятно, граждане, наблюдать, как явные признаки победы институционализации заблокированы в рамках своих собственных рациональных ограничений.",
                },
                {
                    image: Experts2,
                    name: "Александр Иванов",
                    position: "Разработчик",
                    text: "Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий играет важную роль в формировании системы массового участия.",
                },
                {
                    image: Experts3,
                    name: "Екатерина Смирнова",
                    position: "Маркетолог",
                    text: "Таким образом, реализация намеченных плановых заданий способствует подготовке и реализации новых принципов формирования материально-технической и кадровой базы.",
                },
            ],
            currentExpert: 0,
        };
    },
    methods: {
        nextExpert() {
            if (this.isTransitioning) return;

            this.isTransitioning = true; // Блокируем кнопку

            this.currentExpert = (this.currentExpert + 1) % this.experts.length;

            setTimeout(() => {
                this.isTransitioning = false;
            }, 1200); // Разблокируем кнопку после задержки
        },
    },
};
</script>

<style scoped>
/* Анимация исчезновения */
.fade-slide-leave-active,
.text-slide-leave-active,
.fade-slide-enter-active,
.text-slide-enter-active {
    transition: opacity 0.5s ease, transform 0.5s ease;
}

/* Фото анимация */
.fade-slide-leave-to {
    opacity: 0;
    transform: translateX(-30px);
}

.fade-slide-enter-from {
    opacity: 0;
    transform: translateX(30px);
}
.fade-slide-enter-to {
    opacity: 1;
    transform: translateX(0);
}

/* Текстовая анимация */
.text-slide-leave-to {
    opacity: 0;
    transform: translateX(-20px);
}

.text-slide-enter-from {
    opacity: 0;
    transform: translateX(20px);
}
.text-slide-enter-to {
    opacity: 1;
    transform: translateX(0);
}
</style>
