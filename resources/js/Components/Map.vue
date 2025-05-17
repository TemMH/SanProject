<template>
    <section
        class="flex mt-24 place-self-center w-full max-w-screen-2xl max-xl:w-full max-w-2xl:w-96 dark:text-white"
    >
    <div class="w-full aspect-[21/9]">
            <div class="overflow-hidden relative size-full bg-black rounded-t-xl">

                <div class="absolute flex flex-col justify-around w-4/12 translate-x-24 top-1/2 transform -translate-y-1/2 p-10 rounded-xl bg-white text-black dark:bg-[#222425] dark:text-white z-10">
                    <div class="block text-center">
                        <h1 class="text-3xl font-bold">Небо темнеет</h1>
                        <p>
                            Есть над чем задуматься: действия представителей оппозиции,
                            превозмогая сложившуюся непростую экономическую ситуацию,
                            обнародованы.
                        </p>
                    </div>
                    <div class="block text-center">
                        <h1 class="text-3xl font-bold">Небо темнеет</h1>
                        <p>
                            Господа, высокое качество позиционных исследований создаёт
                            необходимость включения в производственный план целого ряда
                            внеочередных мероприятий с учётом комплекса как
                            самодостаточных, так и внешне зависимых концептуальных
                            решений.
                        </p>
                    </div>
                </div>
                <div id="map"
                 class="" style="width: 100%; height: 100%"></div>
            </div>
        </div>

    </section>
</template>
<script>
import LightMarker from "@/Assets/Markers/light_marker.svg";
import DarkMarker from "@/Assets/Markers/dark_marker.svg";

export default {
    data() {
        return {
            marker: null,
            map: null,
        };
    },
    mounted() {
        this.setThemeMarker();

        DG.then(() => {
            this.map = DG.map("map", {
                center: [52.293715, 104.291079],
                zoom: 16,
                scrollWheelZoom: false,
            });

            this.addMarker();
        });

        window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", this.setThemeMarker);
    },
    methods: {
        setThemeMarker() {
            const isDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
            this.marker = isDark ?  LightMarker : DarkMarker;

            if (this.map) {
                this.addMarker();
            }
        },
        addMarker() {
            if (!this.map || !this.marker) return;

            const mapicon = DG.icon({
                iconUrl: this.marker,
                iconAnchor: [32, 64],
                popupAnchor: [0, 0],
                className: "map-icon",
                iconSize: [64, 64],
            });

            this.map.eachLayer((layer) => {
                if (layer instanceof DG.Marker) {
                    this.map.removeLayer(layer);
                }
            });

            DG.marker([52.293448, 104.296623], { icon: mapicon })
                .addTo(this.map)
                .bindPopup(
                    "<div><h2>IRKUTSUN</h2><br/>Находимся в <b>Фортуне</b><br/>на <b>2 этаже 123.п</b></div>"
                );
        },
    },
};
</script>
<style lang=""></style>
