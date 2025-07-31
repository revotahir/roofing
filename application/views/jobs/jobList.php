<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Job List | Amen Roofing Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/fav.png">

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
                            <h4 class="font-18 fw-semibold mb-0">Job List</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">Job</a></li>

                                <li class="breadcrumb-item active">Job List</li>
                            </ol>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">

                            <div class="card-body pt-2">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Manager</th>
                                                <th>Client</th>
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
                                                        <td><?= $row['client_name'] ?></td>
                                                        <td><?= $row['location'] ?></td>
                                                        <td><?= $row['firstInterectionDate'] ?></td>
                                                        <td>
                                                            <a href="<?=base_url('admin-view-job/'). $row['jobID']?>" class=" btn btn-primary" style="float: none;"><i class="mdi mdi-eye-outline"></i></a>
                                                            <a href="<?=base_url('edit-job/'). $row['jobID']?>" class=" btn btn-info" style="float: none;"><i class="mdi mdi-pencil"></i></a>
                                                            <a href="<?= base_url('delete-job/' . $row['jobID']) ?>" onclick="return deleManagerConfimation()" class=" btn btn-danger" style="float: none;"><i class="mdi mdi-delete-empty"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $sr++;
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <th scope="row" colspan="5">
                                                        <center>No Managers Avaiable!</center>
                                                    </th>
                                                </tr>
                                            <?php
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->


                </div>
                <!-- end row-->
                <!-- end row-->
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
    <script>
        function deleManagerConfimation() {
            if (confirm('Are you sure you want to Delete?')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <script src="<?= base_url() ?>assets/toastr/toastr.min.js"></script>
    <?php
    if ($this->session->flashdata('mangerDeleted') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Manager Deleted!');
        </script>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('jobUpdated') != '') {
    ?>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr.success('Job Data Updated!');
        </script>
    <?php
    }
    ?>

</body>

</html>