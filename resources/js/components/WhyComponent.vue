<template>
    <!-- Panel (Spotlight) -->
    <section class="panel spotlight medium left background-purple height-moviel">
        <div class="content span-8 content-top background-transparent text-center">
            <h1 class="header">{{ header }}</h1>
            <h2 class="major bg-white">¿por qué trabajar con <br class="display-moviel"/>Welcome Home?</h2>

            <h2>¿por qué no?</h2>
            <p>Hace falta un apapacho comercial que te haga sentir como en casa.<br />
                Nuestra cultura de trabajo se centra en la observación, en encontrar <br />
             insights y usuarios que respondan a estimulos; esto permitira poner <br class="display-moviel"/>los  <br />
             cimientos para construir experiencias y momentos poderosos <br class="display-moviel"/>en una <br />
             policultura conectada.</p>
            <p></p>
        </div>
        <div class="image filtered tinted hidden-moviel" data-position="top left">
            <img src="images/why/bg-why.png" alt="" />
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