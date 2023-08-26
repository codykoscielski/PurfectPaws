/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'soft-cream': '#FDF7E9',
        'pastel-orange': '#FFC18A',
        'muted-coral': '#F77B6E',
        'dusty-teal': '#75A8A5',
        'light-grey': '#C0C0C0'
      },
      fontFamily: {
        'amatic': ['Amatic SC', 'cursive'],
        'poppins': ['Poppins', 'sans-serif']
      },
      padding: {
        '10p': '10%'
      },
      maxWidth: {
        'section': '850px'
      },
      height: {
        'calc': 'calc(100vh - 370px)'
      }
    },
  },
  plugins: [],
}

/** npx tailwindcss -i ./public/css/style.css -o ./public/css/output.css --watch */