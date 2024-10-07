<script setup lang="ts">
import { ref } from 'vue'
import UserDisplay from './UserDisplay.vue'

defineProps<{ msg: string }>()

const count = ref(0)
</script>

<template>
  <h1>{{ msg }}</h1>
  <p class="read-the-docs">
    Check out
    <a href="https://vuejs.org/guide/quick-start.html#local" target="_blank"
      >create-vue</a
    >, the official Vue + Vite starter
  </p>

  <div class="card">
    <button type="button" @click="count++">count is {{ count }}</button>

    <UserDisplay />
  </div>

</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
