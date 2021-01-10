require('./bootstrap');

window.Vue = require('vue');
import $ from 'jquery'

Vue.component('category-component', require('./components/CategoryComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('location-component', require('./components/LocationComponent.vue').default);

const app = new Vue({
    el: '#app',  
});

