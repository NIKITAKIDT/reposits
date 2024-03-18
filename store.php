<?php
    require_once "db.php";
 
    $name = mysqli_real_escape_string($conn, $_POST['firstName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $email_filtered= filter_var($email, FILTER_SANITIZE_EMAIL);
 
 
    if(mysqli_query($conn, "INSERT INTO obratka(email, message) VALUES('" . $name . "', '" . $email . "')")) {
     echo 'Ваша заявка отправлена! Скоро мы сможем с вами связаться.';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>