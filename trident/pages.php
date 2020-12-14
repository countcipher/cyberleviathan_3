<?php session_start(); ?>


<?php include "includes/db.php"; ?>

<?php

if(isset($_POST['sign_in_submit'])){
    
    $sign_in_username = mysqli_real_escape_string($connection, $_POST['sign_in_username']);
    $sign_in_password = mysqli_real_escape_string($connection, $_POST['sign_in_password']);
    
    
    if($sign_in_username == "" || empty($sign_in_username) || $sign_in_password == "" || empty($sign_in_password)){
        
        session_destroy();
        header("Location: index.php?login_error");
        die();
        
    }
    
    $sign_in_credentials_query = "SELECT * FROM users WHERE username = BINARY '$sign_in_username'";
    $result = mysqli_query($connection, $sign_in_credentials_query);
    $row = mysqli_fetch_assoc($result);
    
    if(empty($row['username'])){
        
        session_destroy();
        header("Location: index.php?username_not_found");
        die();
        
    }
    
    if($sign_in_password != $row['password']){
        
        session_destroy();
        header("Location: index.php?password_incorrect&username=".$sign_in_username);
        die();
        
    }
    
    $_SESSION['active_user_username'] = $sign_in_username;
    $_SESSION['active_user_password'] = $sign_in_password;
    $_SESSION['active_user_name'] = $row['name'];
    $_SESSION['active_user_email'] = $row['email'];
    $_SESSION['active_user_role'] = $row['role'];
    $_SESSION['active'] = 1;
    

    
    
}//END OF isset($_POST['sign_in_submit'])

if($_SESSION['active'] != 1){

    session_destroy();
    header("Location: index.php");
    die();

}

include "includes/functions.php";

//END OF EVOLUTION CORE CODE
//===========================================================>

//ALL SUBMIT-BUTTON FUNCTIONS
//===========================================================>
include "includes/submit_button_functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trident</title>
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!--STYLESHEETS-->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/admin.css">
    
    <!--FAVICON-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
    
    <!--Jquery Link-->
    <script src="js/jquery.js"></script>

    <style>
        #dimensions{
            position: fixed;
            background: rgba(0,0,0,.7);
            color: #fff;
            z-index: 999;
        }
    </style>
    
    <script>
    
    $(document).ready(function(){
        var menu_link = document.getElementsByClassName("menu_link");
        menu_link[0].classList.add("active");
        
    });
        
    </script>
    
    <script src="ckeditor/ckeditor.js"></script>
    
</head>
<body onresize="menu_restore()">
   
   <!--FOR GETTING WINDOW DIMENSIONS START
=================================================-->
    <!--<div id="dimensions">
       <p id="width">Width: </p>
       <p id="height">Height: </p>
    </div>-->
    
   <!--FOR GETTING WINDOW DIMENSIONS END
=================================================-->

   <!--NAVIGATION
=================================================-->
   
   <?php include "includes/navigation.php"; ?>
   
   <div id="content" class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div>
                   <img class="logo_smaller" src="images/trident_index_logo_resized.jpg" alt="">
               </div>
               
<!--CONTACTS DISPLAY SECTION
=================================================-->               
               <section id="main_section">
                     
                   <a href="includes/filter_by_name.php"><button class="btn filter_name">Sort By Name</button></a>
                   <a href="includes/filter_by_date.php"><button class="btn filter_date">Sort By Date</button></a>
                   <a href="includes/filter_order.php"><button class="btn filter_order"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button></a>
                     
                     <?php
                   
                        // To delete contacts with forbidden words at beginning of string
                        /*
                   
                        $forbidden_words_query = "SELECT * FROM forbidden_words";
                   
                        $forbidden_words_result = mysqli_query($connection, $forbidden_words_query);
                   
                        while($forbidden_words_row = mysqli_fetch_assoc($forbidden_words_result)){
                            
                            $forbidden_word_search = preg_match("/{$forbidden_words_row['word']} /", $contact_name);
                            
                            if($forbidden_word_search == true && stripos($row['name'], $forbidden_words_row['word']) === 0){
                                
                                echo "<h1>Word found</h1>";
                                
                            }
                            
                        }*///END OF WHILE LOOP
                   
                   
                        //To delete contacts with 'http'
                   
                        $query = "SELECT * FROM contacts";
                   
                        $result = mysqli_query($connection, $query);
                   
                        while($row = mysqli_fetch_assoc($result)){
                            
                            $contact_name = strtolower($row['name']);
                   
                            if(strpos($contact_name, 'http') !== false){
                            
                            $query = "DELETE FROM contacts WHERE id = {$row['id']}";
                            
                            mysqli_query($connection, $query);
                            
                            }
                            
                        }
                   
                        
                   
                   
                      ?>
                      
                      <?php $result = get_contacts_info(); ?>
                      
                      <?php while($row = mysqli_fetch_assoc($result)) : ?>
                      
                      <div class="contact_div">
                          <h3><?php echo $row['name']; ?></h3>
                          
                          <p>Date: <?php echo $row['date']; ?></p>
                          
                          <p>Phone Number: <?php echo $row['phone']; ?></p>
                          
                          <p>Email Address: <?php echo $row['email']; ?></p>
                          
                          <p>Message: <?php echo $row['message']; ?></p>
                          
                          <?php if($_SESSION['active_user_role'] >= 2) : ?>
                          
                          <a onclick="return confirm('Delete?')" href="includes/delete_trident_contact.php?id=<?php echo $row['id'] ?>"><button class="btn">Delete</button></a>
                          
                          <a onclick="return confirm('Confirm As Spam?')" href="includes/add_spam.php?spam_identifier=<?php echo $row['email']; ?>&id=<?php echo $row['id']; ?>"><button class="btn">Spam</button></a>
                          
                          <?php endif; ?>
                          
                      </div>
                      
                      
                      <?php endwhile; ?>
                      
               </section>
           </div>
       </div>
   </div><!--END OF LARGEST CONTAINER-->
   
   
   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
    <script>
    //for getting dimensions***********************************************
    /*function getDimensions(){
        var width = document.getElementById("width");
        var height = document.getElementById("height");
        var w = window.innerWidth;
        var h = window.innerHeight;

        width.innerHTML = "Width: " + w + "px";
        height.innerHTML = "Height: " + h + "px";
    };*/
    //end of getting dimensions********************************************
        
    /**********************************
    Make hamburger open and close menu
    ***********************************/
    var hamburger = document.getElementById("hamburger");
    var hamburger_io = 0;
    var menu = document.getElementById("menu");
        
    hamburger.onclick = function(){
      
        if(hamburger_io == 0){
            $("#menu").slideDown();
            hamburger_io = 1;
        }else{
            $("#menu").slideUp();
            hamburger_io = 0;
        }
        
    };
        
   /********************************
   Make nav menu visible beyond 705px
   ********************************/ 
    function menu_restore(){
      
        if(window.innerWidth >= 706){
            menu.style.display = "block";
            hamburger_io = 0;
        }else{
            menu.style.display = "none";
            hamburger_io = 0;
        }
        
    };
        
    /*******************************
    TOGGLE SECTIONS SECTION
    ********************************/
    /*$("#hero_section_toggler").click(function(){
        
       $("#hero_toggle_div").toggle("fast", "linear");
        
    });
        
    $("#about_section_toggler").click(function(){

        $("#about_toggle_div").toggle("fast", "linear");
        
    });
        
    $("#team_section_toggler").click(function(){

        $("#team_toggle_div").toggle("fast", "linear");
        
    });

    $("#portfolio_section_toggler").click(function(){

        $("#portfolio_toggle_div").toggle("fast", "linear");
        
    });
        
    $("#contact_section_toggler").click(function(){

        $("#contact_toggle_div").toggle("fast", "linear");
        
    });*/
    
    </script>
    
</body>
</html>