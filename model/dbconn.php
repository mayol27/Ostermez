<?php 
function dbconn()
{
    try
    {
            return new PDO("mysql:hostname=localhost;dbname=ostermez","root","");              
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}// end dbconn()

function destroy()
{
    return null;
}// end of destroy

function create_account($data)
{
    try
    {   
    $db=dbconn();
    $sql="INSERT INTO account(fname,lname,phone_num,username,password,account_type,status,date_time) VALUES(?,?,?,?,?,?,?,NOW())";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();        
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}//end insert account employee

function username_exist($data)
{
    $db = dbconn();
    $sql="SELECT username FROM account WHERE username = ?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);

    if ($stmt->rowCount()>0) 
    {
        echo "Username already register";
    }
}// end existing username

function all_employee()
{
    $db;
    $rows;
    try
    {
        $db=dbconn();
        $sql="SELECT * FROM account ORDER BY id ASC";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOExeception $e)
    {
        echo $e->getMessage();
    }
    $db=null;
    return $rows;
}// end of getting data from account

function getdata($data)
{
    $db=dbconn();
    $sql="SELECT * FROM account WHERE id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}// end of getdata
?>