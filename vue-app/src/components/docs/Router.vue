<script setup>
  import CodeDisplay from '../utils/CodeDisplay.vue';
</script>

<template>
  <h2>Vue Router</h2>
<div class="doc-content">
  <h3>Basic setup</h3>

  <CodeDisplay>
    npm install vue-router
  </CodeDisplay>

  <h4>src/router.ts</h4>
  <CodeDisplay>
    import { createRouter, createWebHistory } from 'vue-router'
    import Home from './components/Home.vue'
    import About from './components/About.vue'
    import Contact from './components/Contact.vue'

    const routes = [
      { path: '/', component: Home },
      { path: '/about', component: About },
      { path: '/contact', component: Contact }
    ]

    const router = createRouter({
      history: createWebHistory(),
      routes
    })

    export default router
  </CodeDisplay>

  <h4>src/main.ts</h4>
  <CodeDisplay>
    import { createApp } from 'vue'
    import App from './App.vue'
    import router from './router'
    
    const app = createApp(App)
    app.use(router)
    app.mount('#app')
  </CodeDisplay>
  
  <h4>Links</h4>
  <CodeDisplay>
    &lt;template&gt;
      &lt;div id="app"&gt;
        &lt;nav&gt;
          &lt;router-link to="/"&gt;Home&lt;/router-link&gt; |
          &lt;router-link to="/about"&gt;About&lt;/router-link&gt; |
          &lt;router-link to="/contact"&gt;Contact&lt;/router-link&gt;
        &lt;/nav&gt;
        &lt;router-view&gt;&lt;/router-view&gt;
      &lt;/div&gt;
    &lt;/template&gt;
  </CodeDisplay>
  
  <h4>Outlets</h4>
  <h3>More stuff</h3>
  <h4>Nested Routes</h4>
  <h4>URL info - params & location</h4>
  <h4>Passing props - from View & routes</h4>
</div>
</template>

<script>
  export default {
    components: {
      CodeDisplay,
    },
  }
</script>
