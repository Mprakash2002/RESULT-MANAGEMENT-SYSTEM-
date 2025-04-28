<?php

 $ID=$_POST['t1'];
 $PWD=$_POST['t2'];
$host = "localhost";
$user = "root";
$password = "";
$db_name="android";

// Create database connection
$conn = mysqli_connect($host, $user, $password,$db_name);

$qry="INSERT INTO login (ID, PWD) VALUES ('$ID', '$PWD')";
if(mysqli_query($conn,$qry))
{
    echo "INSERTED SUCESSFULLY";
}
else
{
    echo "INSERTED failed";
}
?>