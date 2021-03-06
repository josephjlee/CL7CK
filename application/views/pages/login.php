<div class="container text-center">
	<div class="card mt-5 w-75 mx-auto text-left mb-5">
		<div class="card-header">
			<h1 class="">Login</h1>
		</div>
		<div class="card-body">
		
		<?php if($this->session->flashdata('incorrect')) : ?>
			<div class="alert alert-danger" role="alert">
  				<?php echo $this->session->flashdata('incorrect'); ?>
			</div>
		<?php endif ?>
		
		<?php if($this->session->flashdata('registered')) : ?>
			<div class="alert alert-success" role="alert">
  				<?php echo $this->session->flashdata('registered'); ?>
			</div>
		<?php endif ?>

			<form action="users/login" method="post" name="userinput">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>
				<div class="text-right">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
		<div class="card-footer text-muted text-center">
			Don't have an account? <a href="<?php echo base_url(); ?>signup">Sign up!</a>
		</div>
	</div>
</div>