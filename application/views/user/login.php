<?php
    $this->load->view('header');
    $this->load->view('navbar');
?>

<div class="container" style="padding-top: 2rem">
    <div class="row">
        <div class="col s6 offset-s3 m4 offset-m4 card-panel">
            <div class="row margin">
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="username" type="text" class="validate">
                    <label for="username">Userame</label>
                </div>
                <div class="input-field col s10 offset-s1 m10 offset-m1">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row margin" style="padding: 0.5rem">
                <button class="btn waves-effect waves-light right blue" type="submit" name="action">Sign In
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>
