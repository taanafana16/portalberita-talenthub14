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
      'custom-light': '#E1ECC8',
      'custom-light-green' : '#AFC8AD',
      'custom-green' : '#88AB8E',
      'custom-dark-green' : '#4F6F52',
      'custom-dark-dark-green' : '#1C6758',
      'custom-footer' : '#83B582',
      'custom-color-text-table' : '#4F6F52',
    },},
  },
  plugins: [],
}