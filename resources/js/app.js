require('./bootstrap');
require('alpinejs');

$(window).load(function() {
    jQuery("#load").fadeOut();
    jQuery("#loading").delay().fadeOut("");
});
// import Vue from 'vue';
// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
//     el: '#app'
// });