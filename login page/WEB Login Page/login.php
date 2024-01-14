<?php 

$server="localhost";
$user="id21562540_forms";
$password="Sarath123$";
$database="id21562540_formsreg";

$table_name = "";

$conn = new mysqli($server,$user,$password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['un'];
    $password = $_POST['pw'];
    $whois = $_POST['table'];
    if ($whois == "student"){
        $stmt = $conn->prepare("SELECT * FROM student WHERE email=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // User found, check password
            $row = $result->fetch_assoc();
            $hashedPasswordFromDatabase = $row['Password'];
        
            if (password_verify($password, $hashedPasswordFromDatabase)) {
                // Password is correct
                $table_name = "student";
                // Continue with your code after successful login
            } else {
                // Incorrect password
                echo "Login failed. Incorrect password.";
            }
        } else {
            // User not found
            echo "Login failed. User not found.";
        }
        
        $stmt->close();
    }
    else if ($whois == "teacher"){
        $sql = "SELECT * FROM TeacherPersonal WHERE email='$username' AND passworde='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $table_name = "teacherpersonal";
        } else {
            echo "Login Failed";
            end();
        }
    }
    else if ($whois == "institution"){
        $sql = "SELECT * FROM institutionprofile WHERE email='$username' AND passworde='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $table_name = "institutionprofile";
        } else {
            echo "Login Failed";
            end();
        }
    }
}
?>