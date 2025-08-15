<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add New Manager | Amen Roofing Group</title>
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

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <?php
        include('components/header.php');
    ?>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <div class="page-container">

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Ad New Manager</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>

                                <li class="breadcrumb-item"><a>Managers</a></li>

                                <li class="breadcrumb-item active">Ad New Manager</li>
                            </ol>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="header-title">New Manager Form</h5>


                            </div>
                            <div class="card-body pt-2">
                                <form class="form-horizontal parsley-examples" method="post"
                                    action="<?=base_url('add-manager-data')?>">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="mName" id="mName" required
                                            placeholder="Name" />
                                    </div>




                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" name="mEmail" id="mEmail" class="form-control" required
                                                parsley-type="email" placeholder="Enter a valid e-mail" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Set Password</label>
                                        <div>
                                            <input type="password" id="pass2" name="pass2" class="form-control" required
                                                placeholder="Password" />
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" class="form-control" required
                                                data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div>
                                            <input data-parsley-type="number" id="mPhone" name="mPhone" type="text"
                                                class="form-control" required placeholder="Enter Phone Number" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>


                </div>

            </div> <!-- container -->



        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php
        include('components/theme-settings.php');
    ?>
    <!-- Vendor js -->
    <script src="<?=base_url()?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/js/app.js"></script>


    <!-- Plugin js-->
    <script src="<?=base_url()?>assets/vendor/parsleyjs/parsley.min.js"></script>

    <!-- Validation init js-->
    <script src="<?=base_url()?>assets/js/pages/form-validation.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('managerAdded') != '') {
    ?>
    <script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.success('New Manager Added!');
    </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('EmailError') != '') {
    ?>
    <script type="text/javascript">
    toastr.options = {
        "closeButton": true,
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    toastr.error('Email Already Registered!');
    </script>
    <?php
    }
    ?>
</body>

</html>