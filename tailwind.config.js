const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
               pagination: {
                // Customize the styles for the pagination links
                link: 'rounded-md px-3 py-1 bg-gray-200 text-gray-700 hover:bg-gray-300',
                activeLink: ' bg-orange-400 rounded-md px-3 py-1  text-white hover:bg-blue-600',
                disabledLink: 'rounded-md px-3 py-1 bg-gray-200 text-gray-500',
              },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],

        },
    },

    plugins: [
        require('@tailwindcss/forms')
    ],
};
