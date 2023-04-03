<script>
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import BookshelfIcon from 'vue-material-design-icons/Bookshelf.vue';
import MonitorCellphoneIcon from 'vue-material-design-icons/MonitorCellphone.vue';
import BellIcon from 'vue-material-design-icons/Bell.vue';
import CloseIcon from 'vue-material-design-icons/Close.vue';
import AccountIcon from 'vue-material-design-icons/Account.vue';
import Authenticated from '../layouts/Authenticated.vue';
import Logo from '../components/Logo.vue';
import DropDown from '../components/DropDown.vue';
import DropDownLInk from '../components/DropDownLink.vue';
import VariantDropDown from '../components/VariantDropDown.vue';
export default {
  name: 'Dashboard',
  components: {
    MenuIcon, BookshelfIcon, MonitorCellphoneIcon, BellIcon,
    AccountIcon, CloseIcon,
    Authenticated, Logo, DropDown, DropDownLInk, VariantDropDown
  },
  data() {
    return {
      list_mobile_expanded: false,
      user_drop_down: false
    }
  },
}
</script>
<template>
  <Authenticated>
    <div class=" w-full shadow-md flex">
      <div class="rounded-l-lg sm:block shrink-0 sm:w-64 hidden bg-white items-center p-4 overflow-y-auto">

        <div class="py-3">
          <Logo class="h-12 mx-auto" alt="logo" />
        </div>

        <div class="py-3">

          <DropDown>
            <template #icon>
              <bookshelf-icon :size=24 fillColor="#64748b" />
            </template>
            <template #label>
              Dashboard
            </template>
            <template #content>
              <DropDownLInk :href="'catalog.organizations.index'">
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
            </template>
          </DropDown>

          <DropDown>
            <template #icon>
              <bookshelf-icon :size=24 fillColor="#64748b" />
            </template>
            <template #label>
              Dashboard
            </template>
            <template #content>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
            </template>
          </DropDown>
        </div>
      </div>

      <div v-show="list_mobile_expanded" id="mobile" class="block sm:hidden bg-white overflow-y-auto"
        :class="list_mobile_expanded ? 'fixed' : ''">
        <div class="py-3">

          <DropDown>
            <template #icon>
              <bookshelf-icon :size=24 fillColor="#64748b" />
            </template>
            <template #label>
              Dashboard
            </template>
            <template #content>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
            </template>
          </DropDown>

          <DropDown>
            <template #icon>
              <bookshelf-icon :size=24 fillColor="#64748b" />
            </template>
            <template #label>
              Dashboard
            </template>
            <template #content>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Sucursales</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Departamentos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Puestos</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Personal</h1>
              </DropDownLInk>
              <DropDownLInk>
                <h1>Organizaciones</h1>
              </DropDownLInk>
            </template>
          </DropDown>
        </div>
      </div>

      <div class="rounded-r-lg  w-full bg-slate-100 p-4 space-y-2">
        <div class="flex w-full  justify-end px-2  space-x-3 ">
          <div class="cursor-pointer">
            <bell-icon :size=28 fillColor="#64748b" />
          </div>
          <div @click="user_drop_down = !user_drop_down" class="border border-slate-500 rounded-full cursor-pointer">
            <account-icon :size=28 fillColor="#64748b" />
          </div>
          <div v-show="!list_mobile_expanded" @click="list_mobile_expanded = !list_mobile_expanded"
            class="block sm:hidden cursor-pointer">
            <menu-icon :size=28 fillColor="#64748b" />
          </div>

          <div v-show="list_mobile_expanded" @click="list_mobile_expanded = !list_mobile_expanded"
            class="block sm:hidden cursor-pointer">
            <close-icon :size=28 fillColor="#64748b" />
          </div>
        </div>
        <div v-show="user_drop_down">
          <VariantDropDown class="top-16 right-5">
            <span class="text-sm font-semibold text-slate-500">Cerrar Sesión</span>
          </VariantDropDown>
        </div>
        <div class="w-full  p-3">
          <slot name="content" />
        </div>
      </div>
    </div>
  </Authenticated>
</template>