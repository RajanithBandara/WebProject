<?php

$name = $_POST['name'];
$email = $_POST['email'];
$cnumber = $_POST['contnumber'];
$uname = $_POST['username'];
$inspassword = $_POST['passwo'];
$pretype = $_POST['pass'];
$district = $_POST['District'];
$insweb = $_POST['inswebsite'];


$username = "root";
$password = "";
$database = "forms";
$table = "instituions";
$server="Localhost";

$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
else
{
    echo"success <br>";
    if($inspassword==$pretype)
    {
        $s="Insert into instituions values('$name','$email','$cnumber','$uname','$inspassword','$district','$insweb')";
        mysqli_query($conn,$s);
        echo"Your data entered successfully";
    }
}

?>