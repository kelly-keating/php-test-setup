<script setup lang="ts">
  import { ref } from 'vue'
  import UserDisplay from './UserDisplay.vue'
  import Docs from './docs/Docs.vue';

  defineProps<{ msg: string }>()
  // defineProps({
  //   msg: String
  // })

  // TODO: default props 
  // interface Props {
  //   msg?: string
  //   labels?: string[]
  // }

  // const props = withDefaults(defineProps<Props>(), {
  //   msg: 'hello',
  //   labels: () => ['one', 'two']
  // })

  const count = ref(0)
</script>

<template>
  <div>
    <a href="https://vitejs.dev" target="_blank">
      <img src="/vite.svg" class="logo" alt="Vite logo" />
    </a>
    <a href="https://vuejs.org/" target="_blank">
      <img src="../assets/vue.svg" class="logo vue" alt="Vue logo" />
    </a>
  </div>
  <div>
    <h1>{{ msg }}</h1>
    <p class="read-the-docs">
      Check out
      <a href="https://vuejs.org/guide/quick-start.html#local" target="_blank"
        >create-vue</a
      >, the official Vue + Vite starter
    </p>

    <button type="button" @click="count++">count is {{ count }}</button>
  </div>
  
  <div class="center-card_container">
    <div class="center-card">
      <UserDisplay />
    </div>
  </div>

  <Docs />
</template>

<style scoped>
  .logo {
    height: 6em;
    padding: 1.5em;
    will-change: filter;
    transition: filter 300ms;
  }
  .logo:hover {
    filter: drop-shadow(0 0 2em #646cffaa);
  }
  .logo.vue:hover {
    filter: drop-shadow(0 0 2em #42b883aa);
  }

  .center-card {
    width: fit-content;
  }

  .center-card_container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .center-card_container li {
    text-align: left;
  }

  .read-the-docs {
    color: #888;
  }
</style>
