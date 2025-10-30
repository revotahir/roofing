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
 <style>
      input[readonly],input[type="radio"],input[type="checkbox"] {
  background-color: #f0f0f0;
  color: #999;
  cursor: not-allowed;
  border: 1px solid #ccc;
}
    </style>
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
                                                     <div class="col-lg-12">
                                                <div class="card-header p-0">
                                                    <h3>Services Contract</h3><br>
                                                    <h5 class="header-title">Customer Details</h5>
                                                </div>
                                                <div class="card-body pt-2 p-0">
                                                    <form class="form-horizontal parsley-examples" name="initalVisitform" id="initalVisitform" method="post"
                                                        action="<?= base_url('add-initialvisit-data/') . $jobDetail[0]['jobID'].'/?client-view=1' ?>">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Client Name:</label>
                                                                    <input type="text" disabled value="<?= $jobDetail[0]['client_name'] ?>" class="form-control" name="cName"
                                                                        id="cName" placeholder="Client Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Company Representative Name:</label>
                                                                    <input type="text" disabled value="<?= $jobDetail[0]['manager_name'] ?>" class="form-control" name="cRName"
                                                                        id="cRName"
                                                                        placeholder="Company Representative Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Date:</label>
                                                                    <input type="date" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cDate']) && $initialVisitData[0]['cDate'] != '0000-00-00') { ?>
                                                                        value="<?= $initialVisitData[0]['cDate'] ?>"
                                                                        <?php } ?>

                                                                        class="form-control" name="cDate"
                                                                        id="cDate" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!-- Address (takes more space) -->
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Address:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cAddrs'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cAddrs'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cAddrs"
                                                                        id="cAddrs" placeholder="Address" />
                                                                </div>
                                                            </div>

                                                            <!-- City -->
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>City:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cCity'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cCity'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cCity"
                                                                        id="cCity" placeholder="City" />
                                                                </div>
                                                            </div>

                                                            <!-- State -->
                                                            <div class="col-md-2 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>State:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cState'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cState'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cState"
                                                                        id="cState" placeholder="State" />
                                                                </div>
                                                            </div>

                                                            <!-- Zip -->
                                                            <div class="col-md-2 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Zip:</label>
                                                                    <input type="number" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cZip'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cZip'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cZip"
                                                                        id="cZip" placeholder="Zip" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- Home Phone -->
                                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Home Phone:</label>
                                                                    <input type="tel" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cPhone'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cPhone'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cPhone"
                                                                        id="cPhone" placeholder="Home Phone" />
                                                                </div>
                                                            </div>

                                                            <!-- Cell Phone -->
                                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Cell Phone:</label>
                                                                    <input type="tel" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cCell'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cCell'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cCell"
                                                                        id="cCell" placeholder="Cell Phone" />
                                                                </div>
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>E-Mail</label>
                                                                    <input type="email" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cEmail'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cEmail'] ?>"
                                                                        <?php } ?>
                                                                        name="cEmail" id="cEmail"
                                                                        class="form-control" parsley-type="email"
                                                                        placeholder="Enter a valid e-mail" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <h5 class="header-title">Roofing to be Completed:</h5>

                                                        <div class="row">
                                                            <!-- House Square -->
                                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <label>House Square:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cHouseSq'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cHouseSq'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cHouseSq"
                                                                        id="cHouseSq" placeholder="House Square" />
                                                                </div>
                                                            </div>

                                                            <!-- Attached Garage Square -->
                                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Attached Garage Square:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cAttSq'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cAttSq'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cAttSq"
                                                                        id="cAttSq"
                                                                        placeholder="Attached Garage" />
                                                                </div>
                                                            </div>

                                                            <!-- Detached Garage Square -->
                                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Detached Garage Square:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cDetSq'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cDetSq'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cDetSq"
                                                                        id="cDetSq"
                                                                        placeholder="Detached Garage" />
                                                                </div>
                                                            </div>

                                                            <!-- Chimney(s) Square -->
                                                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Chimney(s) Square:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cChiSq'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cChiSq'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cChiSq"
                                                                        id="cChiSq" placeholder="Chimney" />
                                                                </div>
                                                            </div>

                                                            <!-- Other -->
                                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                    <label>Other:</label>
                                                                    <input type="text" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cOthVen'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cOthVen'] ?>"
                                                                        <?php } ?>
                                                                        class="form-control" name="cOthVen"
                                                                        id="cOthVen" placeholder="Other" />
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="row mb-4">
                                                            <!-- 1st Section: Flat Roof -->
                                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                <div class="card" style="height:auto;">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Flat Roof:</h5>
                                                                        <div class="form-check mb-2">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="cFlaYes"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cFlaYes']) && $initialVisitData[0]['cFlaYes'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                value="1" id="cFlaYes" />
                                                                            <label class="form-check-label" for="cFlaYes">Yes</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="cFlaYes"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cFlaYes']) && $initialVisitData[0]['cFlaYes'] == 2) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                value="2" id="cFlaYes2" />
                                                                            <label class="form-check-label" for="cFlaYes2">No Flat
                                                                                Roof</label>
                                                                        </div><br>
                                                                        <h5 class="header-title">Shingle Manufacturer:</h5>
                                                                        <div class="form-group">
                                                                            <label for="">Color 1</label>
                                                                            <input type="text" class="form-control"
                                                                                name="shingleColor1" readonly
                                                                                  <?php if (!empty($initialVisitData[0]['shingleColor1'])) { ?>
                                                                        value="<?= $initialVisitData[0]['shingleColor1'] ?>"
                                                                        <?php } ?>
                                                                                 id="shingleColor1" />
                                                                           
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Color 2</label>
                                                                            <input type="text" class="form-control"
                                                                                name="shingleColor2" readonly
                                                                                <?php if (!empty($initialVisitData[0]['shingleColor2'])) { ?>
                                                                        value="<?= $initialVisitData[0]['shingleColor2'] ?>"
                                                                        <?php } ?>
                                                                                 id="shingleColor2" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Color 3</label>
                                                                            <input type="text" class="form-control"
                                                                                name="shingleColor3" readonly
                                                                                <?php if (!empty($initialVisitData[0]['shingleColor3'])) { ?>
                                                                        value="<?= $initialVisitData[0]['shingleColor3'] ?>"
                                                                        <?php } ?>
                                                                                 id="shingleColor3" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Additional Information</label>
                                                                            <input type="text" class="form-control"
                                                                                name="shingleAddInfo" readonly
                                                                                <?php if (!empty($initialVisitData[0]['shingleAddInfo'])) { ?>
                                                                        value="<?= $initialVisitData[0]['shingleAddInfo'] ?>"
                                                                        <?php } ?>
                                                                                 id="shingleAddInfo" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 2nd Section: House Type -->
                                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                <div class="card " style="height:auto;">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">House Type:</h5>
                                                                        <div class="form-check mb-2">
                                                                            <input type="radio" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cFlaYes']) &&  $initialVisitData[0]['cSingSto'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cSingSto" id="cSingSto" />
                                                                            <label class="form-check-label" for="cSingSto">Single
                                                                                Story</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cFlaYes']) &&  $initialVisitData[0]['cSingSto'] == 2) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cSingSto" value="2" id="cSingSto2" />
                                                                            <label class="form-check-label" for="cSingSto2">Two
                                                                                Story</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 3rd Section: Primary Pitch -->
                                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                                                                <div class="card " style="height:auto;">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Primary Pitch:</h5>
                                                                        <div class="form-check mb-2">
                                                                            <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cPitch']) &&  $initialVisitData[0]['cPitch'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cPitch" value="1" id="cPitch1" />
                                                                            <label class="form-check-label" for="cPitch1">4/12 or
                                                                                Less</label>
                                                                        </div>
                                                                        <div class="form-check mb-2">
                                                                            <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cPitch']) &&  $initialVisitData[0]['cPitch'] == 2) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cPitch" value="2" id="cPitch2" />
                                                                            <label class="form-check-label" for="cPitch2">6/12 to
                                                                                8/12</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cPitch']) &&  $initialVisitData[0]['cPitch'] == 3) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cPitch" value="3" id="cPitch3" />
                                                                            <label class="form-check-label" for="cPitch3">8/12 or
                                                                                Greater</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 4th Section: Existing Ventilation -->
                                                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                                                                <div class="card " style="height:auto;">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Existing Ventilation:</h5>
                                                                        <div class="form-check mb-2">
                                                                            <input type="checkbox" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cRidVen']) &&  $initialVisitData[0]['cRidVen'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cRidVen" id="cRidVen" />
                                                                            <label class="form-check-label" for="cRidVen">Ridge
                                                                                Vent</label>
                                                                        </div>
                                                                        <div class="form-check mb-2">
                                                                            <input type="checkbox" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cSoffVen']) &&  $initialVisitData[0]['cSoffVen'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cSoffVen" id="cSoffVen" />
                                                                            <label class="form-check-label" for="cSoffVen">Soffit
                                                                                Vent</label>
                                                                        </div>
                                                                        <div class="form-check mb-2">
                                                                            <input type="checkbox" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cLouVen']) &&  $initialVisitData[0]['cLouVen'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cLouVen" id="cLouVen" />
                                                                            <label class="form-check-label" for="cLouVen">Louver /
                                                                                Can</label>
                                                                        </div>
                                                                        <div class="form-check mb-2">
                                                                            <input type="checkbox" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cNoVen']) &&  $initialVisitData[0]['cNoVen'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cNoVen" id="cNoVen" />
                                                                            <label class="form-check-label" for="cNoVen">No
                                                                                Ventilation</label>
                                                                        </div>
                                                                        <div class="form-check mb-3">
                                                                            <input type="checkbox" value="1" class="form-check-input"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cTurVen']) &&  $initialVisitData[0]['cTurVen'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cTurVen" id="cTurVen" />
                                                                            <label class="form-check-label" for="cTurVen">Turbine</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Other</label>
                                                                            <input type="text" class="form-control" readonly
                                                                                <?php if (!empty($initialVisitData[0]['cOthVen2'])) { ?>
                                                                                value="<?= $initialVisitData[0]['cOthVen2'] ?>"
                                                                                <?php } ?>
                                                                                name="VencOthVen" id="VencOthVen" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <!-- Replacement Ventilation Section -->
                                                            <div class="col-12 mb-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Replacement Ventilation:
                                                                        </h5>

                                                                        <div class="row">
                                                                            <!-- Checkbox Options Column -->
                                                                            <div class="col-md-6">
                                                                                <div class="form-check mb-3">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cRepc']) &&  $initialVisitData[0]['cRepc'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        name="cRepc" value="1" id="cRepc" />
                                                                                    <label class="form-check-label" for="cRepc">Replace
                                                                                        Existing Ridge Vent</label>
                                                                                </div>

                                                                                <div class="form-group mb-3">
                                                                                    <label>Cut In New Ridge Vent Approx
                                                                                        Length:</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text"
                                                                                            class="form-control" readonly
                                                                                            <?php if (!empty($initialVisitData[0]['cRidg'])) { ?>
                                                                                            value="<?= $initialVisitData[0]['cRidg'] ?>"
                                                                                            <?php } ?>
                                                                                            name="cRidg" id="cRidg"
                                                                                            placeholder="Length" />
                                                                                        <span
                                                                                            class="input-group-text">ft</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Input Fields Column -->
                                                                            <div class="col-md-6">
                                                                                <div class="form-check mb-3">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input" value="1" name="cSof"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cSof']) &&  $initialVisitData[0]['cSof'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        id="cSof" />
                                                                                    <label class="form-check-label" for="cSof">Soffit
                                                                                        Vent</label>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label>Replace Can(s) Qty:</label>
                                                                                    <input type="number" readonly
                                                                                        class="form-control" name="cReplc"
                                                                                        <?php if (!empty($initialVisitData[0]['cReplc'])) { ?>
                                                                                        value="<?= $initialVisitData[0]['cReplc'] ?>"
                                                                                        <?php } ?>
                                                                                        id="cReplc" placeholder="Quantity"
                                                                                        min="0" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row">
                                                            <!-- Gutters Section -->
                                                            <div class="col-lg-6 col-md-12 mb-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title mb-3">Gutters:</h5>

                                                                        <!-- Checkbox Options -->
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <div class="form-check mb-2">
                                                                                    <input type="checkbox"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cGut']) &&  $initialVisitData[0]['cGut'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input" value="1" name="cGut"
                                                                                        id="cGut" />
                                                                                    <label class="form-check-label" for="cGut">House
                                                                                        Does Not Have Gutters</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox" value="1"
                                                                                        class="form-check-input"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cKeep']) &&  $initialVisitData[0]['cKeep'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        name="cKeep" id="cKeep" />
                                                                                    <label class="form-check-label" for="cKeep">Keep
                                                                                        Existing</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- New Gutters Installation -->
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-12">
                                                                                <label class="form-label">Install New
                                                                                    Seamless Gutters:</label>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 mb-2">
                                                                                        <div class="input-group">
                                                                                            <input type="number" readonly
                                                                                                <?php if (!empty($initialVisitData[0]['cLF'])) { ?>
                                                                                                value="<?= $initialVisitData[0]['cLF'] ?>"
                                                                                                <?php } ?>
                                                                                                class="form-control"
                                                                                                name="cLF" id="cLF"
                                                                                                placeholder="Length"
                                                                                                min="0" />
                                                                                            <span
                                                                                                class="input-group-text">LF</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <input type="text"
                                                                                            class="form-control" readonly
                                                                                            <?php if (!empty($initialVisitData[0]['cGutt'])) { ?>
                                                                                            value="<?= $initialVisitData[0]['cGutt'] ?>"
                                                                                            <?php } ?>
                                                                                            name="cGutt" id="cGutt"
                                                                                            placeholder="Gutter Type" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Color Picker -->
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Color</label>
                                                                                <input type="text" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cColor'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cColor'] ?>"
                                                                                    <?php } ?>
                                                                                    class="form-control "
                                                                                    name="cColor" id="cColor" /> <br>
                                                                                    <span>Certain gutter color selections may require an upcharge if manufacturer does not provide that color as a base. Gutter would have to be painted with exterior metal paint.
Paint match will be closest relative and may not be exact.</span>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Quantity Inputs -->
                                                                        <div class="row">
                                                                            <div class="col-md-6 mb-2">
                                                                                <label class="form-label">1-Story Down Spout
                                                                                    Qty:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cDown'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cDown'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cDown" id="cDown"
                                                                                    placeholder="Qty" min="0" />
                                                                            </div>
                                                                            <div class="col-md-6 mb-2">
                                                                                <label class="form-label">2-Story Down Spout
                                                                                    Qty:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cDown2'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cDown2'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cDown2" id="cDown2"
                                                                                    placeholder="Qty" min="0" />
                                                                            </div>
                                                                            <div class="col-md-6 mb-2">
                                                                                <label class="form-label">Inside Corner
                                                                                    Qty:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cInsCor'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cInsCor'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cInsCor" id="cInsCor"
                                                                                    placeholder="Qty" min="0" />
                                                                            </div>
                                                                            <div class="col-md-6 mb-2">
                                                                                <label class="form-label">Outside Corner
                                                                                    Qty:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cOutCor'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cOutCor'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cOutCor" id="cOutCor"
                                                                                    placeholder="Qty" min="0" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="form-label">Splash Guard
                                                                                    Qty:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cSplCor'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cSplCor'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cSplCor" id="cSplCor"
                                                                                    placeholder="Qty" min="0" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Gutter Guard Section -->
                                                            <div class="col-lg-6 col-md-12 mb-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title mb-3">Gutter Guard:</h5>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-check mb-3">
                                                                                    <input type="checkbox" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cGutGur']) &&  $initialVisitData[0]['cGutGur'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input"
                                                                                        name="cGutGur" id="cGutGur" />
                                                                                    <label class="form-check-label" for="cGutGur">No
                                                                                        Gutter Protection Present</label>
                                                                                </div>

                                                                                <div class="form-check mb-3">
                                                                                    <input type="checkbox" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cGutHome']) &&  $initialVisitData[0]['cGutHome'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input"
                                                                                        name="cGutHome" id="cGutHome" />
                                                                                    <label
                                                                                        class="form-check-label" for="cGutHome">Homeowner
                                                                                        to Remove Prior to Install &
                                                                                        Homeowner to Re-install
                                                                                        Later</label>
                                                                                </div>

                                                                                <div class="form-check mb-3">
                                                                                    <input type="checkbox" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cGutRem']) &&  $initialVisitData[0]['cGutRem'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input"
                                                                                        name="cGutRem" id="cGutRem" />
                                                                                    <label
                                                                                        class="form-check-label" for="cGutRem">Contractor
                                                                                        to Remove & Haul Away</label>
                                                                                </div>

                                                                                <div class="form-check">
                                                                                    <input type="checkbox" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cGutNeed']) &&  $initialVisitData[0]['cGutNeed'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input"
                                                                                        name="cGutNeed" id="cGutNeed" />
                                                                                    <label class="form-check-label" for="cGutNeed">Needs
                                                                                        New Gutter Protection</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="row">
                                                            <!-- 1st Section: Accessory Color Selection -->
                                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                                                <div class="card h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Accessory Color Selection:
                                                                        </h5>
                                                                        <div class="form-group mb-3">
                                                                            <label>Drip Edge:</label>
                                                                            <input type="text" class="form-control" readonly
                                                                                <?php if (!empty($initialVisitData[0]['cDrip'])) { ?>
                                                                                value="<?= $initialVisitData[0]['cDrip'] ?>"
                                                                                <?php } ?>
                                                                                name="cDrip" id="cDrip"
                                                                                placeholder="Drip Edge" />
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Can Vents:</label>
                                                                            <input type="text" class="form-control" readonly
                                                                                <?php if (!empty($initialVisitData[0]['cCanVent'])) { ?>
                                                                                value="<?= $initialVisitData[0]['cCanVent'] ?>"
                                                                                <?php } ?>
                                                                                name="cCanVent" id="cCanVent"
                                                                                placeholder="Can Vents" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 2nd Section: Fascia/Soffit -->
                                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
                                                                <div class="card h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Fascia/Soffit:</h5>
                                                                        <div class="form-check mb-3">
                                                                            <input type="checkbox" class="form-check-input" value="1"  onclick="return false;"
                                                                                <?php if (!empty($initialVisitData[0]['cKeepEx']) &&  $initialVisitData[0]['cKeepEx'] == 1) { ?>
                                                                                checked
                                                                                <?php } ?>
                                                                                name="cKeepEx" id="cKeepEx" />
                                                                            <label class="form-check-label" for="cKeepEx">Keep
                                                                                Existing</label>
                                                                        </div>
                                                                        <div class="form-group mb-3">
                                                                            <label>Replace LF of Fascia:</label>
                                                                            <div class="input-group">
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cRplcL'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cRplcL'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cRplcL" id="cRplcL"
                                                                                    placeholder="Length" min="0" />
                                                                                <span class="input-group-text">LF</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Replace LF of Soffit:</label>
                                                                            <div class="input-group">
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cRplcS'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cRplcS'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cRplcS" id="cRplcS"
                                                                                    placeholder="Length" min="0" />
                                                                                <span class="input-group-text">LF</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- 3rd Section: Tearoff Layers -->
                                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-4">
                                                                <div class="card h-100">
                                                                    <div class="card-body">
                                                                        <h5 class="header-title">Tearoff Layers:</h5>
                                                                        <div class="row mb-3">
                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input type="radio" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['c1Layer']) &&  $initialVisitData[0]['c1Layer'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        class="form-check-input"
                                                                                        name="c1Layer" id="c1Layer" />
                                                                                    <label class="form-check-label" for="c1Layer">1
                                                                                        Layer</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="form-check">
                                                                                    <input type="radio"
                                                                                        class="form-check-input" value="2"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['c1Layer']) &&  $initialVisitData[0]['c1Layer'] == 2) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        name="c1Layer" id="c1Layer2" />
                                                                                    <label class="form-check-label" for="c1Layer2">2 Layer
                                                                                        (See below)</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Layers:</label>
                                                                            <p class="small text-muted mb-2">Your price is
                                                                                based on a single layer tearoff. Each
                                                                                additional layer will be charged extra.</p>
                                                                            <div class="input-group">
                                                                                <span class="input-group-text">$</span>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cLyrPre'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cLyrPre'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cLyrPre" id="cLyrPre"
                                                                                    placeholder="Price per layer" min="0"
                                                                                    step="0.01" />
                                                                                <span class="input-group-text">per
                                                                                    layer</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>






                                                        <h5 class="header-title">Wood Replacement:</h5>
                                                        <span>Our wood pricing is seperate from your roofing
                                                            contract due to the fact that we do not always
                                                            know in advance if you will need it. The wood is separate
                                                            from the main contract price. When doing a roof there is
                                                            always a possibility of finding wood that is rotted and will
                                                            not grasp a roofing nail that is driven into it. The amount of
                                                            wood is determined by the number of square on your
                                                            contract. There are (3) sheets er square.</span>
                                                        <div class="form-group mt-2">
                                                            <label>Initials</label>
                                                            <textarea type="textarea" class="form-control" name="cInit"
                                                                id="cInit" placeholder="Initials"><?php if (!empty($initialVisitData[0]['cInit'])) { ?><?= $initialVisitData[0]['cInit'] ?><?php } ?></textarea>
                                                        </div>
                                                        <h5 class="header-title">Permits:</h5>
                                                        <span>Not all municipalities require roofing permits. We do not want
                                                            to charge our
                                                            customers up front for something that isn't needed. If a permit
                                                            is needed,
                                                            Contractor will apply for the permit on your behalf. We do this
                                                            at no extra
                                                            charge. However, we will bill you for the actual cost of the
                                                            permit.</span>
                                                        <div class="form-group mt-2">
                                                            <label>Initials</label>
                                                            <textarea type="textarea" class="form-control" name="cPer"
                                                                id="cPer" placeholder="Initials"><?php if (!empty($initialVisitData[0]['cPer'])) { ?><?= $initialVisitData[0]['cPer'] ?><?php } ?></textarea>
                                                        </div>



                                                        <h5 class="header-title">NOTES:</h5>
                                                        <textarea type="textarea" class="form-control" name="cNotes"
                                                            id="cNotes" placeholder="NOTES"><?php if (!empty($initialVisitData[0]['cNotes'])) { ?><?= $initialVisitData[0]['cNotes'] ?><?php } ?></textarea>


                                                        <div class="card mt-4">
                                                            <div class="card-body">
                                                                <h5 class="header-title mb-4">Payment Details:</h5>

                                                                <div class="row">
                                                                    <!-- Payment Method Selection -->
                                                                    <div class="col-md-6 mb-4">
                                                                        <div class="payment-methods">
                                                                            <div class="form-check mb-3">
                                                                                <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                    <?php if (!empty($initialVisitData[0]['paymentMethod']) &&  $initialVisitData[0]['paymentMethod'] == 1) { ?>
                                                                                    checked
                                                                                    <?php } ?>
                                                                                    name="paymentMethod" value="1" id="cCash" />
                                                                                <label class="form-check-label" for="cCash">Cash</label>
                                                                            </div>

                                                                            <div class="form-check mb-3">
                                                                                <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                    <?php if (!empty($initialVisitData[0]['paymentMethod']) &&  $initialVisitData[0]['paymentMethod'] == 4) { ?>
                                                                                    checked
                                                                                    <?php } ?>
                                                                                    name="paymentMethod" value="4" id="EDeposit" />
                                                                                <label class="form-check-label" for="EDeposit">Electronic Deposit (ACH)</label>
                                                                            </div>
                                                                            <div class="form-check mb-3">
                                                                                <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                    <?php if (!empty($initialVisitData[0]['paymentMethod']) &&  $initialVisitData[0]['paymentMethod'] == 5) { ?>
                                                                                    checked
                                                                                    <?php } ?>
                                                                                    name="paymentMethod" value="4" id="wireTransfer" />
                                                                                <label class="form-check-label" for="wireTransfer">Wire Transfer</label>
                                                                            </div>
                                                                            <div class="form-check mb-3">
                                                                                <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                    <?php if (!empty($initialVisitData[0]['paymentMethod']) &&  $initialVisitData[0]['paymentMethod'] == 2) { ?>
                                                                                    checked
                                                                                    <?php } ?>
                                                                                    name="paymentMethod" value="2" id="cPerCash" />
                                                                                <label class="form-check-label" for="cPerCash">Cashiers Check</label>
                                                                            </div>

                                                                            <!-- Check Details (shown when Personal Check is selected) -->
                                                                            <div class="check-details mb-4"
                                                                                style="display: none;">
                                                                                <div class="form-group mb-3">
                                                                                    <label>Check #:</label>
                                                                                    <input type="text"
                                                                                        class="form-control" name="cCheck" readonly
                                                                                        <?php if (!empty($initialVisitData[0]['cCheck'])) { ?>
                                                                                        value="<?= $initialVisitData[0]['cCheck'] ?>"
                                                                                        <?php } ?>
                                                                                        id="cCheck"
                                                                                        placeholder="Check Number" />
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input type="checkbox"
                                                                                        class="form-check-input" value="1"  onclick="return false;"
                                                                                        <?php if (!empty($initialVisitData[0]['cCheckRecei']) &&  $initialVisitData[0]['cCheckRecei'] == 1) { ?>
                                                                                        checked
                                                                                        <?php } ?>
                                                                                        name="cCheckRecei"
                                                                                        id="cCheckRecei" />
                                                                                    <label class="form-check-label" for="cCheckRecei">Check
                                                                                        Received</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input"  onclick="return false;"
                                                                                    <?php if (!empty($initialVisitData[0]['paymentMethod']) &&  $initialVisitData[0]['paymentMethod'] == 3) { ?>
                                                                                    checked
                                                                                    <?php } ?>
                                                                                    name="paymentMethod" value="3" id="cCredit" />
                                                                                <label class="form-check-label" for="cCredit">Credit
                                                                                    Card</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Credit Card Details (shown when Credit Card is selected) -->
                                                                    <div class="col-md-6 credit-card-details"
                                                                        style="display: none;">
                                                                        <div class="form-group mb-3">
                                                                            <label>Name on Credit Card:</label>
                                                                            <input type="text" class="form-control" readonly
                                                                                <?php if (!empty($initialVisitData[0]['cCreditName'])) { ?>
                                                                                value="<?= $initialVisitData[0]['cCreditName'] ?>"
                                                                                <?php } ?>
                                                                                name="cCreditName" id="cCreditName"
                                                                                placeholder="Name on Credit Card" />
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                                                            <label>Card #:</label>
                                                                            <input type="text" class="form-control" readonly
                                                                                <?php if (!empty($initialVisitData[0]['cCard'])) { ?>
                                                                                value="<?= $initialVisitData[0]['cCard'] ?>"
                                                                                <?php } ?>
                                                                                name="cCard" id="cCard"
                                                                                placeholder="Card Number" />
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6 form-group mb-3">
                                                                                <label>Exp. Date:</label>
                                                                                <input type="month" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cDateCredit'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cDateCredit'] ?>"
                                                                                    <?php } ?>
                                                                                    name="ExpDate" id="ExpDate" /> <br>

                                                                            </div>

                                                                            <div class="col-md-6 form-group mb-3">
                                                                                <label>CVC:</label>
                                                                                <input type="number" class="form-control" readonly
                                                                                    <?php if (!empty($initialVisitData[0]['cCVC'])) { ?>
                                                                                    value="<?= $initialVisitData[0]['cCVC'] ?>"
                                                                                    <?php } ?>
                                                                                    name="cCVC" id="cCVC" placeholder="CVC"
                                                                                    maxlength="4" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <h5 class="header-title mb-3">Dedicated Field PM:</h5>

                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                                                                <div class="form-group">
                                                                    <label>Assigned Project Manager:</label>
                                                                    <input type="text" class="form-control" name="cCont" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cCont'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cCont'] ?>"
                                                                        <?php } ?>
                                                                        id="cCont" placeholder="Contractor Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-3">
                                                                <div class="form-group">
                                                                    <label>Project Manager Email Address:</label>
                                                                    <input type="email" class="form-control" name="cContPhone" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cContPhone'])) { ?>
                                                                        value="<?= $initialVisitData[0]['cContPhone'] ?>"
                                                                        <?php } ?>
                                                                        id="cContPhone"
                                                                        placeholder="Email" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <h5 class="header-title mt-4">Notice to Customer:</h5>
                                                        <span>Upon signing this agreement, I acknowledge I
                                                            accept to the quote provided by A-MEN Roof-
                                                            ing Group and choose solely to work with the
                                                            company on any and all items listed above.</span>
                                                        <span>If there are any supplements approved by my insurance provider
                                                            in addition to initial estimates as determined
                                                            by an adjustor, I acknowledge that
                                                            A-MEN Roofing Group will be paid
                                                            100% of such supplements.</span>
                                                        <div class="form-group mt-2">
                                                            <label>Initials</label>
                                                            <textarea type="textarea" class="form-control" name="cNotic"
                                                                id="cNotic" placeholder="Initials"><?php if (!empty($initialVisitData[0]['cNotic'])) { ?><?= $initialVisitData[0]['cNotic'] ?><?php } ?></textarea>
                                                        </div>

                                                        <!-- First Customer Signature -->
                                                        <div class="form-group mt-4">
                                                            <label>Customer Signature</label>



                                                            <div style="border: 1px solid #ddd; border-radius: 4px; background: #f8f8f8;">
                                                                <canvas id="signature-pad-1" class="signature-pad"
                                                                    style="width: 100%; height: 200px; touch-action: none;"></canvas>
                                                            </div>
                                                            <div class="mt-2">
                                                                <?php 
                                                                if (empty($initialVisitData[0]['signature_1'])) { ?>
                                                                
                                                                <button type="button"
                                                                    class="btn btn-secondary btn-sm clear-signature"
                                                                    data-pad="1">Clear Signature</button>
                                                                    <?php 
                                                                }
                                                                ?>
                                                            </div>
                                                            <input type="hidden" id="signature-data-1" name="signature_1"
                                                                <?php if (!empty($initialVisitData[0]['signature_1'])) { ?>
                                                                value="<?= $initialVisitData[0]['signature_1'] ?>"
                                                                <?php } ?>>

                                                        </div>

                                                        <div class="row mt-4">
                                                            <h5 class="header-title mb-3">Roofing Contract Customer
                                                                Approval:</h5>

                                                            <!-- Signature Pad -->
                                                            <div class="col-lg-8 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Customer Signature</label>
                                                                    <div
                                                                        style="border: 1px solid #ddd; border-radius: 4px; background: #f8f8f8;">
                                                                        <canvas id="signature-pad-2" class="signature-pad"
                                                                            style="width: 100%; height: 200px; touch-action: none;"></canvas>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <?php 
                                                                        if (empty($initialVisitData[0]['signature_2'])) {
                                                                        ?>
                                                                        <button type="button"
                                                                            class="btn btn-secondary btn-sm clear-signature"
                                                                            data-pad="2">
                                                                            Clear Signature
                                                                        </button>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <input type="hidden" id="signature-data-2"
                                                                        <?php if (!empty($initialVisitData[0]['signature_2'])) { ?>
                                                                        value="<?= $initialVisitData[0]['signature_2'] ?>"
                                                                        <?php } ?>
                                                                        name="signature_2">
                                                                </div>
                                                            </div>

                                                            <!-- Date Field -->
                                                            <div class="col-lg-4 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Date(Automatically updated):</label>
                                                                    <input type="date" class="form-control" name="cAppDate1" readonly
                                                                        <?php if (!empty($initialVisitData[0]['cDate1']) && $initialVisitData[0]['cDate1'] != '0000-00-00') { ?>
                                                                        value="<?= $initialVisitData[0]['cDate1'] ?>"
                                                                        <?php } ?>
                                                                        id="cAppDate1" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Full Name:</label>
                                                                    <input type="text" class="form-control" name="cAppName" 
                                                                        <?php if (!empty($initialVisitData[0]['cAppName']) && $initialVisitData[0]['cAppName'] != '') { ?>
                                                                        value="<?= $initialVisitData[0]['cAppName'] ?>"
                                                                        <?php } ?>
                                                                        id="cAppName" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                      
                                                      


                                                        <div class="row mt-4">
                                                            <h5 class="header-title mb-3">Payment Details:</h5>

                                                            <!-- Project Total -->
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group">
                                                                    <label>PROJECT TOTAL: $</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text">$</span>
                                                                        <input type="number" class="form-control" readonly
                                                                            <?php if (!empty($initialVisitData[0]['pTotal'])) { ?>
                                                                            value="<?= $initialVisitData[0]['pTotal'] ?>"
                                                                            <?php } ?>
                                                                            name="pTotal" id="pTotal"
                                                                            placeholder="0.00" step="0.01" min="0">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Down Payment -->
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group">
                                                                    <label>DOWN PAYMENT: $</label>
                                                                    <div class="input-group mb-2">
                                                                        <span class="input-group-text">$</span>
                                                                        <input type="number" class="form-control"
                                                                            name="cDownPay" id="cDownPay" readonly
                                                                            <?php if (!empty($initialVisitData[0]['cDownPay'])) { ?>
                                                                            value="<?= $initialVisitData[0]['cDownPay'] ?>"
                                                                            <?php } ?>
                                                                            placeholder="0.00" step="0.01" min="0">
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <input type="number" class="form-control me-2"
                                                                            name="cPreApp" id="cPreApp" placeholder="%" readonly
                                                                            <?php if (!empty($initialVisitData[0]['cPreApp'])) { ?>
                                                                            value="<?= $initialVisitData[0]['cPreApp'] ?>"
                                                                            <?php } ?>
                                                                            style="width: 80px;" min="0" max="100">
                                                                        <small class="text-muted">Deposit unless
                                                                            Pre-Approved</small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Balance Due -->
                                                            <div class="col-md-4 mb-3">
                                                                <div class="form-group">
                                                                    <label>BALANCE DUE: $</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-text">$</span>
                                                                        <input type="number" class="form-control"
                                                                            name="cBal" id="cBal" readonly
                                                                            <?php if (!empty($initialVisitData[0]['cBal'])) { ?>
                                                                            value="<?= $initialVisitData[0]['cBal'] ?>"
                                                                            <?php } ?>
                                                                            placeholder="0.00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="form-group mt-2">
                                                            <div>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light me-1">
                                                                    Update
                                                                </button>
                                                               
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i class="mdi mdi-file-check-outline"> Sign On Completed</i> </a>
                                                        <a href="<?= base_url('download-initialvisit-pdf/') . $jobDetail[0]['jobID'] ?>" class=" btn btn-outline-primary " style="float: none;"><i class="mdi mdi-download-box-outline"> Download PDF</i> </a>
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
                                                                    <a href="https://amenroofinggroup.com/Financing/" target="_blank" class="btn btn-primary waves-effect waves-light me-1">
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
                                                        
                                            <!-- new form start here -->
                                            <div class="col-lg-12">
                                                <div class="card-body pt-2 p-0">
                                                    <form class="form-horizontal parsley-examples" name="jobCloseform" id="jobCloseform" method="post"
                                                        action="<?= base_url('add-job-close-form-data/') . $jobDetail[0]['jobID'] ?>">


                                                        <h5 class="header-title">Customer Details:</h5>

                                                        <div class="row">
                                                            <!-- Customer Name -->
                                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Customer Name:</label>
                                                                    <input type="text" class="form-control" name="cCustName"
                                                                        value="<?= $jobDetail[0]['client_name'] ?> "
                                                                        readonly
                                                                        id="cCustName"
                                                                        placeholder="Customer Name" />
                                                                </div>
                                                            </div>

                                                            <!-- Approval Presented By -->
                                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Approval Presented By:</label>
                                                                    <input type="text" class="form-control" name="cAppPres" readonly
                                                                        value="<?=$initialVisitData[0]['cRName']?>"
                                                                        id="cAppPres"
                                                                        placeholder="Approval Presented By" />
                                                                </div>
                                                            </div>

                                                            <!-- Completion Date -->
                                                            <div class="col-lg-4 col-md-3 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Completion Date:</label>
                                                                    <input type="date" class="form-control" name="cCompDate"
                                                                        id="cCompDate"
                                                                        <?php
                                                                        if ((!empty($jobCloseFormData[0]['cCompDate']) && $jobCloseFormData[0]['cCompDate'] != '0000-00-00')) { ?>
                                                                        value="<?= $jobCloseFormData[0]['cCompDate'] ?>" ;
                                                                        <?php } ?>
                                                                        placeholder="Completion Date" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!-- Address (takes more space) -->
                                                            <div class="col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Address:</label>
                                                                    <input type="text" class="form-control" name="cAddrs" readonly
                                                                    
                                                                        value="<?=$initialVisitData[0]['cAddrs']?>"
                                                                        id="cAddrs" placeholder="Address" />
                                                                </div>
                                                            </div>

                                                            <!-- City -->
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>City:</label>
                                                                    <input type="text" class="form-control" name="cCity" readonly
                                                                       value="<?=$initialVisitData[0]['cCity']?>"
                                                                        id="cCity" placeholder="City" />
                                                                </div>
                                                            </div>

                                                            <!-- State -->
                                                            <div class="col-md-2 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>State:</label>
                                                                    <input type="text" class="form-control" name="cState" readonly
                                                                      value="<?=$initialVisitData[0]['cState']?>"
                                                                        id="cState" placeholder="State" />
                                                                </div>
                                                            </div>

                                                            <!-- Zip -->
                                                            <div class="col-md-2 col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Zip:</label>
                                                                    <input type="number" class="form-control" name="cZip" readonly
                                                                        value="<?=$initialVisitData[0]['cZip']?>"
                                                                        id="cZip" placeholder="Zip" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- Home Phone -->
                                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Home Phone:</label>
                                                                    <input type="tel" class="form-control" name="cPhone" readonly
                                                                         value="<?=$initialVisitData[0]['cPhone']?>"
                                                                        id="cPhone" placeholder="Home Phone" />
                                                                </div>
                                                            </div>

                                                            <!-- Cell Phone -->
                                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Cell Phone:</label>
                                                                    <input type="tel" class="form-control" name="cCell" readonly
                                                                        value="<?=$initialVisitData[0]['cCell']?>"
                                                                        id="cCell" placeholder="Cell Phone" />
                                                                </div>
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>E-Mail</label>
                                                                    <input type="email" name="cEmail" id="cEmail" readonly
                                                                        class="form-control" parsley-type="email"
                                                                         value="<?=$initialVisitData[0]['cEmail']?>"
                                                                        placeholder="Enter a valid e-mail" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <h5 class="header-title">Customer Approval:</h5>
                                                        <p>The work performed under the Contract Documents for the
                                                            completed project, has been reviewed & found to be complete.
                                                            Further-
                                                            more, I agree as the homeowner, the work described in the
                                                            original contract, the work described in all change order
                                                            documents & any
                                                            additional work performed by Contractor on these premises has
                                                            been completed to satisfaction. Furthermore, l, the homeowner,
                                                            terminate all further obligations of Contractor in the signed
                                                            contract and any other subsequent documents.</p>
                                                        <p>An inspection of any and all items pertaining to the project has
                                                            been completed and l, the homeowner, accept the project as-is.
                                                            As the homeowner, I understand from now on that I am unable to
                                                            make a claim against Contractor for overlooking any item that
                                                            was not brought to the attention of Contractor during the
                                                            inspection or final walk-through.</p>
                                                        <div class="row mt-4">
                                                            <!-- 1st Customer Signature -->
                                                            <div class="col-lg-8 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Customer Signature</label>
                                                                    <div class="border rounded bg-light p-2">
                                                                        <canvas id="signature-pad-55"
                                                                            class="signature-pad w-100"
                                                                            style="height: 200px; touch-action: none;"></canvas>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <button type="button"
                                                                            class="btn btn-secondary btn-sm clear-signature"
                                                                            data-pad="55">
                                                                            Clear Signature
                                                                        </button>
                                                                    </div>
                                                                    <input type="hidden" id="signature-data-55"
                                                                        <?php
                                                                        if (!empty($jobCloseFormData[0]['signature_55'])) { ?>
                                                                        value="<?= $jobCloseFormData[0]['signature_55'] ?>" ;
                                                                        <?php } ?>
                                                                        name="signature_55">
                                                                </div>
                                                            </div>

                                                            <!-- Date Field -->
                                                            <div class="col-lg-4 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Date:</label>
                                                                    <input type="date" class="form-control" name="cDate55"
                                                                        <?php
                                                                        if ((!empty($jobCloseFormData[0]['cDate55']) && $jobCloseFormData[0]['cDate55'] != '0000-00-00')) { ?>
                                                                        value="<?= $jobCloseFormData[0]['cDate55'] ?>" ;
                                                                        <?php } ?>
                                                                        id="cDate55" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <!-- Insurance Company Signature -->
                                                            <div class="col-lg-8 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Insurance Company</label>
                                                                    <div class="border rounded bg-light p-2">
                                                                        <canvas id="signature-pad-56"
                                                                            class="signature-pad w-100"
                                                                            style="height: 200px; touch-action: none;"></canvas>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <button type="button"
                                                                            class="btn btn-secondary btn-sm clear-signature"
                                                                            data-pad="56">
                                                                            Clear Signature
                                                                        </button>
                                                                    </div>
                                                                    <input type="hidden" id="signature-data-56"
                                                                        <?php
                                                                        if (!empty($jobCloseFormData[0]['signature_56'])) { ?>
                                                                        value="<?= $jobCloseFormData[0]['signature_56'] ?>" ;
                                                                        <?php } ?>
                                                                        name="signature_56">
                                                                </div>
                                                            </div>

                                                            <!-- Claim # Field -->
                                                            <div class="col-lg-4 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Claim #:</label>
                                                                    <input type="text" class="form-control" name="cClaim"
                                                                        <?php
                                                                        if (!empty($jobCloseFormData[0]['cClaim'])) { ?>
                                                                        value="<?= $jobCloseFormData[0]['cClaim'] ?>" ;
                                                                        <?php } ?>
                                                                        id="cClaim" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <h5 class="header-title">Warranty:</h5>
                                                        <p>l, the homeowner, understand that the duration of all implied
                                                            warranties has been limited to FIVE YEARS from the date of final
                                                            payment or the date of completion, whichever comes first. I also
                                                            understand that no warranties are being made by Contractor,
                                                            except that materials and equipment furnished under the Contract
                                                            Documents will be of good quality & new, unless otherwise
                                                            or permitted by the Contract Documents, that the work
                                                            will be free from defects not inherent in the quality
                                                            or
                                                            permitted, and that the work will conform with the requirement
                                                            of
                                                            the Contract Documents. Accepting the Limited Warranty, the
                                                            buyer will not have the right to recover or receive compensation
                                                            for any incidental, consequential, secondary, punitive or
                                                            special
                                                            damages nor any costs or attorney's fees.
                                                            Contractor also warrants to the homeowner that all construction
                                                            and related services provided were performed in a good and
                                                            workmanlike manner, by workers who are appropriately trained
                                                            and experienced in the work being performed, and in accordance
                                                            with all requirements of the contract documents, industry
                                                            standards for projects of similar type and quality. If labor
                                                            shall
                                                            prove to be defective within FIVE YEARS of the date of
                                                            completion, contractor will make repairs at its own costs and
                                                            expense. This warranty shall not apply to damage or loss
                                                            resulting
                                                            from fire, tornado, windstorm, snowload, flood, explosion,
                                                            misuse,
                                                            customer negligence, the customers failure to perform routine
                                                            cleaning, maintenance & tasks for protecting projects
                                                            exposed to the outdoor elements, alterations made by the
                                                            customer, or any and all conditions beyond the control of or not
                                                            caused by Contractor. If during the warranty period, installed
                                                            or
                                                            provided materials are deemed to have a manufacturer defect, the
                                                            labor to remove & replace the defective product will be billed &
                                                            charged at the expense of the customer, not Contractor.</p>
                                                        <div class="row mt-4">
                                                            <!-- 1st Customer Signature with Warning -->
                                                            <div class="col-lg-8 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Customer Signature</label>
                                                                    <div class="border rounded bg-light p-2">
                                                                        <canvas id="signature-pad-warn"
                                                                            class="signature-pad w-100"
                                                                            style="height: 200px; touch-action: none;"></canvas>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <button type="button"
                                                                            class="btn btn-secondary btn-sm clear-signature"
                                                                            data-pad="warn">
                                                                            Clear Signature
                                                                        </button>
                                                                    </div>
                                                                    <input type="hidden" id="signature-data-warn"
                                                                        <?php
                                                                        if (!empty($jobCloseFormData[0]['signature_warn'])) { ?>
                                                                        value="<?= $jobCloseFormData[0]['signature_warn'] ?>" ;
                                                                        <?php } ?>
                                                                        name="signature_warn">
                                                                </div>
                                                            </div>

                                                            <!-- Date Field -->
                                                            <div class="col-lg-4 col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label>Date:</label>
                                                                    <input type="date" class="form-control" name="cDatewarn"
                                                                        <?php
                                                                        if ((!empty($jobCloseFormData[0]['cDatewarn']) && $jobCloseFormData[0]['cDatewarn'] != '0000-00-00')) { ?>
                                                                        value="<?= $jobCloseFormData[0]['cDatewarn'] ?>" ;
                                                                        <?php } ?>
                                                                        id="cDatewarn" />
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row mt-2">
                                                            <div class="col-12">
                                                                <h5 class="header-title mb-3">Release of Lien Upon Final
                                                                    Payment:</h5>
                                                                <div class="alert alert-light mb-4">
                                                                    <p class="mb-0">Contractor has been paid-in-full and all
                                                                        payments and obligations by the homeowner have been
                                                                        satisfied. Furthermore Contractor releases all liens
                                                                        or intent to lien documents upon final payment.</p>
                                                                </div>

                                                                <!-- Payment Calculation Section -->
                                                                <div class="row mb-4">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-3">
                                                                            <label>Original Contract Total $:</label>
                                                                            <input type="number" class="form-control"
                                                                                name="ContTotal" id="ContTotal"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['ContTotal'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['ContTotal'] ?>" ;
                                                                                <?php } ?>
                                                                                placeholder="0.00" step="0.01" min="0">
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <label class="me-2">Change Order(s) Total
                                                                                    $:</label>
                                                                                <strong class="me-2">+/-</strong>
                                                                            </div>
                                                                            <input type="number" class="form-control"
                                                                                name="ChangeOrderTotal"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['ChangeOrderTotal'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['ChangeOrderTotal'] ?>" ;
                                                                                <?php } ?>
                                                                                id="ChangeOrderTotal"
                                                                                placeholder="0.00" step="0.01">
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <label class="me-2">Project Total $:</label>
                                                                                <strong class="me-2">=</strong>
                                                                            </div>
                                                                            <input type="number" class="form-control"
                                                                                name="ProjTotal" id="ProjTotal"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['ProjTotal'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['ProjTotal'] ?>" ;
                                                                                <?php } ?>
                                                                                placeholder="0.00" step="0.01">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <label class="me-2">Payment #1 - Down
                                                                                    Payment $:</label>
                                                                                <strong class="me-2">-</strong>
                                                                            </div>
                                                                            <input type="number" class="form-control"
                                                                                name="PaymentDown" id="PaymentDown"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['PaymentDown'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['PaymentDown'] ?>" ;
                                                                                <?php } ?>
                                                                                placeholder="0.00" step="0.01" min="0">
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <label class="me-2">Payment #2 $:</label>
                                                                                <strong class="me-2">-</strong>
                                                                            </div>
                                                                            <input type="number" class="form-control"
                                                                                name="PaymentDown2" id="PaymentDown2"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['PaymentDown2'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['PaymentDown2'] ?>" ;
                                                                                <?php } ?>
                                                                                placeholder="0.00" step="0.01"
                                                                                min="0">
                                                                        </div>

                                                                        <div class="form-group mb-3">
                                                                            <div class="d-flex align-items-center">
                                                                                <label class="me-2">Final Payment Amount Due
                                                                                    $:</label>
                                                                                <strong class="me-2">=</strong>
                                                                            </div>
                                                                            <input type="number" class="form-control"
                                                                                name="FinalPay" id="FinalPay"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['FinalPay'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['FinalPay'] ?>" ;
                                                                                <?php } ?>
                                                                                placeholder="0.00" step="0.01">
                                                                        </div>


                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Check Number:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="CheckNumber" id="CheckNumber"
                                                                            <?php
                                                                            if (!empty($jobCloseFormData[0]['CheckNumber'])) { ?>
                                                                            value="<?= $jobCloseFormData[0]['CheckNumber'] ?>" ;
                                                                            <?php } ?>
                                                                            placeholder="Check #">
                                                                    </div>
                                                                </div>

                                                                <!-- Signature Section -->
                                                                <div class="row mt-4">
                                                                    <div class="col-lg-8 col-md-12 mb-3">
                                                                        <div class="form-group">
                                                                            <label>Customer Signature</label>
                                                                            <div class="border rounded bg-light p-2">
                                                                                <canvas id="signature-pad-end"
                                                                                    class="signature-pad w-100"
                                                                                    style="height: 200px; touch-action: none;"></canvas>
                                                                            </div>
                                                                            <div class="mt-2">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary btn-sm clear-signature"
                                                                                    data-pad="end">
                                                                                    Clear Signature
                                                                                </button>
                                                                            </div>
                                                                            <input type="hidden" id="signature-data-end"
                                                                                <?php
                                                                                if (!empty($jobCloseFormData[0]['signature_end'])) { ?>
                                                                                value="<?= $jobCloseFormData[0]['signature_end'] ?>" ;
                                                                                <?php } ?>
                                                                                name="signature_end">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4 col-md-12 mb-3">
                                                                        <div class="form-group">
                                                                            <label>Date:</label>
                                                                            <div class="input-group">
                                                                                <input type="date" class="form-control"
                                                                                    <?php
                                                                                    if ((!empty($jobCloseFormData[0]['cDateend']) && $jobCloseFormData[0]['cDateend'] != '0000-00-00')) { ?>
                                                                                    value="<?= $jobCloseFormData[0]['cDateend'] ?>" ;
                                                                                    <?php } ?>
                                                                                    name="cDateend" id="cDateend" />
                                                                                <span class="input-group-text">
                                                                                    <i class="bi bi-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>










                                                        <div class="form-group mt-2">
                                                            <div>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light me-1">
                                                                    Submit
                                                                </button>
                                                                <a href="<?= base_url('mark-job-close-complete/') . $jobDetail[0]['jobID'] ?>"
                                                class=" btn btn-danger" onclick="return validateJobCloseCompletion()" style="float: none;"><i
                                                    class="mdi mdi-file-check-outline"> Mark as Complete</i> </a>
                                                    <script>
                                                        function validateJobCloseCompletion() {
                                                            return confirm('Are you sure you want to mark this job as complete?You will not be able to edit this form after marking it as complete.');
                                                        }
                                                    </script>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- new form end here -->
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
    <!-- Include the signature_pad library -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all signature pads
            const signaturePads = {};

            // Function to resize a single canvas
            function resizeCanvas(canvas) {
                const ratio = Math.max(window.devicePixelRatio || 1, 1);
                canvas.width = canvas.offsetWidth * ratio;
                canvas.height = canvas.offsetHeight * ratio;
                canvas.getContext('2d').scale(ratio, ratio);
            }

            // Find all signature pad canvases
            document.querySelectorAll('.signature-pad').forEach((canvas, index) => {
                const padId = canvas.id.split('-')[2]; // Get the number from id (signature-pad-1 -> 1)
                signaturePads[padId] = new SignaturePad(canvas);

                // Adjust canvas size and scaling for better quality
                resizeCanvas(canvas);

                // Restore signature from hidden input if exists
                const hiddenInput = document.getElementById(`signature-data-${padId}`);
                if (hiddenInput && hiddenInput.value && hiddenInput.value.startsWith('data:image')) {
                    signaturePads[padId].fromDataURL(hiddenInput.value);
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                document.querySelectorAll('.signature-pad').forEach((canvas) => {
                    resizeCanvas(canvas);
                    // Re-draw signature after resize if value exists
                    const padId = canvas.id.split('-')[2];
                    const hiddenInput = document.getElementById(`signature-data-${padId}`);
                    if (hiddenInput && hiddenInput.value && hiddenInput.value.startsWith('data:image')) {
                        signaturePads[padId].fromDataURL(hiddenInput.value);
                    }
                });
            });

            // Clear buttons
            document.querySelectorAll('.clear-signature').forEach(button => {
                button.addEventListener('click', function() {
                    const padId = this.getAttribute('data-pad');
                    signaturePads[padId].clear();
                    const hiddenInput = document.getElementById(`signature-data-${padId}`);
                    if (hiddenInput) hiddenInput.value = '';
                });
            });

            // Save all signatures when form is submitted
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function() {
                    for (const padId in signaturePads) {
                        if (!signaturePads[padId].isEmpty()) {
                            const hiddenInput = document.getElementById(`signature-data-${padId}`);
                            if (hiddenInput) hiddenInput.value = signaturePads[padId].toDataURL();
                        }
                    }
                });
            });
        });
      
    </script>
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
    <?php
    if ($this->session->flashdata('InitialVisitDataSet') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Data Updated!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('jobCloseFormdataadded') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Data Updated!');
        </script>
    <?php
    }
    ?>

</body>

</html>