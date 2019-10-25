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

<body class="animsition" style="background-color: rgb(248, 248, 248)">
    <div class="page-wrapper">

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7 ">

            <!-- DATA TABLE-->
            <section class="p-t-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body card-block">
                                    <form action="../controller/create_account.php" method="POST" class="form-horizontal">
                                        <h3>Create Account</h3>
                                        <hr>
                                        <!-- error fname -->
                                        <!-- <?php
                                            if(isset($_GET['f']))
                                            {
                                                $fname = $_GET['f'];
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label  class="form-control-label">First Name</label>
                                                                <input type="text" name="fname" placeholder="Enter first name" value="'.$fname.'" class="is-invalid form-control">
                                                            </div>
                                                        </div>';
                                            }
                                            else
                                            {
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label  class=" form-control-label">First Name</label>
                                                                <input type="text" name="fname" placeholder="Enter first name" class="form-control">
                                                            </div>
                                                        </div>';
                                            }

                                            if(isset($_GET['l']))
                                            {
                                                $lname = $_GET['l'];
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label  class="form-control-label">Lastirst Name</label>
                                                                <input type="text" name="lname" placeholder="Enter last name" value="'.$lname.'" class="is-invalid form-control">
                                                            </div>
                                                        </div>';
                                            }
                                            else
                                            {
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label  class=" form-control-label">Last Name</label>
                                                                <input type="text" name="lname" placeholder="Enter last name" class="form-control">
                                                            </div>
                                                        </div>';
                                            }

                                            if(isset($_GET['p']))
                                            {
                                                $phone = $_GET['p'];
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" name="phone" placeholder="Enter phone number" value="'.$phone.'" class="is-invalid form-control" maxlength="11">
                                                                <label for="" style="color: rgb(133, 128, 128);">sample: 09432219155</label>
                                                            </div>
                                                        </div>';
                                            }
                                            else
                                            {
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" name="phone" placeholder="Enter phone number" class="form-control" maxlength="11">
                                                                <label for="" style="color: rgb(133, 128, 128);">sample: 09432219155</label>
                                                            </div>
                                                        </div>';
                                            }

                                            if(isset($_GET['u']))
                                            {
                                                $username = $_GET['u'];
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label class=" form-control-label">Username</label>
                                                                <input type="text" name="username" placeholder="Enter username" value="'.$username.'" class="is-invalid form-control" maxlength="11">
                                                            </div>
                                                        </div>';
                                            }
                                            else
                                            {
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                            <label class=" form-control-label">Username</label>
                                                            <input type="text" name="username" placeholder="Enter username" require="required" class="form-control">
                                                            </div>
                                                        </div>';
                                            }

                                            if(isset($_GET['a']))
                                            {
                                                $username = $_GET['a'];
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label class="form-control-label">Account Type</label>
                                                                <select name="act_type" id="select" class="form-control is-invalid ">
                                                                    <option name="act_type value="" hidden>Please select</option>
                                                                    <option name="act_type" value="Admin">Admin</option>
                                                                    <option name="act_type" value="Employee">Employee</option>
                                                                </select>
                                                            </div>
                                                        </div>';
                                            }
                                            else
                                            {
                                                echo    '<div class="row form-group">
                                                            <div class="col col-md-12">
                                                                <label class=" form-control-label">Account Type</label>
                                                                <select name="act_type" id="select" class="form-control ">
                                                                    <option name="act_type" hidden>Please select</option>
                                                                    <option name="act_type" value="Admin">Admin</option>
                                                                    <option name="act_type" value="Employee">Employee</option>
                                                                </select>
                                                            </div>
                                                        </div>';
                                            }
                                        ?> -->
                                        <!-- error fname end -->
                                        <!-- fname -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">First Name</label>
                                                <input type="text" name="fname" placeholder="Enter first name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- lname -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">Last Name</label>
                                                <input type="text" name="lname" placeholder="Enter last name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- phone -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Phone</label>
                                                <input type="text" name="phone" placeholder="Enter phone number" class="form-control" >
                                                <label for="" style="color: rgb(133, 128, 128);">sample: 09432219155</label>
                                            </div>
                                        </div>
                                        <!-- username -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Username</label>
                                                <input type="text" name="username" placeholder="Enter user name" require="required" class="form-control">
                                            </div>
                                        </div>
                                        <!-- account type -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Account Type</label>
                                                <select name="act_type" id="select" class="form-control">
                                                    <option name="act_type" hidden>Please select</option>
                                                    <option name="act_type" value="Admin">Admin</option>
                                                    <option name="act_type" value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- errors trapping -->
                                        <?php                                            

                                            if(!isset($_GET['signup']))
                                            {
                                                // exit();
                                            }
                                            else
                                            {
                                                $error_chech = $_GET['signup'];

                                                if ($error_chech == "empty") 
                                                {
                                                    echo "<div class='alert alert-danger' role='alert'>
                                                        <h4 class='alert-heading'>Failed</h4>
                                                        You did not fill in all data! 
                                                        </div>";
                                                    // exit ();
                                                }
                                                
                                                // if ($error_chech == "emptyL") 
                                                // {
                                                //     echo "<div class='alert alert-danger' role='alert'>
                                                //         <h4 class='alert-heading'>Failed</h4>
                                                //         You did not fill in all data! 
                                                //         </div>";
                                                //     // exit ();
                                                // }
                                                
                                                // if ($error_chech == "emptyP") 
                                                // {
                                                //     echo "<div class='alert alert-danger' role='alert'>
                                                //         <h4 class='alert-heading'>Failed</h4>
                                                //         You did not fill in all data! 
                                                //         </div>";
                                                //     // exit ();
                                                // }
                                                // else
                                                // {
                                                //     if($error_chech == "success")
                                                //     {
                                                //         echo "<div class='alert alert-success' role='alert'>
                                                //             <h4 class='alert-heading'>Success</h4>
                                                //             All data registered! 
                                                //             </div>";
                                                //         // exit(); 
                                                //     }
                                                // }
                                            }
                                        ?>
                                        <!-- errors trapping end -->
                                        <div class="row form-group p-t-30">
                                            <div class="col col-md-12">
                                                <input class="btn btn-success btn-lg btn-block" type="submit" value="Submit" name="create">
                                                <!-- <button type="button" class="btn btn-success btn-lg btn-block">Submit</button> -->
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <a href="users_admin.php" class="btn-block">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Back</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <hr>
                                <p>Copyright © <?php echo date("Y");?> Ostermez. All rights reserved. Created John Lloyd Mayol</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src="assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- data table -->
    <script type="text/javascript" src="assets/js/datatables.min.js"></script>          

    <script>
        $('.mydatatable').DataTable();
    </script>

</body>

</html>
<!-- end document-->