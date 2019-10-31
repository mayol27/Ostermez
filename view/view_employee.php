<?php
include '../model/dbconn.php';
$view=getdata(array($_GET['id']));
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
                                    <form action="../controller/create_account.php" method="POST" class="form-horizontal">
                                        <h3>View Account</h3>
                                        <hr>
                                        <!-- fname -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">First Name</label>
                                                <input type="text" name="fname" value="<?php echo $view['fname']?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <!-- lname -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label  class=" form-control-label">Last Name</label>
                                                <input type="text" name="lname" value="<?php echo $view['lname']?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <!-- phone -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Phone</label>
                                                <input type="text" name="phone" value="<?php echo $view['phone_num']?>" disabled class="form-control" >
                                            </div>
                                        </div>
                                        <!-- username -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Username</label>
                                                <input type="text" name="username" value="<?php echo $view['username']?>" disabled class="form-control">
                                            </div>
                                        </div>
                                        <!-- account type -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Account Type</label>
                                                <input type="text" name="username" value="<?php echo $view['account_type']?>" disabled class="form-control">
                                                <!-- <select name="act_type" disabled id="select" class="form-control">
                                                    <option name="act_type"  hidden><?php echo $view['username']?></option>
                                                    <option name="act_type" value="Admin">Admin</option>
                                                    <option name="act_type" value="Employee">Employee</option>
                                                </select> -->
                                            </div>
                                        </div>
                                        <!-- Status -->
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <label class=" form-control-label">Status</label>
                                                <input type="text" name="username" value="<?php echo $view['status']?>" disabled class="form-control">
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
                                                <a href="update_employee.php?id=<?php echo $view['id']?>" class="btn-block">
                                                    <button type="submit" class="btn btn-info btn-lg btn-block">Edit</button>
                                                </a>

                                                <!-- <input class="btn btn-info btn-lg btn-block" type="submit" value="Edit" name="create"> -->
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

            <?php include 'templates/footer.php'; ?>

        </div>

    </div>

    <?php include 'templates/script.php'; ?>

</body>

</html>
<!-- end document-->