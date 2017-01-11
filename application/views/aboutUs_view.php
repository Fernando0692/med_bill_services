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
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">About Us</a>
    </div>
</nav>

<div class="container" style="padding-top: 2rem">
    <a type="button" class="btn right waves-effect waves-light" href="#">
        <i class="large material-icons">create</i>
    </a>
    <div class="container">
        <div class="row card-panel">
        <?php foreach($result  as $r): ?>
            <div class="col l6 s12">
                <h5>Company Info</h5>
                <ul>
                    <li><?php echo $r->name; ?></li>
                    <li><?php echo $r->address; ?></li>
                    <li><?php echo $r->city.', '.$r->state; ?></li>
                    <li>Zip Code. <?php echo $r->zip_code; ?></li>
                    <li>PMB. <?php echo $r->pmb; ?></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5>Contact</h5>
                <ul>
                    <li>Tel. (<?php echo $r->area; ?>) <?php echo $r->phone; ?></li>
                    <li>Fax. (<?php echo $r->area; ?>) <?php echo $r->fax; ?></li>
                </ul>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    © 2016-2017 Med Bill Services, All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
