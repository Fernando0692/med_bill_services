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
            FILTERS
		</div>
	</div>
	<div class="row margin">
        <a type="button" class="btn right waves-effect waves-light" href="<?php echo base_url('patient/patient_create'); ?>">
            <i class="large material-icons">add</i>
        </a>
        <a type="button" class="btn right waves-effect waves-light" style="margin-right: 1rem" href="#print">
            <i class="large material-icons">print</i>
        </a>
		<div class="col s12 offset-s0 m12 offset-m0 card-panel">
            <table class="highlight responsive-table">
                <ul id='options' class='dropdown-content' style="width:0.5rem">
                    <li><a href="#!">Open</a></li>
                    <li><a href="#!">Edit</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Delete</a></li>
                </ul>
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="fname">Name(s)</th>
                        <th data-field="lname">Last name</th>
                        <th data-field="laboral_status">Laboral Status</th>
                        <th data-field="related_insured">Related to Insured</th>
                        <th data-field="insured_ssn">Insured's S.S.N.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $r): ?>
                        <tr class='dropdown-button' data-activates="options">
                            <td><?php echo $r->id_patient; ?></td>
                            <td><?php echo $r->fname; ?></td>
                            <td><?php echo $r->lname; ?></td>
                            <td><?php echo $r->laboral_status; ?></td>
                            <td><?php echo $r->related_insured; ?></td>
                            <td><?php echo $r->insured_ssn; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
		</div>
	</div>
</div>
