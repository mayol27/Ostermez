<?php
if(isset($_POST['create']))
{
    include '../model/dbconn.php';

    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $phone = ($_POST['phone']);
    $username = ($_POST['username']);
    $password = (md5($_POST['username']));
    $act_type = ($_POST['act_type']);
    $status = ('Active');
    
        $data=array($fname,$lname,$phone,$username,$password,$act_type,$status);
        create_account($data);

        header("location:../view/users_admin.php?signup=success");
    
}
?>