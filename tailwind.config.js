/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
}

/** npx tailwindcss -i ./public/css/style.css -o ./public/css/output.css --watch */