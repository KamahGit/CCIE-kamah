//calling the style sheets
require("./assets/css/foundation.css");
require("./assets/css/app.css");

//importing the components
import Vue from 'vue'
import App from './App'
import VueFire from 'vueFire'
import router from './router'


//creating the components

Vue.use(VueFire)

new Vue(
{
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})

