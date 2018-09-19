<template>

	<div>
		<header-section></header-section>
		<div class="body-area">
			<router-view></router-view>
		</div>
		<footer-section></footer-section>
	</div>

</template>

<script>

	import Vue from 'vue'
	import VueResource from 'vue-resource'
	import Router from 'vue-router'
	import header from 'components/index-header';
	import footer from 'components/footer';
	import signin from 'components/signin';

	//creating other the components
	Vue.component('header-section', header);
	Vue.component('footer-section', footer);

	Vue.use(VueResource)
	Vue.use(Router)

	export default new Router(
		{
			
		});
	
</script>

<style>

	.body-area
	{

	}


</style>