<template>
 <div class="flex items-center flex-shrink-0 px-6">
        <a href="" @click="home"><span></span>User Manegerment</a>
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