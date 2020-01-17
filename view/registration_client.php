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
                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="hf-email" class=" form-control-label">First Name</label>
                                                <input type="text" name="c_fname" placeholder="Enter First Name" class="form-control">
                                            </div>
                                            <div class="col col-md-6">
                                                <label for="hf-email" class=" form-control-label">Last Name</label>
                                                <input type="text" name="c_lname" placeholder="Enter Last Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Address</label>
                                                <input type="password" name="address" placeholder="Enter Address..." class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="hf-password" class=" form-control-label">Phone</label>
                                                <input type="password" name="c_phone" placeholder="Enter Phone Number..." class="form-control">
                                            </div>
                                            <div class="col col-md-6">
                                                <label for="hf-password" class=" form-control-label">Department</label>
                                                <select name="price" id="department" onchange = "showprice()" class="form-control">
                                                    <option hidden>Please select department</option>
                                                    <option value="Class_A">Class A</option>
                                                    <option value="Class_B">Class B</option>
                                                    <option value="Class_C">Class C</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div id="class_a" style="display: none" class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Payment</label>
                                                <input type="text" name="c_phone" value='100' disabled=""  class="form-control">
                                            </div>
                                            <div id="class_b" style="display: none" class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Payment</label>
                                                <input type="text" name="c_phone" value='500' disabled=""  class="form-control">
                                            </div>
                                            <div id="class_c" style="display: none" class="col col-md-12">
                                                <label for="hf-password" class=" form-control-label">Payment</label>
                                                <input type="text" name="c_phone" value='700' disabled=""  class="form-control">
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

    <?php include 'templates/script.php'; ?>
    
</body>

<!-- hide / show -->
<script type="text/javascript">
    function showprice() 
    {
        var department = document.getElementById("department");
        var class_a = document.getElementById("class_a");
        var class_b = document.getElementById("class_b");
        var class_c = document.getElementById("class_c");

        class_a.style.display = department.value == "Class_A" ? "block" : "none";
        class_b.style.display = department.value == "Class_B" ? "block" : "none";
        class_c.style.display = department.value == "Class_C" ? "block" : "none";
    }
</script>

</html>
<!-- end document-->