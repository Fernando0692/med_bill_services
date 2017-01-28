<?php
    $this->load->view('header');
?>
<nav class="orange">
    <div class="nav-wrapper">
        <ul class="right">
            <li><a href="<?php echo base_url('home/logout'); ?>"><i class="large material-icons">exit_to_app</i></a></li>
        </ul>
<?php
$this->load->view('navbar_home');
?>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Create New Insurance</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
	<div class="row">
		<div class="col s12 m12 card-panel">
            <?php
            $attributes = array(
                'name' => "insuranceform"
            );
            echo form_open('insurance/insurance_insert', $attributes);
            ?>
            <span class="card-title">
                <h5>Insurance Info</h5>
            </span>
			<div class="row margin col s12">
				<div class="input-field col s12">
                    <label for="name">Name / Company</label>
                    <input id="name" name="name" type="text" value="<?php echo set_value('name'); ?>" />
                    <?php echo form_error('name'); ?>
                </div>
            </div>
			<div class="row margin col s12">
                <div class="input-field col s3">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="text" class="phone" value="<?php echo set_value('phone'); ?>" />
                    <?php echo form_error('phone'); ?>
                </div>
                <div class="input-field col s3">
                    <label for="phone_2">Phone 2</label>
                    <input id="phone_2" name="phone_2" type="text" class="phone" value="<?php echo set_value('phone_2'); ?>" />
                    <?php echo form_error('phone_2'); ?>
                </div>
                <div class="input-field col s3">
                    <label for="fax">Fax</label>
                    <input id="fax" name="fax" type="text" class="phone" value="<?php echo set_value('fax'); ?>" />
                    <?php echo form_error('fax'); ?>
                </div>
            </div>
            <span class="card-title">
                <h5>Insurance Address Info</h5>
            </span>
			<div class="row margin col s12">
				<div class="input-field col s12">
                    <label for="street">Street</label>
                    <input id="street" name="street" type="text" value="<?php echo set_value('street'); ?>" />
                    <?php echo form_error('street'); ?>
                </div>
				<div class="input-field col s4">
                    <label for="city">City</label>
                    <input id="city" name="city" type="text" value="<?php echo set_value('city'); ?>" />
                    <?php echo form_error('city'); ?>
                </div>
				<div class="input-field col s2">
                    <select name="state">
                        <option value="" disabled selected>State</option>
                        <option value="AL">AL</option>
                        <option value="AK">AK</option>
                        <option value="AZ">AZ</option>
                        <option value="AR">AR</option>
                        <option value="CA">CA</option>
                        <option value="CO">CO</option>
                        <option value="CT">CT</option>
                        <option value="DE">DE</option>
                        <option value="FL">FL</option>
                        <option value="GA">GA</option>
                        <option value="HI">HI</option>
                        <option value="ID">ID</option>
                        <option value="IL">IL</option>
                        <option value="IN">IN</option>
                        <option value="IA">IA</option>
                        <option value="KS">KS</option>
                        <option value="KY">KY</option>
                        <option value="LA">LA</option>
                        <option value="ME">ME</option>
                        <option value="MD">MD</option>
                        <option value="MA">MA</option>
                        <option value="MI">MI</option>
                        <option value="MN">MN</option>
                        <option value="MS">MS</option>
                        <option value="MO">MO</option>
                        <option value="MT">MT</option>
                        <option value="NE">NE</option>
                        <option value="NV">NV</option>
                        <option value="NH">NH</option>
                        <option value="NJ">NJ</option>
                        <option value="NM">NM</option>
                        <option value="NY">NY</option>
                        <option value="NC">NC</option>
                        <option value="ND">ND</option>
                        <option value="OH">OH</option>
                        <option value="OK">OK</option>
                        <option value="OR">OR</option>
                        <option value="PA">PA</option>
                        <option value="RI">RI</option>
                        <option value="SC">SC</option>
                        <option value="SD">SD</option>
                        <option value="TN">TN</option>
                        <option value="TX">TX</option>
                        <option value="UT">UT</option>
                        <option value="VT">VT</option>
                        <option value="VA">VA</option>
                        <option value="WA">WA</option>
                        <option value="WV">WV</option>
                        <option value="WI">WI</option>
                        <option value="WY">WY</option>
                    </select>
    				<?php echo form_error('state'); ?>
                </div>
                <div class="input-field col s3">
                    <label for="zip_code">Zip Code</label>
                    <input id="zip_code" name="zip_code" type="text" value="<?php echo set_value('zip_code'); ?>" />
                    <?php echo form_error('zip_code'); ?>
                </div>
            </div>
			<div class="row margin right" style="padding: 0.5rem">
                <a type="button" name="cancel" class="btn waves-effect waves-light red" href="<? echo base_url('insurance'); ?>">Cancel</a>
				<button type="submit" name="create" class="btn waves-effect waves-light blue">Create</button>
			</div>
			<?php
			echo form_close();
			echo $this->session->flashdata('msg');
			?>
		</div>
	</div>
</div>
