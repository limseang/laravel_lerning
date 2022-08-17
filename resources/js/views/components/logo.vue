<template>
 <div class="flex items-center flex-shrink-0 px-6">
        <a href="" @click="home"><font-awesome-icon icon="fa-brands fa-angellist"  size="4x"  /><span></span>User Manegerment</a>
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