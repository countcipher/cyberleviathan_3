<?php

$title = "Contact";

include "includes/header.php";

?>

<?php include "includes/navigation.php"; ?>

    <!-- ===============================
                HEADER
    ================================= -->
    <header class="header_small header_small--aboutPage">
        <div class="header_small__text-box">
                    <h1>Contact</h1>
                    <h2>we empower your business</h2>
        </div>
    </header>


    <!-- ===============================
                FORM
    ================================= -->
    <section class="CONTACT__form">
        <div class="container-fluid">
          <div class="row">

             
             <div class="col-md-12">
                    <!--<img style="width: 40% !important" src="images/logo/PSD_PNG/logo_white.png" alt="">-->
                    
                    <h2 style="padding-top: 45px">We're here for your business needs!  Use the form below and we'll get back to you ASAP!</h2>
                    
                    
             </div>
             
          </div>
          
          <div id="formWrapper" class="row">
              <div class="col-md-12 form-group">
                  <form action="contact_submit.php" method="post">
                     
                      <label for="name_x">Name</label>
                      <input name="name_x" type="text" class="form-control" required>
                      
                      <label for="email">Email</label>
                      <input name="email" type="text" class="form-control" required>
                      
                      
                      <label for="phone">Phone</label>
                      <input name="phone" type="text" class="form-control" required>
                      
                      <label id="comment_label" for="comment">Comment</label>
                      <input id="comment_field" type="text" name="comment" class="form-control">
                      
                      <label for="message">Message</label>
                      <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                      
                      <input class="cta-button" type="submit" value="Send" name="submit">
                      
                  </form>
              </div>
          </div>
           
           <!--<img style="padding-top: 80px; width: 80%; max-width: 500px; display: block; margin: auto" src="images/PSD_PNG/full_white.png" alt="">-->

        </div><!--container-->
    </section>

    <!-- ==============================
                FOOTER
    ================================ -->
    <?php include "includes/footer.php" ?>