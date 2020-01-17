<?php
include '../model/dbconn.php';
$update=getdata_account(array($_GET['id']));

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'templates/header.php'; ?>

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
                                    <form action="../controller/update_account.php" method="POST" class="form-horizontal">
                                        <h3>Edit Account</h3>
                                        <hr>
                                        <input type="number" name="id_acct" id="id_acct" hidden value="<?php echo $update['id_acct']?>">
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">First Name</label>
                                                <input type="text" name="fname" value="<?php echo $update['fname']?>" placeholder="Enter first name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- lname -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">Last Name</label>
                                                <input type="text" name="lname" value="<?php echo $update['lname']?>" placeholder="Enter last name" class="form-control">
                                            </div>
                                        </div>
                                        <!-- phone -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Phone</label>
                                                <input type="text" name="phone" value="<?php echo $update['phone']?>" placeholder="Enter phone number" class="form-control" >
                                                <label for="" style="color: rgb(133, 128, 128);">sample: 09432219155</label>
                                            </div>
                                        </div>
                                        <!-- username -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Username</label>
                                                <input type="text" name="username" value="<?php echo $update['username']?>" placeholder="Enter user name" require="required" class="form-control">
                                            </div>
                                        </div>
                                        <!-- account type -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">status</label>
                                                <select name="status" id="status" class="form-control">
                                                     <option value="Active"   <?php echo $update['status']=="Active"?"selected":""?>>Active</option>
                                                     <option value="Deactivated"  <?php echo $update['status']=="Deactivated"?"selected":""?>>Deactivated</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- account type -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Account Type</label>
                                                <select name="acct_type" id="select" class="form-control">
                                                    <option  hidden><?php echo $update['acct_type']?></option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group p-t-30">
                                            <div class="col col-md-12">
                                                <input class="btn btn-success btn-lg btn-block" type="submit" value="Update" name="update">
                                                <!-- <button type="button" class="btn btn-success btn-lg btn-block">Submit</button> -->
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <a href="users_admin.php" class="btn-block">
                                                <button type="button" class="btn btn-primary btn-lg btn-block">Cancel</button>
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

</html>
<!-- end document-->