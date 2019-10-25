<?php
include '../model/dbconn.php';

if (isset($_POST['login'])) 
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    if (empty($uname) || empty($password)) 
    {
        header("location:../index.php?login=empty");
    }
    else
    {
        // incorrect and data exist
        if ($uname != $password) 
        {
            header("location:../index.php?login=invalid");
        }
        
    }

}
?>