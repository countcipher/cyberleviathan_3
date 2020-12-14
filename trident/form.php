<?php

include "admin/includes/db.php";

if(isset($_POST['submit'])){
    
    $name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name_x']));
    $phone = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['phone']));
    $email = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['email']));
    $message = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['message']));
    
    date_default_timezone_set("America/New_York");
    $date = date("m/d/Y");
    
    $query = "INSERT INTO contacts (name, phone, email, date, message) VALUES ('$name', '$phone', '$email', '$date', '$message')";
    
    mysqli_query($connection, $query);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    
    <style>
    
        body{
            background: #000;
            color: rgb(0,255,0);
        }
    
    </style>
    
</head>
<body>
   
   <form action="" method="post">
      <div>
          <label for="name_x">Name: </label>
           <input type="text" name="name_x">
      </div>
      
      <div>
          <label for="phone">Phone: </label>
           <input type="text" name="phone">
      </div>
      
      <div>
          <label for="email">Email: </label>
           <input type="text" name="email">
      </div>
      
      <div>
          <label for="email">Message: </label>
           <textarea name="message" id="" cols="30" rows="10"></textarea>
      </div>
      
      <div>
          <input type="submit" name="submit" value="Send">
      </div>
       
   </form>
    
</body>
</html>