<?php 
include '../model/dbconn.php';
$ok=delete_account(array($_GET['id']));
if($ok)
{
    header("location:../view/users_admin.php?Deleted");
}
else
{
    header("location:../view/users_admin.php?DELTE_FAILED");
}
?>