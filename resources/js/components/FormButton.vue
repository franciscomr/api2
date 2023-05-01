<script>
export default {
  name: 'FormButton',
  props: {
    type: {
      type: String,
      default: 'submit'
    }
  }
}
</script>

<template>
  <button :type="type" class="border w-full rounded-md py-2 bg-blue-600 text-white">
    <slot />
  </button>
</template>