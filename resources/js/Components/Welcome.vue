<template>
    <section class="flex pt-24 place-self-center max-w-screen-xl max-xl:w-full">
        <div
            class="flex-col justify-between w-2/5 h-auto text-center cursor-default pt-4 pl-20"
        >
            <div>
                <h1 class="text-3xl font-black  uppercase  dark:text-white">
                    Солнечных дней
                </h1>
            </div>
            <div class="py-5 pt-10 dark:text-white">
                <p>
                    Принимая во внимание показатели успешности, существующая
                    теория говорит о возможностях первоочередных требований. В
                    частности, понимание сути ресурсосберегающих технологий
                    говорит о возможностях поэтапного и последовательного
                    развития общества.
                </p>
            </div>

            <div class="">
                <button class="aspect-square rounded-full h-32 bg-white">
                    Перейти
                </button>
            </div>
        </div>

        <div class="flex relative w-3/5 h-auto">
            <!-- SVG -->

            <svg
                class="h-auto absolute left-10 w-1/3"
                viewBox="0 0 299 494"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <defs>
                    <clipPath id="clip-shape-first">
                        <path
                            d="M73.3351 8.90928C74.0837 4.02889 78.2821 0.425293 83.2196 0.425293H288.018C294.743 0.425293 299.55 6.92912 297.578 13.3579L152.441 486.507C151.152 490.707 147.274 493.574 142.88 493.574H10.6507C4.52367 493.574 -0.162601 488.115 0.76626 482.058L73.3351 8.90928Z"
                        />
                    </clipPath>
                </defs>
                <!-- фото первого свг -->
                <image :href="vertical_img"  clip-path="url(#clip-shape-first)" />
             

            </svg>

            <svg
                class="h-auto absolute left-1/2 transform -translate-x-1/2"
                viewBox="0 0 448 494"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <defs>
                    <clipPath id="clip-shape-second">
                        <path
                            d="M146.196 7.49269C147.484 3.29262 151.363 0.425293 155.756 0.425293H292.244C296.637 0.425293 300.516 3.2926 301.804 7.49268L446.942 480.642C448.914 487.071 444.106 493.574 437.382 493.574H10.6182C3.89376 493.574 -0.91414 487.071 1.05788 480.642L146.196 7.49269Z"
                            fill="black"
                        />
                    </clipPath>
                </defs>
                <!-- фото второго свг -->
                <image :href="square_img" clip-path="url(#clip-shape-second)" />

            </svg>
            <svg
                class="h-auto w-1/3 absolute right-10"
                viewBox="0 0 299 494"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <defs>
                    <clipPath id="clip-shape-third">
                        <path
                            d="M225.665 8.90928C224.916 4.02889 220.718 0.425293 215.78 0.425293H10.9819C4.25748 0.425293 -0.550412 6.92912 1.42161 13.3579L146.559 486.507C147.848 490.707 151.726 493.574 156.12 493.574H288.349C294.476 493.574 299.163 488.115 298.234 482.058L225.665 8.90928Z"
                            fill="black"
                        />
                    </clipPath>
                </defs>
                <!-- фото третьего свг -->
                <image :href="horizontal_img" clip-path="url(#clip-shape-third)" />

            </svg>
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
