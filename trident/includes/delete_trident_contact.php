<?php

session_start();

if($_SESSION['active'] != 1 || $_SESSION['active_user_role'] < 2){
    session_destroy();
    header("Location: ../index.php?login_error");
    die();
}else{
    
    include "db.php";
    
    $id = $_GET['id'];
    
    $query = "DELETE FROM contacts WHERE id = '$id'";
    
    mysqli_query($connection, $query);
    
    header("Location: ../pages.php");
}


?>