<script setup>
// import Layout from './Layout';
import { Head } from "@inertiajs/vue3";

// defineProps({ user: Object })
</script>

<template>
    <!-- <Layout> -->
    <Head title="YYYY" />

    <header class="flex justify-center w-full h-14 border-2 mt-2 py-1">
        <nav
            class="flex justify-between rounded-xl bg-blue-500 backdrop-blur-xs w-3/5 h-full p-2"
        >
            <div class="w-1/5"></div>
            <div class="block w-2/5">
                <p>Address</p>
                <p>Время работы</p>
            </div>
            <div class="flex justify-around w-2/5"></div>
        </nav>
    </header>

    <div class="flex">
        <div class="block w-1/3 h-24 bg-red-500"></div>
        <div class="flex w-2/3 h-24 bg-blue-500"></div>
    </div>

    <div class="flex justify-center">
        <div class="block bg-pink-200 w-full h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="block bg-pink-500 w-full h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="block bg-pink-200 w-full h-24 text-center">
            <h1>loremTitle</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>

    <div
        class="flex justify-around w-96 h-48 bg-slate-800 rounded-xl shadow-lg place-self-center"
    >
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

    <div class="w-full h-32 bg-red-500">
        <div class="flex w-3/5 place-self-center">
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
    </div>

    <div class="flex">
        <div class="block w-2/3 h-64">
            <div class="flex">
                <div class="w-1/2 h-32 bg-slate-400"></div>
                <div class="w-1/2 h-32 bg-red-400"></div>
            </div>
            <div class="bg-red-500 w-full h-32"></div>
        </div>
        <div class="w-1/3 bg-blue-400 h-64"></div>
    </div>

    <div class="block">
        <h1 class="place-self-center">TITLE</h1>
        <div class="flex justify-around">
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
    </div>

    <div class="container mx-auto text-center">
        <h1 class="place-self-center">TITLE</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
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
    </div>

    <div class="flex">
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
    </div>
    <!-- <blockquote class="text-2xl font-semibold italic text-center text-slate-900">
  Когда вы все время выглядите
  <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-pink-500 relative inline-block">
    <span class="relative text-white">раздраженным</span>,
  </span>
  люди думают, что вы заняты.
</blockquote> -->

    <!-- <p>Hello {{ user.name }}, welcome</p> -->
    <!-- </Layout> -->
</template>
