<?php
include '../model/dbconn.php';

if(isset($_POST['create']))
{
    $fname = ($_POST['fname']);
    $lname = ($_POST['lname']);
    $phone = ($_POST['phone']);
    $username = ($_POST['username']);
    $password = (md5($_POST['username']));
    $act_type = ($_POST['act_type']);
    $status = ('Active');

    if(empty($fname) || empty($lname) || empty($phone) || empty($username) || empty($act_type))
    // if(empty($fname))
    {
        header("location:../view/create_account.php?signup=empty&f=$fname&l=$lname&p=$phone&u=$username&a=$act_type");
        // exit();
    }
    // // else
    // if(empty($lname))
    // {
    //     header("location:../view/create_account.php?signup=emptyL&l=$lname");
    //     // exit();
    // }
    // // else
    // if(empty($phone))
    // {
    //     header("location:../view/create_account.php?signup=emptyP&p=$phone");
    //     // exit();
    // }
    else
    {
        $data=array($fname,$lname,$phone,$username,$password,$act_type,$status);
        create_account($data);

        header("location:../view/users_admin.php?signup=success");
    }

    
}
?>