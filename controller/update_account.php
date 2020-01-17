<?php
if(isset($_POST['update']))
{
    include '../model/dbconn.php';
 $id = $_POST['id_acct'];
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $phone = ($_POST['phone']);
    $username = ($_POST['username']);
    $password = (md5($_POST['username']));
    $act_type = ($_POST['acct_type']);
  $status=$_POST['status'];
    
        $data=array($fname,$lname,$phone,$username,$password,$act_type,$status,$id);
        update_account($data);

        header("location:../view/users_admin.php?updated=success");
    
}
?>