<template>
  <pre class="code-display">
    <code v-pre>
      <slot></slot>
    </code>
  </pre>
</template>

<script>
  export default {
    name: 'CodeDisplay'
  }
</script>