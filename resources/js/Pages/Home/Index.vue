<script setup>
// import Layout from './Layout';
import { Head } from "@inertiajs/vue3";

// defineProps({ user: Object })
</script>

<template>
    <!-- <Layout> -->
    <Head title="YYYY" />

    <header>
        <nav class="fixed mt-1 w-full px-4 lg:px-6 py-2">
            <div
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
            </div>
        </nav>
    </header>

    <section class="flex pt-20 place-self-center max-w-screen-xl max-xl:w-full">
        <div
            class="flex-col justify-between w-1/3 h-auto bg-red-500 text-center"
        >
            <div>
                <h1>Title</h1>
            </div>
            <div class="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nostrum, provident! Rerum quam, asperiores molestiae est
                    voluptatem illo ab maiores fugiat modi libero ex cumque
                    voluptates quos iste blanditiis aliquid! Voluptate!
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

    <section class="flex mt-20 justify-center place-self-center w-full max-w-screen-xl max-xl:w-full">
        <div class="block bg-pink-200 w-1/3 h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="block bg-pink-500 w-1/3 h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="block bg-pink-200 w-1/3 h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>

    <section class="mt-5 justify-center place-self-center w-full max-w-screen-xl max-xl:w-full">
        <div class="flex justify-around w-5/6 h-48 bg-slate-800 rounded-xl shadow-lg place-self-center">
            <div class="flex-col justify-between text-center">
                <p>logo</p>
                <h1>title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex-col justify-between text-center">
                <p>logo</p>
                <h1>title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex-col justify-between text-center">
                <p>logo</p>
                <h1>title</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <section class="w-full mt-20 h-32 bg-red-500">

        <div class="flex w-full place-self-center max-w-screen-xl max-xl:w-full">
            <div class="">img</div>

            <div class="block">
                <div class="">
                    description Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Ducimus voluptatibus voluptates sequi!
                    Earum error aliquid, aliquam dolore, hic nulla quam odit
                    commodi ab perspiciatis beatae a praesentium placeat
                    accusamus quidem?
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

    <section class="flex mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5">
        <div class="block w-2/3 h-64">
            <div class="flex">
                <div class="w-1/2 h-32 bg-slate-400"></div>
                <div class="w-1/2 h-32 bg-red-400"></div>
            </div>
            <div class="bg-red-500 w-full h-32"></div>
        </div>
        <div class="w-1/3 bg-blue-400 h-64"></div>
    </section>

    <section class="block mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5">
        <h1 class="place-self-center">TITLE</h1>
        <div class="flex justify-between">
            <div class="flex-col text-center">
                <div
                    class="w-12 h-12 rounded-lg place-self-center bg-yellow-400 content-center"
                >
                    1
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="w-12 h-12 rounded-lg place-self-center bg-yellow-400 content-center"
                >
                    2
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="w-12 h-12 rounded-lg place-self-center bg-yellow-400 content-center"
                >
                    3
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
            <div class="flex-col text-center">
                <div
                    class="w-12 h-12 rounded-lg place-self-center bg-yellow-400 content-center"
                >
                    4
                </div>
                <div class="">title</div>
                <div class="">description</div>
            </div>
        </div>
    </section>

    <section class="container mx-auto text-center mt-20">
        <h1 class="place-self-center">TITLE</h1>
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

    <section class="flex mt-20 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5">
        <div class="flex-col justify-between w-1/2">
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
        <div class="w-1/2">map</div>
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
