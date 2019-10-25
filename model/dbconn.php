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

?>