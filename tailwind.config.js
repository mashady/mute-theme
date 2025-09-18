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
    "./blocks/**/*.js",
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
        primary: "#0073aa",
        secondary: "#d54e21",
      },
      fontFamily: {
        inter: ["Inter", "sans-serif"],
        poppins: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
};
