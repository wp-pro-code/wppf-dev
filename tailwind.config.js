/**
 * @link #1 https://tailwindcss.com/docs/installation
 * @link #2 https://tailwind-elements.com/docs/standard/getting-started/quick-start/
 * @link #3 https://www.ripple-ui.com/docs/get-started/installation
 * @link #4 https://www.material-tailwind.com/docs/html/installation
 * @link #5 https://tailwindcss.com/docs/typography-plugin
 * @link #6 https://flowbite.com/docs/getting-started/quickstart/
 * @link #7 https://github.com/davidhellmann/tailwindcss-fluid-type
 */

/** @type {import('tailwindcss').Config} */
const withMT = require("@material-tailwind/html/utils/withMT");

module.exports = withMT({
  content: [
    '**/*.{html,php}',
    './node_modules/tw-elements/dist/js/**/*.js',
    './node_modules/flowbite/**/*.js'
  ],
  corePlugins: {
    preflight: true,
    fontSize: true, // #7 tailwindcss-fluid-type.
  },
  important: true,
  prefix: '',
  safelist: [
  ],

  /* The theme section is where you define the color palette, fonts, type scale,
   * border sizes, breakpoints, anything related to the visual design of the site.
   */
  theme: {
    extend: {
      fontFamily: {
        system_ui: ["system-ui", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "sans-serif"],
        menlo: ["Hack", "Fira Code", "Consolas", "Menlo", "Monaco", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", "Courier New", "Courier", "monospace",
        ],
      },
      colors: {
        'brand-blue': {
          100: '#779dda',
          200: '#638ed5',
          300: '#5a87d2',
          400: '#4f80cf',
          500: '#4a7cce',
          DEFAULT: '#3b71ca',
          700: '#3265b9',
          800: '#2d5aa5',
          900: '#274f91',
        },
      },
      listStyleType: {
        'lower-alpha': 'lower-alpha',
        'lower-roman': 'lower-roman',
      },
      fontSize: {
        'xxs': '0.875rem',
      },
    },
  },
  plugins: [
    require('tw-elements/dist/plugin.cjs'), // #2 tailwind-elements.
    require('rippleui'),                    // #3 ripple-ui.
    require('@tailwindcss/typography'),     // #5 typography-plugin.
    require('flowbite/plugin'),             // #6 flowbite.
    require('tailwindcss-fluid-type'),      // #7 tailwindcss-fluid-type. https://github.com/davidhellmann/tailwindcss-fluid-type#default-configuration
  ],
  variants: {
    fluidType: ['responsive']
  }
});
