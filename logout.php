 <?php 
  session_start();

  session_unset();

  session_destroy();

  header("location:/projectphp/login.php");
 ?>
