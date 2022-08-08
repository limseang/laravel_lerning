<template>
    <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
      <!--User Table-->
      </div>
   
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle">
          <div class="overflow-hidden shadow-sm ring-1 ring-black ring-opacity-5">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr  >
               
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">ID</th>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">Name</th>
                
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                   <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Team</th>
                  
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 lg:pr-8">
                    <span class="sr-only">Edit</span>
                  </th>

                  
 
                </tr>
              </thead>
            
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr v-for="user in user" >
                 <td class="whitespace-nowrap px-9 py-4 text-sm text-gray-500">{{ user.id }}</td>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">{{ user.name }}</td>
                 
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ user.email }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ user.team }}</td>
                 
                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                    <a @click="edit(user.id)"  class="text-indigo-600 hover:text-indigo-900"
                      >Edit<span  class="sr-only"></span></a
                    >
                    
                  </td>

                       
                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                    <a @click="viewuser(user.id)"  class="text-indigo-600 hover:text-indigo-900"
                      >View Details </a
                    >
                    
                  </td>
                   <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 lg:pr-8">
                    <a href="" @click="deleteu(user.id)" class="text-indigo-600 hover:text-indigo-900"
                      >Delete<span class="sr-only"></span></a
                    >
                    
                  </td>
                </tr>
               
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script setup>
import axios from 'axios'
import { useRouter } from 'vue-router'
const user = ref([]);
const deleteu =(id)=>{
  axios.post(`/delete/user/${id}/`,{
    params:{
      id:id,
      
    }
  }).then(res=>{
    console.log(res)
  }).catch(err=>{
    console.log(err)
  })
}
const getData = () => {
  axios.get('/back-end/user').then(res => {
    user.value = res.data.user.data;
    pagination.value = res.data;
   
  })
}


function viewuser(iduser) {

      router.push({
        name: 'viewuser',
       params: {
          id:iduser,
        },
      })
    }

 

 

function edit(iduser) {
  console.log(iduser)
      router.push({
        name: 'edituser',
        params: {
          id:iduser,
        },
      })
    }

    onMounted(() => {
        getData();
    
    }),
</script>