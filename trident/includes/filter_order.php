<?php

session_start();

if($_SESSION['active'] != 1){
    session_destroy();
    header("Location: ../index.php?login_error");
    die();
}else{
    
    include "db.php";
    
    $query = "SELECT * FROM contacts_filter";
    
    $result = mysqli_query($connection, $query);
    
    $row = mysqli_fetch_assoc($result);
    
    if($row['direction'] == 'ASC'){
        
        $query = "UPDATE contacts_filter SET direction = 'DESC'";
        mysqli_query($connection, $query);
        
    }else{
        
        $query = "UPDATE contacts_filter SET direction = 'ASC'";
        mysqli_query($connection, $query);
    }
    
    header("Location: ../pages.php");
}


?>