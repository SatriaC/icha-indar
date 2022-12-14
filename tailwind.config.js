/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      maxWidth: {
        '1/2': '50%',
        '1/4': '25%',
      },
      fontFamily: {
        greatVibes: ["Great Vibes", "cursive"],
        inter: ["Inter", "sans-serif"],
        satisfy: ["Satisfy", "cursive"],
        quicksand : ["Quicksand", "sans-serif"],
        corsiva: ["Corsiva", "cursive"],
        malinda: ["Malinda"],
      },
      backgroundImage: {
        "cover_frame": "url('/assets/img/cover/frame.png')",
        "home_frame": "url('/assets/img/home/frame.png')",
        "event_bg": "url('/assets/img/event/bg.png')",
        "rsvp_bg": "url('/assets/img/rsvp/bg.png')",
        "gallery_bg": "url('/assets/img/gallery/bg.jpg')",
        "gallery_frame": "url('/assets/img/gallery/frame.png')",
        "paper": "url('/assets/img/paper-texture.png')",
      },
      colors: {
        'primary': '#C4D7C4',
        'secondary': '#767B68',
      },
      keyframes: {
        pulse2: {
          '0%, 100%': { transform: 'scale(0.8)' },
          '50%': { transform: 'scale(1)' },
        }
      },
      animation: {
        pulse2: 'pulse2 2s infinite',
      }
    },
  },
  plugins: [],
}
