<?php 
$error = false;
$alert = false;
require'partials/dbconnect.php';

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

   
    $sql = "select * from `users2005_info` where username ='$username'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);

    if($num==1){
      while($row = mysqli_fetch_assoc($result)){
        if(password_verify($password , $row['password'])){
          $alert = true;
          session_start();
          $_SESSION['logged in '] = true;
         $_SESSION['username'] = $username;
         header("location:welcome.php");
        }
      }
       
    }
    else{
        echo"invalid credentials";
    }

    }
   
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href = "style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="bg-image" style="background-image: url('https://images.unsplash.com/photo-1535868463750-c78d9543614f?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D '); height: 1000px;">

   <?php 
  require'partials/nav.php';
  require'partials/dbconnect.php';
   ?>

<?php 
  if($alert){
    echo '
  <div class="alert alert-success inserted alert-dismissible fade show" role="alert">
  <strong>Your details succesfully submitted</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div> ';
  }
?>


  

<div class="all d-flex justify-content-center my-4 --bs-body-bg:red">
<form action = "/projectphp/login.php" method="post">
    <?php 
     require'partials/dbconnect.php';?>
  <div class="mb-3 mx-5">
    <label for="exampleInputEmail1 " class="form-label "> <h5 style="color:white;"> Username</h5></label>
    <input type="email" class="form-control " id="username" name ="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"style="color:white;">We'll never share your username with anyone else.</div>
  </div>
  <div class="mb-3 mx-5">
    <label for="exampleInputPassword1" class="form-label my-3"><h5 style="color:white;">Password</h5></label>
    <input type="password" class="form-control" id="password" name ="password">
  </div>
  
  
  <button type="submit" class="btn btn-primary mx-5 my-3" name ="submit">login</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
  </body>
</html>
</body>
</html>
</div>
</div>