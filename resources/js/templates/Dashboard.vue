<script>
import MenuIcon from 'vue-material-design-icons/Menu.vue';
import BellIcon from 'vue-material-design-icons/Bell.vue';
import CloseIcon from 'vue-material-design-icons/Close.vue';
import AccountIcon from 'vue-material-design-icons/Account.vue';
import Authenticate from '../layouts/Authenticate.vue';
import Logo from '../components/Logo.vue';
import DropDown from '../components/DropDown.vue';
import DropDownLInk from '../components/DropDownLink.vue';
export default {
  name: 'Dashboard',
  props: {
    menu: {
      type: Object,
      default: {}
    }
  },
  components: {
    Authenticate,
    Logo,
    DropDown,
    DropDownLInk, MenuIcon, BellIcon, CloseIcon, AccountIcon
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
  <div>
    <Authenticate>
      <div class="w-full shadow-md flex">
        <div class="bg-white sm:w-72 hidden p-4 rounded-l-lg sm:block shrink-0 items-center overflow-y-auto">
          <div class="py-3">
            <!--   <Logo class="h-12 mx-auto" alt="logo" />   -->
          </div>
          <div class="py-3">
            <div v-for="usermenu in menu">
              <DropDown :icon="usermenu.icon" :title="usermenu.title">
                <template #content>
                  <div v-for="(link, index) in usermenu.menu" :key="index">
                    <DropDownLInk :title="index" :href="link" />
                  </div>
                </template>
              </DropDown>
            </div>
          </div>
        </div>

        <div v-show="list_mobile_expanded" id="mobile" class="block sm:hidden bg-white overflow-y-auto"
          :class="list_mobile_expanded ? 'fixed' : ''">
          <div class="py-3">
            <div v-for="usermenu in menu">
              <DropDown :icon="usermenu.icon" :title="usermenu.title">
                <template #content>
                  <div v-for="(link, index) in usermenu.menu" :key="index">
                    <DropDownLInk :title="index" :href="link" />
                  </div>
                </template>
              </DropDown>
            </div>
          </div>
        </div>

        <div class="bg-slate-100 w-full p-4 rounded-r-lg space-y-2 overflow-y-auto">
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
          <div class="w-full  p-3">
            <slot name="content" />
          </div>
        </div>
      </div>
    </Authenticate>
  </div>
</template>