<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/fav.png">

    <!-- Vendor css -->
    <link href="<?=base_url()?>assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <!-- Theme Config Js -->
    <script src="<?=base_url()?>assets/js/config.js"></script>
    
</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="home-btn d-none d-sm-block position-absolute top-0 end-0 m-3">
        <a href="https://amenroofinggroup.com/"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="https://amenroofinggroup.com/">
                                            <img src="<?=base_url()?>assets/images/logo.webp" alt="" height="100">
                                        </a>
                                    </div>
                                    <h5 class="text-uppercase mb-1 mt-4 fw-semibold">Sign In</h5>
                                    <p class="mb-0">Login to your account</p>
                                </div>

                                <div class="account-content mt-4">
                                    <form class="form-horizontal" method="post" action="<?=base_url('login-submit-data')?>">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" id="emailaddress" name="emailaddress" required="" placeholder="john@deo.com">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <a href="page-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                     

                                        <div class="form-group row text-center mt-2">
                                            <div class="col-12">
                                                <button class="btn btn-md btn-block btn-primary waves-effect waves-light w-100" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="<?=base_url()?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('error_msg') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.error('Invalid Login!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('AuthcodeExpired') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.info('Already password setuped, Please Login!');
        </script>
    <?php
    }
    ?>
</body>

</html>