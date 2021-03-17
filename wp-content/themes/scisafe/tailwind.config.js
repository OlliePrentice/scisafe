const plugin = require('tailwindcss/plugin');

module.exports = {
  purge: {
    content: [
      './*.php',
      './template-parts/**/*.php',
      './classes/**/*.php',
      './inc/**/*.php',
      './assets/**/*.scss',
      './assets/**/*.js',
    ],
  },
  darkMode: false,
  theme: {
    extend: {
      colors: {
        'primary': 'var(--color-primary)',
        'secondary': 'var(--color-secondary)',
        'tertiary': 'var(--color-tertiary)',
        'quaternary': 'var(--color-quaternary)',
        'quinary': 'var(--color-quinary)',
        'senary': 'var(--color-senary)',
        'off-white': 'var(--color-off-white)',
        'facebook': 'var(--color-facebook)',
        'twitter': 'var(--color-twitter)'
      },
      fontSize: {
        'zero': ['0', '0'],
        'sm':   ['0.938rem', '1.25rem'],
        'xxs':  ['.625rem', '1.125rem'],
        'lg':   ['1.063rem', '1.75rem'],
        'xxl':  ['1.375rem', '1.875rem'],
        '2xl':  ['1.563rem', '2rem'],
        '3xxl': ['2.188rem', '2.563rem'],
        '4xl':  ['2.5rem', '2.75rem'],
        '5xl':  ['3rem', '3.25rem'],
        '6xl':  ['3.438rem', '3.75rem'] 
      },
      fontFamily: {
        'display': ['"Raleway"', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
        'body': ['"Alegreya Sans"', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
      },
      screens: {
        '2xl': '1340px',
      },
      container: {
        padding: {
          DEFAULT: '1rem',
        }
      },
    },
  },
  variants: {
    extend: {
      display: ['important'],
      inset: ['important'],
      width: ['important'],
      margin: ['last'],
      borderColor: ['important'],
      textColor: ['important']
    },
  },
  plugins: [
    plugin(function({ addVariant }) {
      addVariant('important', ({ container }) => {
        container.walkRules(rule => {
          rule.selector = `.\\!${rule.selector.slice(1)}`;
          rule.walkDecls(decl => {
            decl.important = true
          })
        })
      })
    })
  ],
}
