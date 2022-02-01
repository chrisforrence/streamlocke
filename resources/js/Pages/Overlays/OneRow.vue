<template>
    <Head title="Nuzlocke Attempt" />

    <ul role="list" class="mt-3 grid grid-cols-6 gap-5 sm:gap-6">
        <Pokemon name="Charizard" nickname="Pyra" primary="Fire" secondary="Flying" />
        <Pokemon name="Chansey" nickname="Needarez" primary="Normal" />
        <Pokemon name="Chansey" nickname="Needarez" primary="Bug" secondary="Poison" />
        <Pokemon name="Chansey" nickname="Needarez" primary="Dark" />
        <Pokemon name="Chansey" nickname="Needarez" primary="Water" secondary="Ice" />
        <Pokemon name="Chansey" nickname="Needarez" primary="Psychic" secondary="Dragon" />
    </ul>
</template>

<script>
import OverlayLayout from '@/Layouts/Overlay.vue';
import Pokemon from '@/Components/Overlay/Pokemon.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    layout: OverlayLayout,

    components: {
        Pokemon,
        Head,
    },

    props: {
        status: String,
    },
}
</script>
