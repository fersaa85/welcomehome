<template>
    <!-- Panel (Spotlight) -->
    <section class="panel background-white">
        <div class="gallery">
            <div class="group">
                <div class="span-3 ">
                    <div class="background-expos padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/expo-01.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/expo-01.png" alt="" /></a>
                <a href="images/gallery/fulls/expo-04.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/expo-04.png" alt="" /></a>
                <a href="images/gallery/fulls/expo-05.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/expo-05.png" alt="" /></a>
            </div>
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
