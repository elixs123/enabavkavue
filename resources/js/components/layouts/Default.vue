<template>
    <div>
        <main class="mt-3">
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
import {mapActions} from 'vuex'
export default {
    name:"default-layout",
    data(){
        return {
           // user:this.$store.state.auth.user
        }
    },
    methods:{
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