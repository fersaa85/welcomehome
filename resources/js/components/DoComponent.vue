<template>
    <!-- Panel (Spotlight) -->
    <section class="panel spotlight medium right background-aqua height-moviel">
        <div class="content span-6 content-top background-transparent text-center padding-cero do-moviel">
            <br />
            <h1 class="header">{{ header }}</h1>
            <h2 class="major bg-white">{{ title }}</h2>
            <p>Aplicamos nuestra experiencia de +15 años <br/>
                creando, produciendo <br class="br-block"/>y haciendo realidad sueños.<br/>
                Desarrollamos cualquier tipo de proyecto <br class="br-block"/>en conjunto, <br/>
                convirtiéndonos en "partners de innovación".
                <br />
               Nuestro objetivo es tener ejecuciones perfectas <br/>
               que puedan aplicarse en cualquier multiplataforma.
            </p>
            <h2 class="major">-yo te ayudo-</h2>
        </div>
        <div class="image filtered tinted" data-position="top left">
            <img src="images/do/do.png" alt="" class="hidden-moviel" />
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('SpotlighComponent.vue')
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