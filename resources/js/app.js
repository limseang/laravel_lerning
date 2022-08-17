import {createApp} from 'vue'
import {createRouter, createWebHistory} from 'vue-router';
import routes from './routes';
import App from './App.vue'
import PrimeVue from 'primevue/config';
import TreeSelect from 'primevue/treeselect';
import 'primevue/resources/themes/saga-blue/theme.css'      
import 'primevue/resources/primevue.min.css'                 
import 'primeicons/primeicons.css'      
import { add } from 'lodash';
import Dialog from 'primevue/dialog';
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import Chips from 'primevue/chips';
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import 'primevue/resources/themes/tailwind-light/theme.css';

import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'




library.add(faUserSecret, fas, fab)

const app = createApp(App);

const router = createRouter({
    history: createWebHistory(),
    routes,
});



app.use(router);
app.use(PrimeVue);
app.component('font-awesome-icon', FontAwesomeIcon);
app.component('Chips',Chips);
app.component('Dialog', Dialog);
app.component('Button', Button);
app.component('InputText', InputText);
app.component('TreeSelect', TreeSelect);
app.mount('#main');
