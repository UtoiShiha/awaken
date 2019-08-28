import Vue from 'vue';
import Router from 'vue-router';
import App from './src/App.vue';
import router from './src/conf/router.js';

Vue.use(Router);

new Vue({
    router,
    render: h => h(App),
  }).$mount('#app')