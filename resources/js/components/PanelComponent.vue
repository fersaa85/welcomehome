<template>
    <!-- Panel -->
    <section class="panel color1">
        <div class="intro joined">
            <h2 class="major">{{ title }}</h2>
            <ul>
                <li v-for="(item, index) in items">
                    {{ item.message }}
                </li>
            </ul>
            <p>{{ text }}</p>
        </div>
        <div class="inner">
            <ul class="grid-icons two connected">
                <li><span class="icon fa-gem"><span class="label">Lorem</span></span></li>
                <li><span class="icon solid fa-camera-retro"><span class="label">Ipsum</span></span></li>
                <li><span class="icon solid fa-paper-plane"><span class="label">Sit</span></span></li>
                <li><span class="icon solid fa-chart-bar"><span class="label">Amet</span></span></li>
            </ul>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log(items)
            console.log('PanelComponent.vue')
        },
        props: {
            title: String,
            text: String,
            items: {
                type: Array,
                required: true
            },
        }
    }
</script>