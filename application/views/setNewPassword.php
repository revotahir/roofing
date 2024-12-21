<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>New Password Setup | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

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
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
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
                                </div>

                                <div class="account-content mt-4">
                                        <div class="text-center mb-3">
                                            

                                            <p class="text-muted mb-0 font-13">Welcome <b><?=$userDetail[0]['userName']?></b>! Setup your new password.</p>
                                        </div>

                                        <form class="form-horizontal" method="post" action="<?=base_url('new-password-data/').$userDetail[0]['userID']?>">

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" name="password" placeholder="New password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <label for="password">Confirm Password</label>
                                                    <input class="form-control" type="password" required="" id="password2" name="password2" placeholder="Confirm password">
                                                </div>
                                            </div>

                                            <div class="form-group row text-center mt-2">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block w-100 btn-primary waves-effect waves-light" onclick="return verifypasses()" type="submit">Set Password</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="clearfix"></div>

                                        <div class="row mt-3">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted mb-0">Not you? return<a href="<?=base_url()?>" class="text-dark ms-1"><b>Sign In</b></a></p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
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
   
    <script>
        function verifypasses(){
            var pass=$('#password').val();
            var pass2=$('#password2').val();
            if(pass==''){
                toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.error('password field is empty!');
            return false;
            }
            if(pass2==''){
                toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.error('password field is empty!');
            return false;
            }
            
            if(pass!=pass2){
                toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.error('password not match!');
            return false;
            }
            return true;
        }
    </script>
</body>

</html>