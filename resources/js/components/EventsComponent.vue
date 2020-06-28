<template>
    <!-- Panel (Spotlight) -->
    <section class="panel background-white">
        <div class="gallery">
            <div class="group">
                <div class="span-3 display-moviel">
                    <div class="background-event padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/event-1.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/event-1.png" alt="" /></a>
                <a href="images/gallery/fulls/event-2.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/event-2.png" alt="" /></a>
                <a href="images/gallery/fulls/event-3.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/event-3.png" alt="" /></a>
                <div class="span-3 hidden-moviel">
                    <div class="background-event padding prelative"></div>
                </div>
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