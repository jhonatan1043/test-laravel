require('./bootstrap');

window.Vue = require('vue');

Vue.component('category-component', require('./components/CategoryComponent.vue').default);

const app = new Vue({
    el: '#app',  
});

