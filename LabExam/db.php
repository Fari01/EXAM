<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "CV";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}


function InsertUser($conn,$table,$username, $password,$fullname, $mobno, $bdy  ) {

    $sql = "INSERT INTO Employee(username,password, fullname, mobno,bdy) VALUES 
    ('$username',' $password','$fullname', '$mobno', '$bdy' )";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
}




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>