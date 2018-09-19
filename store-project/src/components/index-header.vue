<template>
  <!-- Medium-Up Navigation -->
  <nav class="top-bar" id="nav-menu">
    <!-- Left Nav Section -->
    <div class="top-bar-left">
      <ul class="vertical medium-horizontal menu">
      <li class="brand-name">The Store</li>
      </ul>
     
    </div>
    <!-- Right Nav Section -->
    <div class="top-bar-right">
      <ul class="vertical medium-horizontal menu">
        <li style="border-left: 1px solid #eef;border-top: 1px solid #eef; border-right: 1px solid #eef;"><router-link to="/">Login</router-link></li>
        <li style="border-top: 1px solid #eef; border-right: 1px solid #eef;"><router-link to="/signup">Signup</router-link></li>
        <li style="border-top: 1px solid #eef; border-right: 1px solid #eef;"><router-link to="/home">Dashboard</router-link></li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'header'
  
}
</script>
<style>
  .title-bar 
  {
    padding: 20px 10px 5px 20px; 
  }

  .title-bar-title 
  {
    position: relative;
    top: 10px; 
  }
  .body-area
  {

  }
  .welcome
  {
    color: #006633;
    font-family: tahoma;
    font-size: large;
  }

  /* Medium-Up Navigation */
  @media only screen and (min-width: 40rem) 
  {

    
      .logo-wrapper .logo 
      {
        width: 118px;
        height: 92px;
        position: absolute;
        left: 50%;
        right: 50%;
        top: -6px;
        margin-left: -59px; 
      }

    .top-bar-right 
    {
      width: 50%;
      padding-left: 86px; 
    }
      .top-bar-right ul 
      {
        float: left;
        margin-right: 40px; 
      }
      .top-bar-right ul li a
        {
          color: #006622;
        }
        .top-bar-right ul li a:hover
        {
          background-color: #006622;
          color: #fff;
        }

    .top-bar-left 
    {
      width: 50%;
      padding-right: 86px; 
    }

      .top-bar-left ul 
      {
        float: right; 
        margin-left: 40px;
      }
      .top-bar-left ul li a
        {
          color: #006622;
        }
        .top-bar-left ul li a:hover
        {
          background-color: #006622;
          color: #fff;
        }
    .brand-name
    {
      font-family: tahoma;
      font-size: large;
      color: #006611;
      font-weight: lighter;
      padding-right: 40px;
    }

  }
</style>
