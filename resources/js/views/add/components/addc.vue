
<template>
 
  <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow" />
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900"> Signup your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
      
       
      </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="/login/dologin" method="POST">
        <input type="hidden" name="_token" :value="csrf">
      
         <a href="">aaa</a>

       
          <div>
            <button @click="handleSubmit" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign in</button>
            <p>
            
            </p>
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
        name:'',
        email:'',
        password:''
      },
      erors:[]
    }
  },
  methods: {
        handleSubmit(e) {
            e.preventDefault()
            axios.post('/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password
                    })
                        .then(response => {
                            if (response.data.success) {
                               alert('success')
                            } else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
        }
    },
}

</script>
