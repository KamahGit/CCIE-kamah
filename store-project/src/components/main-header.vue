<template>
  <!-- Medium-Up Navigation -->
  <nav class="top-bar" id="nav-menu">
    <!-- Left Nav Section -->
    <div class="top-bar-left">
      <ul class="vertical medium-horizontal menu">
      <li class="brand-name">The Store</li>
        <li style="border-left: 1px ridge #eef; border-right: 1px ridge #eef; border-top: 1px ridge #eef;"><router-link to="/">Dashboard</router-link></li>
        <li style="border-right: 1px ridge #eef; border-top: 1px ridge #eef;"><router-link to="/">Store</router-link></li>
        <li style="border-right: 1px ridge #eef; border-top: 1px ridge #eef;"><router-link to="/">The-Cart</router-link></li>
      </ul>
     
    </div>
    <!-- Right Nav Section -->
    <div class="top-bar-right">
      <ul class="vertical medium-horizontal menu">
        <li><a href="#">My Account</a></li>
        <li><router-link to="/">Logout</router-link></li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'mainheader'
  
}
</script>

