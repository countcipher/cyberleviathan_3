<?php

$title = "Cyber Leviathan";

include "includes/header.php";

?>

        <?php include "includes/navigation.php"; ?>
        
        <header class="header">
            <div class="header__text-box">
                <h1>Custom Websites<br>&amp; digital marketing made simple</h1>
                <h2>Empower your business online</h2>
                <a href="contact.php"><button class="btn btn--cta">Let's Talk</button></a>
            </div>
        </header>
        
        <!-- =======================
        ABOUT SECTION
        ========================= -->
        <section class="index-about">
            <div class="index-about__modal">
                <video class="index-about__video video" controls>
                    <source src="video/actual_web_video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="index-about__row">
                <h1>What can we do for your business?</h1>

                <div class="index-about__video-button">
                    <i class="far fa-play-circle"></i>
                </div>

            </div>
        </section>

        <!-- =============================
                    TESTIMONIAL
        =============================== -->
        <section class="index-testimonial">
            <div class="index-testimonial__testimonial">
                <h1>Our Clients Say...</h1>
                <p><i class="fas fa-quote-left"></i> Chris Harlow is skilled and experienced in his field. He helped me easily understand complex concepts. I highly recommend Cyber Leviathan for all of your online needs.
                <br>
                —Joseph Martinez, Rockbridge Cider Vinegar
                </p>
            </div>
        </section>

        <!-- ==================================
                    SERVICES
        =====================================-->
        <section class="index-services">
            <div class="box-1 pb--lg">

                <h1>Popular Sevices</h1>

            </div>

            <div class="box-1">

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/web_design_feature.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Custom Websites</h2>
                        <p>Get a website built especially for your business and with your business goals in mind</p>
                        <a href="custom-websites.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/email0.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Email</h2>
                        <p>Show your customers your professionalism and promote your brand with email addresses that match your domain and business name.</p>
                        <a href="email.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/dominas0.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Domains</h2>
                        <p>Get the perfect domain for your business.  With access to .com, .org, .net, and hundreds more domain extensions, you'll be certain to get the right domain for your business.</p>
                        <a href="domains.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="box-1">

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/trident0.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Trident</h2>
                        <p>Allow users to easily connect to you with the Trident contact form system made by Cyber Leviathan.</p>
                        <a href="trident.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/hosting0.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Hosting</h2>
                        <p>Get your site online quickly and have all the features you require for your business.</p>
                        <a href="hosting.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>

                <div class="box-3 center-hor center-ver">
                    <div class="box-2 center-hor center-ver">
                        <img src="images/logo0.jpg" alt="">
                    </div>
                    <div class="box-2 box-2--text">
                        <h2>Logo Design</h2>
                        <p>Let us help you bring your business branding to life with a custom logo.</p>
                        <a href="logo-design.php"><button class="btn btn--cta">Learn More <i class="fas fa-arrow-right"></i></button></a>
                    </div>
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