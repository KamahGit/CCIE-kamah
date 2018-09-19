<template>
<div class="login-area">
  <div class="row">
      <div class="signup-panel">
        <div class="head-title">
          <p>Signup here:</p>
        </div>
        <div class="head-title">
          <p></p>
        </div>
        <div class="login-form">
          <form>
          <p class="welcome"> Enter the fields correctly</p>
            <div class="row collapse">
              <div class="small-12  columns">
                <input v-model="user.username" type="text" placeholder="Enter your user name here">
              </div>
            </div>
            <div class="row collapse">
              <div class="small-12  columns">
                <input v-model="user.email" type="text" placeholder="Enter your email address here">
              </div>
            </div>
            <div class="row collapse">
              <div class="small-12 columns ">
                <input v-model="user.password" type="password" placeholder="Enter password here">
              </div>
            </div>
            <div class="row collapse">
              <div class="small-12 columns ">
                <input v-model="user.cpassword" type="password" placeholder="Confirm password here">
              </div>
            </div>
          </form>
          <a @click.prevent="signupUser" class="button ">Sign up </a>
           <p>Don't have account? <router-link to = "/">Go to signin</router-link></p>
        </div>
      </div>
   </div>
  </div>
</template>

<script>

import Vue from 'vue';
import VueResource from 'vue-resource';



export default {
  data () {
    return {

    	user: 
    	{
    		  username: null,
          email: null,
      		cpassword: null
    	}
      
    }
  },
  methods: {

    //signup function here
    signupUser () 
    {
        //post data to the database
        Vue.http.post('https://vuetesting-c9c05.firebaseio.com/data.json', this.user)
        .then(function (response) 
        {
        	console.log('success:', response.data);

          //get success responce


         }, function (error) {

           console.log('Please use correct details', response)
         })
    },

  },
  mounted () {

  }
}
</script>

<styles> 

</styles>
