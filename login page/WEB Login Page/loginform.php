 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../style-dark.css">
    <link rel="stylesheet" href="../../themeswitch.js">
    <link rel="stylesheet" href="login.css">
  </head>
<body>

<?php include '../../header.php';?>
<!--Login Box -->
<div class="mainwrapper">
  <div class="wrapper">
    <form action="profile.php" method="post" >
      <h1>Login Here</h1>
      <div class="input-box">
        <input type="text" name="un" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="  input-box">
        <input type="password" name="pw" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      
      <div class="select-the-table">
        <center>
        <labal for="tablehere" style="font-weight: bold; font-size: medium;">Login as </labal>
      </center><br><center>
      <div class="radio" style="font-size: medium; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

        <input type="radio" name="table" value="student" checked>Student<br>
        <input type="radio" name="table" value="teacher">Teacher<br>
        <input type="radio" name="table" value="institution">Institution<br>
      </div></center>
      </div><br>
      <a href="Profile.html"><button type="submit" class="btn">Login</button></a>
      <div class="register-link">
        <p>Dont have an account ? <a href="Register.html">Register</a></p>
      </div>
    </form>
  </div>
</div>
<!--End of Login Box -->
<?php include '../../footer.php';?>
</body>
</html>