<template>
   <nav class="px-3 mt-6">
          <div class="space-y-1">
 
             
         
            <a v-for="item in navigation" :key="item.name" :href="item.href"  :class="[item.current ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50', 'group flex items-center px-2 py-2 text-sm font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
              <component :is="item.icon" :class="[current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
              {{ item.name }}
            </a>
  

          </div>
          <div class="mt-8">
         
            <!-- Secondary navigation -->
              <a v-for="item in Navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50', 'group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
                      <component  :class="[current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
                      {{ item.name }}
                    </a>
                
            <br>
          
          </div>
            
        </nav>
        
     
</template>

<script setup>
import { ref } from 'vue'

import { ClockIcon, HomeIcon, LockClosedIcon, MenuAlt1Icon, PencilAltIcon, UserCircleIcon, UserGroupIcon, UserIcon, ViewListIcon, XIcon } from '@heroicons/vue/outline'



const navigation = [
  {   name: 'Home', 
      href: '/admin/dasboard', 
      icon: HomeIcon,  
  },
  { name: 'User', href: '/admin/user', icon: UserIcon, },
   { name: 'Function', href: '/admin/function', icon: PencilAltIcon,},
    { name: 'Role', href: '/admin/role', icon: LockClosedIcon, },
    { name: 'Group', href: '/admin/group',  icon: UserGroupIcon, },
  
]


const current = ref(true)
</script>