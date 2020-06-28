<template>
    <!-- Panel (Spotlight) -->
    <section class="panel background-white">
        <div class="gallery">
            <div class="group">
                <div class="span-3 display-moviel">
                    <div class="background-tech padding prelative"></div>
                </div>
                <a href="images/gallery/fulls/tech-05.png" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/tech-05.png" alt="" /></a>
                <div class="span-3 padding-video">
                    <video width="415px"
                           height="240px"
                           poster="http://welcomehome.com.mx/images/gallery/fulls/tech-06.png"
                           controls
                           class="video">
                        <source src="video/IMG_4429.MOV"/>
                        Your browser doesn't support HTML5 video tag.
                    </video>
                </div>
                <div class="span-3 padding-video">
                    <video width="415px"
                           height="240px"
                           poster="http://welcomehome.com.mx/images/gallery/fulls/tech-07.png"
                           controls
                           class="video">
                        <source src="video/VID-20200422-WA0010.mp4"/>
                        Your browser doesn't support HTML5 video tag.
                    </video>
                </div>
                <div class="span-3 hidden-moviel">
                    <div class="background-tech padding prelative"></div>
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
