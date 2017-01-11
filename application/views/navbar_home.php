<!--  This menu are be open on the other views as 'admin_view'-->
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <div class="background blue">
                        <!-- <img src="<?php echo base_url();?>/img/example001.jpg"> -->
                    </div>
                    <a href="#!user"><img class="circle" src="<?php echo base_url().'img/';?>Fernando.png"></a>
                    <a href="#!name"><span class="name"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('lname'); ?></span></a>
                    <a href="#!email"><span class="email"><?php echo $this->session->userdata('email'); ?></span></a>
                </div>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-red"><i class="material-icons">account_box</i>Accounts</a>
                        <div class="collapsible-body">
                            <ul>
                                <?php
                                if($this->session->userdata('profile')=='Administrator')
                                {
                                ?>
                                <li><a href="<?php echo base_url('user')?>" class="waves-effect">User</a></li>
                                <?php
                                }
                                ?>
                                <li><a href="#!" class="waves-effect">Client</a></li>
                                <li><a href="<?php echo base_url('patient'); ?>" class="waves-effect">Patient</a></li>
                                <li><a href="#!" class="waves-effect">Provider</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-teal"><i class="material-icons">content_paste</i>Forms</a>
                        <div class="collapsible-body">
                            <ul>
                                <?php
                                if($this->session->userdata('profile')=='Medical' || $this->session->userdata('profile')=='Administrator')
                                {
                                ?>
                                <li><a href="#!" class="waves-effect">HCFA-1500</a></li>
                                <?php
                                }
                                ?>
                                <?php
                                if($this->session->userdata('profile')=='Dentist' || $this->session->userdata('profile')=='Administrator')
                                {
                                ?>
                                <li><a href="#!" class="waves-effect">WADA-1500</a></li>
                                <?php
                                }
                                ?>
                                <li><a href="#!" class="waves-effect">UB-92</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-green"><i class="material-icons">library_books</i>Codes</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!" class="waves-effect">CDT-2</a></li>
                                <li><a href="#!" class="waves-effect">CPT</a></li>
                                <li><a href="#!" class="waves-effect">CPT Modifiers</a></li>
                                <li><a href="#!" class="waves-effect">ICD9 Vol-1</a></li>
                                <li><a href="#!" class="waves-effect">ICD9 Vol-2</a></li>
                                <li><a href="#!" class="waves-effect">UB92 Codes</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-yellow"><i class="large material-icons">attach_money</i>Transactions</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!" class="waves-effect">Invoices</a></li>
                                <li><a href="#!" class="waves-effect">Payments</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect waves-purple"><i class="material-icons">settings</i>Settings</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!" class="waves-effect">My Account</a></li>
                                <?php
                                if($this->session->userdata('profile')=='Administrator')
                                {
                                ?>
                                <li><a href="<?php echo base_url('signup'); ?>" class="waves-effect">Create Account</a></li>
                                <?php
                                }
                                ?>
                                <li><a href="<?php echo base_url('aboutUs'); ?>" class="waves-effect">About Us</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('home/logout'); ?>" class="collapsible-header waves-effect"><i class="large material-icons">exit_to_app</i>Logout</a></li>
        </ul>
<!--  This menu are be closed on the other views as 'admin_view'-->
