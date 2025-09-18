/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: [
    "./**/*.php", // All PHP files
    "./templates/**/*.php",
    "./assets/js/**/*.js",
    "./**/*.html", // All HTML files
    "./**/*.js", // All JS files
    "./*.php", // Root PHP files
    // Add specific template files if needed:
    // './header.php',
    // './footer.php',
    // './page.php',
    // './single.php',
  ],
  theme: {
    extend: {
      // Add custom colors, fonts, etc. here
      colors: {
        primary: "#34413A",
        secondary: "#d54e21",
        "Primary-Green": {
          50: "#F7F8F7",
          100: "#D5DAD8",
          200: "#B7C0BB",
          300: "#97A49D",
          400: "#77887F",
          500: "#576C61",
          600: "#46564E",
          700: "#34413A",
          800: "#232B27",
          900: "#111613",
        },
      },
    },
  },
  plugins: [],
};
