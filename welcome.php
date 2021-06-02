<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']=!true){
    header("location:login.php");
    
}
?>
<html>
<head><title>welcome <?php echo $_SESSION['email']?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Hello! <?php echo $_SESSION['email']?></h4>
  <p>Awesome! Welcome  to my website I hope you will enjoy very well </p>
  <hr>
  <p class="mb-0">Whenever you need to, you can logout through this link <a href="logout.php">logout</a>.</p>
  
</div>
</body>
</html>