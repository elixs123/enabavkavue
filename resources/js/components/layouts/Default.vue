<template>
        <router-view></router-view>
        <button @click="increment()">CLICK</button>
</template>
<script>
import {mapActions} from 'vuex'
import { mapState } from "vuex";
export default {
    name:"default-layout",
    computed: {
    ...mapState(["authStore"]),
  },
    data(){
        return {

        }
    },
    mounted(){
        console.log(this.$store.state.authStore)
    },
    methods:{
        increment() {
            this.$store.commit('authStore')
            console.log(this.$store.state.count)
        },
        ...mapActions({
            signOut:"auth/logout"
        }),
        async logout(){
            await axios.post('/api/logout').then(({data})=>{
                this.signOut()
                this.$router.push({name: 'login'})
            })
        }
    }
}
</script>
