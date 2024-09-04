/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          primary: {
            DEFAULT: '#1D4ED8',
          },
        },
      },
    },
    plugins: [],
  }
