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

        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">

            <div class="page-container">

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Dashboard</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                        <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                                    </div>

                                    <div class="wigdet-two-content media-body text-end text-truncate">
                                        <p class="m-0 text-uppercase fw-medium text-truncate" title="Statistics">Total Revenue</p>
                                        <h3 class="fw-medium my-2">$ <span data-plugin="counterup">65,841</span></h3>
                                        <p class="m-0">Jan - Apr 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                        <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                                    </div>

                                    <div class="wigdet-two-content media-body text-end text-truncate">
                                        <p class="m-0 text-uppercase fw-medium text-truncate" title="Statistics">Total Unique Visitors</p>
                                        <h3 class="fw-medium my-2"> <span data-plugin="counterup">26,521</span></h3>
                                        <p class="m-0">Jan - Apr 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                        <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                                    </div>

                                    <div class="wigdet-two-content media-body text-end text-truncate">
                                        <p class="m-0 text-uppercase fw-medium text-truncate" title="Statistics">Number of Transactions</p>
                                        <h3 class="fw-medium my-2"><span data-plugin="counterup">7,842</span></h3>
                                        <p class="m-0">Jan - Apr 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                        <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                                    </div>

                                    <div class="wigdet-two-content media-body text-end text-truncate">
                                        <p class="m-0 text-uppercase fw-medium text-truncate" title="Statistics">Conversation Rate</p>
                                        <h3 class="fw-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                                        <p class="m-0">Jan - Apr 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Revenue Comparison</h4>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="fw-normal text-muted">You have to pay</h5>
                                    <h3 class="mb-3 fw-semibold"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                                </div>

                                <div class="chart-container" dir="ltr">
                                    <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Visitors Overview</h4>
                            </div>

                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="fw-normal text-muted">You have to pay</h5>
                                    <h3 class="mb-3 fw-semibold"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                                </div>

                                <div class="chart-container" dir="ltr">
                                    <div class="" style="height:280px" id="user_type_bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Goal Completion</h4>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="fw-normal text-muted">You have to pay</h5>
                                    <h3 class="mb-3 fw-semibold"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                                </div>

                                <div class="chart-container" dir="ltr">
                                    <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Recent Candidates</h4>
                                <p class="card-subtitle">
                                    Your awesome text goes here.
                                </p>
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table table-hover m-0 table-actions-bar">

                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-light btn-xs dropdown-toggle waves-effect waves-light drop-arrow-none" data-bs-toggle="dropdown" aria-expanded="false"> <i class="mdi mdi-chevron-down"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Job Timing</th>
                                                <th>Salary</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="<?=base_url()?>assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 fw-medium">Tomaslau</h5>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock-outline text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="<?=base_url()?>assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 fw-medium">Erwin E. Brown</h5>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> California
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 1365
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?=base_url()?>assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 fw-medium">Margeret V. Ligon</h5>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock-outline text-success"></i> Full Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 115248
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="<?=base_url()?>assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 fw-medium">Jose D. Delacruz</h5>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> New York
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 2451
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="<?=base_url()?>assets/images/users/avatar-8.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 fw-medium">Luke J. Sain</h5>
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-map-marker text-primary"></i> Australia
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-clock-outline text-success"></i> Part Time
                                                </td>

                                                <td>
                                                    <i class="mdi mdi-currency-usd text-warning"></i> 3265
                                                </td>

                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-pencil"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="mdi mdi-close"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Total Unique Visitors</h4>
                            </div>
                            <div class="card-body pt-2">
                                <div class="widget-chart text-center" dir="ltr">

                                    <div id="donut-chart" style="height: 280px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h3 data-plugin="counterup" class="fw-semibold">1,507</h3>
                                            <p class="text-muted mb-0">Visitors Male</p>
                                        </div>
                                        <div class="col-6">
                                            <h3 data-plugin="counterup" class="fw-semibold">854</h3>
                                            <p class="text-muted mb-1">Visitors Female</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Number of Transactions</h4>
                            </div>
                            <div class="card-body pt-2">
                                <div class="widget-chart text-center" dir="ltr">

                                    <div id="pie-chart" style="height: 280px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h3 data-plugin="counterup" class="fw-semibold">2,854</h3>
                                            <p class="text-muted mb-0">Payment Done</p>
                                        </div>
                                        <div class="col-6">
                                            <h3 data-plugin="counterup" class="fw-semibold">22</h3>
                                            <p class="text-muted mb-1">Payment Due</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--- end row -->

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

    <!--C3 Chart-->
    <script src="<?=base_url()?>assets/vendor/d3/d3.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/c3/c3.min.js"></script>


    <script src="<?=base_url()?>assets/vendor/echarts/echarts.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="<?=base_url()?>assets/js/pages/dashboard-sales.js"></script>

</body>

</html>