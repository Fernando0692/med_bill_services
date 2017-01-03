<nav class="blue" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#home" class="brand-logo">MBS</a>

        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url('login');?>" class="waves-effect">Sign In</a></li>
            <li><a href="<?php echo base_url('sign_up'); ?>" class="btn waves-effect waves-teal green">Sign Up</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="<?php echo base_url();?>">Sign In</a></li>
            <li><a href="<?php echo base_url('register'); ?>">Sign Up</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
