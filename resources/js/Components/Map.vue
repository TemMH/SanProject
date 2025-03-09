<template lang="">

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

</template>
<script>

export default {
  data() {
    return {
      map: null,
    };
  },
  mounted() {
    DG.then(() => {
      this.map = DG.map('map', {
        center: [52.293448, 104.296623],
        zoom: 16,
        scrollWheelZoom: false,
      });

      const mapicon = DG.icon({
        iconUrl: 'light_maker.svg', // SVG *Фикс*
        iconAnchor: [32, 64],
        popupAnchor: [0, 24],
        className: 'map-icon',
        iconSize: [64, 64],
      });

      DG.marker([52.293448, 104.296623], { icon: mapicon })
        .addTo(this.map)
        .bindPopup(
          '<div><h2>IRKUTSUN</h2><br/>Находимся в <b>Фортуне</b><br/>на <b>2 этаже 123.п</b></div>'
        );
    });
  },
};
</script>
<style lang="">
    
</style>