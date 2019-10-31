<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php'; ?>

<style>
#my_camera
{
    width: 320px;
    height: 240px;
    border: 1px solid black;
}
</style>

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
                                    <form action="" method="post" class="form-horizontal">
                                        <h3>Registration</h3>
                                        <hr>
                                        <div class="row form-group ">
                                            <div class="col col-md-12 d-flex justify-content-center">
                                                <div id="my_camera" ></div>
                                                
                                            </div>
                                            <br> <br>
                                            <div class="col col-md-12 d-flex justify-content-center">
                                                
                                                <input class='btn btn-success' type='button' value="Take Snapshot" onClick="take_snapshot()">
					                            <input class='btn btn-success' type='button' value="Save Snapshot" onClick="saveSnap()">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="hf-email" class=" form-control-label">First Name</label>
                                                <input type="text" name="c_fname" placeholder="Enter first name" class="form-control">
                                            </div>
                                            <div class="col col-md-6">
                                                <label for="hf-email" class=" form-control-label">Last Name</label>
                                                <input type="text" name="c_lname" placeholder="Enter last name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Phone</label>
                                                <input type="password" name="c_phone" placeholder="Enter Phone Number..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Address</label>
                                                <input type="password" name="address" placeholder="Enter Address..." class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Department</label>
                                                <select name="select" id="select" class="form-control">
                                                    <option hidden>Please select department</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                            </div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Payment</label>
                                                <select name="select" id="select" class="form-control">
                                                    <option hidden>Please select price</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group p-t-30">
                                            <div class="col col-md-12">
                                                <button type="button" class="btn btn-success btn-lg btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <a href="registered_employee.html" class="btn-block">
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

            <?php include 'templates/footer.php'; ?>
            
        </div>

    </div>

    <!-- cammera -->
    <script type="text/javascript" src="assets/js/webcam2.min.js"></script>
    <script src="assets/js/mycam.js"></script>

    <?php include 'templates/script.php'; ?>
    
</body>

</html>
<!-- end document-->