<?php
$name = $_POST["namewithinitials"];
$email=$_POST["emailaddress"];
$photo=$_POST["profilephoto"];
$nicnumber=$_POST["nicnumber"];
$contactnumber=$_POST["contactnumber"];
$district=$_POST["district"];
$age=$_POST["age"];
$gender=$_POST["Gender"];
$qualification=$_POST["qualifications"];
$institute=$_POST["institute"];
$otherdetails=$_POST["otherdetails"];
$teacherpassword=$_POST["teacherpassword1"];
$rewritepassword=$_POST["teacherpassword2"];

$username="root";
$password="";
$database="forms";
$table1="teacherprofile";
$table2="teacherpersonal";
$server="Localhost";
$conn=new mysqli($server,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
else
{
    echo"success <br>";
    if($teacherpassword==$rewritepassword)
    {
        $s1="Insert into teacherprofile values('$name','$email','$contactnumber','$district','$age','$gender','$qualification','$institute','$otherdetails')";
        mysqli_query($conn,$s1);
        $s="Insert into teacherpersonal values('$email','$nicnumber','$teacherpassword')";
        mysqli_query($conn,$s);
        echo"Your data entered successfully";
    }
}
?>