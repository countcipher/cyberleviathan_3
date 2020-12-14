<?php

session_start();

if($_SESSION['active'] != 1){
    session_destroy();
    header("Location: ../index.php?login_error");
    die();
}else{
    
    include "db.php";
    
    $query = "UPDATE contacts_filter SET filter = 'name' WHERE id = 1";
    
    mysqli_query($connection, $query);
    
    header("Location: ../pages.php");
}


?>