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
    <title>Login</title>

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

</head>

<body class="animsition" style="background-color: rgb(247, 247, 247);">
    


    <div class="page-wrapper">

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7 ">

            <!-- DATA -->
            <section class="p-t-50">
                <div class="container">
                    <!-- <div class="row justify-content-center"> -->
                        <div class="login-wrap p-t-50">
                            <div class="login-content">
                                <div class="login-logo">
                                    <a href="#">
                                        <h1 style="color: black">Ostermez</h1>
                                    </a>
                                </div>
                                <div class="login-form">
                                    <form action="controller/session.php" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="au-input au-input--full" type="text" name="uname" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                        </div>
                                        <br>
                                        <?php
                                            if(!isset($_GET['login']))
                                            {
                                                
                                            }
                                            else
                                            {
                                                $error_check = $_GET['login'];

                                                if ($error_check == "empty") 
                                                {
                                                    echo    "<div class='alert alert-danger' role='alert'>
                                                            <h4 class='alert-heading'>Failed</h4>
                                                            You did not fill in all data! 
                                                            </div>";
                                                }
                                            }
                                        ?>
                                        <button class="au-btn au-btn--block au-btn--green m-b-20"name="login" type="submit">sign in</button>
                                    </form>
                                    <!-- <div class="register-link">
                                        <p>
                                            Don't you have account?
                                            <a href="#">Sign Up Here</a>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </section>
            <!-- END DATA-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <hr>
                                <p>Copyright © 2019 Ostermez. All rights reserved.</p>
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

</body>

</html>
<!-- end document-->