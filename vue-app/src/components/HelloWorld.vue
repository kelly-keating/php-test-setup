<script setup lang="ts">
import { ref } from 'vue'
import UserDisplay from './UserDisplay.vue'

defineProps<{ msg: string }>()

const count = ref(0)
</script>

<template>
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

  <div class="center-card">
    <h2>Main concepts</h2>

    <h3>React World</h3>
    <ol>
      <li>components</li>
      <li>props</li>
      <li>pages + routing</li>
      <li>state</li>
      <li>forms</li>
      <li>ext APIs</li>
      <li>db CRUD</li>
    </ol>
  </div>
  <div class="center-card">
    <h3>Vue World (suggested)</h3>
    <ol>
      <li>
        <h3>Vue Instance:</h3>
        Understand how the Vue instance (new Vue()) works and the main
        properties like data, methods, computed, and watch.
      </li>

      <li>
        <h3>Data Binding:</h3>
        Practice one-way ({{}}) and two-way binding with v-model for form
        inputs.
      </li>

      <li>
        <h3>Directives:</h3>
        Learn built-in directives like v-if, v-for, v-bind, v-on, and v-show.
      </li>

      <li>
        <h3>Methods and Event Handling:</h3>
        Work on adding methods in the Vue instance and handling user input or
        DOM events with v-on and methods.
      </li>

      <li>
        <h3>Computed Properties:</h3>
        Use computed properties for derived state or to perform expensive
        calculations that should only update when dependencies change.
      </li>

      <li>
        <h3>Watchers:</h3>
        Practice watchers to perform actions in response to changes in reactive
        data.
      </li>

      <li>
        <h3>Components:</h3>
        Build reusable Vue components and understand props, custom events,
        slots, and the component lifecycle.
      </li>

      <li>
        <h3>Vue Router:</h3>
        Learn how to set up client-side routing using vue-router for navigating
        between different views or pages.
      </li>

      <li>
        <h3>Vuex:</h3>
        Practice state management with Vuex by understanding actions, mutations,
        state, getters, and modules.
      </li>

      <li>
        <h3>Lifecycle Hooks:</h3>
        Get familiar with lifecycle hooks like mounted, created, updated, and
        destroyed to manage component behavior.
      </li>

      <li>
        <h3>Custom Directives:</h3>
        Learn to create and use custom directives for adding reusable DOM
        manipulations.
      </li>

      <li>
        <h3>Handling Forms:</h3>
        Master form handling, validation, and working with libraries like
        Vuelidate or Vue Formulate.
      </li>

      <li>
        <h3>Composition API (Optional):</h3>
        Explore Vue 3's Composition API, including setup(), ref, and reactive to
        manage state and logic in a more flexible way.
      </li>

      <li>
        <h3>Single File Components (SFCs):</h3>
        Practice organizing components using .vue files, with separate template,
        script, and style sections.
      </li>

      <li>
        <h3>Transitions & Animations:</h3>
        Add basic transitions to elements or components using Vue's transition
        system.
      </li>

      <li>
        <h3>Reactivity System:</h3>
        Understand how Vue's reactivity system works to update the DOM when data
        changes.
      </li>
    </ol>
  </div>

  </div>
</template>

<style scoped>
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
