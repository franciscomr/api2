<script>
export default {
  name: 'Logo',
  props: {
    src: {
      type: String,
      default: 'images/logo.png',
    },
  }
}
</script>

<template>
  <img :src="src" />
</template>