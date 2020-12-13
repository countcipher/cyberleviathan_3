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

        <form action="contact_submit.php" method="post">
            
            <label for="name_x">Name</label>
            <input name="name_x" type="text" class="form-control" required>
            
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control" required>
            
            
            <label for="phone">Phone</label>
            <input name="phone" type="text" class="form-control" required>
            
            <!-- <label id="comment_label" for="comment">Comment</label>
            <input id="comment_field" type="text" name="comment" class="form-control"> -->
            
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="" cols="30" rows="30"></textarea>
            
            <!-- <input class="btn btn--cta" type="submit" value="Send" name="submit"> -->

            <button type="submit" value="Send" name="submit" class="btn btn--cta">Submit</button>
            
        </form>
    </section>

    <!-- ==============================
                FOOTER
    ================================ -->
    <?php include "includes/footer.php" ?>