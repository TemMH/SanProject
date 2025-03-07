<script setup>
// import Layout from './Layout';
import { Head } from "@inertiajs/vue3";

// defineProps({ user: Object })
</script>
<template>
    <!-- <Layout> -->
    <Head title="YYYY" />

    <header
    class="fixed mt-1 w-full px-4 lg:px-6 py-2 z-50"
    >

        <nav
        class="flex justify-between items-center mx-auto dark:bg-white/30 backdrop-blur-md rounded-xl max-w-screen-xl px-5"        
        >

                <a href="" class="flex items-center">
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                        >IRKUTSUN</span
                    >
                </a>
                <div class="flex items-center lg:order-2">
                    <a
                        href="#"
                        class="text-white aspect-square rounded-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium text-sm px-5 py-2.5 mr-2 dark:bg-black dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        >A</a
                    >
                    <a
                        href="#"
                        class="text-white aspect-square rounded-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium text-sm px-5 py-2.5 mr-2 dark:bg-black dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        >A</a
                    >
                    <a
                        href="#"
                        class="text-white aspect-square rounded-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium text-sm px-5 py-2.5 mr-2 dark:bg-black dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
                        >A</a
                    >
                    <button
                        data-collapse-toggle="mobile-menu-2"
                        type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                    </button>
                </div>
                
        </nav>

    </header>

    <section
        class="flex pt-20 place-self-center max-w-screen-xl max-xl:w-full  font-mono text-3xl"
    >
        <div
            class="flex-col justify-between w-1/3 h-auto bg-red-500 text-center"
        >
            <div>
                <h1>Title Ipsum</h1>
            </div>
            <div class="py-5">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when 
                </p>
            </div>

            <div class="">
                <button class="aspect-square rounded-full h-24 bg-white">
                    Кнопка
                </button>
            </div>
        </div>

        <div class="flex w-2/3 h-auto bg-blue-500">
            <!-- SVG -->

            <!-- <div class="flex relative">
                <svg
                    class="h-full"
                    viewBox="0 0 299 494"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M73.3351 8.90928C74.0837 4.02889 78.2821 0.425293 83.2196 0.425293H288.018C294.743 0.425293 299.55 6.92912 297.578 13.3579L152.441 486.507C151.152 490.707 147.274 493.574 142.88 493.574H10.6507C4.52367 493.574 -0.162601 488.115 0.76626 482.058L73.3351 8.90928Z"
                        fill="black"
                    />
                </svg>

                <svg
                    class="h-full"
                    viewBox="0 0 448 494"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M146.196 7.49269C147.484 3.29262 151.363 0.425293 155.756 0.425293H292.244C296.637 0.425293 300.516 3.2926 301.804 7.49268L446.942 480.642C448.914 487.071 444.106 493.574 437.382 493.574H10.6182C3.89376 493.574 -0.91414 487.071 1.05788 480.642L146.196 7.49269Z"
                        fill="black"
                    />
                </svg>
                <svg
                    class="h-full"
                    viewBox="0 0 299 494"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M225.665 8.90928C224.916 4.02889 220.718 0.425293 215.78 0.425293H10.9819C4.25748 0.425293 -0.550412 6.92912 1.42161 13.3579L146.559 486.507C147.848 490.707 151.726 493.574 156.12 493.574H288.349C294.476 493.574 299.163 488.115 298.234 482.058L225.665 8.90928Z"
                        fill="black"
                    />
                </svg>
            </div> -->
        </div>
    </section>

    <section
        class="flex mt-20 justify-center place-self-center w-full max-w-screen-xl max-xl:w-full font-mono text-xl"
    >
        <div class="block bg-pink-200 w-1/3 h-24 text-center">
            <h1 class="text-3xl font-bold">20%</h1>
            <p class="pt-5">Lorem, ipsum dolor</p>
        </div>
        <div class="block bg-pink-500 w-1/3 h-24 text-center">
            <h1 class="text-3xl font-bold">3 500М2</h1>
            <p class="pt-5">Lorem, ipsum dolor</p>
        </div>
        <div class="block bg-pink-200 w-1/3 h-24 text-center">
            <h1 class="text-3xl font-bold">3 ДНЯ</h1>
            <p class="pt-5">Lorem, ipsum dolor</p>
        </div>
    </section>

    <section
        class="mt-5 justify-center place-self-center w-full max-w-screen-xl max-xl:w-full"
    >
        <div
            class="flex justify-around w-5/6 h-auto py-10 bg-slate-50 text-black dark:bg-gray-800 dark:text-white rounded-xl shadow-lg place-self-center"
        >
            <div class="flex-col justify-between text-center">
                <svg
                    class="w-[74px] h-[87px] place-self-center"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M47.7514 0.39337C48.9898 1.08913 49.5977 2.54631 49.2247 3.92478L41.0368 34.1786H70.9166C72.1444 34.1786 73.2551 34.9126 73.7445 36.0474C74.2338 37.1821 74.0084 38.5013 73.1707 39.4058L30.0041 86.0128C29.0367 87.0574 27.487 87.3024 26.2486 86.6066C25.0102 85.9109 24.4023 84.4537 24.7753 83.0752L32.9632 52.8214H3.0834C1.85562 52.8214 0.744856 52.0874 0.25553 50.9526C-0.233797 49.8179 -0.0084185 48.4987 0.829313 47.5942L43.9959 0.987186C44.9633 -0.0573626 46.513 -0.30239 47.7514 0.39337ZM10.1788 46.6071H37C37.961 46.6071 38.867 47.0587 39.4503 47.8283C40.0337 48.5979 40.2275 49.5975 39.9747 50.5318L34.0066 72.5837L63.8212 40.3929H37C36.039 40.3929 35.133 39.9413 34.5497 39.1717C33.9663 38.4021 33.7725 37.4025 34.0253 36.4682L39.9934 14.4163L10.1788 46.6071Z"
                        fill="#FFC113"
                    />
                </svg>

                <h1 class="text-3xl font-bold py-5 uppercase ">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex-col justify-between text-center">
                <svg
                    class="w-[84px] h-[87px] place-self-center"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M39.7785 0.886707C41.0244 -0.295569 42.9756 -0.295569 44.2215 0.886707C52.9091 9.13005 64.6316 14.1812 77.5385 14.1812C77.7438 14.1812 77.9489 14.1799 78.1536 14.1773C79.5638 14.1598 80.8223 15.0607 81.2628 16.403C83.0399 21.8186 84 27.6018 84 33.6032C84 59.2487 66.4933 80.7893 42.8053 86.8978C42.277 87.0341 41.723 87.0341 41.1947 86.8978C17.5067 80.7893 0 59.2487 0 33.6032C0 27.6018 0.960067 21.8186 2.73717 16.403C3.17765 15.0607 4.43625 14.1598 5.84643 14.1773C6.05115 14.1799 6.25619 14.1812 6.46154 14.1812C19.3684 14.1812 31.0909 9.13005 39.7785 0.886707ZM8.21044 20.6277C7.07109 24.7548 6.46154 29.1054 6.46154 33.6032C6.46154 55.9317 21.5074 74.7473 42 80.4131C62.4926 74.7473 77.5385 55.9317 77.5385 33.6032C77.5385 29.1054 76.9289 24.7548 75.7896 20.6277C62.9207 20.2241 51.1635 15.3823 42 7.58388C32.8365 15.3823 21.0793 20.2241 8.21044 20.6277ZM56.8009 30.9689C58.2529 32.008 58.5892 34.0296 57.5521 35.4844L41.3982 58.1432C40.8462 58.9174 39.9822 59.4092 39.0357 59.4877C38.0892 59.5661 37.1563 59.2234 36.4847 58.5506L26.7924 48.8397C25.5307 47.5756 25.5307 45.526 26.7924 44.2619C28.0541 42.9978 30.0997 42.9978 31.3614 44.2619L38.357 51.2709L52.2941 31.7215C53.3312 30.2667 55.349 29.9298 56.8009 30.9689Z"
                        fill="#FFC113"
                    />
                </svg>

                <h1 class="text-3xl font-bold py-5 uppercase ">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex-col justify-between text-center">
                <svg
                    class="w-[88px] h-[87px] place-self-center"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M44 6.76923C23.438 6.76923 6.76923 23.438 6.76923 44C6.76923 64.562 23.438 81.2308 44 81.2308C64.562 81.2308 81.2308 64.562 81.2308 44C81.2308 23.438 64.562 6.76923 44 6.76923ZM0 44C0 19.6995 19.6995 0 44 0C68.3005 0 88 19.6995 88 44C88 68.3005 68.3005 88 44 88C19.6995 88 0 68.3005 0 44ZM27.9299 29.9392C28.4161 28.9669 29.7139 27.0769 32.1538 27.0769C34.5938 27.0769 35.8916 28.9669 36.3778 29.9392C36.9652 31.114 37.2308 32.5 37.2308 33.8462C37.2308 35.1923 36.9652 36.5783 36.3778 37.7531C35.8916 38.7254 34.5938 40.6154 32.1538 40.6154C29.7139 40.6154 28.4161 38.7254 27.9299 37.7531C27.3425 36.5783 27.0769 35.1923 27.0769 33.8462C27.0769 32.5 27.3425 31.114 27.9299 29.9392ZM51.6222 29.9392C52.1084 28.9669 53.4062 27.0769 55.8462 27.0769C58.2861 27.0769 59.5839 28.9669 60.0701 29.9392C60.6575 31.114 60.9231 32.5 60.9231 33.8462C60.9231 35.1923 60.6575 36.5783 60.0701 37.7531C59.5839 38.7254 58.2861 40.6154 55.8462 40.6154C53.4062 40.6154 52.1084 38.7254 51.6222 37.7531C51.0348 36.5783 50.7692 35.1923 50.7692 33.8462C50.7692 32.5 51.0348 31.114 51.6222 29.9392ZM27.247 55.9664C28.5688 54.6447 30.7118 54.6447 32.0336 55.9664C38.6425 62.5753 49.3576 62.5753 55.9664 55.9664C57.2882 54.6447 59.4312 54.6447 60.753 55.9664C62.0748 57.2882 62.0748 59.4312 60.753 60.753C51.5006 70.0054 36.4994 70.0054 27.247 60.753C25.9252 59.4312 25.9252 57.2882 27.247 55.9664Z"
                        fill="#FFC113"
                    />
                </svg>

                <h1 class="text-3xl font-bold py-5 uppercase ">Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <section
        class="w-full mt-20 h-96 bg-slate-800"
    >

        <div class="flex h-full w-full place-self-center max-w-screen-xl max-xl:w-full max-xl:px-5">

            <div class="relative w-1/3 h-100% bg-red-400 z-10">
                    
                    <div class="aspect-[3/4] absolute h-auto w-5/6 bg-red-800  inset-x-0 mx-auto inset-y-0 my-auto rounded-xl">
                    img
                    </div>

            </div>

            <div class="block w-2/3 bg-red-500">
                <div class="">
                    description Lorem ipsum dolor sit amet consectetur

                </div>
                <div class="flex">
                    <div class="block w-4/5">
                        <p>Author</p>
                        <p>dolzhnost</p>
                    </div>
                    <div class="w-1/5 bg-blue-400"></div>
                </div>
            </div>

        </div>

    </section>

    <section
        class="flex mt-20 place-self-center w-full h-auto max-w-screen-xl max-xl:w-full" 
    >

        <div class="flex flex-col justify-between">

            <div class="flex w-full justify-between">

                    <div class="w-3/5 bg-slate-400 rounded-xl flex justify-center">
                        <div class="h-full bg-red-900 aspect-square place-items-center"></div>
                    </div>
                    <div class="w-2/5 bg-red-400 place-items-end aspect-square rounded-xl"></div>

            </div>

            <div class="bg-red-500 h-[28rem] aspect-[16/9] mt-9 rounded-xl z-40"></div>

        </div>

        <div class="w-[28rem] aspect-[9/16] bg-blue-400 h-auto ml-9 rounded-xl"></div>

    </section>

    <section
        class="relative block mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5"
    >


<svg  
class="absolute top-5 left-0 z-10 w-full max-w-screen-xl max-xl:px-10" viewBox="0 -4 1280 110" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 46.9713C1 46.9713 92.4578 14.3822 153.548 5.17227C327.982 -21.1256 420.586 85.2413 596.889 91.6203C813.503 99.4579 929.485 -16.8979 1145.11 5.17227C1227.12 13.5664 1352 46.9713 1352 46.9713" 
stroke="#facc15" stroke-width="10"/>
</svg>

        <h1 class="place-self-center">TITLE</h1>
        <div class="flex justify-between">
            <div class="flex-col text-center">
                <div
                    class="size-20 rounded-lg place-self-center bg-yellow-400 content-center relative z-20 text-white text-2xl font-black"
                >
                    1
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="size-20 rounded-lg place-self-center bg-yellow-400 content-center relative z-20 text-white text-2xl font-black"
                >
                    2
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="size-20 rounded-lg place-self-center bg-yellow-400 content-center relative z-20 text-white text-2xl font-black"
                >
                    3
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="size-20 rounded-lg place-self-center bg-yellow-400 content-center relative z-20 text-white text-2xl font-black"
                >
                    4
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
        </div>
    </section>

    <section
    class="mt-20 place-self-center w-full h-auto max-w-screen-xl max-xl:w-full"
    >
    
        <h1 class="place-self-center text-center">TITLE</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 place-items-center">
            <img
                alt="Partner Logo 1"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 2"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 3"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 4"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 5"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 6"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 7"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
            <img
                alt="Partner Logo 8"
                class="rounded-lg shadow-lg"
                height="100"
                src="https://placehold.co/150x100"
                width="150"
            />
        </div>

    </section>

    <section
        class="flex mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5"
    >
        <div class="flex flex-col justify-around w-1/2 pr-20">


            <div class="block text-center">
                <h1>title</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Minima ratione sapiente suscipit, dolore amet quae odio
                    fugit voluptatem, sint repellat ut quisquam illo, cupiditate
                    rem cum voluptatum placeat temporibus quos.
                </p>
            </div>
            <div class="block text-center">
                <h1>title</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Minima ratione sapiente suscipit, dolore amet quae odio
                    fugit voluptatem, sint repellat ut quisquam illo, cupiditate
                    rem cum voluptatum placeat temporibus quos.
                </p>
            </div>
            <div class="block text-center">
                <h1>title</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Minima ratione sapiente suscipit, dolore amet quae odio
                    fugit voluptatem, sint repellat ut quisquam illo, cupiditate
                    rem cum voluptatum placeat temporibus quos.
                </p>
            </div>


        </div>
        <div class="w-1/2 aspect-[4/3]">
            <div class="overflow-hidden size-full bg-black rounded-xl">

<div id="map" class="" style="width:100%; height:100%"></div>                

            </div>
        </div>
    </section>

    <!-- </Layout> -->
</template>
<!-- <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
  Когда вы все время выглядите
  <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
    <span class="relative text-white">раздраженным</span>,
  </span>
  люди думают, что вы заняты.
</blockquote> -->
