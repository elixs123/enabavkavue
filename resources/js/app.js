import './bootstrap';
import '../sass/app.scss'
import * as bootstrap from 'bootstrap'

import Router from '@/router'
import { createApp } from 'vue/dist/vue.esm-bundler';


const app = createApp({})
app.use(Router)
app.mount('#app')