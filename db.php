<?php
    $servername='localhost';
    $username='Davydov';
    $password='Davydov';
    $dbname = "Romans";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>