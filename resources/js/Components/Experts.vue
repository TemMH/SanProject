<template>
    <section class="w-full mt-20 h-96 bg-slate-800">
      <div class="flex h-full w-full place-self-center max-w-screen-xl max-xl:w-full max-xl:px-5">
        <div class="relative w-1/3 h-full bg-red-400 z-10">
          <div class="aspect-[3/4] overflow-hidden absolute w-5/6 bg-red-800 inset-x-0 mx-auto inset-y-0 my-auto rounded-xl transform transition duration-500 hover:scale-105">
            <img :src="imageExpert" class="w-full h-full object-cover" alt="Example Image">
          </div>
        </div>
  
        <div class="block w-2/3 bg-red-500">
          <div>
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
  </template>
  
  <script>
  import Experts1 from '@/assets/experts/example_experts.jpg';

  export default {
    data() {
      return {
        imageExpert: Experts1
      };
    }
  };
  </script>
  