<template>
    <div id="ct" class="container">
        <div class="row justify-content-center">
             <div class="form col-md-12">
                 <div class="form-secondary">
                        <div v-if="err != ''">
                            <div class="col-md-4 alert alert-danger" role="alert">
                        {{ err }}
                        </div>
                     </div>
                     <form action="#"  v-on:submit.prevent="HandeSubmitEvent()" method="POST">
                        <div class="col-md-4">
                        <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" v-model="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" v-model="password" required>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                 </div>
             </div>
        </div>
    </div>
</template>

<script>

import { Agenda } from './Agenda';
import { mapActions, mapMutations } from 'vuex';
    export default {
       data() {
           return {
               email:'',
               password:'',
               err:'',
           }
       },

       methods:{
           ...mapActions('Login',['persisteJWT']),
           HandeSubmitEvent(){
               const email = this.email;
               const password = this.password;
               const data = {
                   email,
                   password,
               }
               this.persisteJWT(data);
               if(this.$store.state.Login.err){
                   this.err = this.$store.state.Login.err[0];

               }
           }
       }
    }
</script>
<style scoped>
   .form{
        height: 40vh;
       display: flex;
       flex-flow: column wrap;
        margin-left: 650px;
        margin-top: 150px;
       /* height: 40vh; */
   }

</style>

