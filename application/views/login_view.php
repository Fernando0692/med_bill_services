<?php
$this->load->view('header');
$this->load->view('navbar');
?>
<div class="container" style="padding-top: 2rem">
	<div class="row">
		<div class="col s6 offset-s3 m4 offset-m4 card-panel">
			<?php
			$attributes = array(
				'name' => 'loginform'
			);
			echo form_open('login', $attributes);
			?>
			<div class="row margin">
				<div class="input-field col s10 offset-s1 m10 offset-m1">
					<label for="username">Username</label>
					<input id="username" name="username" type="text" value="<?php echo set_value('email'); ?>" />
					<?php echo form_error('username'); ?>
				</div>
				<div class="input-field col s10 offset-s1 m10 offset-m1">
					<label for="password">Password</label>
					<input id="password" name="password" type="password" value="<?php echo set_value('password'); ?>" />
					<?php echo form_error('password'); ?>
				</div>
			</div>
				<div class="row margin" style="padding: 0.5rem">
					<button id="btn-login" class="btn waves-effect waves-light right blue" type="submit" name="action">Sign In
						<i class="material-icons right">send</i>
					</button>
				</div>
				<?php echo form_close(); ?>
				<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
</div>
