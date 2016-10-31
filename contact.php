<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Fibre Music is a young record label presently based in Lagos state Nigeria, where we engage in general entertainment business. We believe in creativity and also believe in following the entertainment trend." /> 
        
        
        <title>Fibre Music</title>
        <link rel="stylesheet" href="vendor/css/normalize.css">
        <link rel="stylesheet" href="vendor/css/grid.css">
        <link rel="stylesheet" href="vendor/css/ionicons.min.css">
        <link rel="stylesheet" href="resources/css/style.css">
        <link rel="stylesheet" href="resources/css/queries.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/resources/favicons/manifest.json">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        
        <!-- logo -->
        <header class="head">
            <div class="row">
                <a href="index.html"><img src="resources/img/logo.png" class="logo" alt="logo"></a>
            </div>
            
            <div class="hero-text-box">
                <h1>Fibre Music Limited</h1>
                <h2>Nice and Lovely Music</h2>

            </div>
        </header>
        <!-- logo and headline -->
        
        
        <!-- Nav Bar -->
        <nav>  
           <a href="#" class="nav-toggle-btn mobile-nav-icon js--nav-icon "><i class="ion-navicon-round"></i></a>
            <div>
                <ul class="js--main-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">Fibre Music</a></li>
                    <li><a href="leadership.html">Management</a></li>
                    <li><a href="music.html">Music</a></li>
                    <li><a href="photo.html">Photo</a></li>
                    <li><a href="video.html">Video</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    <li><a href="news.html">News</a></li>
                </ul>
            </div>
            
        </nav>
            
            <!-- Nav Bar-->
        <div class="map-box">
            
            <div class="map"></div>
            <div class="form-box" id="form">
                <div class="row">
                    <h3 class="sty">We're happy to hear from you</h3>
                </div>
                <div class="row">
                    <form method="post" action="mailer.php" class="contact-form">
                        <div class="row">
                            
                            <?php
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">Thank you! your message has been sent successfully.</div>"
                            }
                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">Oops! Something went wrong please try again</div>"
                            } 
                            ?>
                        </div>
                        
    
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Your name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="find-us">How did you find us?</label>
                            </div>
                            <div class="col span-2-of-3">
                                <select name="find-us" id="find-us">
                                    <option value="friends" selected>Friends</option>
                                    <option value="search">Search engine</option>
                                    <option value="ad">Advertisement</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="news">Newsletter</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="checkbox" name="news" id="news" checked>Yes, please
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Drop us a message</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" placeholder="Your message"></textarea>
                            </div>
                            <div class="row">
                                <div class="col span-1-of-3">
                                    <label>&nbsp;</label>
                                </div>
                                <div class="col span-2-of-3">
                                    <input type="submit" value="Send it">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="leadership.html">Management</a></li>
                        <li><a href="music.html">Music</a></li>
                        <li><a href="photo.html">Photo</a></li>
                        <li><a href="video.html">Video</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                        <li><a href="news.html">News</a></li>
                    </ul>
                </div>
                 <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/fibremusicworld/"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/fibremusicworld"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/2/108667063457492059879"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="https://www.instagram.com/fibreentertainment/"><i class="ion-social-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCKlYCbX6OqZVywSlRHkJc2Q"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2016 by Fibre Entertainment. All rights reserved.
                </p>
                <p>
                    Designed by Stanit Technologies &#8722; 08066698729.
                </p>
            </div>
        </footer>
    
        <script type="text/javascript" src="resources/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="vendor/js/cycle2.js"></script>
        <script src="vendor/js/gmaps.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="resources/js/myscript.js"></script> 
    </body>
</html>
