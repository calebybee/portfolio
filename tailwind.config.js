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
        animation: {
            blink: 'blink 1s infinite',
        },
        keyframes: {
            blink: {
                '50%': {opacity: 1},
                '100%':  {opacity: 0}
            }
        },
    },
  },
  plugins: [],
}

