/** @type {DefaultColors} */
const colors = require('tailwindcss/colors')
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'main': '#001d3d',
            'accent': '#4cc9f0',
        },
    },
  },
  plugins: [],
}

