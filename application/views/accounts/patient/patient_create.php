<?php
    $this->load->view('header');
?>
<nav class="red">
    <div class="nav-wrapper">
        <ul class="right">
            <li><a href="<?php echo base_url('home/logout'); ?>"><i class="large material-icons">exit_to_app</i></a></li>
        </ul>
<?php
$this->load->view('navbar_home');
?>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Create New Patient</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
	<div class="row">
		<div class="col s12 offset-s2 m12 card-panel">
            <?php
            $attributes = array(
                'name' => "patientform"
            );
            echo form_open('patient', $attributes);
            ?>
			<div class="row margin col s12">
				<div class="input-field col s4">
                    <label for="fname">First Name</label>
                    <input id="fname" name="fname" type="text" value="<?php echo set_value('fname'); ?>" />
                    <?php echo form_error('fname'); ?>
                </div>
				<div class="input-field col s4">
                    <label for="mname">Middle Name</label>
                    <input id="mname" name="mname" type="text" value="<?php echo set_value('mname'); ?>" />
                    <?php echo form_error('fname'); ?>
                </div>
				<div class="input-field col s4">
                    <label for="lname">Last Name</label>
    				<input id="lname" name="lname" type="text" value="<?php echo set_value('lname'); ?>" />
    				<?php echo form_error('lname'); ?>
                </div>
            </div>
			<div class="row margin col s12">
				<div class="input-field col s2">
                    <script>
                    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
                    </script>
                    <input name="bdate" type="date" class="datepicker" value="<?php echo set_value('bdate'); ?>" />
                    <?php echo form_error('bdate'); ?>
                </div>
				<div class="input-field col s4">
                </div>
				<div class="input-field col s4">
                </div>
            </div>
			<div class="row grid-example col s6 m6">
				<div class="input-field col s4">
                    <label for="fname">First Name</label>
                    <input id="fname" name="fname" type="text" value="<?php echo set_value('fname'); ?>" />
                    <?php echo form_error('fname'); ?>
                </div>
				<div class="input-field col s4">
                    <label for="mname">Middle Name</label>
                    <input id="mname" name="mname" type="text" value="<?php echo set_value('mname'); ?>" />
                    <?php echo form_error('fname'); ?>
                </div>
				<div class="input-field col s4">
                    <label for="lname">Last Name</label>
    				<input id="lname" name="lname" type="text" value="<?php echo set_value('lname'); ?>" />
    				<?php echo form_error('lname'); ?>
                </div>
            </div>
				<div class="input-field col s5 offset-s1">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" class="validate" value="<?php echo set_value('email'); ?>" />
					<?php echo form_error('email'); ?>
				</div>
				<div class="input-field col s5">
                    <select name="profile">
                        <option value="" disabled selected>Profile</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Medical">Medical</option>
                        <option value="Dentist">Dentist</option>
                    </select>
                    <?php echo form_error('profile'); ?>
				</div>
				<div class="input-field col s5 offset-s1 m10 offset-m1">
					<label for="username">Username</label>
					<input id="username" name="username" type="text" value="<?php echo set_value('username'); ?>" />
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
			<div class="row margin right" style="padding: 0.5rem">
				<button type="button" name="cancel" class="btn waves-effect waves-light red">Cancel</button>
				<button type="submit" name="create" class="btn waves-effect waves-light blue">Create</button>
			</div>
			<?php
			echo form_close();
			echo $this->session->flashdata('msg');
			?>
		</div>
	</div>
</div>
