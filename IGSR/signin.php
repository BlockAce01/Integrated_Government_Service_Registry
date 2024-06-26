<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login as Citizen</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php';?>
<!--------------start in body section------------------->

<div class="wrapper">
<div class="section" style="width: 50%;">
  <form action="includes/signin.inc.php" method="post" >
    <h1>Login as Citizen</h1>
      <div class="input-box">
        <input type="text" name="NIC" placeholder="NIC Number" required>
        <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="password" name="Pass" placeholder="Password" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">Remember Me</label>
          <a href="#">Forgot Password</a>
        </div>
        <button type="submit" name="submit" class="btn">Login</button>
        <div class="register-link">
          <p><a href="signinOfficer.php">Login as a Officer</a><br>Or<br><a href="signup.php">Register as a Citizen</a></p>
        </div>
      </form>
    </div>
  </div>

<!----------end of body section------------------------>


<!-------------------footer section--------------->
<?php
  include_once "footer.php";
?>
<!------------------end of footer----------------->
</body>