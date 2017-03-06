<template>

	<div>
	<my-product
		v-for="product in products"
		:product="product">
	</my-product>
	</div>

</template>

<script>

	import Product from './Product.vue'

	export default {
		components: {
			'my-product': Product
		},
		data() {
			return {
				products: []
			}
		},
		created() {
			this.$http.get('api/products')
				.then(response => {
					this.products = response.body
				})
		}
	}

</script>

<style>
	
</style>