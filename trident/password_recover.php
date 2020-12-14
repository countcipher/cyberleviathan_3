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
    <link rel="stylesheet" href="css/index.css">
    
    <!--FAVICON-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
    
    <!--Jquery Link-->
    <script src="js/jquery.js"></script>

    
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
          <!-- <a href="index.php">-->
                <img class="logo" src="images/trident_index_logo_resized.jpg" alt="">
           <!-- </a>-->
            <div class="col-xs-12">
                <form action="includes/recover_password.php" method="post">
                    <div class="form-group">
                        <input name="username" class="form-control" type="text" placeholder="Enter Username">
                    </div>
                    
                    <input name="recover_password_submit" type="submit" class="btn" value="Recover Password">
                    
                </form>
                
                <a href="index.php">Sign In</a>
                
            </div>
            
        </div>
    </div>
   
   
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>