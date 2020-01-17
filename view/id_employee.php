<?php

include '../model/dbconn.php';
$update=getdata_account(array($_GET['id']));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID</title>
</head>
<body>
<div>
    <div style="width: 4in; height: 6in; border: 1; border-style: solid;">
        <div>
            <center>
            <h1><?php echo $update['fname']?><?php echo $update['lname']?></h1>
            </center>
        </div>
    </div>
</div>  
</body>
</html>