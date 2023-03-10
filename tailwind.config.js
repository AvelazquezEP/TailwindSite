/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      textColor: {
        primary: "var(--color-text-primary)"
      },
      backgroundColor: {
        primary: "var(--color-bg-primary)"
      }
    },
  },
  plugins: [
    require("flowbite/plugin")
  ],
}
