
require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import App from '../../resources/js/components/App.vue';
import router from '../js/router';
import  store  from './store';


/* eslint-disable no-new */

new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
