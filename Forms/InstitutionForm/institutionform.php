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
$table1 = "instituions";
$table2= "institutionprofile";
$server= "Localhost";



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
        $s1="Insert into instituions values('$name','$email','$cnumber','$insweb','$district')";
        mysqli_query($conn,$s1);
        $s="Insert into institutionprofile values('$email','$uname','$inspassword')";
        mysqli_query($conn,$s);
        echo"Your data entered successfully";
    }
}

?>