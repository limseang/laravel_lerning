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
import funtion from './views/funtion.vue'
import role from './views/role.vue'
import addRole from './views/add_role.vue'
import addgroup from './views/add_group.vue'
import add_function from './views/add_function.vue'
import viewuser from './views/components/viewuser.vue'
import editfnt from './views/edit_fnt.vue'
import group from './views/group.vue'
import editrole from './views/edit_role.vue'
import editgroup from './views/edit_group.vue'
import deletefnt from './views/components/alert.vue'
import Daskboard from './views/daskboard.vue'


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

},
{
    path:'/admin/viewuser/:id',
    name:'viewuser',
    component: viewuser,
},
{
    path:'/admin/dasboard',
    name:'dasboard',
    component: Daskboard,
},
{
    path:'/admin/function',
    name: 'function',
    component: funtion,
},

{
    path:'/admin/add_function',
    name: 'add_function',
    component: add_function,

},
{
    path:'/admin/deletefnt/:id',
    name: 'deletefnt',
    component: deletefnt,

},
{
    path:'/admin/editfnt/:id',
    name: 'editfnt',
    component: editfnt,
},
{
    path:'/admin/role',
    name: 'role',
    component: role,
},
{
    path:'/admin/add_role',
    name: 'add_role',
    component: addRole,
},
{
    path:'/admin/editrole/:id',
    name: 'edit_role',
    component: editrole,
},
{
    path:'/admin/group',
    name: 'group',
    component: group,

},
{
    path:'/admin/add_group',
    name: 'add_group',
    component: addgroup,
},
{
    path:'/admin/edit_group/:id',
    name: 'edit_group',
    component: editgroup,
}


]