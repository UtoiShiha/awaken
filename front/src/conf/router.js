import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/src/Hello.vue'
Vue.use(Router)
// 1. ルートコンポーネントを定義します
// 他のファイルからインポートすることもできます
const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

const baseUrl = '/awaken/'

export default new Router({
  mode: 'history',  
  base: baseUrl,
  routes: [
    {
      path: '/',
      name: 'home',
      component:Hello
    },
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar }
  ]
});
