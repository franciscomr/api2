<script>
export default ({
  name: 'DropDownLink',
  props: {
    href: {
      type: String,
      default: '#'
    }
  },
  methods: {
    routeUrl() {
      window.location.href = route(this.href)
    }
  }
})
</script>

<template>
  <div @click="routeUrl()" class="">
    <div class="rounded-md indent-8 p-2 text-slate-700 hover:bg-gray-100  cursor-pointer  text-sm tracking-wide">
      <slot />
    </div>
  </div>
</template>