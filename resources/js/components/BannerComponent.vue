<template>
    <!-- Panel (Banner) -->
    <section class="panel banner right background-blue height-moviel">
        <div class="content color0 span-4 text-center">
            <h1 class="header">{{ header }}</h1>
            <h2 class="major">{{ title }}</h2>
            <p>Somos un equipo de puro talento mexicano.
                <br /><br class="br-block"/>Te damos la bienvenida para hacer realidad tus ideas.</p>

            <p class="hidden-moviel"><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a></p>
        </div>

        <div class="hidden-moviel">
            <img src="images/banner/us.png" alt="" style="height: 507px;"/>
        </div>
        <div class="display-moviel text-center">
            <img src="images/banner/logo-moviel.png"  style="width: 100%;"/>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('BannerComponent.vue')
        },
        props: {
            header: String,
            title: String,
            text: String,
            items: {
                type: Array,
            },
        },
    }
</script>