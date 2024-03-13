<?php $page_session = \Config\Services::session(); ?>

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
                    <h2>Welcome!</h2>
                    <p>We are happy to have you back.</p>

                    <?php if ($page_session->getTempdata('success')) : ?>
                        <div class="alert alert-success"><?= $page_session->getTempdata('success') ?></div>
                    <?php endif; ?>

                    <?php if ($page_session->getTempdata('error')) : ?>
                        <div class="alert alert-danger"><?= $page_session->getTempdata('error') ?></div>
                    <?php endif; ?>

                    <form action="<?php echo base_url('store'); ?>" method="post">
                        <div class="input-group mb-1">
                            <input type="text" name="name" placeholder="Name" class="form-control form-control-lg bg-light fs-6" value="<?= set_value('name'); ?>">
                        </div>
                        <div class="mb-3">
                            <span class="text-danger"><?= display_error($validation, 'name'); ?></span>
                        </div>


                        <div class="input-group mb-1">
                            <input type="email" name="email" placeholder="Email Address" class="form-control form-control-lg bg-light fs-6" value="<?= set_value('email'); ?>">
                        </div>
                        <div class="mb-3">
                            <span class="text-danger"><?= display_error($validation, 'email'); ?></span>
                        </div>


                        <div class="input-group mb-1">
                            <input type="password" name="password" placeholder="Password" class="form-control form-control-lg bg-light fs-6" value="<?= set_value('password'); ?>">
                        </div>
                        <div class="mb-3">
                            <span class="text-danger"><?= display_error($validation, 'password'); ?></span>
                        </div>


                        <div class="input-group mb-1">
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control form-control-lg bg-light fs-6" value="<?= set_value('confirmpassword'); ?>">
                        </div>
                        <div class="mb-3">
                            <span class="text-danger"><?= display_error($validation, 'confirmpassword'); ?></span>
                        </div>


                        <div class="input-group mb-3">
                            <button class="btn btn-lg w-100 fs-6" style="background-color: #0061f7; color: white;">Register</button>
                        </div>
                    </form>
                    <div class="row">
                        <small>Already have an account? <a href="<?= base_url('/login'); ?>">Sign In</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>