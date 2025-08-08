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

    <style>
    .payment-methods {
        border-right: 1px solid #eee;
        padding-right: 20px;
    }

    .card {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }

    .form-control {
        border-radius: 4px;
    }

    .header-title {
        color: #2c3e50;
        font-weight: 600;
    }
    </style>
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
                                        <a href="#initialVist" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Initial Field Visit
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finance" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link <?= ($jobStatus[0]['financing'] == 0) ? 'disabled' : '' ?>">
                                            Claim Process / Fainancing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#materialDelivery" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link <?= ($jobStatus[0]['materialDelivery'] == 0) ? 'disabled' : '' ?>">
                                            Schedule & Material Delivery
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#install" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link  <?= ($jobStatus[0]['install'] == 0) ? 'disabled' : '' ?>">
                                            Repair / Install
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#managerReview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link <?= ($jobStatus[0]['managerReview'] == 0) ? 'disabled' : '' ?>">
                                            Project Review
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#jobClose" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link <?= ($jobStatus[0]['jobClose'] == 0) ? 'disabled' : '' ?>">
                                            Job Closeout
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#feedback" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link <?= ($jobStatus[0]['feedback'] == 0) ? 'disabled' : '' ?>">
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
                                            <strong> First Interection Date: </strong>
                                            <?= $jobDetail[0]['firstInterectionDate'] ?><br>
                                            <strong> Work Scope: </strong> <?= $jobDetail[0]['workScope'] ?><br>
                                            <strong> Additional Information: </strong>
                                            <?= $jobDetail[0]['addInformation'] ?><br><br>
                                        </p>

                                        <!-- form  starthere  -->


                                        <div class="col-lg-12">
                                            <div class="card-header p-0">
                                                <h5 class="header-title">Customer Details</h5>
                                            </div>
                                            <div class="card-body pt-2 p-0">
                                                <form class="form-horizontal parsley-examples" method="post"
                                                    action="<?=base_url('add-manager-data')?>">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Client Name:</label>
                                                                <input type="text" class="form-control" name="cName"
                                                                    id="cName" required placeholder="Client Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Company Representative Name:</label>
                                                                <input type="text" class="form-control" name="cRName"
                                                                    id="cRName" required
                                                                    placeholder="Company Representative Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control" name="cDate"
                                                                    id="cDate" required placeholder="Date" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!-- Address (takes more space) -->
                                                        <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Address:</label>
                                                                <input type="text" class="form-control" name="cAddrs"
                                                                    id="cAddrs" required placeholder="Address" />
                                                            </div>
                                                        </div>

                                                        <!-- City -->
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label>City:</label>
                                                                <input type="text" class="form-control" name="cCity"
                                                                    id="cCity" required placeholder="City" />
                                                            </div>
                                                        </div>

                                                        <!-- State -->
                                                        <div class="col-md-2 col-sm-4">
                                                            <div class="form-group">
                                                                <label>State:</label>
                                                                <input type="text" class="form-control" name="cState"
                                                                    id="cState" required placeholder="State" />
                                                            </div>
                                                        </div>

                                                        <!-- Zip -->
                                                        <div class="col-md-2 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Zip:</label>
                                                                <input type="number" class="form-control" name="cZip"
                                                                    id="cZip" required placeholder="Zip" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Home Phone -->
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Home Phone:</label>
                                                                <input type="tel" class="form-control" name="cPhone"
                                                                    id="cPhone" required placeholder="Home Phone" />
                                                            </div>
                                                        </div>

                                                        <!-- Cell Phone -->
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Cell Phone:</label>
                                                                <input type="tel" class="form-control" name="cCell"
                                                                    id="cCell" required placeholder="Cell Phone" />
                                                            </div>
                                                        </div>

                                                        <!-- Email -->
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <label>E-Mail</label>
                                                                <input type="email" name="cEmail" id="cEmail"
                                                                    class="form-control" required parsley-type="email"
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
                                                                <input type="text" class="form-control" name="cHouseSq"
                                                                    id="cHouseSq" required placeholder="House Square" />
                                                            </div>
                                                        </div>

                                                        <!-- Attached Garage Square -->
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label>Attached Garage Square:</label>
                                                                <input type="text" class="form-control" name="cAttSq"
                                                                    id="cAttSq" required
                                                                    placeholder="Attached Garage" />
                                                            </div>
                                                        </div>

                                                        <!-- Detached Garage Square -->
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label>Detached Garage Square:</label>
                                                                <input type="text" class="form-control" name="cDetSq"
                                                                    id="cDetSq" required
                                                                    placeholder="Detached Garage" />
                                                            </div>
                                                        </div>

                                                        <!-- Chimney(s) Square -->
                                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label>Chimney(s) Square:</label>
                                                                <input type="text" class="form-control" name="cChiSq"
                                                                    id="cChiSq" required placeholder="Chimney" />
                                                            </div>
                                                        </div>

                                                        <!-- Other -->
                                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label>Other:</label>
                                                                <input type="text" class="form-control" name="cOthVen"
                                                                    id="cOthVen" required placeholder="Other" />
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
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cYes" id="cYes" />
                                                                        <label class="form-check-label">Yes</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cFlaYes" id="cFlaYes" required />
                                                                        <label class="form-check-label">No Flat
                                                                            Roof</label>
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
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cSingSto" id="cSingSto" required />
                                                                        <label class="form-check-label">Single
                                                                            Story</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cTwoSto" id="cTwoSto" required />
                                                                        <label class="form-check-label">Two
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
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cPitch1" id="cPitch1" required />
                                                                        <label class="form-check-label">4/12 or
                                                                            Less</label>
                                                                    </div>
                                                                    <div class="form-check mb-2">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cPitch2" id="cPitch2" required />
                                                                        <label class="form-check-label">6/12 to
                                                                            8/12</label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cPitch3" id="cPitch3" required />
                                                                        <label class="form-check-label">8/12 or
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
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cRidVen" id="cRidVen" required />
                                                                        <label class="form-check-label">Ridge
                                                                            Vent</label>
                                                                    </div>
                                                                    <div class="form-check mb-2">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cSoffVen" id="cSoffVen" required />
                                                                        <label class="form-check-label">Soffit
                                                                            Vent</label>
                                                                    </div>
                                                                    <div class="form-check mb-2">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cLouVen" id="cLouVen" required />
                                                                        <label class="form-check-label">Louver /
                                                                            Can</label>
                                                                    </div>
                                                                    <div class="form-check mb-2">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cNoVen" id="cNoVen" required />
                                                                        <label class="form-check-label">No
                                                                            Ventilation</label>
                                                                    </div>
                                                                    <div class="form-check mb-3">
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cTurVen" id="cTurVen" required />
                                                                        <label class="form-check-label">Turbine</label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Other</label>
                                                                        <input type="text" class="form-control"
                                                                            name="cOthVen" id="cOthVen" />
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
                                                                                    class="form-check-input"
                                                                                    name="cRepc" id="cRepc" />
                                                                                <label class="form-check-label">Replace
                                                                                    Existing Ridge Vent</label>
                                                                            </div>

                                                                            <div class="form-group mb-3">
                                                                                <label>Cut In New Ridge Vent Approx
                                                                                    Length:</label>
                                                                                <div class="input-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
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
                                                                                    class="form-check-input" name="cSof"
                                                                                    id="cSof" />
                                                                                <label class="form-check-label">Soffit
                                                                                    Vent</label>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label>Replace Can(s) Qty:</label>
                                                                                <input type="number"
                                                                                    class="form-control" name="cReplc"
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" name="cGut"
                                                                                    id="cGut" />
                                                                                <label class="form-check-label">House
                                                                                    Does Not Have Gutters</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cKeep" id="cKeep" />
                                                                                <label class="form-check-label">Keep
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
                                                                                        <input type="number"
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
                                                                                        class="form-control"
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
                                                                            <input type="color"
                                                                                class="form-control form-control-color"
                                                                                name="cColor" id="cColor" />
                                                                        </div>
                                                                    </div>

                                                                    <!-- Quantity Inputs -->
                                                                    <div class="row">
                                                                        <div class="col-md-6 mb-2">
                                                                            <label class="form-label">1-Story Down Spout
                                                                                Qty:</label>
                                                                            <input type="number" class="form-control"
                                                                                name="cDown" id="cDown"
                                                                                placeholder="Qty" min="0" />
                                                                        </div>
                                                                        <div class="col-md-6 mb-2">
                                                                            <label class="form-label">2-Story Down Spout
                                                                                Qty:</label>
                                                                            <input type="number" class="form-control"
                                                                                name="cDown-2" id="cDown-2"
                                                                                placeholder="Qty" min="0" />
                                                                        </div>
                                                                        <div class="col-md-6 mb-2">
                                                                            <label class="form-label">Inside Corner
                                                                                Qty:</label>
                                                                            <input type="number" class="form-control"
                                                                                name="cInsCor" id="cInsCor"
                                                                                placeholder="Qty" min="0" />
                                                                        </div>
                                                                        <div class="col-md-6 mb-2">
                                                                            <label class="form-label">Outside Corner
                                                                                Qty:</label>
                                                                            <input type="number" class="form-control"
                                                                                name="cOutCor" id="cOutCor"
                                                                                placeholder="Qty" min="0" />
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label class="form-label">Splash Guard
                                                                                Qty:</label>
                                                                            <input type="number" class="form-control"
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cGutGur" id="cGutGur" />
                                                                                <label class="form-check-label">No
                                                                                    Gutter Protection Present</label>
                                                                            </div>

                                                                            <div class="form-check mb-3">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cGutHome" id="cGutHome" />
                                                                                <label
                                                                                    class="form-check-label">Homeowner
                                                                                    to Remove Prior to Install &
                                                                                    Homeowner to Re-install
                                                                                    Later</label>
                                                                            </div>

                                                                            <div class="form-check mb-3">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cGutRem" id="cGutRem" />
                                                                                <label
                                                                                    class="form-check-label">Contractor
                                                                                    to Remove & Haul Away</label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cGutNeed" id="cGutNeed" />
                                                                                <label class="form-check-label">Needs
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
                                                                        <input type="text" class="form-control"
                                                                            name="cDrip" id="cDrip"
                                                                            placeholder="Drip Edge" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Can Vents:</label>
                                                                        <input type="text" class="form-control"
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
                                                                        <input type="checkbox" class="form-check-input"
                                                                            name="cKeepEx" id="cKeepEx" />
                                                                        <label class="form-check-label">Keep
                                                                            Existing</label>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label>Replace LF of Fascia:</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control"
                                                                                name="cRplcL" id="cRplcL"
                                                                                placeholder="Length" min="0" />
                                                                            <span class="input-group-text">LF</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Replace LF of Soffit:</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control"
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
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="c1Layer" id="c1Layer" />
                                                                                <label class="form-check-label">1
                                                                                    Layer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="c2Layer" id="c2Layer" />
                                                                                <label class="form-check-label">2 Layer
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
                                                                            <input type="number" class="form-control"
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
                                                            id="cInit" required placeholder="Initials"></textarea>
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
                                                            id="cPer" required placeholder="Initials"></textarea>
                                                    </div>



                                                    <h5 class="header-title">NOTES:</h5>
                                                    <textarea type="textarea" class="form-control" name="cNotes"
                                                        id="cNotes" required placeholder="NOTES"></textarea>


                                                    <div class="card mt-4">
                                                        <div class="card-body">
                                                            <h5 class="header-title mb-4">Payment Details:</h5>

                                                            <div class="row">
                                                                <!-- Payment Method Selection -->
                                                                <div class="col-md-6 mb-4">
                                                                    <div class="payment-methods">
                                                                        <div class="form-check mb-3">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="paymentMethod" id="cCash"
                                                                                required />
                                                                            <label class="form-check-label">Cash</label>
                                                                        </div>

                                                                        <div class="form-check mb-3">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="paymentMethod" id="cPerCash"
                                                                                required />
                                                                            <label class="form-check-label">Personal
                                                                                Check</label>
                                                                        </div>

                                                                        <!-- Check Details (shown when Personal Check is selected) -->
                                                                        <div class="check-details mb-4"
                                                                            style="display: none;">
                                                                            <div class="form-group mb-3">
                                                                                <label>Check #:</label>
                                                                                <input type="number"
                                                                                    class="form-control" name="cCheck"
                                                                                    id="cCheck"
                                                                                    placeholder="Check Number" />
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    name="cCheckRecei"
                                                                                    id="cCheckRecei" />
                                                                                <label class="form-check-label">Check
                                                                                    Received</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-check">
                                                                            <input type="radio" class="form-check-input"
                                                                                name="paymentMethod" id="cCredit"
                                                                                required />
                                                                            <label class="form-check-label">Credit
                                                                                Card</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Credit Card Details (shown when Credit Card is selected) -->
                                                                <div class="col-md-6 credit-card-details"
                                                                    style="display: none;">
                                                                    <div class="form-group mb-3">
                                                                        <label>Name on Credit Card:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="cCreditName" id="cCreditName"
                                                                            placeholder="Name on Credit Card" />
                                                                    </div>

                                                                    <div class="form-group mb-3">
                                                                        <label>Card #:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="cCard" id="cCard"
                                                                            placeholder="Card Number" />
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6 form-group mb-3">
                                                                            <label>Exp. Date:</label>
                                                                            <input type="month" class="form-control"
                                                                                name="cDate" id="cDate" />
                                                                        </div>

                                                                        <div class="col-md-6 form-group mb-3">
                                                                            <label>CVC:</label>
                                                                            <input type="password" class="form-control"
                                                                                name="cCVC" id="cCVC" placeholder="CVC"
                                                                                maxlength="4" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <h5 class="header-title mb-3">Installation Details:</h5>
                                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                                                            <div class="form-group">
                                                                <label>Estimated Install:</label>
                                                                <input type="text" class="form-control" name="cEsti"
                                                                    id="cEsti" required
                                                                    placeholder="Estimated Install" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-3">
                                                            <div class="form-group">
                                                                <label>Contractor Contact Name:</label>
                                                                <input type="text" class="form-control" name="cCont"
                                                                    id="cCont" required placeholder="Contractor Name" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Contact Phone #:</label>
                                                                <input type="tel" class="form-control" name="cContPhone"
                                                                    id="cContPhone" required
                                                                    placeholder="Phone Number" />
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
                                                            id="cNotic" required placeholder="Initials"></textarea>
                                                    </div>

                                                    <!-- First Customer Signature -->
                                                    <div class="form-group mt-4">
                                                        <label>Customer Signature</label>
                                                        <div
                                                            style="border: 1px solid #ddd; border-radius: 4px; background: #f8f8f8;">
                                                            <canvas id="signature-pad-1" class="signature-pad"
                                                                style="width: 100%; height: 200px; touch-action: none;"></canvas>
                                                        </div>
                                                        <div class="mt-2">
                                                            <button type="button"
                                                                class="btn btn-secondary btn-sm clear-signature"
                                                                data-pad="1">Clear Signature</button>
                                                        </div>
                                                        <input type="hidden" id="signature-data-1" name="signature_1">
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
                                                                    <button type="button"
                                                                        class="btn btn-secondary btn-sm clear-signature"
                                                                        data-pad="2">
                                                                        Clear Signature
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" id="signature-data-2"
                                                                    name="signature_2">
                                                            </div>
                                                        </div>

                                                        <!-- Date Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control" name="cDate1"
                                                                    id="cDate1" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <!-- Third Customer Signature -->
                                                        <div class="col-lg-8 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Customer Signature</label>
                                                                <div class="border rounded bg-light p-2">
                                                                    <canvas id="signature-pad-3"
                                                                        class="signature-pad w-100"
                                                                        style="height: 200px; touch-action: none;"></canvas>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <button type="button"
                                                                        class="btn btn-secondary btn-sm clear-signature"
                                                                        data-pad="3">
                                                                        Clear Signature
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" id="signature-data-3"
                                                                    name="signature_3">
                                                            </div>
                                                        </div>

                                                        <!-- Date Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control" name="cDate2"
                                                                    id="cDate2" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <!-- Agent Signature -->
                                                        <div class="col-lg-8 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Agent Signature</label>
                                                                <div class="border rounded bg-light p-2">
                                                                    <canvas id="signature-pad-4"
                                                                        class="signature-pad w-100"
                                                                        style="height: 200px; touch-action: none;"></canvas>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary btn-sm clear-signature"
                                                                        data-pad="4">
                                                                        <i class="bi bi-eraser"></i> Clear Signature
                                                                    </button>
                                                                </div>
                                                                <input type="hidden" id="signature-data-4"
                                                                    name="signature_agent">
                                                            </div>
                                                        </div>

                                                        <!-- Date Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" name="aDate"
                                                                        id="aDate" required />
                                                                    <span class="input-group-text">
                                                                        <i class="bi bi-calendar"></i>
                                                                    </span>
                                                                </div>
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
                                                                    <input type="number" class="form-control"
                                                                        name="cEsti" id="cEsti" required
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
                                                                        name="cDownPay" id="cDownPay" required
                                                                        placeholder="0.00" step="0.01" min="0">
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <input type="number" class="form-control me-2"
                                                                        name="cPreApp" id="cPreApp" placeholder="%"
                                                                        style="width: 80px;" min="0" max="100">
                                                                    <small class="text-muted">Deposit Required unless
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
                                                                        name="cBal" id="cBal" required
                                                                        placeholder="0.00" step="0.01" min="0" readonly>
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
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                        <!-- form end here  -->


                                        <!-- new form start here -->
                                        <div class="col-lg-12">
                                            <div class="card-body pt-2 p-0">
                                                <form class="form-horizontal parsley-examples" method="post"
                                                    action="<?=base_url('add-manager-data')?>">


                                                    <h5 class="header-title">Customer Details:</h5>

                                                    <div class="row">
                                                        <!-- Customer Name -->
                                                        <div class="col-lg-4 col-md-5 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Customer Name:</label>
                                                                <input type="text" class="form-control" name="cCustName"
                                                                    id="cCustName" required
                                                                    placeholder="Customer Name" />
                                                            </div>
                                                        </div>

                                                        <!-- Approval Presented By -->
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Approval Presented By:</label>
                                                                <input type="text" class="form-control" name="cAppPres"
                                                                    id="cAppPres" required
                                                                    placeholder="Approval Presented By" />
                                                            </div>
                                                        </div>

                                                        <!-- Completion Date -->
                                                        <div class="col-lg-4 col-md-3 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Completion Date:</label>
                                                                <input type="date" class="form-control" name="cCompDate"
                                                                    id="cCompDate" required
                                                                    placeholder="Completion Date" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!-- Address (takes more space) -->
                                                        <div class="col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Address:</label>
                                                                <input type="text" class="form-control" name="cAddrs"
                                                                    id="cAddrs" required placeholder="Address" />
                                                            </div>
                                                        </div>

                                                        <!-- City -->
                                                        <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <label>City:</label>
                                                                <input type="text" class="form-control" name="cCity"
                                                                    id="cCity" required placeholder="City" />
                                                            </div>
                                                        </div>

                                                        <!-- State -->
                                                        <div class="col-md-2 col-sm-4">
                                                            <div class="form-group">
                                                                <label>State:</label>
                                                                <input type="text" class="form-control" name="cState"
                                                                    id="cState" required placeholder="State" />
                                                            </div>
                                                        </div>

                                                        <!-- Zip -->
                                                        <div class="col-md-2 col-sm-4">
                                                            <div class="form-group">
                                                                <label>Zip:</label>
                                                                <input type="number" class="form-control" name="cZip"
                                                                    id="cZip" required placeholder="Zip" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- Home Phone -->
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Home Phone:</label>
                                                                <input type="tel" class="form-control" name="cPhone"
                                                                    id="cPhone" required placeholder="Home Phone" />
                                                            </div>
                                                        </div>

                                                        <!-- Cell Phone -->
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Cell Phone:</label>
                                                                <input type="tel" class="form-control" name="cCell"
                                                                    id="cCell" required placeholder="Cell Phone" />
                                                            </div>
                                                        </div>

                                                        <!-- Email -->
                                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                                            <div class="form-group">
                                                                <label>E-Mail</label>
                                                                <input type="email" name="cEmail" id="cEmail"
                                                                    class="form-control" required parsley-type="email"
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
                                                                    name="signature_55">
                                                            </div>
                                                        </div>

                                                        <!-- Date Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control" name="cDate55"
                                                                    id="cDate55" required />
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
                                                                    name="signature_56">
                                                            </div>
                                                        </div>

                                                        <!-- Claim # Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Claim #:</label>
                                                                <input type="text" class="form-control" name="cClaim"
                                                                    id="cClaim" required />
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
                                                        required or permitted by the Contract Documents, that the work
                                                        will be free from defects not inherent in the quality required
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
                                                        cleaning, maintenance & tasks required for protecting projects
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
                                                                    name="signature_warn">
                                                            </div>
                                                        </div>

                                                        <!-- Date Field -->
                                                        <div class="col-lg-4 col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <input type="date" class="form-control" name="cDatewarn"
                                                                    id="cDatewarn" required />
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
                                                                            name="ContTotal" id="ContTotal" required
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
                                                                            id="ChangeOrderTotal" required
                                                                            placeholder="0.00" step="0.01">
                                                                    </div>

                                                                    <div class="form-group mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <label class="me-2">Project Total $:</label>
                                                                            <strong class="me-2">=</strong>
                                                                        </div>
                                                                        <input type="number" class="form-control"
                                                                            name="ProjTotal" id="ProjTotal" required
                                                                            placeholder="0.00" step="0.01" readonly>
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
                                                                            name="PaymentDown" id="PaymentDown" required
                                                                            placeholder="0.00" step="0.01" min="0">
                                                                    </div>

                                                                    <div class="form-group mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <label class="me-2">Payment #2 $:</label>
                                                                            <strong class="me-2">-</strong>
                                                                        </div>
                                                                        <input type="number" class="form-control"
                                                                            name="PaymentDown2" id="PaymentDown2"
                                                                            required placeholder="0.00" step="0.01"
                                                                            min="0">
                                                                    </div>

                                                                    <div class="form-group mb-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <label class="me-2">Final Payment Amount Due
                                                                                $:</label>
                                                                            <strong class="me-2">=</strong>
                                                                        </div>
                                                                        <input type="number" class="form-control"
                                                                            name="FinalPay" id="FinalPay" required
                                                                            placeholder="0.00" step="0.01" readonly>
                                                                    </div>


                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Check Number:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="CheckNumber" id="CheckNumber" required
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
                                                                            name="signature_end">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 col-md-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label>Date:</label>
                                                                        <div class="input-group">
                                                                            <input type="date" class="form-control"
                                                                                name="cDateend" id="cDateend"
                                                                                required />
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
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- new form end here -->






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
                                        <strong>Policy Holder Full Name:</strong>
                                        <?= $financingDetail[0]['fullName'] ?><br>
                                        <strong>Insurance Provider:</strong>
                                        <?= $financingDetail[0]['insuranceProvider'] ?><br>
                                        <strong>Insurance Provider Policy Number:</strong>
                                        <?= $financingDetail[0]['policyNumber'] ?><br>
                                        <strong>Insurance Provider Contact Number:</strong>
                                        <?= $financingDetail[0]['insProviderContact'] ?><br>
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
                                        <form class="form-horizontal parsley-examples" method="post"
                                            action="<?= base_url('add-material-delivery-data/') . $jobDetail[0]['jobID'] ?>">
                                            <div class="form-group">
                                                <label>Your Job Scheduled Date</label>
                                                <input type="date" class="form-control" name="jobScheduledDate"
                                                    id="jobScheduledDate" required placeholder="Scheduled date" />
                                            </div>
                                            <div class="form-group">
                                                <label>Material Will be delivered on or before(Date)</label>
                                                <div>
                                                    <input type="date" name="materialDelivery" id="materialDelivery"
                                                        class="form-control" required
                                                        placeholder="Estimated Delivery Date" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light me-1">
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
                                        <strong>Your Job Scheduled Date:</strong>
                                        <?= $DeliveryData[0]['jobScheduled'] ?><br>
                                        <strong>Material Will be delivered on or before(Date):</strong>
                                        <?= $DeliveryData[0]['materialDeliveryETA'] ?><br>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="tab-pane" id="install">
                                        <?php
                                        if ($jobStatus[0]['install'] == 1) {
                                        ?>
                                        <form class="form-horizontal parsley-examples" enctype="multipart/form-data"
                                            method="post"
                                            action="<?= base_url('add-installation-imgs-data/') . $jobDetail[0]['jobID'] ?>">
                                            <div class="form-group">
                                                <label>Upload Images (Max Upload 10)</label>
                                                <input type="file" multiple class="form-control" name="imgs[]" id="imgs"
                                                    onchange="validateFiles()" required placeholder="Scheduled date" />
                                                <p id="errorMessage" style="color: red; display: none;">You can
                                                    only
                                                    upload a maximum of 10 files.</p>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light me-1">
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
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img1'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img1'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img2'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img2'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img2'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img3'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img3'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img3'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img4'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img4'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img4'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img5'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img5'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img5'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img6'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img6'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img6'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img7'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img7'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img7'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img8'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img8'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img8'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img9'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img9'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img9'] ?>"
                                                                alt="" class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>
                                                    <?php
                                                        if ($installation[0]['img10'] != null) {
                                                        ?>
                                                    <div class="col-sm-3">
                                                        <a href="<?= base_url() ?>assets/uploads/<?= $installation[0]['img10'] ?>"
                                                            data-lightbox="gallery-set"
                                                            data-title="Click the right half of the image to move forward.">
                                                            <img src="<?= base_url() ?>assets/uploads/<?= $installation[0]['img10'] ?>"
                                                                alt="" class="img-fluid" />
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
                                                        <form class="form-horizontal parsley-examples" method="post"
                                                            action="<?= base_url('add-manager-review-date-data/') . $jobDetail[0]['jobID'] ?>">
                                                            <div class="form-group">
                                                                <label>Date of review</label>
                                                                <input type="date" class="form-control"
                                                                    name="jobReviewDate" id="jobReviewDate" required
                                                                    placeholder="Review Date" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div>
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light me-1">
                                                                        Submit
                                                                    </button>
                                                                    <button type="reset"
                                                                        class="btn btn-secondary waves-effect">
                                                                        Cancel
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php
                                                        } else {

                                                        ?>
                                                        <strong>Job Review Date:
                                                        </strong><?= $managerReview[0]['reviewDate'] ?>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <h4 class="header-title">Client additional question
                                                            details</h4>
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
                                        <a href="<?= base_url('mark-job-close-complete/') . $jobDetail[0]['jobID'] ?>"
                                            class=" btn btn-primary" style="float: none;"><i
                                                class="mdi mdi-file-check-outline"> Mark as Complete</i> </a>
                                        <?php
                                        } else {
                                        ?>
                                        <a href="" class=" btn btn-primary disabled" style="float: none;"><i
                                                class="mdi mdi-file-check-outline"> Fainal Document sign
                                                Completed</i>
                                        </a>
                                        <p>
                                            <strong>Job Close Date:
                                            </strong><?= $jobStatus[0]['jobCloseDate'] ?>
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

    <!-- Include the signature_pad library -->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize all signature pads
        const signaturePads = {};

        // Find all signature pad canvases
        document.querySelectorAll('.signature-pad').forEach((canvas, index) => {
            const padId = canvas.id.split('-')[
                2]; // Get the number from id (signature-pad-1 -> 1)
            signaturePads[padId] = new SignaturePad(canvas);

            // Adjust canvas size and scaling for better quality
            resizeCanvas(canvas);
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            document.querySelectorAll('.signature-pad').forEach(resizeCanvas);
        });

        // Clear buttons
        document.querySelectorAll('.clear-signature').forEach(button => {
            button.addEventListener('click', function() {
                const padId = this.getAttribute('data-pad');
                signaturePads[padId].clear();
            });
        });

        // Save all signatures when form is submitted
        document.querySelector('form').addEventListener('submit', function() {
            for (const padId in signaturePads) {
                if (!signaturePads[padId].isEmpty()) {
                    document.getElementById(`signature-data-${padId}`).value =
                        signaturePads[padId].toDataURL();
                }
            }
        });

        // Function to resize a single canvas
        function resizeCanvas(canvas) {
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext('2d').scale(ratio, ratio);

            // Get the pad ID and clear if it exists
            const padId = canvas.id.split('-')[2];
            if (signaturePads[padId]) {
                signaturePads[padId].clear();
            }
        }
    });
    </script>

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


<!-- JavaScript to toggle sections -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');

    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            document.querySelector('.check-details').style.display =
                this.id === 'cPerCash' ? 'block' : 'none';
            document.querySelector('.credit-card-details').style.display =
                this.id === 'cCredit' ? 'block' : 'none';
        });
    });
});
</script>

</html>