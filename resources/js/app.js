require('./bootstrap');

window.Vue = require('vue');
import $ from 'jquery'
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

Vue.component('category-component', require('./components/CategoryComponent.vue').default);
Vue.component('product-component', require('./components/ProductComponent.vue').default);
Vue.component('location-component', require('./components/LocationComponent.vue').default);
Vue.component('productcategory-component', require('./components/ProductCategoryComponent.vue').default);
Vue.component('cronograma-component', require('./components/CronogramaComponent.vue').default);


const app = new Vue({
    el: '#app',  
});

