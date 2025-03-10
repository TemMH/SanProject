<template>

<section
        class="flex mt-20 place-self-center w-full h-auto max-w-screen-xl max-xl:w-full" 
    >

        <div class="flex flex-col justify-between">

            <div class="flex w-full justify-between">

                    <div class="w-3/5  rounded-xl flex justify-center">
                        <div class="h-full bg-red-900 aspect-square place-items-center"></div>
                    </div>
                    <div class="w-2/5 bg-red-400 overflow-hidden place-items-end aspect-square rounded-xl transform transition duration-500 hover:scale-110">
                        <img class="w-full h-full" :src="square_img" alt=""> <!-- Square -->
                    </div>

            </div>

            <div class="bg-red-500 h-[28rem] aspect-[16/9] mt-9 rounded-xl z-40 overflow-hidden transform transition duration-500 hover:scale-105">
                <img class="w-full h-full" :src="horizontal_img" alt=""> <!-- Horizontal -->
            </div>

        </div>

        <div class="w-[28rem] aspect-[9/16] bg-blue-400 overflow-hidden h-auto ml-9 rounded-xl transform transition duration-500 hover:scale-110">
            <img class="w-full h-full" :src="vertical_img" alt=""> <!-- Vertical -->
        </div>

    </section>

</template>
<script>
import VerticalImg from '@/assets/gallery/example_vertical.png'
import SquareImg from '@/assets/gallery/example_square.png'
import HorizontalImg from '@/assets/gallery/example_horizontal.png'

export default {
    data() {
        return {
            vertical_img: VerticalImg,
            square_img: SquareImg,
            horizontal_img: HorizontalImg,
        }
    },
}
</script>
<style>
    
</style>