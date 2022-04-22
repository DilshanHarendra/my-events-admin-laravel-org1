const defaultTheme = require('tailwindcss/defaultTheme');
const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{

                myprimary: '#ea3f37', // primary color
                mysecondary:'#eceff1',
                mycolor1:'#2F3A48',
                sidebarlink:'#99A1BC',



            }

        },


    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
