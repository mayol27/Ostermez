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

// ---------- admin ---------------//
function create_account($data)
{
    try
    {   
    $db=dbconn();
    $sql="INSERT INTO account(fname,lname,phone,username,password,acct_type,status,date_registered) VALUES(?,?,?,?,?,?,?,NOW())";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();        
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}//end 

function view_account()
{
    $db;
    $rows;
    try
    {
        $db=dbconn();
        $sql="SELECT * FROM account";
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
}// end

function getdata_account($data)
{
    $db=dbconn();
    $sql="SELECT * FROM account WHERE id_acct=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}// end

function update_account($data)
{
    try
    {   
    $db=dbconn();
    $sql="INSERT INTO account(fname,lname,phone,username,password,acct_type,status,date_registered) VALUES(?,?,?,?,?,?,?,NOW())";
    $sql="UPDATE account SET fname = ?,lname = ?,phone = ?,username = ?,password = ?,acct_type = ?,status = ? WHERE id_acct =?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();        
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}//end

function delete_account($data)
{
    $db=dbconn();
    $sql="DELETE FROM account WHERE id_acct=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=null;
}//end

function count_employee()
{
    $db=dbconn();
    $sql="SELECT COUNT(id_acct) as accountCount FROM account";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    // $number_of_rows = $result->fetchColumn();
    $db=null;
    return $rows;
}//end

//------------end admin---------//

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
        $sql="SELECT * FROM account ORDER BY id_account ASC";
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