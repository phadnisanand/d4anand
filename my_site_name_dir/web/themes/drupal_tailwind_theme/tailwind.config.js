/** @type {import('tailwindcss').Config} */
const daisyuiPlugin = require('daisyui')?.default || require('daisyui')

module.exports = {
  content: [
    "./templates/**/*.twig",
    "./components/**/*.twig",
    "./src/**/*.{js,css}",
    "./*.theme",
  ],
  safelist: [
    'btn',
    'btn-primary',
    'btn-secondary',
    'card',
    'alert',
    'badge',
    { pattern: /^btn-/ },
    { pattern: /^alert-/ },
    { pattern: /^badge-/ },
    { pattern: /^card-/ },
  ],
  theme: {
    extend: {},
  },
  plugins: [
    daisyuiPlugin,
  ],
  daisyui: {
    themes: ["light"],
  },
};
