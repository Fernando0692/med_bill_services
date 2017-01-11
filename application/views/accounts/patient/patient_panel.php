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
<!-- This are a close to navbar from navbar_home -->
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Patient</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
	<div class="row margin">
		<div class="col s12 offset-s0 m12 offset-m0 card-panel">
            HOLA MAMA!!
		</div>
	</div>
	<div class="row margin">
        <a type="button" class="btn right waves-effect waves-light" href="<?php echo base_url('patient/patient_create'); ?>">
            <i class="large material-icons">add</i>
        </a>
        <a type="button" class="btn right waves-effect waves-light" style="margin-right: 1rem" href="<?php echo base_url('print'); ?>">
            <i class="large material-icons">print</i>
        </a>
		<div class="col s12 offset-s0 m12 offset-m0 card-panel">
            <table class="highlight responsive-table">
                <ul id='options' class='dropdown-content' style="width:0.5rem">
                    <li><a href="#!">open</a></li>
                    <li><a href="#!">edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">delete</a></li>
                </ul>
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="fname">Name(s)</th>
                        <th data-field="mname">Middle name</th>
                        <th data-field="lname">Last name</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="price">Item Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class='dropdown-button' data-activates="options">
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
		</div>
	</div>
</div>
