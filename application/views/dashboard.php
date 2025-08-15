<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/fav.png">

    <!-- C3 Chart css -->
    <link href="<?=base_url()?>assets/vendor/c3/c3.min.css" rel="stylesheet" type="text/css" />


    <!-- Vendor css -->
    <link href="<?=base_url()?>assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="<?=base_url()?>assets/js/config.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        
          
    <?php
        include('components/header.php');
    ?>

        


    </div>
    <!-- END wrapper -->

    
    <?php
        include('components/theme-settings.php');
    ?>
    <!-- Vendor js -->
    <script src="<?=base_url()?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/js/app.js"></script>

    <!--C3 Chart-->
    <script src="<?=base_url()?>assets/vendor/d3/d3.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/c3/c3.min.js"></script>


    <script src="<?=base_url()?>assets/vendor/echarts/echarts.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="<?=base_url()?>assets/js/pages/dashboard-sales.js"></script>

</body>

</html>