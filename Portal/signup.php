<html>
<head>
<title> sign up</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css"> 
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
    <div class="jumbotron">
<h1> Course Sign up page </h1>
<h2> please note : first name, last name, email and password are required </h2>
<form class ="" action="E:\new1.html">
  <div class="form group">
<label for="frst"> First name :</label>
<input class="form-control"id ="frst " type="text" name="firstname" placeholder="first name"required>
<label for="lst"> last name :</label>
  <input class="form-control"id="lst" type= "text" name="lastname" placeholder="last name"required>
<p></p>
<label for="mail"> Email :</label>
  <input class="form-control" id="mail" type="email" name="username" placeholder="name@email.com"required>
<label for="pss"> Password</label> :
  <input class="form-control"id="pss"  type ="password" name="password" value=""required>
  <br>
  <button class="btn btn-warning btn-lg" type="submit" name="submit"> sign up</button>
      
        
    </div>
        </form>
      </div>
    </div>
    </form>
    </body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'web') or die("plz check database");
if(isset($_POST['submit']))
{
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ins=mysqli_query($con,"insert into aman values('$first_name','$last_name','$username','$password')");
    if(!$ins)
    {
        echo"<script>alert('not submit successfully')</script>";
    }
    else{
        echo"<script>alert('submit successfully');</script>";
    }
}
?>