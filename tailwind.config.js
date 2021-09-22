module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false,
  theme: {
    colors: {
      brand: '#bf201d',
      brandHover: '#991B1B',
      light: '#f4f2f1',
      lightAccent: '#d67621',
      dark: '#34283e',
      darkAccent: '#b58b7f',
      primary: '#bf201d',
      info: '#33283e',
      success: '#6f8441',
      warning: '#ec7409',
      danger: '#f44336',
    },
    extend: {
      fontFamily: {
        'display': ['Oswald', 'sans-serif'],
        'body': ['Lato', 'serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
