<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php'; ?>

<body class="animsition">
    <div class="page-wrapper">
        
    <?php include 'templates/nav_employee.php'; ?>

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
                                            <a href="registered_employee.html">Registraton</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11">
                                    <h3 class="title-5 m-b-35">Registered Client</h3>
                                </div>
                                <div class="col-3 col-md-1">
                                    <a href="registration_client.php">
                                        <button type="submit" class="btn btn-info btn-sm title-5 m-b-35" style="color: white">
                                            + ADD
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data3  mydatatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EAMIL</th>
                                            <th>PHONE</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>01</td>
                                            <td>Beverly Castillo</td>
                                            <td>beverly_castillo@example.com</td>
                                            <td >12345678901</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                 View
                                                </button>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="tr-shadow">
                                            <td>02</td>
                                            <td>Karl Rasen</td>
                                            <td>karl_rasen@example.com</td>
                                            <td >12345678901</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    View
                                                </button>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="tr-shadow">
                                            <td>03</td>
                                            <td>John Lloyd Segismar Mayol</td>
                                            <td>johnlloydmayol@example.com</td>
                                            <td >12345678901</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    View
                                                </button>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Edit
                                                </button>
                                            </td>
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