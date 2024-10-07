import { createApp, provide, h } from 'vue'
import { DefaultApolloClient } from '@vue/apollo-composable'
import { ApolloClient, InMemoryCache } from '@apollo/client'

import App from './App.vue'
import './style.css'

const apolloClient = new ApolloClient({
  uri: 'http://localhost:8000/graphql',
  cache:  new InMemoryCache(),
})

const app = createApp({
  setup () {
    provide(DefaultApolloClient, apolloClient)
  },

  render: () => h(App),
})

app.mount('#app')
