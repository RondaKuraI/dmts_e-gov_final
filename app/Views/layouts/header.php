<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <div class="page-flex">

        <!-- Sidebar  -->
        <?= $this->include('layouts/sidebar'); ?>

        <div class="main-wrapper">
            <!-- Main Nav  -->
            <nav class="main-nav--bg">
                <?= $this->include('layouts/main_nav'); ?>
            </nav>

            <!-- ! Main
            <?= $this->include('layouts/main'); ?> -->

            <div class="app">
                <?= $this->renderSection('content') ?>
            </div>

            <!-- Footer  -->
            <?= $this->include('layouts/footer'); ?>
        </div>
    </div>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
</body>

</html>