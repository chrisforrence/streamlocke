const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                normal: "#A8A77A",
                fire: "#EE8130",
                water: "#6390F0",
                grass: "#7AC74C",
                electric: "#F7D02C",
                ice: "#96D9D6",
                fighting: "#C22E28",
                poison: "#A33EA1",
                ground: "#E2BF65",
                flying: "#A98FF3",
                psychic: "#F95587",
                bug: "#A6B91A",
                rock: "#B6A136",
                ghost: "#735797",
                dragon: "#6F35FC",
                steel: "#B7B7CE",
                dark: "#705746",
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        plugin(function ({ addUtilities, theme, variants, e }) {
            const colors = theme('colors')
            const widths = theme('borderWidth')
            const paints = {
                'fsm': 'fill stroke markers',
                'fms': 'fill markers stroke',
                'sfm': 'stroke fill markers',
                'smf': 'stroke markers fill',
                'mfs': 'markers fill stroke',
                'msf': 'markers stroke fill',
            }

            addUtilities(
                [
                    Object.entries(colors).map(([key, value]) => {
                        return {
                            [`.${e(`text-fill-${key}`)}`]: {
                                '-webkit-text-fill-color': `${value}`
                            },
                            [`.${e(`text-stroke-${key}`)}`]: {
                                '-webkit-text-stroke-color': `${value}`
                            }
                        }
                    }),
                    Object.entries(widths).map(([key, value]) => {
                        return {
                            [`.${e(`text-stroke-${key}`)}`]: {
                                '-webkit-text-stroke-width': `${value}`
                            }
                        }
                    }),
                    Object.entries(paints).map(([key, value]) => {
                        return {
                            [`.${e(`paint-${key}`)}`]: {
                                'paint-order': `${value}`
                            }
                        }
                    }),
                ]
            )
        })
    ],
};
