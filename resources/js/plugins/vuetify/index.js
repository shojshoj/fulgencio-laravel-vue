import "vuetify/styles"
import "@mdi/font/css/materialdesignicons.css"
import { createVuetify } from "vuetify"

import colors from 'vuetify/lib/util/colors'

const customLightTheme = {
  dark: false,
  colors: {
    header: colors.grey.darken4,
    subheader: colors.grey.darken2,
    body: colors.grey.darken4,
    primary: '#00BFFF',
    secondary: '#FFD700',
    accent: colors.yellow.accent3,
    error: colors.red.accent3,
    info: colors.blue.accent4,
    success: colors.green.accent3,
    warning: colors.amber.base,
    background: '#F5F5F5',
  }
}

const customDarkTheme = {
  dark: true,
  colors: {
    header: '#FFFFFF',
    subheader: colors.grey.lighten3,
    body: '#FFFFFF',
    primary: '#00FF00',
    secondary: '#00FFFF',
    accent: colors.yellow.lighten2,
    error: colors.red.accent2,
    info: colors.blue.lighten1,
    success: colors.green.lighten3,
    warning: colors.amber.darken2,
    background: '#000000',
  },
};

export default createVuetify({
  theme: {
    defaultTheme: "customLightTheme",
    themes: {
      customLightTheme,
      customDarkTheme
    },
  },
});