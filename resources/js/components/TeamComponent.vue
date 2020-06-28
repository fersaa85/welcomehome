<template>
    <!-- Panel (Spotlight) -->
    <section class="panel" id="team-moviel">
        <div class="team-moviel display-moviel">
            <a href="https://www.linkedin.com/in/faisy-omar-5694556b/"  target="_blank" class="linkedin in-faisy"></a>
            <a href="https://www.linkedin.com/in/jhanne-cruz-garc%C3%ADa-70553954/" target="_blank" class="linkedin in-jhanne"></a>
            <a href="https://www.linkedin.com/in/sandra-hernandez-pascacio-b8a926138/" target="_blank" class="linkedin in-sandra"></a>
            <a href="https://www.linkedin.com/in/luis-s%C3%A1nchez-538724107/" target="_blank" class="linkedin in-lucho"></a>
        </div>
        <div class="team hidden-moviel">
            <a href="https://www.linkedin.com/in/faisy-omar-5694556b/"  target="_blank" class="linkedin in-faisy"></a>
            <a href="https://www.linkedin.com/in/jhanne-cruz-garc%C3%ADa-70553954/" target="_blank" class="linkedin in-jhanne"></a>
            <a href="https://www.linkedin.com/in/sandra-hernandez-pascacio-b8a926138/" target="_blank" class="linkedin in-sandra"></a>
            <a href="https://www.linkedin.com/in/luis-s%C3%A1nchez-538724107/" target="_blank" class="linkedin in-lucho"></a>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('TeamCOmponent.vue')
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