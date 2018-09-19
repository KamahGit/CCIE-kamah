<template>
<div class="login-area">
  <div class="row">
      <div class="signup-panel">
        <div class="head-title">
          <p>Login here:</p>
        </div>
        <div class="login-form">
          <form>
          <p class="welcome"> Enter the fields correctly</p>
            <div class="row collapse">
              <div class="small-12  columns">
                <input v-model="user.username" type="text" placeholder="Enter your email address here">
              </div>
            </div>
            <div class="row collapse">
              <div class="small-12 columns ">
                <input v-model="user.password" type="password" placeholder="Enter password here">
              </div>
            </div>
          </form>
          <button v-on:click="getUser()" class="button ">Sign in </button>
           <p>Don't have account? <router-link to = "/signup">Got to sign up</router-link></p>
           
        </div>
      </div>
   </div>
  </div>
</template>

<script>

import Vue from 'vue';
import VueResource from 'vue-resource';

//creating other the components

export default {
  data () {
    return {
      user:
      {
          username: null,
          password: null
      }
    
    }
  },
  methods: {
    getUser () 
    {
      //login function goes here
      this.http.get('https://vuetesting-c9c05.firebaseio.com/data.json', (data) => {
            this.quote = data;
          }).error((err) => console.log(err))

    }
  },
  mounted () {

  }
}
</script>

<style> 
.head-title
{
  margin: 30px auto 5px auto;
  color: #006633;
}
.signup-panel
{
  margin: 100px auto 40px auto;
   width: 30%;
}
.login-form
{
  border: 1px solid #cacaca;
   padding: 20px;
   background-color: #fff;
}
</style>
