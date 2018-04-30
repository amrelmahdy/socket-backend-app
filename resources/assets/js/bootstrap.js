import Vue from 'vue';
import axios from 'axios';
import $ from 'jquery';
import VueRouter from 'vue-router';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


window.Vue = Vue;
window.axios = axios;
window.$ = $;

// here we use our router plugin
Vue.use(VueRouter);

Vue.use(BootstrapVue);


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
