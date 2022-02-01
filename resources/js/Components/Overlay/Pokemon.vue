<template>
    <li class="col-span-1 flex shadow-sm rounded-md">
    <div :class="[primaryClass, secondaryClass, 'bg-gradient-to-br flex-shrink-0 flex items-center justify-center w-16 rounded-l-md']">

    </div>

    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
          <div class="flex-1 px-4 py-2 text-sm truncate">
            <a class="text-gray-900 font-medium hover:text-gray-600">{{ nickname }}</a>
            <p>{{ name }}</p>
          </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        pokemon: {
            type: Object,
        },
        name: {
            type: String,
        },
        nickname: {
            type: String,
        },
        primary: {
            type: String,
        },
        secondary: {
            type: String,
        }
    },
    computed: {
        primaryClass () {
            switch (this.primary) {
                case 'Normal': return 'from-normal';
                case 'Fire': return 'from-fire';
                case 'Water': return 'from-water';
                case 'Grass': return 'from-grass';
                case 'Electric': return 'from-electric';
                case 'Ice': return 'from-ice';
                case 'Fighting': return 'from-fighting';
                case 'Poison': return 'from-poison';
                case 'Ground': return 'from-ground';
                case 'Flying': return 'from-flying';
                case 'Psychic': return 'from-psychic';
                case 'Bug': return 'from-bug';
                case 'Rock': return 'from-rock';
                case 'Ghost': return 'from-ghost';
                case 'Dragon': return 'from-dragon';
                case 'Steel': return 'from-steel';
                case 'Dark': return 'from-dark';
                case 'Fairy': return 'from-fairy';
                default: return null;
            }
        },
        secondaryClass () {
            switch (this.secondary || this.primary) {
                case 'Normal': return 'to-normal';
                case 'Fire': return 'to-fire';
                case 'Water': return 'to-water';
                case 'Grass': return 'to-grass';
                case 'Electric': return 'to-electric';
                case 'Ice': return 'to-ice';
                case 'Fighting': return 'to-fighting';
                case 'Poison': return 'to-poison';
                case 'Ground': return 'to-ground';
                case 'Flying': return 'to-flying';
                case 'Psychic': return 'to-psychic';
                case 'Bug': return 'to-bug';
                case 'Rock': return 'to-rock';
                case 'Ghost': return 'to-ghost';
                case 'Dragon': return 'to-dragon';
                case 'Steel': return 'to-steel';
                case 'Dark': return 'to-dark';
                case 'Fairy': return 'to-fairy';
                default: return null;
            }
        }
    }
}
</script>
