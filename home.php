< ? php 

$server="localhost";
$user="root";
$password="";
$database="login";

$conn = new mysqli($server,$user,$password,$database);

$name=$_REQUEST["un"];
$password=$_REQUEST["pw"];

$server = "INSERT INTO form VALUES('$name','$password')";

if ($conn -> query($server)==TRUE)
{
    echo "OK";
}
else
{
    echo "ERORR";
}

?>