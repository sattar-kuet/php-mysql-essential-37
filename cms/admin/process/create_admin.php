<?php
  $server = 'localhost';
  $userName = 'root';
  $password = '';
  $databaseName = 'cms';

 $connection = mysqli_connect($server,$userName, $password, $databaseName);

 extract($_POST);

 $password = sha1($password);

 if($connection){
   $sql = "INSERT INTO users (name,district,email,password) VALUES('$name', '$district','$email','$password')";
   $status = mysqli_query($connection,$sql);
   if($status)
   {
   	 echo 'Insert Successful!';
   }
   else{
   	 echo 'Error in data insertion';
   }
 }
 else{
    echo 'Not connected. Please check your configuration data';
 }

?>