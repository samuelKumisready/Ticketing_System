/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        Color_red: '#ff5858',
        nav_bg: '#2986CC',
        nav_hover: '#18507A',
        hero_bg_color: '#CACDCC',
        custom_purple_color: '#6259ca',
      },
    height:{
      custom_height: '600px',
      listboxheight: '480px',
      imageHeigt: '500px',
      underline: '0.15px',
      customImageHeight: '660px',
   
    },
    width:{
      straightline: '0.15px',
    },
    padding:{
      custom_padding: '89px'
    },
    margin :{
      custommx1: '135px'
     
    }
  
    },
   
    container: {
      center: true,
      padding: {
        default: 50,
        md: 50
      }
    }
  },
  plugins: [],
}

