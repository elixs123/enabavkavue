import Router from '@/router'
import { createApp } from 'vue/dist/vue.esm-bundler';

import { createStore } from 'vuex'

import authStore from './store/auth.js'

// Create a new store instance.
const store = createStore(
    {
        modules: {
            authStore: authStore
        }
    }
)

const app = createApp({})
app.use(Router)
app.use(store)
app.mount('#app')
