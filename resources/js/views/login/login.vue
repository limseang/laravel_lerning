
<template>
 
  <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
    
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900"> Login your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
      
       
      </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="" method="POST">
        <input type="hidden" name="_token" :value="csrf">
      
         <div>

        
            <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
            <div class="mt-1">
              <input v-model="email" id="email" name="email" type="email" autocomplete="email" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
            <div class="mt-1">
              <input v-model="password" id="password" name="password" type="password" autocomplete="current-password" required="" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
            </div>
          </div>


       
          <div>
            <button @click="handleSubmit" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign in</button>
            
            <p>
            
            
            </p>
            
          </div>

         <div>
         
        <a href="/signup" class="relative inline-flex items-center justify-center p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out rounded-full shadow-xl group hover:ring-1 hover:ring-purple-500">
<span class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-600 via-purple-600 to-pink-700"></span>
<span class="absolute bottom-0 right-0 block w-64 h-64 mb-32 mr-4 transition duration-500 origin-bottom-left transform rotate-45 translate-x-24 bg-pink-500 rounded-full opacity-30 group-hover:rotate-90 ease"></span>
<span class="relative text-white">Signup</span>
</a>
         </div>
         
        </form>

      
      </div>
    </div>
  </div>
</template>

<script >
import axios from 'axios'
import { ref,onMounted } from 'vue'

export default {
  // `setup` is a special hook dedicated for composition API.
  setup() {
    const csrf = ref('')
    
onMounted(() => {
  csrf.value = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
})

    return {

      csrf,
      form:{
      
        email:'',
        password:''
      },
      erors:[]
    }
  },
  methods: {
        handleSubmit(e) {
            e.preventDefault()
           {
             axios.post('/login', {
              name:this.name,
                        email: this.email,
                        password: this.password
                    })
                        .then(response => {
                            console.log(response.data)
                            if (response.data.success) {
                               window.location.href = "/admin/dasboard"
                            } else {
                                this.error = response.data.message
                            }
                        })
            }
        }
    },
    


}
</script>
