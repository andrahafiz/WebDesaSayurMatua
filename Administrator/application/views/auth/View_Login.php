<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(<?= base_url(); ?>/assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="index.html">
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password"> </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <a href="<?= base_url('Auth/register'); ?>" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> lupa password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Sudah punya akun ? <a href="<?= base_url('Auth/register'); ?>" class="text-info m-l-5"><b>Register</b></a>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->