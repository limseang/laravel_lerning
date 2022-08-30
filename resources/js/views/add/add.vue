
<template>

  <div class="min-h-full">
    <TransitionRoot as="template" :show="sidebarOpen">
      <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
        <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100" leave-to="opacity-0">
          <div class="fixed inset-0 bg-gray-600 bg-opacity-75" />
        </TransitionChild>

        <div class="fixed inset-0 flex z-40">
          <TransitionChild as="template" enter="transition ease-in-out duration-300 transform" enter-from="-translate-x-full" enter-to="translate-x-0" leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0" leave-to="-translate-x-full">
            <DialogPanel class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
              <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in-out duration-300" leave-from="opacity-100" leave-to="opacity-0">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                  <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="sidebarOpen = false">
                    <span class="sr-only">Close sidebar</span>
                    <XIcon class="h-6 w-6 text-white" aria-hidden="true" />
                  </button>
                </div>
              </TransitionChild>
            <Logo />
              <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="px-2">
                  <div class="space-y-1">
                    <nav class="px-3 mt-6" >
          <div class="space-y-1">
                 <Nav />
                  </div>
                  </nav>
                    <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50', 'group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                      <component :is="item.icon" :class="[item.current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                  </div>
                  <div class="mt-8">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="mobile-teams-headline">Teams</h3>
                    <div class="mt-1 space-y-1" role="group" aria-labelledby="mobile-teams-headline">
                      <a v-for="team in teams" :key="team.name" :href="team.href" class="group flex items-center px-3 py-2 text-base leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                        <span :class="[team.bgColorClass, 'w-2.5 h-2.5 mr-4 rounded-full']" aria-hidden="true" />
                        <span class="truncate">
                          {{ team.name }}
                        </span>
                      </a>
                    </div>
                  </div>
                </nav>
              </div>
            </DialogPanel>
          </TransitionChild>
          <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
          </div>
        </div>
      </Dialog>
    </TransitionRoot>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 lg:border-r lg:border-gray-200 lg:pt-5 lg:pb-4 lg:bg-gray-100">
   <Logo />
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="mt-6 h-0 flex-1 flex flex-col overflow-y-auto">
        <!-- User account dropdown -->
        <Menu as="div" class="px-3 relative inline-block text-left">
          <div>
            <MenuButton class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500">
              <span class="flex w-full justify-between items-center">
                <span class="flex min-w-0 items-center justify-between space-x-3">
                  <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="" />
                  <span class="flex-1 flex flex-col min-w-0">
                    <span class="text-gray-900 text-sm font-medium truncate">Jessy Schwarz</span>
                    <span class="text-gray-500 text-sm truncate">@jessyschwarz</span>
                  </span>
                </span>
                <SelectorIcon class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
              </span>
            </MenuButton>
          </div>
          <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
            <MenuItems class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none">
              <div class="py-1">
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">View profile</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Settings</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Notifications</a>
                </MenuItem>
              </div>
              <div class="py-1">
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Get desktop app</a>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Support</a>
                </MenuItem>
              </div>
              <div class="py-1">
                <MenuItem v-slot="{ active }">
                  <a href="/admin/login" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Logout</a>
                </MenuItem>
              </div>
            </MenuItems>
          </transition>
        </Menu>
        <!-- Sidebar Search -->
        <div class="px-3 mt-5">
          <label for="search" class="sr-only">Search</label>
          <div class="mt-1 relative rounded-md shadow-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none" aria-hidden="true">
              <SearchIcon class="mr-3 h-4 w-4 text-gray-400" aria-hidden="true" />
            </div>
            <input type="text" name="search" id="search" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-9 sm:text-sm border-gray-300 rounded-md" placeholder="Search" />
          </div>
          <Nav />
        </div>
        <!-- Navigation -->
      
      </div>
    </div>
    <!-- Main column -->
    <div class="lg:pl-64 flex flex-col">
      <!-- Search header -->
      <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
        <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden" @click="sidebarOpen = true">
          <span class="sr-only">Open sidebar</span>
          <MenuAlt1Icon class="h-6 w-6" aria-hidden="true" />
        </button>
        <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
          <div class="flex-1 flex">
            <form class="w-full flex md:ml-0" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                  <SearchIcon class="h-5 w-5" aria-hidden="true" />
                </div>
                <input id="search-field" name="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent focus:placeholder-gray-400 sm:text-sm" placeholder="Search" type="search" />
              </div>
            </form>
          </div>
          <div class="flex items-center">
            <!-- Profile dropdown -->
            <Menu as="div" class="ml-3 relative">
              <div>
                <MenuButton class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </MenuButton>
              </div>
              <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-200 focus:outline-none">
          
                  <div class="py-1">
                    <MenuItem v-slot="{ active }">
                      <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">Logout</a>
                    </MenuItem>
                  </div>
                </MenuItems>
              </transition>
            </Menu>
          </div>
        </div>
      </div>
      
      <Header />
      <main class="flex-1 ">
        <!-- Page title & actions -->
      
     
 
      
        <!-- Pinned projects -->
      


        <!-- Projects list (only on smallest breakpoint) -->
      

        <!-- Projects table (small breakpoint and up) -->
        <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
   

    <div class="mt-8 sm:mx-auto sm:w-full ">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      

      <!--signup form-->

        <form class="space-y-9 pl-9 pr-9 pt-9" action="" method="POST">
          <input type="hidden" name="_token" :value="csrf">

          <div>

            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
            <div class="mt-1">
              <input v-model="form.name" id="name" name="name" type="name" autocomplete='name' required="name"
                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>
          </div>
          <div>


            <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
            <div class="mt-1">
              <input v-model="form.email" id="email" name="email" type="email" autocomplete="email" required="email"
                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>
          </div>


          <div>
            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
            <div class="mt-1">
              <input id="password" name="password" type="password" autocomplete="current-password"
                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                v-model="form.password" />
            </div>
          </div>
          <div>
            <label for="team" class="block text-sm font-medium text-gray-700"> Team </label>
            <select id="team" name="team" type="team" v-model="form.teams"
              class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
              <option>ABC</option>
              <option selected="">Cambodia</option>
              <option>Ancher</option>
            </select>
          </div>
          <div>

            
      
            <div class="space-x-2">
              <span class="px-3 py-2 bg-green-500 rounded text-white shadow-lg" v-for="item in nodeBinding" :key="item.id">{{item.name}} : {{item.permission}}</span>
            </div>
           
          </div>
          <div>
             <label for="permission" name="permission" class="block text-sm font-medium text-gray-700"> Functions </label>
            <div>
             <TreeSelect v-model="permission"  display="" selectionMode="checkbox"   :options="fnt" value></TreeSelect>
          </div>
          <div>
          </div>
          </div>
    <div class="space-x-2">
              <span class="px-3 py-2 bg-green-500 rounded text-white shadow-lg" v-for="item in nodeBindingRole" :key="item.id">{{item.name}} : {{item.permission2}}</span>
            </div>
          <div>
              <div>
             <label for="permission" name="permission" class="block text-sm font-medium text-gray-700"> Role </label>
            <div>
             <TreeSelect v-model="permission2"  display="" selectionMode="checkbox"   :options="role" value></TreeSelect>
          </div>
          <div>
          </div>
          </div>
          </div>
            <div class="space-x-2">
              <span class="px-3 py-2 bg-green-500 rounded text-white shadow-lg" v-for="item in nodeBindingGroup" :key="item.id">{{item.name}} : {{item.permission3}}</span>
            </div>
          <div>
             <label for="permission3" name="permission3" class="block text-sm font-medium text-gray-700"> Group </label>
            <div>
             <TreeSelect v-model="permission3"  display="" selectionMode="checkbox"   :options="group" value></TreeSelect>
          </div>
          <div>
          </div>
          </div>

          <div>
            <button @click="handleSubmit" type="submit"
            
              class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
            <p>

            </p>

          </div>

        </form>

      
      </div>
    </div>
  </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref,reactive,computed, onMounted } from 'vue'
import axios from 'axios'
import {
  Dialog,
  DialogPanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,

} from '@headlessui/vue'

import { ClockIcon, HomeIcon, MenuAlt1Icon, ViewListIcon, XIcon } from '@heroicons/vue/outline'

import { ChevronRightIcon, DotsVerticalIcon, SearchIcon, SelectorIcon } from '@heroicons/vue/solid'


import Logo from '../components/logo.vue'
import Nav from '../components/nav.vue'

import Header from '../components/header.vue'


const navigation = [
  { name: 'Home', href: '#', icon: HomeIcon, current: true },
  { name: 'My tasks', href: '#', icon: ViewListIcon, current: false },
  { name: 'Recent', href: '#', icon: ClockIcon, current: false },
]


const teams = [
  { name: 'Engineering', href: '#', bgColorClass: 'bg-indigo-500' },
  { name: 'Human Resources', href: '#', bgColorClass: 'bg-green-500' },
  { name: 'Customer Success', href: '#', bgColorClass: 'bg-yellow-500' },
]



const fnt = ref([]);
const role = ref([]);
const permission = ref([]);
const permission2 = ref([]);
const permission3 = ref([]);

const group = ref([]);
const form = reactive({
  
  name: '',
  email: '',
  password: '',
  teams:'',
  
})
const getgroup = () => {
  axios.get('/back-end/grouplist').then(res => {
   group.value = res.data.group;
  })
}
const getfnt = () => {
  axios.get('/back-end/fnt2').then(res => {
   fnt.value = res.data.fnt;
  })
}

//get role
const getrole = () => {
  axios.get('/back-end/role2').then(res => {
   role.value = res.data.role;
  })
}




const nodeBinding = computed(() => {
  let results = [];
  fnt.value.forEach(parent => {
    let permissions = '';
    let func = null;
    parent.children.forEach((child,index) => {
      if(Object.keys(permission.value).includes(child.key)) {
        permissions = permissions + (index !=0 ? "#"+child.label : child.label);
        func = {id: parent.key, name: parent.label, permission: permissions};
      }
    });
    results.push(func);
  })
  return results.filter(item => item != null);
}
)
const nodeBindingRole = computed(() => {
  let results = [];
  role.value.forEach(parent => {
    let permissions2 = '';
    let func2 = null;
    parent.children.forEach((child,index) => {
      if(Object.keys(permission2.value).includes(child.key)) {
        permissions2 = permissions2 + (index !=0 ? "#"+child.label : child.label);
        func2 = {id: parent.key, name: parent.label, permission2: permissions2};
      }
    });
    results.push(func2);
  })
  return results.filter(item => item != null);
}
)
const nodeBindingGroup = computed(() => {
  let results = [];
  group.value.forEach(parent => {
    let permissions3 = '';
    let func3 = null;
    parent.children.forEach((child,index) => {
      if(Object.keys(permission3.value).includes(child.key)) {
        permissions3 = permissions3 + (index !=0 ? "#"+child.label : child.label);
        func3 = {id: parent.key, name: parent.label, permission3: permissions3};
      }
    });
    results.push(func3);
  })
  return results.filter(item => item != null);
}
)

  onMounted(() => {
  getfnt(),
  getrole(),
 
  getgroup()
})

const sidebarOpen = ref(false)


const handleSubmit = (e) => {  
  e.preventDefault()
 axios.post('/register', {
  name: form.name,
  email: form.email,
  team: permission3.value.join(':'),
  team: form.teams
 })
  .then(function (response) {
   alert("Successfully registered");
  })
  .catch(function (error) {
    console.log(error);
  });


}

</script>
<style scoped>
.p-treeselect {
  width: 100%;
 height: 47px;
}

</style>