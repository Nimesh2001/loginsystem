<?php
$insert=false;
$err=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'dbconnect.php';
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['cpassword'];

  $result= "SELECT * FROM `sign` WHERE email='$email'";
  $query= mysqli_query($conn,$result);
  $nu= mysqli_num_rows($query);
  if($nu > 0){
   $err="username already exist";
   }
  else{
    if($password==$confirmpassword)
    {
      $hash=password_hash($password, PASSWORD_DEFAULT);
     $in="INSERT INTO `sign` (`email`, `password`, `dt`) VALUES ('$email', '$hash',CURRENT_TIMESTAMP())";
     $inq= mysqli_query($conn,$in);
     $insert=true;
    }
    else
     $err="password not matched";
  }
 }
?>
<!doctype html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php">Signin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if($insert)
{
  echo"<div class='alert alert-success' role='success'>
  <strong>Success!</strong> Your form has been submitted successfully,Now you can login.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}
if($err)
{
  echo"<div class='alert alert-danger' role='danger'>
  <strong>Alert! $err</strong>.
  </button>
</div>";
}
?>
<!--- form area--->
<form action=index.php method="post">
<div class="container my-5 col-md-4 bg-success w-25 p-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" maxlength="40" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  maxlength="30" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary mr-4 center-block">submit</button>
  </div>
  </div>
</form>
</body>
</html>