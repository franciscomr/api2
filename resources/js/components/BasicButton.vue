<script>
//import AlphaBCircleIcon from 'vue-material-design-icons/AlphaBCircle.vue';
export default {
  name: 'BasicButton',
  props: {
    label: {
      type: String,
      default: 'Submit'
    },
    appeal: {
      type: Boolean,
      default: true
    },
    use_icon: {
      type: Boolean,
      default: false
    },
    components: {
      //AlphaBCircleIcon
    }
  }
}
</script>
<template>
  <button class="rounded-md py-2 px-4" :class="appeal === true ? 'bg-white' : 'bg-blue-500'">
    <div class="flex items-center">
      <span v-show="use_icon" class="pr-0 sm:pr-2">
        <slot name="icon" />
      </span>
      <span class="hidden sm:block text-sm font-medium" :class="appeal === true ? 'text-slate-500' : 'text-white'">
        {{ label }}
      </span>
    </div>
  </button>
</template>