
import Vue from 'vue'
import VueResource from 'vue-resource'
import VueFire from 'vueFire'
import Router from 'vue-router'
import index from 'components/index'
import signin from 'components/signin';
import signup from 'components/signup';
import dashboard from 'components/dashboard';

Vue.use(VueResource)
Vue.use(Router)
Vue.use(VueFire)

//setting up routing and matching routes to components

export default new Router(
{
  routes: [
    {
      path: '/',
      name: 'index',
      component: index,

      children:
      [
        {
          path: '/',
          name: 'signin',
          component: signin
        },
        {
          path: '/signup',
          name: 'signup',
          component: signup
        }
      ]
    },
    {
      path: '/home',
      name: 'dashboard',
      component: dashboard,

    }
  ]
})
