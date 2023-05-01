<script>
import CardIcon from 'vue-material-design-icons/card.vue';
import TrayArrowDownIcon from 'vue-material-design-icons/TrayArrowDown.vue';
import PlusIcon from 'vue-material-design-icons/Plus.vue';
import FilterOutlineIcon from 'vue-material-design-icons/FilterOutline.vue';

export default {
  name: 'BasicButton',
  props: {
    label: {
      type: String,
      default: 'Button'
    },
    type: {
      type: String,
      default: 'default'
    },
    icon: {
      type: String,
      default: 'card-icon'
    }
  },
  components: {
    CardIcon, TrayArrowDownIcon, PlusIcon, FilterOutlineIcon
  }
}
</script>
<template>
  <button class=" rounded-md py-2 px-4 text-white"
    :class="type === 'default' ? '!text-slate-500 bg-white ' : type === 'primary' ? 'bg-blue-500' : type === 'success' ? 'bg-green-500' : type === 'warning' ? 'bg-yellow-500' : 'bg-red-500'">
    <div class="flex items-center">
      <span class="pr-0 sm:pr-2">
        <component v-bind:is="icon" :fillColor="type === 'default' ? '#64748b' : '#fff'" :size=24></component>
      </span>
      <span class="hidden sm:block text-sm font-medium">
        {{ label }}
      </span>
    </div>
  </button>
</template>