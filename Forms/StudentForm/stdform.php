<?php
$name = $_POST['name'];
$email=$_POST['email'];
$photo = $_POST['photo'];
$age = $_POST['age'];
$district = $_POST['district'];
$number = $_POST['number'];
$grade = $_POST['grade'];
$medium = $_POST['medium'];
$txtnme = $_POST['txtnme'];
$pwd1 = $_POST['pwd1'];
$pwd2= $_POST['pwd2'];
$gname = $_POST['gname'];
$cnumber = $_POST['cnumber'];

$username = "root";
$password = "";
$database = "forms";
$table = "student";
$table2 = "guardian";
$server="Localhost";
$conn= new mysqli($server,$username,$password,$database);
 if ($conn->connect_error)
 {
    die("Connection failed:".$conn->connect_error);
 }
 else
{
    echo "success";
    $s="Insert into guardian values('$email','$gname','$cnumber')";
    mysqli_query($conn,$s);
    if ($pwd1==$pwd2){
        $s1="Insert into student values('$email','$name','$photo','$age','$district','$number','$grade','$medium','$txtnme','$pwd1')";
        echo "Your data entered successfully";
        mysqli_query($conn,$s1);
    }
}
?>
