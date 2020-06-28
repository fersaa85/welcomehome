/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

window.Vue = require('vue');
Vue.use(VueAxios, axios)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('banner-component', require('./components/BannerComponent.vue').default);
Vue.component('spotligh-component', require('./components/SpotlighComponent.vue').default);
Vue.component('panel-component', require('./components/PanelComponent.vue').default);
Vue.component('gallery-component', require('./components/GalleryComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);
Vue.component('do-component', require('./components/DoComponent.vue').default);
Vue.component('events-component', require('./components/EventsComponent.vue').default);
Vue.component('exhibitions-component', require('./components/ExhibitionsComponents.vue').default);
Vue.component('activation-component', require('./components/ActivationComponent.vue').default);
Vue.component('display-component', require('./components/DisplayComponent.vue').default);
Vue.component('tech-component', require('./components/TechComponent.vue').default);
Vue.component('why-component', require('./components/WhyComponent.vue').default);
Vue.component('how-component', require('./components/HowComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);
Vue.component('businness-component', require('./components/BusinnessComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#page-wrapper',
});
