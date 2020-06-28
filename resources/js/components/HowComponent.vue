<template>
    <!-- Panel (Banner) -->
    <section class="panel banner right background-pink height-moviel">
        <div class="hidden-moviel">
            <img src="images/how/braind.png" alt="" class="braind">
        </div>
        <div class="content-how color0 text-center background-pink">
            <h1 class="header">{{ header }}</h1>
            <h2 class="major bg-white">{{ title }}</h2>
            <p>Creamos historias y experiencias relevantes con expertice,<br />
                <br class="display-moviel"/>sentido común, metodología, estrategia y creatividad.</p>
            <h2>¡bienvenido a casa!</h2>
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