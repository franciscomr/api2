<script>
export default {
  name: 'Logo',
  props: {
    src: {
      type: String,
      default: window.location.origin + '/development/images/logo.png',
    },
  }
}
</script>

<template>
  <img :src="src" />
</template>