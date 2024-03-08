<?php 
session_start();

if(!isset($_SESSION['logged in '] )){
header("location:login.php");
exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>

   <div class="bg-img" style="background-image: url('https://media.istockphoto.com/id/1377859358/vector/welcome-to-the-team-written-on-label-neon-icon-advertising-sign-vector-stock-illustration.jpg?s=612x612&w=0&k=20&c=Gyg8l-3t4KF25mMNCqNyIH6U8PqFihMyzT2_oeEMdBk='); height:1000px"></div>
</body>
</html>