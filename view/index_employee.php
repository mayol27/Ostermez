<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php'; ?>

<body class="animsition">
    <div class="page-wrapper">
       
        <?php include 'templates/nav_employee.php'; ?>


        <!-- END HEADER MOBILE -->

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
                                            <a href="index_admin.html">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">Registered</span>
                                <div class="icon">
                                    <i style="color: white" class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: rgb(231, 98, 88)" class="statistic__item ">
                                <h2 class="number">&#x20B1;1,060,386</h2>
                                <span class="desc">My Collection</span>
                                <div class="icon">
                                    <i style="color: white" class="fa fa-rouble"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
           
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Registered</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data3  mydatatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EAMIL</th>
                                            <th>PHONE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>01</td>
                                            <td>Beverly Castillo</td>
                                            <td>beverly_castillo@example.com</td>
                                            <td >12345678901</td>
                                        </tr>
                                        <tr class="tr-shadow">
                                            <td>02</td>
                                            <td>Karl Rasen</td>
                                            <td>karl_rasen@example.com</td>
                                            <td >12345678901</td>
                                        </tr>
                                        <tr class="tr-shadow">
                                            <td>03</td>
                                            <td>John Lloyd Segismar Mayol</td>
                                            <td>johnlloydmayol@example.com</td>
                                            <td >12345678901</td>
                                        </tr>
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