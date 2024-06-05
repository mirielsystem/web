import { defaultTheme } from '@vuepress/theme-default'
import { viteBundler } from '@vuepress/bundler-vite'

export default {
  lang: 'ja-JP',
  title: 'Miriel Systems',
  description: 'Welcome to Miriel Systems',
  head: [
    ['link', { rel: 'icon', href: '/favicon.ico' }]
  ],
  theme: defaultTheme({
    navbar: [
      { text: 'ホーム', link: '/' },
      { text: 'ブログ', link: '/blog' }
    ]
  }),
  bundler: viteBundler(),
}
