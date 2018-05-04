
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="msvalidate.01" content="AAAE16EE8362AA1367BBE9ACBA83F8DB" />
            <meta name="description" content="Karmatek-Annual Technical Fest of GCECT">
            <meta name="author" content="Tanmoy Purkait- tanmoypurkait.com">
            <meta property="og:image" content="http://karmatek.org/assets/img/thumbnail.jpg" />
            <meta property="og:url" content="http://karmatek.org/" />
            <meta property="og:title" content=" Karmatek : Annual Techfest of GCECT" />
            <meta property="og:description" content="Karmatek is an annual techno management festival organized by the technical wing of Government College of Engineering and Ceramic Technology. As a high profile technical college today GCECT is excelling and to take this excellence to new heights." />


            <title> Karmatek : Annual Techfest of GCECT</title>

               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
              <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

            <script>
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
            </script>


            <link rel="icon" type="image/png" href="assets/img/favicon.png">      
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" type="text/css" href="assets/css/queries.css">
            <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>  




            </head>

            <body>

                <div class="se-pre-con"></div>



                <nav class="navbar navbar-inverse ">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                      <a class="left" href="index.html"><img class="img-responsive resize" src="assets/img/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav right">

                        <li><a href="http://www.karmatek.org#home">Home</a></li>
                        <li><a href="http://www.karmatek.org#about">About</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="events">Events <span class="caret"></span></a>
                          <ul class="dropdown-menu black">
                            <li><a href="gaming.html">Gaming</a></li>
                            <li><a href="coding.html">Code Craze</a></li>
                            <li><a href="robotics.html">Robotics</a></li>
                            <li><a href="geek.html">Geek's World</a></li>
                            <li><a href="creativity.html">Creativity</a></li>
                            <li><a href="fun.html">Fun Time</a></li>
                          </ul>
                        </li>
                        <li><a href="http://www.karmatek.org#sponsors">Sponsors</a></li>
                         <li><a href="http://www.karmatek.org#team">Team</a></li>
                         <li><a href="http://www.karmatek.org#contact">Contact Us</a></li>
                    <!--  </ul>
                      <ul class="nav navbar-nav navbar-right">-->
                        <li><a href="http://www.karmatek.org/register.html"><span class="glyphicon glyphicon-user"></span> Register Now</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>




             <!--End of Navbar-->

<?php

$link = mysqli_connect("localhost", "tanmo4rd_admin", "Tanmoy@97", "tanmo4rd_contact");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$DOB = mysqli_real_escape_string($link, $_POST['DOB']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$institution = mysqli_real_escape_string($link, $_POST['institution']);
$find = mysqli_real_escape_string($link, $_POST['find']);
$message = mysqli_real_escape_string($link, $_POST['message']);
 
// attempt insert query execution
$sql = "INSERT INTO contact (name,DOB,email,phone,institution,find,message) VALUES ('$name', '$DOB', '$email', '$phone', '$institution', '$find', '$message')";
if(mysqli_query($link, $sql)){
    echo '';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
                
<p> Thank you $name for contacting us! Our team will be in touch soon. Do register at our events. </p>
        
<footer id="footer" class="copyr">
                    <div class="container">
                    <div class="row">
                       <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left">
                            <ul class="footer-nav">
                                <li><a href="#about">About</a></li>
                                <li><a href="#events">Events</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#sponsors">Sponsors</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/karmatekgcect" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Karma_Tek" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/karmatek/" target="_blank"><i class="ion-social-pinterest"></i></a></li>
                                <li><a href="https://www.instagram.com/karma_tek/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="row">

                        <p>
                            Built with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> by Tanmoy Purkait
                        </p>
                        <h4 class="centered grey">KarmaTek &copy;2017</h4>
                    </div>



                </footer>





            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="https://cdn.jsdelivr.net/jquery.typeit/4.3.0/typeit.min.js"></script>

            </body>

        </html> 
    


