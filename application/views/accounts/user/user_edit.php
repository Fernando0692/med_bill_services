<?php
    $this->load->view('header');
?>
<nav class="purple">
    <div class="nav-wrapper">
        <ul class="right">
            <li><a href="<?php echo base_url('home/logout'); ?>"><i class="large material-icons">exit_to_app</i></a></li>
        </ul>
<?php
$this->load->view('navbar_home');
?>
<!-- This are a close to navbar from navbar_home -->
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Edit Account</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
	<div class="row">
		<div class="col s8 offset-s2 m8 offset-m2 card-panel">
            <?php
            foreach ($user_info as $user) :
            echo form_open('user/edit/'.$user->id_user);
            ?>
            <!-- <div class="row margin">
                <div class="input-field col s6 offset-s4">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Photo</span>
                            <input type="file" name="profile_img">
                        </div>
                    </div>
                </div>
            </div> -->
			<div class="row margin">
				<div class="input-field col s5 offset-s1">
                    <label for="fname">Name(s)</label>
                    <input id="fname" name="fname" type="text" value="<?php echo $user->fname; ?>" />
                    <?php echo form_error('fname'); ?>
                </div>
				<div class="input-field col s5">
                    <label for="lname">Last Name</label>
    				<input id="lname" name="lname" type="text" value="<?php echo $user->lname; ?>" />
    				<?php echo form_error('lname'); ?>
                </div>
				<div class="input-field col s5 offset-s1">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="validate" value="<?php echo $user->email; ?>" />
					<?php echo form_error('email'); ?>
				</div>
				<div class="input-field col s5">
                    <select name="profile">
                        <option value="<?php echo $user->profile; ?>" disabled selected><?php echo $user->profile; ?></option>
                        <option value="Administrator">Administrator</option>
                        <option value="Medical">Medical</option>
                        <option value="Dentist">Dentist</option>
                        <option value="User">Simple User</option>
                    </select>
                    <?php echo form_error('profile'); ?>
				</div>
				<div class="input-field col s5 offset-s1 m10 offset-m1">
					<label for="username">Username</label>
					<input id="username" name="username" type="text" value="<?php echo $user->username; ?>" />
					<?php echo form_error('username'); ?>
				</div>
				<div class="input-field col s10 offset-s1 m10 offset-m1">
                    <label for="password">Password</label>
    				<input id="password" name="password" type="password" />
    				<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>
				<div class="input-field col s10 offset-s1 m10 offset-m1">
                    <label for="subject">Confirm Password</label>
    				<input class="form-control" name="cpassword" type="password" />
    				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
				</div>
			</div>
			<div class="row margin right" style="padding: 0.5rem">
				<a type="button" name="cancel" class="btn waves-effect waves-light red" href="<?= base_url('user'); ?>">Cancel</a>
				<!-- <a type="button" name="save" class="btn waves-effect waves-light blue" href="<?= base_url('user/edit'); ?>">Save</a> -->
				<button type="submit" name="save" class="btn waves-effect waves-light blue">Save</button>
			</div>
			<?php
            endforeach;
			echo form_close();
			echo $this->session->flashdata('msg');
			?>
		</div>
	</div>
</div>
