/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    screens: {
      xs: {
        max: "394px",
      },
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    extend: {
      borderRadius: {
        "3xs": "10px",
      },
      fontFamily: {
        inter: ["Inter", "sans-serif"],
        urbanist: ["Urbanist", "sans-serif"],
      },
    },
  },
  plugins: [],
};
