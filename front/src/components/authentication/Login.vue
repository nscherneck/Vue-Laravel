<template>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
						<input 
							v-model="email"
							class="form-control"
							type="email"
							placeholder="Email">
					</div>					
					<div class="form-group">
						<input 
							v-model="password"
							class="form-control"
							type="password"
							placeholder="Password">
					</div>
					<button @click="login" class="btn btn-success pull-right">
					Login
					</button>
				</div>
			</div>
		</div>
	</div> <!-- end of row -->
</template>

<script>
	export default {
		data() {
			return {
				email: '',
				password: ''
			}
		},
		methods: {
			login() {
				var data = {
					client_id: 2,
					client_secret: '9lhuTpOx5JMJFi2oid9RJ3pDDdR5qN6QQ32r5OrJ',
					grant_type: 'password',
					username: this.email,
					password: this.password
				}

				this.$http.post("oauth/token", data)
					.then(response => {
						this.$auth.setToken(response.body.access_token, response.body.expires_in + Date.now())
						// redirect user to Feed page
						this.$router.push('/feed')
					}) 
			}
		}
	}
</script>

<style>
	
</style>