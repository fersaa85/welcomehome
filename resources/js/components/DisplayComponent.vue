<template>
    <!-- Panel (Spotlight) -->
    <section class="panel background-white">
        <div class="gallery">
            <div class="group">
                <div class="span-3 display-moviel" style="background: transparent;">
                    <div class="background-display-moviel padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/display-07.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/display-07.png" alt="" /></a>
                <a href="images/gallery/fulls/display-02.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/display-02.png" alt="" /></a>
                <div class="span-3 hidden-moviel background-display ">
                    <div class="padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/display-08.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/display-08.png" alt="" /></a>
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
