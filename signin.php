
<?php
$insert=false;
$err=false;
$showerr=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'dbconnect.php';
  $email=$_POST['email'];
  $password=$_POST['password'];

  //$result="SELECT * FROM sign where email='$email' AND password='$password'";
  $sql="SELECT * FROM sign where email='$email'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result); 
    if($num == 1)
    { while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password, $row['password']))
        {
           $login=true;
           session_start();
           $_SESSION['loggedin']=true;
           $_SESSION['email']=$email;
           header("location:welcome.php");
        }
        else
        $showerr="Invalid Credentiels!";
      }
    }
  else
  $showerr="Invalid Credentiels!";
}
 ?>
<!doctype html>
<html>
<head><title>signin</title>
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
if($showerr)
{
  echo"<div class='alert alert-danger' role='danger'>
  <strong>Alert</strong> $showerr
  </button>
</div>";
}
?>
<!--- form area--->
<form action=signin.php method="post">
<div class="container my-5 col-md-4 bg-success w-25 p-4">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-primary mr-4 center-block">Sign-in</button>
  </div>
  </div>
</form>
</body>
</html>