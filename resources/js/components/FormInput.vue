<script>
export default {
  name: 'FormInput',
  props: {
    id: {
      type: String,
      default: 'id'
    },
    label: {
      type: String,
      default: 'label'
    },
    type: {
      type: String,
      default: 'text'
    },
    modelValue: {
      type: [String, Number],
      default: ''
    },
    message: {
    }
  }
}
</script>
<template>
  <div class="">
    <label class="block font-medium text-sm text-slate-600 pb-1" :for="id">
      {{ label }}
    </label>
    <input class="px-4 py-2 w-full rounded-md border" :id="id" :type="type" :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)">
    <div class="h-2">
      <div v-show="message">
        <p class="text-xs text-red-600 dark:text-red-400">
          {{ message }}
        </p>
      </div>
    </div>
  </div>
</template>