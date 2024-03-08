<?php 
$server = "localhost";
$username = "root";
$password ="";
$database = "users2005";

$conn = mysqli_connect( $server ,$username  , $password ,$database);
if(!$conn){
   die("could not connect");
}


?>