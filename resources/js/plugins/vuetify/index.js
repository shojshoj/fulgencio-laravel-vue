import "vuetify/styles"
import "@mdi/font/css/materialdesignicons.css"
import { createVuetify } from "vuetify"

import colors from 'vuetify/lib/util/colors'

const customLightTheme = {
  dark: false,
  colors: {
    primary: colors.green.darken1,
    secondary: colors.lightGreen.base,
    accent: colors.yellow.accent3,
    error: colors.red.accent3,
    info: colors.blue.accent4,
    success: colors.green.accent3,
    warning: colors.amber.base,
    background: colors.green.lighten5,
  }
}

const customDarkTheme = {
  dark: true,
  colors: {
      primary: colors.green.darken2,
      secondary: colors.lightGreen.lighten3,
      accent: colors.yellow.lighten2,
      error: colors.red.accent2,
      info: colors.blue.lighten1,
      success: colors.green.lighten3,
      warning: colors.amber.darken2,
      background: colors.green.darken3,
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