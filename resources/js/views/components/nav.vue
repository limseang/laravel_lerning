<template>
   <nav class="px-3 mt-6">
          <div class="space-y-1">
            <a v-for="item in navigation" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-200 text-gray-900' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-50', 'group flex items-center px-2 py-2 text-sm font-medium rounded-md']" :aria-current="item.current ? 'page' : undefined">
              <component :is="item.icon" :class="[item.current ? 'text-gray-500' : 'text-gray-400 group-hover:text-gray-500', 'mr-3 flex-shrink-0 h-6 w-6']" aria-hidden="true" />
              {{ item.name }}
            </a>
          </div>
          <div class="mt-8">
            <!-- Secondary navigation -->
           
            <br>
            <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
              <a v-for="team in teams"  @click="teams" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50">
                <span :class="[team.bgColorClass, 'w-2.5 h-2.5 mr-4 rounded-full']" aria-hidden="true" />
                <span class="truncate">
                  {{ team.name }}
                </span>
              </a>
            </div>
          </div>
        </nav>
        
     
</template>

<script>
import user from '../User.vue'
import { useRouter } from 'vue-router'
import { AdjustmentsIcon, ClockIcon, HomeIcon, MenuAlt1Icon, ViewListIcon, XIcon } from '@heroicons/vue/outline'
export default {
  name: 'Nav',

 }


    const teams = [
  { name: 'Engineering', href: '#', bgColorClass: 'bg-indigo-500' },
  { name: 'Human Resources', href: '#', bgColorClass: 'bg-green-500' },
  { name: 'Customer Success', href: '#', bgColorClass: 'bg-yellow-500' },
]
const router = useRouter()

function team() {

      router.push({
        name: 'team',
        path:'/admin/team/',
         
       
      })
    }


const navigation = [
  { name: 'Home', href: '#', icon: HomeIcon, current: true },
  { name: 'My tasks', href: '#', icon: ViewListIcon, current: false },
  { name: 'Recent', href: '#', icon: ClockIcon, current: false },
]
</script>