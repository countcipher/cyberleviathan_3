<?php

session_start();

if($_SESSION['contact_active'] != 1){
    
    header("Location: contact.php");
    die();
    
}

include "trident-admin/includes/db.php";

    $comment = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['comment']));

    if(!empty($comment)){
        
        header("Location: contact.php");
        die();
    }

    
    $name = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['name_x']));
    $phone = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['phone']));
    $email = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['email']));
    $message = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['message']));
    
    date_default_timezone_set("America/New_York");
    $date = date("m/d/Y");
    
    //ANTI-SPAM CODE
    //=======================================================
    
    //REJECTS ANY STRING WITH 'HTTP'
    //=======================================================
    $string = strtolower($name);
    
    if(strpos($string, 'http') !== false){
        
        echo "All website addresses are forbidden in input fields.";
        
        die();
        
    }
    
    //CHECKS FOR FORBIDDEN WORD AS BEGINNING OF STRING
    //=======================================================
    $string = strtolower($name);

    $query = "SELECT * FROM forbidden_words";

    $result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)){
        
        $forbidden_word_search = preg_match("/{$row['word']} /", $string);

        if(($forbidden_word_search == true) && (stripos($string, $row['word']) === 0)){
            echo "Forbidden word discovered.  Form submission rejected.";
            die();
            
        }
        

    }//END OF WHILE LOOP
    
    //CHECKS FOR FORBIDDEN WORD HAVING SPACES ON EITHER SIDE
    //=======================================================
    $string = strtolower($name);

    $query = "SELECT * FROM forbidden_words";

    $result = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($result)){
        
        //$forbidden_word_search = stripos($string, $row['word']." ");
        $forbidden_word_search = preg_match("/ {$row['word']} /", $string);

        if($forbidden_word_search == true){
           echo "Forbidden word discovered.  Form submission rejected.";
            die();
            
        }
        

    }//END OF WHILE LOOP
    
    //CHECKS FOR FORBIDDEN WORD AT END OF SENTENCE W/ PERIOD
    //=======================================================
    $string = strtolower($name);

    $query = "SELECT * FROM forbidden_words";

    $result = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($result)){
        
        //$forbidden_word_search = stripos($string, $row['word']." ");
        $forbidden_word_search = preg_match("/ {$row['word']}\./", $string);

        if($forbidden_word_search == true){
           echo "Forbidden word discovered.  Form submission rejected.";
            die();
            
        }

    }//END OF WHILE LOOP
    
    $spam_query = "SELECT * FROM spam WHERE (spam_identifier = '$email') OR (spam_identifier = '$name')"; 
    
    $result = mysqli_query($connection, $spam_query);
    $row = mysqli_fetch_assoc($result);

    if(!empty($row)){
        
        echo "The submission of this form has been identified as coming from a source which the site admin has listed as a spammer.  Form submission is denied.";
        die();
        
    }else{
        $query = "INSERT INTO contacts (name, phone, email, date, message) VALUES ('$name', '$phone', '$email', '$date', '$message')";
    
        mysqli_query($connection, $query);
        
        header("Location: form_sent.php");
    }

?>