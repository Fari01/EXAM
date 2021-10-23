
<?php
include( 'db.php');
session_start(); 
$error=""

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['full_name'])) {
$error = "Username or Password is invalid";
}
else
{
    
   $_SESSION["username"] = $username;
   $_SESSION["password"] = $password;
   $_SESSION["full_name"] = $fullname;
   $_SESSION["number"] = $mobno;
   $_SESSION["birthday"] = $bdy;


$connection =new db();
$conobj =$connection->OpenCon();

$userQuery=$connection->InsertUser( $conobj, "Emplyee", $username, $password,$fullname, $mobno, $bdy);
if($userQuery==TRUE){
        header("location: va.php");
        
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }
   @$connection->CloseCon($conobj);
}
}
?>


