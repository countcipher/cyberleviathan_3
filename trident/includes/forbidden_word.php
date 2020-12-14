<?php session_start(); ?>

<?php

if($_SESSION['active'] != 1){

    session_destroy();
    header("Location: ../index.php");
    die();

}

include "db.php";

//ADD FORBIDDEN WORD
//===========================================
if(isset($_POST['add_forbidden_word_submit'])){
    
    $forbidden_word = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['forbidden_word']));
    
    if(empty($forbidden_word)){
        header("Location: ../spam.php");
        die();
    }
    
    $query = "INSERT INTO forbidden_words (word) VALUES ('{$forbidden_word}')";
    
    mysqli_query($connection, $query);
    
    header("Location: ../spam.php?forbidden_word_confirm={$forbidden_word}");
    
}


?>