<template>
 <div class="flex items-center flex-shrink-0 px-6">
        <a href="" @click="home"><font-awesome-icon icon="fa-solid fa-user-secret  " size= "3x"/><span  class="pl-5  tracking-tight font-bold text-gray-900  sm:tracking-tight">User Manegerment</span></a>
      </div>
      

</template>

<script setup>
import { useRouter } from 'vue-router'
const router = useRouter()

function home(e) {
  e.preventDefault()

      router.push({
        name: 'dasboard',
       
      })
    }

</script>