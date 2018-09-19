<template>
  <!--the dashboard -->
  <div>
	  <mainheader-section></mainheader-section>
	  <div class="main-section">
	  	
	  </div>
	  <footer-section></footer-section>
  </div>
</template>

<script>
	import Vue from 'vue'
	import VueResource from 'vue-resource'
	import Router from 'vue-router'
	import mainheader from'components/main-header'
	import footer from'components/footer'

	//creating other the components

	Vue.component('mainheader-section', mainheader);
	Vue.component('footer-section', footer);

	export default 
	{
	  name: 'dashboard'
	}

</script>
<style>
	.main-section
	{

	}
</style>