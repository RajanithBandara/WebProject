<?php
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$district = $_POST['district'];
$number = $_POST['number'];
$grade = $_POST['grade'];
$medium = $_POST['medium'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
$gname = $_POST['gname'];
$cnumber = $_POST['cnumber'];

$username = "id21562540_forms";
$password = "";
$database = "id21562540_formsreg";
$table = "student";
$table2 = "guardian";
$server = "localhost";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Use prepared statements to prevent SQL injection
    $stmtGuardian = $conn->prepare("INSERT INTO guardian VALUES (?, ?, ?)");
    $stmtGuardian->bind_param("sss", $email, $gname, $cnumber);

    // Execute the statement for the guardian
    if ($stmtGuardian->execute()) {
        echo "Guardian data entered successfully";
        
        // Hash the password before storing it
        $hashedPassword = password_hash($pwd1, PASSWORD_DEFAULT);

        // Use prepared statements for student as well
        $stmtStudent = $conn->prepare("INSERT INTO student VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmtStudent->bind_param("ssssssss", $email, $name, $age, $district, $number, $grade, $medium, $hashedPassword);

        // Execute the statement for the student
        if ($pwd1 == $pwd2 && $stmtStudent->execute()) {
            echo "Student data entered successfully<br>";
            echo "<a href='https://fyrhere.000webhostapp.com/'><button>Main Page</button><a>";
        } else {
            echo "Error entering student data: " . $stmtStudent->error;
        }
    } else {
        echo "Error entering guardian data: " . $stmtGuardian->error;
    }

    // Close the statements and the connection
    $stmtGuardian->close();
    $stmtStudent->close();
    $conn->close();
}
// Set the target directory and create it with appropriate permissions
$targetDirectory = "RegisteredStudentImages/";
$fullPath = $targetDirectory . $email . "/";

if (!file_exists($fullPath) && !mkdir($fullPath, 0755, true)) {
    die('Failed to create directory...');
}

$file_namex = $_FILES['photo']['name'];
$file_information = pathinfo($file_namex);
$file_extension = $file_information['extension'];
// Set the target path for the uploaded file
$targetPath = $fullPath . basename($email. ".$file_extension");

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
    echo "The file " . basename($_FILES['photo']['name']) . " has been uploaded successfully.";
} else {
    echo "There was an error uploading the file, please try again!";
}
?>
