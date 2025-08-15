<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Horizontal Layout | Adminox - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/fav.png">

    <link href="<?= base_url() ?>assets/vendor/c3/c3.min.css" rel="stylesheet" type="text/css" />


    <!-- Vendor css -->
    <link href="<?= base_url() ?>assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/toastr/toastr.min.css">
    <link href="<?= base_url() ?>assets/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
    <!-- <style>
        .multi_tabs-container {

            /* Wrapper for tab buttons */
            .multi_tabs_btns-wrapper {
                display: flex;
                width: 100%;
            }

            /* Styling for individual tab buttons */
            .multi_tabs-btn {
                display: flex;
                align-items: center;
                width: var(--width);

                /* Uses a CSS variable for width */
                /* Styles for the first tab button */
                &:first-child {
                    .tab-progress-bar {
                        border-radius: 10px 0 0 10px;
                        margin-left: 0;
                    }
                }

                /* Styles for buttons that are **not disabled** */
                &:not(:has(button:disabled)) {

                    /* Progress bar for enabled tabs */
                    .tab-progress-bar {
                        background: repeating-linear-gradient(-45deg,
                                #66b7e3,
                                #66b7e3 12px,
                                #5ca6d1 12px,
                                #5ca6d1 24px);
                    }

                    /* Tab button styling when enabled */
                    .tab-btn {
                        ._circle {
                            background: #58aed1;
                        }

                        ._label {
                            color: #49adce;
                        }
                    }
                }

                /* Styling for the **active tab** (if it's not disabled) */
                &.active_tab:not(:has(button:disabled)) {
                    .tab-progress-bar {
                        background: repeating-linear-gradient(-45deg,
                                #76cc54,
                                #76cc54 12px,
                                #8edb72 12px,
                                #8edb72 24px);
                    }

                    .tab-btn {
                        ._circle {
                            background: #8cc343;
                        }

                        ._label {
                            color: #8cc343;
                        }
                    }
                }

                /* Progress bar styling (default appearance) */
                .tab-progress-bar {
                    width: 100%;
                    height: 20px;
                    margin: 0 -2px;
                    background: repeating-linear-gradient(-45deg,
                            #ececec,
                            #ececec 12px,
                            #f4f4f4 12px,
                            #f4f4f4 24px);
                    box-shadow: inset 0px 6px 10px 0px rgba(0, 0, 0, 0.123);
                }

                /* Styling for the tab button */
                .tab-btn {
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    border: none;
                    padding: 0;
                    outline: none;
                    background: none;

                    /* Disabled button styling */
                    &:disabled {
                        cursor: not-allowed;
                    }

                    /* Circle inside the tab button */
                    ._circle {
                        width: 50px;
                        aspect-ratio: 1/1;
                        /* Ensures a perfect circle */
                        display: grid;
                        place-items: center;
                        border-radius: 50%;
                        color: white;
                        font-size: 20px;
                        border: 2px solid white;
                        box-shadow: inset 1px 1px 6px 0px #00000044;
                        font-weight: 500;
                        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
                        background: #eaeaea;
                        user-select: none;
                    }

                    /* Label below the tab button */
                    ._label {
                        position: absolute;
                        bottom: -28px;
                        color: #d6d6d6;
                        font-weight: 500;
                        display: block;
                        min-width: max-content;
                    }
                }
            }

            /* Content container for the tab sections */
            .multi_tabs_content-container {
                .multi_tab_content {
                    display: none;
                    /* Hide all tab contents by default */
                    margin-top: 50px;

                    /* Show content when the tab is active */
                    &.active {
                        display: block;
                    }
                }
            }
        }
    </style> -->
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php
        $this->load->view('client/components/clientHeader.php');
        ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">
            <div class="page-container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Job Activity</h4>
                            </div>
                            <div class="card-body pt-2">
                                <!-- --------=======-------- -->
                                <!-- STARTS :: Salman's Code -->
                                <!-- --------=======-------- -->

                                <div
                                    class="multi_tabs-container col-12"
                                    id="multiTabsBtnsContentSection">
                                    <!-- Btns -->
                                    <div class="multi_tabs_btns-container">
                                        <div class="multi_tabs_btns-wrapper">
                                            <!-- Btn -->
                                            <div
                                                class="multi_tabs-btn active_tab"
                                                style="--width: 10%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn">
                                                    <span class="_circle">1</span>
                                                    <span class="_label">Signing On</span>
                                                </button>
                                            </div>
                                            <!-- Btn -->
                                            <div class="multi_tabs-btn" style="--width: 25%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn" <?= ($jobStatus[0]['financing'] == 0) ? 'disabled' : '' ?>>
                                                    <span class="_circle">2</span>
                                                    <span class="_label">Claim Process / Fainancing</span>
                                                </button>
                                            </div>
                                            <!-- Btn -->
                                            <div class="multi_tabs-btn" style="--width: 20%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn" <?= ($jobStatus[0]['materialDelivery'] == 0) ? 'disabled' : '' ?>>
                                                    <span class="_circle">3</span>
                                                    <span class="_label">Schedule & Material Delivery</span>
                                                </button>
                                            </div>
                                            <!-- Btn -->
                                            <div class="multi_tabs-btn" style="--width: 25%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn" <?= ($jobStatus[0]['install'] == 0) ? 'disabled' : '' ?>>
                                                    <span class="_circle">4</span>
                                                    <span class="_label"> Repair / Install</span>
                                                </button>
                                            </div>
                                            <!-- Btn -->
                                            <div class="multi_tabs-btn" style="--width: 10%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn" <?= ($jobStatus[0]['managerReview'] == 0) ? 'disabled' : '' ?>>
                                                    <span class="_circle">5</span>
                                                    <span class="_label">Project Review</span>
                                                </button>
                                            </div>
                                            <!-- Btn -->
                                            <div class="multi_tabs-btn" style="--width: 10%">
                                                <div class="tab-progress-bar"></div>
                                                <button class="tab-btn" <?= ($jobStatus[0]['jobClose'] == 0) ? 'disabled' : '' ?>>
                                                    <span class="_circle">6</span>
                                                    <span class="_label">Job Complete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Content Tabs -->
                                    <div class="multi_tabs_content-container">
                                        <div class="multi_tabs_content-wrapper">
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <p class="mb-0">
                                                        <strong> Manager Name: </strong> <?= $jobDetail[0]['manager_name'] ?><br>
                                                        <strong> Location: </strong> <?= $jobDetail[0]['location'] ?><br>
                                                        <strong> First Interection Date: </strong> <?= $jobDetail[0]['firstInterectionDate'] ?><br>
                                                        <strong> Work Scope: </strong> <?= $jobDetail[0]['workScope'] ?><br>
                                                        <strong> Additional Information: </strong> <?= $jobDetail[0]['addInformation'] ?><br><br>
                                                    </p>
                                                    <?php
                                                    if ($jobStatus[0]['initialVisit'] != 2) {
                                                    ?>
                                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Sign On Pending</i> </a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Sign On Completed</i> </a>
                                                        <p>
                                                            <strong>Sign On Date: </strong><?= $jobStatus[0]['initialVisitDate'] ?>
                                                        </p>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <?php
                                                    if ($jobStatus[0]['financing'] != 2) {

                                                    ?>
                                                        <h2>Fill Your Insurance Details</h2>
                                                        <form class="form-horizontal parsley-examples" method="post" action="<?= base_url('insurance-detailed-filled/') . $jobDetail[0]['jobID'] ?>">
                                                            <div class="form-group">
                                                                <label>Policy Holder Full Nsame</label>
                                                                <input type="text" class="form-control" name="fullName" id="fullName" required placeholder="Policy holder full name" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Insurance Provider</label>
                                                                <input type="text" class="form-control" name="IncProvider" id="IncProvider" required placeholder="Insurance Provider" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Policy Number</label>
                                                                <input type="text" class="form-control" name="policyNo" id="policyNo" required placeholder="Policy Number" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Insurance Provider Contact </label>
                                                                <input type="text" class="form-control" name="ProviderContact" id="ProviderContact" required placeholder="Insurance Provider Contact" />
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
                                                            <div class="form-group">
                                                                <div>
                                                                    <h3>OR</h3>
                                                                    <a href="<?= base_url('mark-fainancing-will-be-financed-by-us/') . $jobDetail[0]['jobID'] ?>" class="btn btn-primary waves-effect waves-light me-1">
                                                                        I will be Financing
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php
                                                    } else if ($jobStatus[0]['financing'] == 2) {
                                                        if ($financingDetail[0]['financeStatus'] == 2) {
                                                            echo '<h3>I am Financing!</h3>';
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


                                                </div>
                                            </div>
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <?php
                                                    if ($jobStatus[0]['materialDelivery'] == 1) {
                                                    ?>
                                                        <h2>Pending from your manager</h2>
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
                                            </div>
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <?php
                                                    if ($jobStatus[0]['install'] == 1) {
                                                    ?>
                                                        <h2>In Progress</h2>
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
                                            </div>
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <div class="row">

                                                        <div class="col-sm-6">
                                                            <h4 class="header-title">Manager job review details</h4>
                                                            <?php
                                                            if ($reviewDateFormDisplay) {
                                                            ?>
                                                                <h2>Date will be updated by Manager!</h2>
                                                            <?php
                                                            } else {

                                                            ?>
                                                                <strong>Job Review Date: </strong><?= $managerReview[0]['reviewDate'] ?>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <h4 class="header-title">Client additional question details</h4>





                                                            <?php
                                                            $formcheck = 1;
                                                            if ($managerReview) {
                                                                if ($managerReview[0]['clioentAditionalQuestion'] != null) {
                                                                    echo '<strong>Message: </strong>' . $managerReview[0]['clioentAditionalQuestion'];
                                                                } else {

                                                                    $formcheck++;
                                                                }
                                                            } else {

                                                                $formcheck++;
                                                            }
                                                            if ($formcheck != 1) {


                                                            ?>
                                                                <form class="form-horizontal parsley-examples" method="post" action="<?= base_url('additional-question-data/') . $jobDetail[0]['jobID'] ?>">
                                                                    <div class="form-group">
                                                                        <label>Additional Question</label>
                                                                        <textarea class="form-control" name="AdditionalQuestion" id="AdditionalQuestion" required></textarea>

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
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tab Content -->
                                            <div class="multi_tab_content">
                                                <div class="multi_tab_content-main">
                                                    <h4>Fainal Document Sign</h4>
                                                    <?php
                                                    if ($jobStatus[0]['jobClose'] != 2) {
                                                    ?>
                                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Final Document Sign Pending</i> </a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Fainal Document sign Completed</i> </a>
                                                        <p>
                                                            <strong>Job Close Date: </strong><?= $jobStatus[0]['jobCloseDate'] ?>
                                                        </p>
                                                        <h4>Job Feedback</h4>
                                                        <?php
                                                        if (!$jobFeedback) {
                                                        ?>
                                                            <hr>

                                                            <form class="form-horizontal parsley-examples" method="post" action="<?= base_url('client-feed-back/') . $jobDetail[0]['jobID'] ?>">
                                                                <div class="form-group">
                                                                    <label>Your Feedback</label>
                                                                    <textarea class="form-control" name="feedback" id="feedback" required></textarea>

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
                                                    <strong>Your FeedBack: </strong><?=$jobFeedback[0]['feedBack']?>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Assets Links
                                <link rel="stylesheet" href="style.css" />
                                <script src="script.js"></script> -->
                                <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
                                <script src="<?= base_url() ?>assets/js/script.js"></script>
                                <!-- --------------------- -->
                                <!-- ENDS :: Salman's Code -->
                                <!-- --------------------- -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!--- end row -->
            </div>
            <!-- container -->


            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <?php
    $this->load->view('client/components/clientSetting.php');
    ?>
    <!-- Your existing HTML and PHP code -->

    <script type="text/javascript">
        var stepCount = "<?php echo $StepCount; ?>";
        if (stepCount && window.location.hash !== stepCount) {
            // alert('asdf');
            window.location.href = window.location.href.split('#')[0] + stepCount;
        }
    </script>
    <!-- Vendor js -->

    <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/lightbox2/js/lightbox.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

    <!--C3 Chart-->
    <script src="<?= base_url() ?>assets/vendor/d3/d3.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/c3/c3.min.js"></script>


    <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="<?= base_url() ?>assets/js/pages/dashboard-sales.js"></script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('FeedbackSubmitted') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Thanks for your Feedback!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('insuranceDataUpdated') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Insurance Details Submited!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('questionAdded') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Question Submited!');
        </script>
    <?php
    }
    ?>

</body>

</html>