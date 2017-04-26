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
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">User</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
	<div class="row margin">
		<div class="col s12 offset-s0 m12 offset-m0 card-panel">
            FILTERS
		</div>
	</div>
	<div class="row margin">
        <a type="button" class="btn right waves-effect waves-light" href="<?php echo base_url('user/create'); ?>">
            <i class="large material-icons">add</i>
        </a>
        <a type="button" class="btn right waves-effect waves-light" style="margin-right: 1rem" href="#print">
            <i class="large material-icons">print</i>
        </a>
		<div class="col s12 offset-s0 m12 offset-m0 card-panel">
            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="fname">Name(s)</th>
                        <th data-field="lname">Last name</th>
                        <th data-field="email">Email</th>
                        <th data-field="profile">Profile</th>
                        <th data-field="username">Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $r): ?>
                    <!-- DELETE MODAL -->
                    <div id="deleteModal" class="modal">
                        <div class="modal-content">
                            <h4 class="red-text">Atention!</h4>
                            <p>This item has been deleted. Are you sure you want to delete it?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('user/delete/'.$r->id_user)?>" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
                        </div>
                    </div>
                    <!-- EDIT MODAL -->
                    <!--
                    <div id="deleteModal" class="modal">
                        <div class="modal-content">
                            <h4 class="red-text">Atention!</h4>
                            <p>This item has been deleted. Are you sure you want to delete it?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('user/delete/'.$r->id_user)?>" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Disagree</a>
                        </div>
                    </div>
                    -->

                    <ul id='options' class='dropdown-content'>
                        <li><a href="<?= base_url('user/edit')?>">Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="#deleteModal" class="modal-trigger">Delete</a></li>
                    </ul>
                    <tr class='dropdown-button' data-activates="options">
                        <td><?php echo $id =  $r->id_user; ?></td>
                        <td><?php echo $r->fname; ?></td>
                        <td><?php echo $r->lname; ?></td>
                        <td><?php echo $r->email; ?></td>
                        <td><?php echo $r->profile; ?></td>
                        <td><?php echo $r->username; ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
		</div>
	</div>
</div>
