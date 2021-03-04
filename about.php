<?php

$title = "About";

include "includes/header.php";

?>

<?php include "includes/navigation.php"; ?>

    <!-- ===============================
                HEADER
    ================================= -->
    <header class="header_small header_small--aboutPage">
        <div class="header_small__text-box">
                    <h1>About</h1>
                    <h2>we empower your business</h2>
        </div>
    </header>

    <!-- =============================
                MAIN HEADING
    =============================== -->
    <!-- <section class="about-about">
        <h1>Based In Staunton, VA</h1>
        <p>Based in Staunton, VA, Cyber Leviathan offers professional online services to businesses of all sizes.  Whether you're just beginning your small business or are a part of a large company that has been operating for decades, we have the skills and experience to empower your business online!</p>
    </section> -->

     <!-- =============================
                WHY CYBER LEVIATHAN
    ============================== -->
    <section class="about-why">
        <div class="box-1">
            <h1>Why Cyber leviathan?</h1>
        </div>

        <div class="box-1">
            <div class="box-3">
                <i class="fas fa-building"></i>
                <h2>Focused On <em>Your</em> Business</h2>
                <p>Each client is unique and we never lose sight of that fact.</p>
            </div>

            <div class="box-3">
                <i class="fas fa-hand-holding-usd"></i>
                <h2>A Proven Investment</h2>
                <p>Cyber Leviathan clients have a record of reaching more customers and getting more profit.</p>
            </div>

            <div class="box-3">
                <i class="fas fa-people-arrows"></i>
                <h2>Exceptional Customer Experience</h2>
                <p>Throughout the entire process of working with our clients, we maintain connection to ensure you're getting the best service for your business and answer any questions you might have.</p>
            </div>
        </div>
    </section>

    <!-- ==============================
                VIDEO
    ================================ -->
    <!-- <section class="about-video">
        <video class="about-video__video" controls>
            <source src="video/website_vid.mp4" type="video/mp4">
        </video>
    </section> -->

    <!-- =============================
                    TESTIMONIAL
    =============================== -->
    <section class="about-testimonial">
        <div class="about-testimonial__testimonial">
            <h1>Our Clients Say...</h1>
            <p><i class="fas fa-quote-left"></i> Chris Harlow's knowledge and expertise is beyond remarkable. I am a wedding officiant and he created a stunning wedding website for me that is not only strategic and functional, but beautiful and has had so many compliments from my clients.
            <br>
            —Terry Eller, Weddings With Terry
            </p>
        </div>
    </section>

   

    <!--==============================
                THE TEAM
     ==============================-->
     <section class="about-team">
        <h1>we empower your business</h1>

        <div class="box-1">
            <div class="box-3">
                <img class="mug" src="images/team/chris_mug.jpg" alt="Chris Harlow photo">
                <p class="name">Chris Harlow</p>
                <p class="title">Web Design &amp; Development</p>
                <div id="chrisBioButton" class="bio-button"><span>Bio</span></div>
            </div>

            <div class="box-3">
                <img class="mug" src="images/team/rachel_mug.jpg" alt="Chris Harlow photo">
                <p class="name">Rachel Donahoo</p>
                <p class="title">Digital Marketing</p>
                <div class="bio-button"><span>Bio</span></div>
            </div>

            <div class="box-3">
                <img class="mug" src="images/team/jay_mug.jpg" alt="Chris Harlow photo">
                <p class="name">Jay Crawford</p>
                <p class="title">Graphic Design</p>
                <div class="bio-button"><span>Bio</span></div>
            </div>
        </div>

        <div id="chrisBioModal">
            <div class="container">
                <img class="mug" src="images/team/chris_mug.jpg" alt="Chris Harlow photo">
                <p class="name">Chris Harlow</p>
                <p class="title">Web Design &amp; Development</p>

                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ad quas, earum incidunt tenetur saepe aspernatur, nemo non quae necessitatibus deserunt id magnam voluptatibus ducimus dolorem dolores vel nulla voluptatum quia consectetur asperiores? Ab ut voluptates alias soluta eos aspernatur, quo minima fuga nulla, cumque harum, similique illum provident molestiae?</p>

                <div class="modal-exit-button">Return</div>
            </div>
        </div>
     </section>

    <!-- =============================
                    CONTACT
    =============================== -->
    <?php include "includes/contact.php"; ?>

    <!-- ==============================
                FOOTER
    ================================ -->
    <?php include "includes/footer.php" ?>