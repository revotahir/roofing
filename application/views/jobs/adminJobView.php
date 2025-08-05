<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Job | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">
    <link href="<?= base_url() ?>assets/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Vendor css -->
    <link href="<?= base_url() ?>assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <!-- Theme Config Js -->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">



        <?php
        $this->load->view('components/header.php');
        ?>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <div class="page-container">

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Job Detail</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">Job</a></li>

                                <li class="breadcrumb-item active">Job List</li>
                                <li class="breadcrumb-item active">Job Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">


                            <div class="card-body pt-2">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#initialVist" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                            Initial Field Visit
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finance" data-bs-toggle="tab" aria-expanded="true" class="nav-link <?= ($jobStatus[0]['financing'] == 0) ? 'disabled' : '' ?>">
                                            Claim Process / Fainancing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#materialDelivery" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?= ($jobStatus[0]['materialDelivery'] == 0) ? 'disabled' : '' ?>">
                                            Schedule & Material Delivery
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#install" data-bs-toggle="tab" aria-expanded="false" class="nav-link  <?= ($jobStatus[0]['install'] == 0) ? 'disabled' : '' ?>">
                                            Repair / Install
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#managerReview" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?= ($jobStatus[0]['managerReview'] == 0) ? 'disabled' : '' ?>">
                                            Project Review
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#jobClose" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?= ($jobStatus[0]['jobClose'] == 0) ? 'disabled' : '' ?>">
                                            Job Closeout
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#feedback" data-bs-toggle="tab" aria-expanded="false" class="nav-link <?= ($jobStatus[0]['feedback'] == 0) ? 'disabled' : '' ?>">
                                            Job Feedback
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="initialVist">
                                        <p class="mb-0">
                                            <strong> Client Name: </strong> <?= $jobDetail[0]['client_name'] ?><br>
                                            <strong> Manager Name: </strong> <?= $jobDetail[0]['manager_name'] ?><br>
                                            <strong> Location: </strong> <?= $jobDetail[0]['location'] ?><br>
                                            <strong> First Interection Date: </strong> <?= $jobDetail[0]['firstInterectionDate'] ?><br>
                                            <strong> Work Scope: </strong> <?= $jobDetail[0]['workScope'] ?><br>
                                            <strong> Additional Information: </strong> <?= $jobDetail[0]['addInformation'] ?><br><br>
                                        </p>

                                        <!-- form here  -->




                                        <!-- <?php
                                        if ($jobStatus[0]['initialVisit'] != 2) {
                                        ?>
                                            <a href="<?= base_url('mark-sign-on-complete/') . $jobDetail[0]['jobID'] ?>" class=" btn btn-primary" style="float: none;"><i class="mdi mdi-file-check-outline"> Sign On Complete</i> </a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Sign On Completed</i> </a>
                                            <p>
                                                <strong>Sign On Date: </strong><?= $jobStatus[0]['initialVisitDate'] ?>
                                            </p>
                                        <?php
                                        }
                                        ?> -->
                                    </div>
                                    <div class="tab-pane show " id="finance">
                                        <p class="mb-0">
                                            <?php
                                            if ($jobStatus[0]['financing'] == 1) {
                                            ?>
                                        <h3>Submission Pending From Client</h3>
                                        <?php
                                            } else {
                                                if ($financingDetail[0]['financeStatus'] == 2) {
                                                    echo '<h3>He is Financing!</h3>';
                                                } else {
                                        ?>
                                            <h2>Financing Details</h2>
                                            <strong>Policy Holder Full Name:</strong> <?= $financingDetail[0]['fullName'] ?><br>
                                            <strong>Insurance Provider:</strong> <?= $financingDetail[0]['insuranceProvider'] ?><br>
                                            <strong>Insurance Provider Policy Number:</strong> <?= $financingDetail[0]['policyNumber'] ?><br>
                                            <strong>Insurance Provider Contact Number:</strong> <?= $financingDetail[0]['insProviderContact'] ?><br>
                                    <?php
                                                }
                                            }
                                    ?>
                                    </p>
                                    </div>
                                    <div class="tab-pane" id="materialDelivery">
                                        <?php
                                        if ($jobStatus[0]['materialDelivery'] == 1) {
                                        ?>
                                            <form class="form-horizontal parsley-examples" method="post" action="<?= base_url('add-material-delivery-data/') . $jobDetail[0]['jobID'] ?>">
                                                <div class="form-group">
                                                    <label>Your Job Scheduled Date</label>
                                                    <input type="date" class="form-control" name="jobScheduledDate" id="jobScheduledDate" required placeholder="Scheduled date" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Material Will be delivered on or before(Date)</label>
                                                    <div>
                                                        <input type="date" name="materialDelivery" id="materialDelivery" class="form-control" required placeholder="Estimated Delivery Date" />
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
                                        <?php
                                        } else {
                                        ?>
                                            <h2>Job Schedule & Material Delivery</h2>
                                            <strong>Your Job Scheduled Date:</strong> <?= $DeliveryData[0]['jobScheduled'] ?><br>
                                            <strong>Material Will be delivered on or before(Date):</strong> <?= $DeliveryData[0]['materialDeliveryETA'] ?><br>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane" id="install">
                                        <?php
                                        if ($jobStatus[0]['install'] == 1) {
                                        ?>
                                            <form class="form-horizontal parsley-examples" enctype="multipart/form-data" method="post" action="<?= base_url('add-installation-imgs-data/') . $jobDetail[0]['jobID'] ?>">
                                                <div class="form-group">
                                                    <label>Upload Images (Max Upload 10)</label>
                                                    <input type="file" multiple class="form-control" name="imgs[]" id="imgs" onchange="validateFiles()" required placeholder="Scheduled date" />
                                                    <p id="errorMessage" style="color: red; display: none;">You can only upload a maximum of 10 files.</p>
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
                                        <?php
                                        } else {
                                        ?>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="header-title">Uploaded Images</h4>
                                                </div>
                                                <div class="card-body pt-2">
                                                    <div class="row">
                                                        <?php
                                                        if ($installation[0]['img1'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img1'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img1'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img2'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img2'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img2'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img3'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img3'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img3'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img4'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img4'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img4'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img5'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img5'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img5'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img6'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img6'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img6'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img7'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img7'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img7'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img8'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img8'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img8'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img9'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img9'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img9'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($installation[0]['img10'] != null) {
                                                        ?>
                                                            <div class="col-sm-3">
                                                                <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img10'] ?>" data-lightbox="gallery-set" data-title="Click the right half of the image to move forward.">
                                                                    <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img10'] ?>" alt="" class="img-fluid" />
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane" id="managerReview">

                                        <div class="card">

                                            <div class="card-body pt-2">
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <h4 class="header-title">Manager job review details</h4>
                                                        <?php
                                                        if ($reviewDateFormDisplay) {
                                                        ?>
                                                            <form class="form-horizontal parsley-examples" method="post" action="<?= base_url('add-manager-review-date-data/') . $jobDetail[0]['jobID'] ?>">
                                                                <div class="form-group">
                                                                    <label>Date of review</label>
                                                                    <input type="date" class="form-control" name="jobReviewDate" id="jobReviewDate" required placeholder="Review Date" />
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
                                                        <?php
                                                        } else {

                                                        ?>
                                                            <strong>Job Review Date: </strong><?= $managerReview[0]['reviewDate'] ?>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="col-sm-6" >
                                                    <h4 class="header-title">Client additional question details</h4>
                                                    <strong>Message: </strong>
                                                    <?php 
                                                        if($managerReview){
                                                                if($managerReview[0]['clioentAditionalQuestion']!=null){
                                                                    echo $managerReview[0]['clioentAditionalQuestion'];
                                                                }else{
                                                                    echo 'NIL';
                                                                }
                                                        }else{
                                                            echo 'NIL';
                                                        }
                                                    ?>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                    <div class="tab-pane" id="jobClose">
                                        <h4>Fainal Document Sign</h4>
                                    <?php
                                        if ($jobStatus[0]['jobClose'] != 2) {
                                        ?>
                                            <a href="<?= base_url('mark-job-close-complete/') . $jobDetail[0]['jobID'] ?>" class=" btn btn-primary" style="float: none;"><i class="mdi mdi-file-check-outline"> Mark as Complete</i> </a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Fainal Document sign Completed</i> </a>
                                            <p>
                                                <strong>Job Close Date: </strong><?= $jobStatus[0]['jobCloseDate'] ?>
                                            </p>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane" id="feedback">
                                        <?php 
                                            if($jobFeedback){
                                                
                                        ?>
                                            <strong>Client FeedBack: </strong><?=$jobFeedback[0]['feedBack']?>
                                        <?php 
                                            }else{
                                                echo '<strong>Client FeedBack: NIL </strong>';
                                            }
                                            ?>
                                    </div>
                                </div>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->


                </div>
                <!-- end row -->


            </div> <!-- container -->




        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <?php
    $this->load->view('components/theme-settings.php');
    ?>


    <!-- Vendor js -->
    <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
    <script>
        function validateFiles() {
            const fileInput = document.getElementById('imgs');
            const errorMessage = document.getElementById('errorMessage');

            if (fileInput.files.length > 10) {
                errorMessage.style.display = 'block'; // Show error message
                fileInput.value = ''; // Clear the selected files
            } else {
                errorMessage.style.display = 'none'; // Hide error message
            }
        }
    </script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('jobDeleted') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Job Deleted!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('jobmarkclose') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Job Closed!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('jobReviewadded') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Job review date is added!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('signoncomplete') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Sign On marked as Complete!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('MaterialDeliverySet') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Job & Material Delivery Scheduled!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('imagesuploaded') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Installation Images uploaded!');
        </script>
    <?php
    }
    ?>
</body>

</html>