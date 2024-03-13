<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2>Activation Process</h2>
        </div>
    </div>
    <div>
    <?php if(isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>
    
        <?php if(isset($success)) : ?>
            <div class="alert alert-success">
                <?= $success; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>