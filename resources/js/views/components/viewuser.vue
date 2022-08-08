
<template>



 <!-- This example requires Tailwind CSS v2.0+ -->

  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">Applicant Information</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
    </div>
    <div class="border-t border-gray-200">
      <dl >
      
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Name</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{name}}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Email</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{email}}</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">team</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{team}}</dd>
        </div>
    
  
       
      </dl>
    </div>
  </div>



</template>

<script setup>
import axios from 'axios'
import { PaperClipIcon } from '@heroicons/vue/solid'
import { ref, onMounted} from 'vue'
import { useRouter, useRoute } from 'vue-router'
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


import Header from '../components/header.vue'

import Logo from './logo.vue'
import Nav from './nav.vue'

const email = ref('');
const name = ref('');
const team = ref('');

const navigation = [
  { name: 'Home', href: '#', icon: HomeIcon, current: true },
  { name: 'My tasks', href: '#', icon: ViewListIcon, current: false },
  { name: 'Recent', href: '#', icon: ClockIcon, current: false },
]

const route = useRoute()

const teams = [
  { name: 'Engineering', href: '#', bgColorClass: 'bg-indigo-500' },
  { name: 'Human Resources', href: '#', bgColorClass: 'bg-green-500' },
  { name: 'Customer Success', href: '#', bgColorClass: 'bg-yellow-500' },
]
const seang = [
  {
    firstname: 'seang',
    lastname: 'lim',
   
  }
]
const users = ref([]);
const projects = [
  {
    id: 1,
    title: 'GraphQL API',
    initials: 'GA',
    team: 'Engineering',
    members: [
      {
        name: 'Dries Vincent',
        handle: 'driesvincent',
        imageUrl:
          'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Lindsay Walton',
        handle: 'lindsaywalton',
        imageUrl:
          'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Courtney Henry',
        handle: 'courtneyhenry',
        imageUrl:
          'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
      {
        name: 'Tom Cook',
        handle: 'tomcook',
        imageUrl:
          'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
      },
    ],
    totalMembers: 12,
    lastUpdated: 'March 17, 2020',
    pinned: true,
    bgColorClass: 'bg-pink-600',
  },
  // More projects...
]


const getData = () => {
  axios.get(`/user/${route.params.id}`).then(res => {
 
   email.value = res.data.email;
    name.value = res.data.name;
    team.value = res.data.team;
    console.log(res.data);
    
   
   
  })
}




//edit user with id

const edit = async (e) => {
    e.preventDefault()
   axios.post(`/edit/user/${route.params.id}` ,{
    
    email: email.value,
    name: name.value,
    team: team.value,
    password: route.params.password,

   }).then((response) => {
               return alert ('User updated')
            }).catch((error) => {
               return response.error
            });

}

const sidebarOpen = ref(false)


onMounted(() => {
  getData(),
  edit()

  
})


</script>