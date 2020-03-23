import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import More from '../views/More.vue'
import Lucky from '../views/Lucky.vue'
import Shopping from '../views/Shopping.vue'
import Mine from '../views/Mine.vue'
import Login from '../views/Login.vue'
import Zhuce from '../views/Zhuce.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path:'/more',
    name:'More',
    component:More
  },
  {
    path:'/lucky',
    name:'Lucky',
    component:Lucky
  },
  {
    path:'/shopping',
    name:'Shopping',
    component:Shopping,
  },
  {
    path:'/mine',
    name:'Mine',
    component:Mine
  },
  {
    path:'/login',
    name:'Login',
    component:Login
  },
  {
    path:"/zhuce",
    name:"Zhuce",
    component:Zhuce
  }
]

const router = new VueRouter({
  routes
})

export default router
