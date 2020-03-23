import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './assets/js/jquery-3.3.1.js'
import './assets/js/flexible640.min.js'
import './assets/css/public.css'
import './assets/css/animate.min.css'

import Vant from 'vant'
import 'vant/lib/index.css'
Vue.use(Vant)
import { Tab, Tabs } from 'vant';
Vue.use(Tab);
Vue.use(Tabs);
import { Divider } from 'vant';
Vue.use(Divider);

import axios from 'axios'
axios.defaults.baseURL = "http://m.gjw.com";
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
Vue.prototype.$http  = axios;

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
