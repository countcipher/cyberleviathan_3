<?php session_start(); ?>

<?php

if($_SESSION['active'] != 1){
    
    session_destroy();
    header("Location: index.php?login_error");
    die();
    
    
}

?>

<?php include "includes/db.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Evolution</title>
    
    
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
        menu_link[1].classList.add("active");
        
    });
        
    </script>
    
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
               
<!--FORM TO MANUALLY SUBMIT SPAM IDENTIFIER
==================================================-->
              
        <?php if(isset($_GET['spam_added_confirm'])) : ?>
                  
                  <h3 class="form_confirm">spam added successfully: <?php echo stripslashes($_GET['spam_identifier']); ?></h3>
                  
          <?php endif; ?>
              
        <?php if(isset($_GET['forbidden_word_confirm'])) : ?>
              
              <h3 class="form_confirm">forbidden word added successfully: <?php echo stripslashes($_GET['forbidden_word_confirm']); ?></h3>
              
        <?php endif; ?>
               
        <section>
                  
                   <form action="includes/add_spam.php" method="post">
                      
                       <h1 id="add-user-header">Spam Identifier</h1>

                       <hr>
                       
                       <div class="form-group">
                           <label for="spam_identifier">Name/Email</label>
                           <input name="spam_identifier" type="text" class="form-control">                             
                       </div>
                       
                       <div class="form-group">
                           <input name="add_spam_submit" type="submit" class="btn" value="Add As Spam">
                       </div>
                       
                   </form>
                   
                   <form action="includes/forbidden_word.php" method="post">
                      
                       
                       
                       <div class="form-group">
                           <label for="forbidden_word">Forbidden Word</label>
                           <input name="forbidden_word" type="text" class="form-control">                             
                       </div>
                       
                       <div class="form-group">
                           <input name="add_forbidden_word_submit" type="submit" class="btn" value="List As Forbidden">
                       </div>
                       
                   </form>
                   
               </section>
               
           </div>
       </div>
   </div>
   
   
   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script>
    //for getting dimensions***********************************************
    function getDimensions(){
        var width = document.getElementById("width");
        var height = document.getElementById("height");
        var w = window.innerWidth;
        var h = window.innerHeight;

        width.innerHTML = "Width: " + w + "px";
        height.innerHTML = "Height: " + h + "px";
    };
    //end of getting dimensions********************************************

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
        
    //SHOW PASSWORD*******************************************************
    var password_show_button = document.getElementById("password_show_button");
        
    
    function menu_restore(){
      
        if(window.innerWidth >= 706){
            menu.style.display = "block";
            hamburger_io = 0;
        }else{
            menu.style.display = "none";
            hamburger_io = 0;
        }
        
    }; 
        
        
    </script>
    
</body>
</html>