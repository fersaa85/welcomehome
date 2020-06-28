<template>
    <!-- Panel (Spotlight) -->
    <section class="panel background-white">
        <div class="gallery">
            <div class="group">
                <div class="span-3 display-moviel">
                    <div class="background-businness padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/businness-01.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/businness-01.png" alt="" /></a>
                <div class="span-3 hidden-moviel">
                    <div class="background-businness padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/businness-02.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/businness-02.png" alt="" /></a>
                <div class="span-3 padding-video">
                    <video width="415px"
                           height="240px"
                           poster="images/gallery/fulls/businness-03.png"
                           controls
                           class="video">
                        <source src="video/VID-20200423-WA0002.mp4"/>
                        Your browser doesn't support HTML5 video tag.
                    </video>
                </div>            </div>
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
