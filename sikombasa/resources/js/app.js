/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all.js');
require('admin-lte');

require('alpinejs');

import swal from 'sweetalert2';
window.Swal = swal;



require('./bootstrap');

window.Vue = require('vue');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const app = new Vue({
    el: '#app'
});