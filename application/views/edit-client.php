<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Client | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

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

        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <div class="page-container">

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Edit Client</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                                
                                <li class="breadcrumb-item"><a >Client</a></li>
                                
                                <li class="breadcrumb-item">Client List</li>
                                <li class="breadcrumb-item active">Edit Client</li>
                            </ol>
                        </div>
                    </div>
                </div>

            

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="header-title">Edit Client Form</h5>
                            

                            </div>
                            <div class="card-body pt-2">
                                <form class="form-horizontal parsley-examples" method="post" action="<?=base_url('edit-client-data/').$this->uri->segment(2)?>">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" value="<?=$clientData[0]['userName']?>" name="mName" id="mName" required placeholder="Name" />
                                    </div>


                                    

                                    <div class="form-group">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" name="mEmail" id="mEmail" class="form-control" value="<?=$clientData[0]['userEmail']?>" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Set Password</label>
                                        <div>
                                            <input type="password" id="pass2" name="pass2" class="form-control" value="<?=$clientData[0]['userPass']?>" required placeholder="Password" />
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" class="form-control" required data-parsley-equalto="#pass2" value="<?=$clientData[0]['userPass']?>" placeholder="Re-Type Password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div>
                                            <input  id="mPhone" name="mPhone" type="text" value="<?=$clientData[0]['userPhone']?>" class="form-control"  placeholder="Enter Phone Number" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update
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
   
</body>

</html>