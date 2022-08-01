import { LoginIcon } from '@vue-hero-icons/outline'
import User from './views/User.vue'
import Login from './views/login/login.vue'
import Teamlist from './views/team/team.vue'
import About from './views/about/about.vue'
import Welcome from './views/welcome/welcome.vue'
import Signup from './views/signup/signup.vue'
import adduser from '../views/adduser/adduser.vue'
import add from './views/add/add.vue'
import edituser from './views/components/edituser.vue'


export default [

    {
    path:'/admin/user',
    name:'admin.user',
    component: User,

    

    
},
{
   path:'/admin/login',
    name:'admin.login',
    component: Login,
},
{
    path:'/admin/team/',
    name:'admin.team',
    component: Teamlist,
},

{
    path:'/admin/about',
    name:'admin.about',
    component: About,

},
{
    path:'/login',
    name:'login',
    component: Login,
},
{
    path:'/login/dologin',
    name:'login.dologin',
    component: Login,

},
{
    path:'/welcome',
    name:'welcome',
    component: Welcome,
},
{
    path:'/signup',
    name:'admin.signup',
    component: Signup,
},
{
    path:'/admin/adduser',
    name:'adduser',
    component: adduser,
},
{
    path:'/admin/add',
    name:'add',
    component: add,
},
{
    path:'/admin/edituser/:id',
    name:'edituser',
    component: edituser,

}


]