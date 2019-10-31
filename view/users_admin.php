<?php
include '../model/dbconn.php';

$all_account_employee = all_employee();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Ostermez</title>

    <!-- Fontfaces CSS-->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">

    <!-- data table -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>

</head>

<body class="animsition">
    <div class="page-wrapper">

    <?php include 'templates/nav_admin.php'; ?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            Employee
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->


            <?php
            if(!isset($_GET['signup']))
                {
                    // exit();
                }
                else
                {
                    $error_chech = $_GET['signup'];
                        if($error_chech == "success")
                        {
                            echo '
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success</h4>
                                            Data registered! 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            // exit(); 
                        }
                }
            ?>

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11">
                                    <h3 class="title-5 m-b-35">Employee</h3>
                                </div>
                                <div class="col-3 col-md-1">
                                    <a href="create_account.php">
                                        <button type="submit" class="btn btn-info btn-sm title-5 m-b-35" style="color: white">
                                            + ADD
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table  table-data3  mydatatable">
                                <!-- <table class="table table-borderless table-striped table-earning  mydatatable"> -->
                                    <thead>
                                        <tr>
                                            <th hidden>ID</th>
                                            <th>NAME</th>
                                            <th>Phone</th>
                                            <th>username</th>
                                            <th>type</th>
                                            <th>status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($all_account_employee as $emp) 
                                        {?>
                                        <tr class="tr-shadow">
                                            <td hidden><?php echo $emp['id'] ?></td>
                                            <td><?php echo $emp['fname'] ?>&nbsp;<?php echo $emp['lname'] ?></td>
                                            <!-- <td><?php echo $emp['lname'] ?></td> -->
                                            <td><?php echo $emp['phone_num'] ?></td>
                                            <td><?php echo $emp['username'] ?></td>
                                            <td><?php echo $emp['account_type'] ?></td>
                                            <td><?php echo $emp['status'] ?></td>
                                            <td>
                                            <a href="view_employee.php?id=<?php echo $emp['id']?>">
                                                <button type="submit" class="btn btn-primary btn-sm">View</button>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <?php include 'templates/footer.php'; ?>

        </div>

    </div>

    <?php include 'templates/script.php'; ?>

    <!-- data table -->
    <script type="text/javascript" src="assets/js/datatables.min.js"></script>          

    <script>
        $('.mydatatable').DataTable();
    </script>

</body>

</html>
<!-- end document-->