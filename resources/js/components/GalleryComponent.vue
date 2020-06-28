<template>
    <!-- Panel (Spotlight) -->
    <section class="panel">
        <div class="intro color2 content-top">
            <h1 style="font-size: 6rem">{{ header }}</h1>
            <h1 class="major">{{ title }}</h1>
            <p v-html="text"></p>
        </div>
        <div class="gallery">
            <div class="group span-3">
                <a href="images/gallery/fulls/eventos01XL.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/eventos01.jpg" alt="" /></a>
                <a href="images/gallery/fulls/eventos02XL.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/eventos02.jpg" alt="" /></a>
                <a href="images/gallery/fulls/eventos03XL.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/eventos03.jpg" alt="" /></a>
            </div>
            <a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/activacion01.jpg" alt="" /></a>
            <div class="group span-4-5">
                <a href="images/gallery/fulls/activacion01XL.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/expos01.jpg" alt="" /></a>
                <a href="images/gallery/fulls/activacion02XL.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/expos02.jpg" alt="" /></a>
                <a href="images/gallery/fulls/display01XL.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/display01.jpg" alt="" /></a>
                <a href="images/gallery/fulls/display02XL.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/display02.jpg" alt="" /></a>
            </div>
            <a href="http://127.0.0.1:8000/images/gallery/fulls/display03XL.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/display03.jpg" alt="" /></a>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('GalleryCOmponent.vue')
        },
        props: {
            header: String,
            title: String,
            text: String,
            items: {
                type: Array,
            },
        }
    }
</script>