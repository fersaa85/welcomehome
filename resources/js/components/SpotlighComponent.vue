<template>
    <!-- Panel (Spotlight) -->
    <section class="panel spotlight medium right">
        <div class="content span-7 content-top background-transparent">
            <h1 style="font-size: 7rem">{{ header }}</h1>
            <h1 class="major">{{ title }}</h1>
            <template v-if="text">
                <p v-html="text"></p>
            </template>
            <template v-if="items.length">
                <ul>
                    <li v-for="(item, index) in items">
                        {{ item.message }}
                    </li>
                </ul>
            </template>
        </div>
        <div class="image filtered tinted" data-position="top left">
            <img src="images/background.png" alt="" />
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