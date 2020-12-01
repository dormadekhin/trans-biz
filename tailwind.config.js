const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
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
		        'blue': {
			        '50': '#EBF5FF',
			        '100': '#E1EFFF',
			        '200': '#C8E0FE',
			        '300': '#A5CAFD',
			        '400': '#79ACFB',
			        '500': '#4988F8',
			        '600': '#1F63EA',
			        '700': '#1C4BB5',
			        '800': '#1F3D89',
			        '900': '#243875',
		        },
	        },
	        boxShadow: theme => ({
		        outline: '0 0 0 2px ' + theme('colors.indigo.500'),
	        }),
	        fill: theme => theme('colors'),
        },
    },

    variants: {
	    fill: ['responsive', 'hover', 'focus', 'group-hover'],
	    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
	    zIndex: ['responsive', 'focus'],
    },

    plugins: [require('@tailwindcss/ui')],
};
