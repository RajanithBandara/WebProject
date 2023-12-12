<?php
$name = $_POST["namewithinitials"];
$email = $_POST["emailaddress"];
$nicnumber = $_POST["nicnumber"];
$contactnumber = $_POST["contactnumber"];
$district = $_POST["district"];
$age = $_POST["age"];
$gender = $_POST["Gender"];
$qualification = $_POST["qualifications"];
$institute = $_POST["institute"];
$otherdetails = $_POST["otherdetails"];
$teacherpassword = $_POST["teacherpassword1"];
$rewritepassword = $_POST["teacherpassword2"];

$username = "id21562540_forms";
$password = "";
$database = "id21562540_formsreg";
$table1 = "TeacherProfile";
$table2 = "TeacherPersonal";
$server = "localhost";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt1 = $conn->prepare("INSERT INTO $table1 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt1->bind_param("sssssssss", $name, $email, $contactnumber, $district, $age, $gender, $qualification, $institute, $otherdetails);

$stmt2 = $conn->prepare("INSERT INTO $table2 VALUES (?, ?, ?)");
$stmt2->bind_param("sss", $email, $nicnumber, $teacherpassword);

if ($teacherpassword == $rewritepassword) {
    // Execute the statements
    if ($stmt1->execute() && $stmt2->execute()) {
        echo "Your data entered successfully<br>";
        echo "<a href='https://fyrhere.000webhostapp.com/'><button>Main Page</button><a>";
    } else {
        echo "Error entering data: " . $conn->error;
    }
} else {
    echo "Passwords do not match";
}

$conn->close();


// Set the target directory and create it with appropriate permissions
$targetDirectory = "RegisteredTeacherImages/";
$fullPath = $targetDirectory . $email . "/";

if (!file_exists($fullPath) && !mkdir($fullPath, 0755, true)) {
    die('Failed to create directory...');
}

$file_namex = $_FILES['profilephoto']['name'];
$file_information = pathinfo($file_namex);
$file_extension = $file_information['extension'];
// Set the target path for the uploaded file
$targetPath = $fullPath . basename($email.".$file_extension");

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES['profilephoto']['tmp_name'], $targetPath)) {
    echo "The file " . basename($_FILES['profilephoto']['name']) . " has been uploaded successfully.";
} else {
    echo "There was an error uploading the file, please try again!";
}

?>
