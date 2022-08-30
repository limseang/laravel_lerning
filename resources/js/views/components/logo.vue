<template>
 <div class="flex items-center flex-shrink-0 px-6">
        <a href="" @click="home"><img src="/88.png"  alt=""><span  class="pl-8  tracking-tight font-bold text-gray-900  sm:tracking-tight">User Manegerment</span></a>
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