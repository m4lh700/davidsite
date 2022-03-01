module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      colors: {
        'theme-black': '#161616',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
