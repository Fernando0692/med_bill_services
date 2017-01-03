<?php
    $this->load->view('header');
    $this->load->view('navbar');
?>
<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col s6 offset-s3 m4 offset-m4 card-panel">
            <div class="row margin">
                <div class="input-field col s10 offset-s3 m10 offset-m3">
                    <img src="<?php echo base_url();?>/img/Fernando.png"  alt="" class="circle responsive-img avatar-img">
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="fullname" type="text" class="validate">
                    <label for="fullname">Name(s)</label>
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="lastname" type="text" class="validate">
                    <label for="lastname">Last name</label>
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="username" type="text" class="validate">
                    <label for="username">Userame</label>
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row right" style="padding: .5rem">
                <button type="button" name="button" class="btn waves-effect waves-light red">Cancel</button>
                <button type="submit" name="action" class="btn waves-effect waves-light blue">Save</button>
            </div>
        </div>
    </div>
</div>
