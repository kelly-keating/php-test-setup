<template>
  <h2>Users</h2>
  <div v-if="loading">Loading...</div>
  <table v-if="!loading">
    <tr v-for="user in users" :key="user.id">
      <td>{{ user.name }}</td><td>{{ user.email }}</td>
    </tr>
  </table>
</template>

<script lang="ts">
  import { defineComponent, computed } from 'vue'
  import { gql } from '@apollo/client/core'
  import { useQuery } from '@vue/apollo-composable'

  const GET_USERS = gql`
    {
      users {
        id
        name
        email
      }
    }
  `

  export default defineComponent({
    setup() {
      const { result, loading, error } = useQuery(GET_USERS)
      
      const users = computed(() => result.value?.users ?? [])

      return {
        users,
        error,
        loading,
      }
    },
  })
</script>
