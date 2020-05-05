require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
import routes from './routes';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';


Vue.use(ElementUI, { locale });
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product', require('./components/Product/Product.vue').default);
Vue.component('product-list', require('./components/Product/ProductList.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#app',
    router
});