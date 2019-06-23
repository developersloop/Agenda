import Vue from 'vue'
import Router from 'vue-router'
import Login from '../components/Login.vue'
import Agenda from '../components/Agenda.vue';
Vue.use(Router)

const router =  new Router({
  mode: 'history',
  routes: [

    {
      path: '/',
      name: 'login',
      component: Login,
      meta : {
        guest: true
      }
    },
    {
        path: '/agenda',
        name: 'agenda',
        component: Agenda,
        meta : {
            requiresAuth: true
        }
      },

  ]

})

router.beforeEach((to, from, next) => {
  if(to.matched.some(record => record.meta.requiresAuth)) {
      if (localStorage.getItem('jwt-Auth') === null) {
          next({
              path: '/',
              params: { nextUrl: to.fullPath }

          })
      } else {
          next()
      }
  }
  else {
    next()
  }
})

export default router;
