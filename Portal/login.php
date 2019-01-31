<html>
<head>
  <title> LOG IN </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form method="post">
  <nav class="nav navbar-inverse">
    <div class="navbar-header">
      <a href="clgproj.php" class="navbar-brand"> HOME</a>
        <ul class="nav navbar-nav">
      <li>
        <a href="login.php">Log in</a>
      </li>
      <li>
        <a href="signup.php">Sign up </a>
      </li>
        <li>
        <a href="aboutus.php"> About us</a>
        </li>
        <li>
        <a href="contactus.php">Contact us</a>
        </li>
    </ul>
    </div>
  </nav>
  <div class="container">
    
  <h1> WELCOME TO LOG IN PAGE</h1>
  <br>
  <form>
    <div class="forms">
      <label for="username"> Username</label>
      <input class="form-control"id="username" type="email" name="username" placeholder="username@email.com" required>
      <br>
      <label for="password"> Password</label>
      <input class="form-control"id="password" type="password" name="password" required>
      <input type="checkbox">
      <small class="form-text text-muted"> remember me</small>
      <br><button class="btn btn-success btn-lg" type="submit" name="submit"> log in</button>
    </div>
      
  
  </form>
    </div>
    </form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'web') or die("plz check database");
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select * from aman where username='$username' and password='$password'");
    $row=mysqli_num_rows($query);
    if($row==1)
    {
        header("location:aboutus.php");
    }
    else{
        echo"<script>alert('user and pass not valid')</script>";
    }
}
?>