

<section class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Sample<b>CAKE</b></a>
            <small>Admin login</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="/adminpanel/login">
                    <div class="msg">Please enter your email and password to login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                        <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                        <?= $this->Form->control('password' ,['class' => 'form-control']) ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                        <?= $this->Form->button('Login',['class' => 'btn btn-block bg-pink waves-effect']) ?>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>
