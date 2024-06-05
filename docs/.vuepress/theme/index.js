import { path } from '@vuepress/utils'
import { defaultTheme } from '@vuepress/theme-default'

export default {
  ...defaultTheme(),
  layouts: {
    Layout: path.resolve(__dirname, 'Layout.vue')
  }
}
