<?php
    $this->load->view('header');
?>
<nav class="blue">
    <div class="nav-wrapper">
        <ul class="right">
            <li><a href="<?php echo base_url('home/logout'); ?>"><i class="large material-icons">exit_to_app</i></a></li>
        </ul>
<?php
$this->load->view('navbar_home');
?>
<!-- This are a close to navbar from navbar_home -->
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">MBS</a>
    </div>
</nav>
