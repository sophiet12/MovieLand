/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');
var Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//Vue.component('posts-component', require('./components/ActorsComponent.vue'));
import postComponent from './components/ActorsComponent.vue';
import addPost from './components/addActor.vue';
import VueResource from 'vue-resource';
import BootstrapVue from 'bootstrap-vue'
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.use(VueResource);
Vue.use(BootstrapVue);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr("content");
const app = new Vue({
    el: '#app',
    components: {
        'posts-component':  postComponent,
        'add-post': addPost
    }
});
