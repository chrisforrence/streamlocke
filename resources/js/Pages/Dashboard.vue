<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <Pokemon name="Charizard" nickname="Pyra" primary="Fire" secondary="Flying" />
                            <Pokemon name="Chansey" nickname="Needarez" primary="Normal" />
                            <Pokemon name="Chansey" nickname="Needarez" primary="Bug" secondary="Poison" />
                            <Pokemon name="Chansey" nickname="Needarez" primary="Dark" />
                            <Pokemon name="Chansey" nickname="Needarez" primary="Water" secondary="Ice" />
                            <Pokemon name="Chansey" nickname="Needarez" primary="Psychic" secondary="Dragon" />
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Pokemon from '@/Components/Overlay/Pokemon';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Pokemon,
    },
}
</script>
