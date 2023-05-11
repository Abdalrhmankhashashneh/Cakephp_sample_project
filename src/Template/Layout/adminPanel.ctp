

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= $this->fetch('title')?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <?= $this->Html->css('../Admin/plugins/bootstrap/css/bootstrap.css') ?>

    <!-- Waves Effect Css -->
    <?= $this->Html->css('../Admin/plugins/node-waves/waves.css') ?>

    <!-- Animation Css -->
    <?= $this->Html->css('../Admin/plugins/animate-css/animate.css') ?>

    <!-- Morris Chart Css-->
    <?= $this->Html->css('../Admin/plugins/morrisjs/morris.css') ?>

    <!-- Custom Css -->
    <?= $this->Html->css('../Admin/css/style.css') ?>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <?= $this->Html->css('../Admin/css/themes/all-themes.css') ?>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <?php if($loggedInUser): ?>
   <?= $this->element('Admin/navbar') ?>
    <section>
        <?= $this->element('Admin/left_sidebar') ?>
        <?= $this->element('Admin/right_sidebar') ?>
    </section>
    <section class="content">
        <div class="container-fluid">
            <?= $this->fetch('content') ?>
        </div>
    </section>
    <?= $this->element('Admin/models') ?>
    <?php else: ?>
    <?= $this->fetch('content') ?>
    <?php endif; ?>
    <!-- Jquery Core Js -->
    <?= $this->Html->script('../Admin/plugins/jquery/jquery.min.js') ?>

    <!-- Bootstrap Core Js -->
    <?= $this->Html->script('../Admin/plugins/bootstrap/js/bootstrap.js') ?>

    <!-- Select Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/bootstrap-select/js/bootstrap-select.js') ?>

    <!-- Slimscroll Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/jquery-slimscroll/jquery.slimscroll.js') ?>

    <!-- Waves Effect Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/node-waves/waves.js') ?>

    <!-- Jquery CountTo Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/jquery-countto/jquery.countTo.js') ?>

    <!-- Morris Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/raphael/raphael.min.js') ?>
    <?= $this->Html->script('../Admin/plugins/morrisjs/morris.js') ?>

    <!-- ChartJs -->
    <?= $this->Html->script('../Admin/plugins/chartjs/Chart.bundle.js') ?>

    <!-- Flot Charts Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/flot-charts/jquery.flot.js') ?>
    <?= $this->Html->script('../Admin/plugins/flot-charts/jquery.flot.resize.js') ?>
    <?= $this->Html->script('../Admin/plugins/flot-charts/jquery.flot.pie.js') ?>
    <?= $this->Html->script('../Admin/plugins/flot-charts/jquery.flot.categories.js') ?>
    <?= $this->Html->script('../Admin/plugins/flot-charts/jquery.flot.time.js') ?>

    <!-- Sparkline Chart Plugin Js -->
    <?= $this->Html->script('../Admin/plugins/jquery-sparkline/jquery.sparkline.js') ?>

    <!-- Custom Js -->
    <?= $this->Html->script('../Admin/js/admin.js') ?>
    <?= $this->Html->script('../Admin/js/pages/index.js') ?>

    <!-- Demo Js -->
    <?= $this->Html->script('../Admin/js/demo.js') ?>

    <?= $this->fetch('script') ?>
</body>

</html>
