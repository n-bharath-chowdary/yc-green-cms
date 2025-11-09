import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#baffc1ff',      // background
                textbase: '#0c520cff',     // secondary text
                heading: '#052d00ff',      // headings
                header: '#004c10c3',       // navbar/footer
                card: '#38a246ff',         // cards
                accent: '#00670aff',       // bg animation & hover
                button: '#547d45ff',       // CTA buttons
                hover: '#000000ff',        // button hover
                link: '#0c4e10ff',         // anchor links
            },
        },
    },

    plugins: [forms],
};
