<template lang="">
    <section
        class="flex mt-24 place-self-center w-full max-w-screen-xl max-xl:w-full max-xl:px-5 dark:text-white"
    >
        <div class="flex flex-col justify-around w-1/2 pr-20">
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
                    Безусловно, синтетическое тестирование обеспечивает
                    актуальность существующих финансовых и административных
                    условий.
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
        <div class="w-1/2 aspect-[4/3]">
            <div class="overflow-hidden size-full bg-black rounded-xl">
                <div id="map" class="" style="width: 100%; height: 100%"></div>
            </div>
        </div>
    </section>
</template>
<script>
// import LightMarker from "@/assets/markers/light_marker.svg";
// import DarkMarker from "@/assets/markers/dark_marker.svg";

export default {
    data() {
        return {
            // marker: DarkMarker,
            map: null,
        };
    },
    mounted() {
        DG.then(() => {
            this.map = DG.map("map", {
                center: [52.293448, 104.296623],
                zoom: 16,
                scrollWheelZoom: false,
            });

            const mapicon = DG.icon({
                iconUrl: this.marker, // SVG *Фикс*
                iconAnchor: [32, 64],
                popupAnchor: [0, 24],
                className: "map-icon",
                iconSize: [64, 64],
            });

            DG.marker([52.293448, 104.296623], { icon: mapicon })
                .addTo(this.map)
                .bindPopup(
                    "<div><h2>IRKUTSUN</h2><br/>Находимся в <b>Фортуне</b><br/>на <b>2 этаже 123.п</b></div>"
                );
        });
    },
};
</script>
<style lang=""></style>
