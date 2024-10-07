import { createRouter, createWebHistory } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
// import About from './components/About.vue'
import Docs from './components/docs/Docs.vue'
import RouterDoc from './components/docs/Router.vue'

const routes = [
  { path: '/', component: HelloWorld, props: { msg: 'Vite + Vue' } },
  // { path: '/about', component: About, props: { msg: 'Hello!' }  },
  {
    path: '/docs',
    component: Docs,
    children: [
      {
        path: 'router',
        component: RouterDoc
      }
    ]
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router