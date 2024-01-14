<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="../../style.css">
        <style>
        </style>
    </head>
<body>
    <?php include '../../header.php';?>
    <div class="main-container">
        <div class="profile-det-container">
            <div class="image-container">
                <?php
                        @include 'login.php';
                         $file_directory = "";
                        if ($table_name == "student"){
                            $file_directory = "../StudentForm/RegisteredStudentImages/$username/";
                        }
                        else if($table_name == "teacherpersonal"){
                            $file_directory = "../TeacherForm/RegisteredTeacherImages/$username/";
                        }
                        else if($table_name == "institutionprofile"){
                            $file_directory = "";
                        }
                        $fullpath = $file_directory . $username;
                        $file = glob($fullpath . ".*");
                        if ($file){
                            echo "<img src='$file[0]' width='100%' height='100%' style='border-radius: 50%;'>";
                        }
                        else{
                            echo "<img src='photos/default.png' width='100%' height='100%' style='border-radius: 50%;'>";
                        }
                    ?>
            </div>
            <div class="name-container">
                Name :
                    <?php
                    @include 'login.php';
                    if ($table_name == "student"){
                        $sql = "SELECT name FROM $table_name WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['name'] . "<br>";
                        }
                    }
                    else if ($table_name == "teacherpersonal"){
                        $sql = "SELECT TeacherName FROM TeacherProfile WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['TeacherName'] . "<br>";
                        }
                    }
                    else if ($table_name == "institutionprofile"){
                        $sql = "SELECT institutionname FROM institutions WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['institutionname'] . "<br>";
                        }
                    }
                ?>
            </div>
            <div class="email-container">
                Email :
                    <?php 
                    @include 'login.php';
                    if ($table_name == "student"){
                        $sql = "SELECT email FROM $table_name WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['email'] . "<br>";
                        }
                    }
                    else if ($table_name == "teacherpersonal"){
                        $sql = "SELECT Email FROM TeacherPersonal WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['Email'] . "<br>";
                        }
                    }
                    else if ($table_name == "institutionprofile"){
                        $sql = "SELECT email FROM $table_name WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['email'] . "<br>";
                        }
                    }
                ?>
            </div>
            <div class="age-container">
                Age :
                <?php
                    @include 'login.php';
                    if ($table_name == "student"){
                        $sql = "SELECT age FROM $table_name WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['age'] . "<br>";
                        }
                    }
                    else if ($table_name == "teacherpersonal"){
                        $sql = "SELECT Age FROM TeacherProfile WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['Age'] . "<br>";
                        }
                    }
                    else if ($table_name == "institutionprofile"){
                        $sql = "SELECT websiteurl FROM institutions WHERE email='$username'";
                        $content = mysqli_query($conn, $sql);
                        while ($row = $content->fetch_assoc()) {
                            echo $row['websiteurl'] . "<br>";
                        }
                    }
                ?>
            </div>
            <div class="medium-container">
                    <?php
                        @include 'login.php';
                        if ($table_name == "student"){
                            $sql = "SELECT mediumlanguage FROM $table_name WHERE email='$username'";
                            $content = mysqli_query($conn, $sql);
                            while ($row = $content->fetch_assoc()) {
                                echo $row['mediumlanguage'] . "<br>";
                            }
                        }
                        else if ($table_name == "teacherpersonal"){
                            $sql = "SELECT Qualification FROM TeacherProfile WHERE email='$username'";
                            $content = mysqli_query($conn, $sql);
                            while ($row = $content->fetch_assoc()) {
                                echo $row['Qualification'] . "<br>";
                            }
                        }
                        else if ($table_name == "institutionprofile"){
                            $sql = "SELECT district FROM institutions WHERE email='$username'";
                            $content = mysqli_query($conn, $sql);
                            while ($row = $content->fetch_assoc()) {
                                echo $row['district'] . "<br>";
                            }
                        }
                    ?>
                
            </div>
        </div>
        <div class="detail-other-container">
            <div class="detail-container">
                Other details will be adding on future
            </div>
            <div class="other-container">

            </div>
        </div>
    </div>
    <?php include '../../footer.php';?>
</body>
</html>