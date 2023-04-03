<script>
import ChevronDownIcon from 'vue-material-design-icons/ChevronDown.vue';
export default {
  name: 'DropDown',
  components: {
    ChevronDownIcon
  },
  data() {
    return {
      list_expanded: false
    }
  }
}
</script>

<template>
  <ul @click="list_expanded = !list_expanded">
    <li class="p-2 cursor-pointer hover:bg-gray-100 rounded-md">
      <div class="flex items-center">
        <span>
          <slot name="icon" />
        </span>
        <span class="text-md font-semibold tracking-wide text-slate-500 w-full px-2">
          <slot name="label" />
        </span>
        <span class="flex justify-end ">
          <chevron-down-icon :size=20 fillColor="#64748b" :class="!list_expanded ? '' : 'rotate-180'" />
        </span>
      </div>
    </li>
    <div v-show="list_expanded">
      <slot name="content" />
    </div>
  </ul>
</template>
