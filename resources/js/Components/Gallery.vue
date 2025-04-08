<template>
    <section
        class="flex mt-24 place-self-center w-full h-auto max-w-screen-xl max-xl:w-full"
    >
        <div class="flex flex-col justify-between">
            <div class="flex w-full justify-between">
                <div class="w-3/5 flex justify-center">
                    <div
                        class="h-full max-w-min text-center aspect-square cursor-default place-content-center"
                    >
                        <h1
                            class="text-3xl font-bold uppercase dark:text-white"
                        >
                            Галлерея работ
                        </h1>
                        <p class="pt-6  font-semibold dark:text-slate-100">
                            Также как постоянное информационно пропагандистское
                            обеспечение нашей деятельности однозначно определяет
                            каждого участника как способного принимать
                            собственные решения касаемо форм воздействия.
                        </p>
                    </div>
                </div>
                <div
                    class="w-2/5 overflow-hidden place-items-end aspect-square rounded-xl transform transition duration-500 hover:scale-110"
                >
                    <img class="w-full h-full" :src="square_img" alt=""> 
                    <!-- Square -->
                </div>
            </div>

            <div
                class="h-[28rem] aspect-[16/9] mt-9 rounded-xl z-40 overflow-hidden transform transition duration-500 hover:scale-105"
            >
                <img class="w-full h-full" :src="horizontal_img" alt=""> 
                <!-- Horizontal -->
            </div>
        </div>

        <div
            class="w-[28rem] aspect-[9/16] overflow-hidden h-auto ml-9 rounded-xl transform transition duration-500 hover:scale-110"
        >
            <img class="w-full h-full" :src="vertical_img" alt=""> 
            <!-- Vertical -->
        </div>
    </section>
</template>
<script>
import VerticalImg from '@/Assets/Gallery/example_vertical.png'
import SquareImg from '@/Assets/Gallery/example_square.png'
import HorizontalImg from '@/Assets/Gallery/example_horizontal.png'

export default {
    data() {
        return {
            vertical_img: VerticalImg,
            square_img: SquareImg,
            horizontal_img: HorizontalImg,
        };
    },
};
</script>
<style></style>
