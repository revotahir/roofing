<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Client Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/fav.png">

    <link href="<?= base_url() ?>assets/vendor/c3/c3.min.css" rel="stylesheet" type="text/css" />


    <!-- Vendor css -->
    <link href="<?= base_url() ?>assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="<?= base_url() ?>assets/js/config.js"></script>
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

                <div class="card page-title-box rounded-0">
                    <div class="d-flex align-items-sm-center flex-sm-row flex-column gap-2">
                        <div class="flex-grow-1">
                            <h4 class="font-18 fw-semibold mb-0">Dashboard</h4>
                        </div>

                       
                    </div>
                </div>

              



                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Job List</h4>
                                
                            </div>
                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table table-hover m-0 table-actions-bar">
                                    <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Manager</th>
                                                <th>Location</th>
                                                <th>First Interaction Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($jobList) {
                                                $sr = 1;
                                                foreach ($jobList as $row) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?= $sr . '.' ?></th>
                                                        <td><?= $row['manager_name'] ?></td>
                                                        <td><?= $row['location'] ?></td>
                                                        <td><?= $row['firstInterectionDate'] ?></td>
                                                        <td>
                                                            <a href="<?=base_url('client-view-job/'). $row['jobID']?>" class=" btn btn-primary" style="float: none;"><i class="mdi mdi-eye-outline"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $sr++;
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <th scope="row" colspan="5">
                                                        <center>No Job listed!</center>
                                                    </th>
                                                </tr>
                                            <?php
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                 

                </div>
                <!--- end row -->

            </div>
            <!-- container -->


        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    
    <?php
        $this->load->view('client/components/clientSetting.php');
        ?>

    <!-- Vendor js -->
    <script src="<?= base_url() ?>assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

    <!--C3 Chart-->
    <script src="<?= base_url() ?>assets/vendor/d3/d3.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/c3/c3.min.js"></script>


    <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="<?= base_url() ?>assets/js/pages/dashboard-sales.js"></script>

</body>

</html>