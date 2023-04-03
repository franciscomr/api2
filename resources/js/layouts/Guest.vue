<script>
export default {
  name: 'Guest'
}
</script>
<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-400 to-indigo-400">
    <div class="mx-auto h-screen w-full p-5">
      <div class="rounded-md bg-slate-50 min-h-full flex justify-center">
        <slot></slot>
      </div>
    </div>
  </div>
</template>