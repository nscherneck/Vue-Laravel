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
					<button class="btn btn-success pull-right">
					Login
					</button>
				</div>
			</div>
		</div>
	</div> <!-- end of row -->
</template>

<script>
	
</script>

<style>
	
</style>