<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0061f7;">
            <div class="featured-image mb-3">
                <img src="assetss/images/woman.jpg" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-weight: 600;">Be Verified</p>
            <small class="text-white text-wrap text-center" style="width: 17rem;">Join experienced Designers on this platform.</small>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Hello Again</h2>
                    <p>We are happy to have you back.</p>
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>SigninController/loginAuth" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" placeholder="Email Address" value="<?= set_value('email') ?>" class="form-control form-control-lg bg-light fs-6">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" placeholder="Password" class="form-control form-control-lg bg-light fs-6">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck" style="background-color: #0061f7;">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background-color: #0061f7; color: white;">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="assetss/images/google.png" style="width: 20px;" class="me-2"><small>Sign In with Google</small></button>
                        </div>
                    </form>
                    <div class="row">
                        <small>Don't have an account? <a href="<?= base_url(); ?>">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>