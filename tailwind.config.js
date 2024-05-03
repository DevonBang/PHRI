/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/home.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

