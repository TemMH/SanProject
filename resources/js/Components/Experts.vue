<template>
    <section class="w-full mt-20 h-96 bg-slate-800">
        <div
            class="flex h-full w-full place-self-center max-w-screen-xl max-xl:w-full max-xl:px-5"
        >
            <div class="relative w-1/3 h-full z-10">
                <div
                    class="aspect-[3/4] overflow-hidden absolute w-5/6 bg-red-800 inset-x-0 mx-auto inset-y-0 my-auto rounded-xl transform transition duration-500 hover:scale-105"
                >
                    <!-- <img :src="imageExpert" class="w-full h-full object-cover" alt="Example Image"> -->
                </div>
            </div>

            <div class="flex flex-col justify-between w-2/3 text-white text-lg py-20">
                <div class="pr-48">
                    Приятно, граждане, наблюдать, как явные признаки победы
                    институционализации заблокированы в рамках своих собственных
                    рациональных ограничений. Лишь акционеры крупнейших компаний
                    преданы социально-демократической анафеме.
                </div>
                <div class="flex">
                    <div class="block w-4/5">
                        <p>Зимина Марина</p>
                        <p>Дизайнер</p>
                    </div>
                    <button class="w-1/5 bg-blue-400 content-center rounded-xl">Дальше</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
// import Experts1 from '@/assets/experts/example_experts.jpg';

export default {
    data() {
        return {
            // imageExpert: Experts1,
        };
    },
};
</script>
