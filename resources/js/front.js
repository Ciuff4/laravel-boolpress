window.Vue = require('vue');
window.axios=require('axios');
import AppComponent from './AppComponent.vue';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    render:h=>h(AppComponent),
});
