<?php session_start(); ?>

<?php

if($_SESSION['active'] != 1){

    session_destroy();
    header("Location: ../index.php");
    die();

}

include "db.php";


if(isset($_POST['add_spam_submit'])){
    
    $spam_identifier = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['spam_identifier']));
    
    if(empty($spam_identifier)){
        header("Location: ../spam.php");
        die();
    }
    
    $query = "INSERT INTO spam (spam_identifier) VALUES ('{$spam_identifier}')";
    
    mysqli_query($connection, $query);
    
    header("Location: ../spam.php?spam_added_confirm&spam_identifier={$spam_identifier}");
    
}else{
    
    $spam_identifier = $_GET['spam_identifier'];
    $id = $_GET['id'];
    
    $query = "INSERT INTO spam (spam_identifier) VALUES ('{$spam_identifier}')";
    
    mysqli_query($connection, $query);
    
    $query = "DELETE FROM contacts WHERE id = '{$id}'";
    
    mysqli_query($connection, $query);
    
    header("Location: ../pages.php");
}


?>