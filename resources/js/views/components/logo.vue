<template>
 <div class="flex items-center flex-shrink-0 px-6">
        <a href="" @click="home"><img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-purple-500-mark-gray-700-text.svg" alt="Workflow" /></a>
      </div>
      

</template>

<script setup>
import { useRouter } from 'vue-router'
const router = useRouter()

function home(e) {
  e.preventDefault()

      router.push({
        name: 'admin.user',
       
      })
    }

</script>