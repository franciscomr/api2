<script>
import TrayArrowDownIcon from 'vue-material-design-icons/TrayArrowDown.vue';
import ArrowUpThinIcon from 'vue-material-design-icons/ArrowUpThin.vue';
import ArrowDownThinIcon from 'vue-material-design-icons/ArrowDownThin.vue';
import PlusIcon from 'vue-material-design-icons/Plus.vue';
import BasicButton from '../components/BasicButton.vue';
import search from '../functions/search.js';
import { ref, onMounted } from 'vue';
export default {
  name: 'DataTable',
  components: {
    TrayArrowDownIcon,
    PlusIcon,
    ArrowUpThinIcon,
    ArrowDownThinIcon,
    BasicButton
  },
  props: {
    basepath: {
      type: String
    },
    fields: {
      default: {}
    },
    type: {
      type: String
    }
  },
  setup(props) {
    const sortBy = ref('-id');
    const { fetch, dataRetrieval } = search();
    const searchRoute = ref('')
    const sort = (value) => {
      if (sortBy.value.startsWith('-')) {
        sortBy.value = sortBy.value.slice(1)
        if (value !== sortBy.value) {
          sortBy.value = value
        }

      } else {
        if (value === sortBy.value) {
          sortBy.value = '-' + value
        } else {
          sortBy.value = value
        }
      }
      fetch(searchRoute.value, sortBy.value);
    }
    const redirect = (resource) => {
      window.location.href = getRoute(props.basepath + '.' + resource);
    }
    onMounted(() => {
      searchRoute.value = getRoute(props.basepath + '.search');
      fetch(searchRoute.value, sortBy.value);
    });
    const getRoute = (url) => {
      return route(url);
    }

    return { fetch, dataRetrieval, sort, sortBy, redirect }
  }
}
</script>
<template>
  <div class="space-y-4">
    <div class="flex space-x-4 justify-end">
      <div class="">
        <input type="search" class="py-2 px-4 rounded-md bg-white" placeholder="Buscar">
      </div>
      <div>
        <BasicButton :label="'Exportar'" :use_icon="true">
          <template #icon>
            <tray-arrow-down-icon :size=24 fillColor="#64748b" />
          </template>
        </BasicButton>
      </div>

      <div>
        <BasicButton :label="'Nuevo'" :appeal="false" :use_icon="true" @click="redirect('create')">
          <template #icon>
            <plus-icon :size=24 fillColor="#fff" />
          </template>
        </BasicButton>
      </div>

    </div>
    <div class="bg-white overflow-x-auto p-3 rounded-lg">
      <table class="w-full text-sm text-left">
        <thead>
          <tr class="h-12">
            <th v-for="field in fields" :key="field.id" scope="col">
              <div @click="sort(field.name)" class="cursor-pointer flex items-center">
                <span class="flex">{{ field.label }}</span>
                <div v-if="field.name === sortBy || field.name === sortBy.slice(1)" class="">
                  <span v-if="field.name === sortBy">
                    <arrow-up-thin-icon :size=16 fillColor="#64748b" />
                  </span>
                  <span v-if="field.name === sortBy.slice(1)">
                    <arrow-down-thin-icon :size=16 fillColor="#64748b" />
                  </span>
                </div>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="h-12 text-md bg-white border-t hover:bg-gray-100" v-for="data in dataRetrieval" :key="data.index">
            <td v-for="field in fields" :key="field.id" class="px-1">
              <span class="text-slate-500">{{ data['attributes'][field.name] }}</span>
            </td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>