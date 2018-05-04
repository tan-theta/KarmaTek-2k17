
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

            
                
              

            <link rel="icon" type="image/png" href="assets/img/favicon.png">      
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" type="text/css" href="assets/css/queries.css">
            <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
             <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'> 
            <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lemonada|Raleway|Cookie|Great+Vibes|Handlee|Tangerine" rel="stylesheet"> 




            </head>

            <body class="cover">

               
                <div class="content">
                <nav class="navbar navbar-inverse navbar-fixed-top">
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

$link = mysqli_connect("localhost", "tanmo4rd_admin", "Tanmoy@97", "tanmo4rd_registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$institution = mysqli_real_escape_string($link, $_POST['institution']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$event = mysqli_real_escape_string($link, $_POST['eve']);
$number = mysqli_real_escape_string($link, $_POST['number']);
$payment = mysqli_real_escape_string($link, $_POST['payment']);
 
// attempt insert query execution
                    
                    
                    
if ($_POST['eve']=='Counter Strike: Global Offensive'){$sql = "INSERT INTO csgo (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Fifa 11'){
$sql = "INSERT INTO fifa (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Need For Speed: Most Wanted'){
$sql = "INSERT INTO nfs (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
        else if ($_POST['eve']=='Mini Militia'){
$sql = "INSERT INTO minimilitia (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Beta Coding'){
$sql = "INSERT INTO betacoding (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Pro Coding'){
$sql = "INSERT INTO procoding (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Web Designing'){
$sql = "INSERT INTO webdesign (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Robo Race'){
$sql = "INSERT INTO roborace (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Robo Maze'){
$sql = "INSERT INTO robomaze (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Robo Soccer'){
$sql = "INSERT INTO robosoccer (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
        else if ($_POST['eve']=='Robo Carrom'){
$sql = "INSERT INTO robocarrom (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Autonomous Line Follower'){
$sql = "INSERT INTO autonomous (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Logo Designing'){
$sql = "INSERT INTO logodesign (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Poster Designing'){
$sql = "INSERT INTO posterdesign (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
        else if ($_POST['eve']=='Face Painting'){
$sql = "INSERT INTO facepainting (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Nail It @19'){
$sql = "INSERT INTO nail (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Short Film'){
$sql = "INSERT INTO shortfilm (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='T-Shirt Painting'){
$sql = "INSERT INTO tshirt (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Lensation'){
$sql = "INSERT INTO photography (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Quiz'){
$sql = "INSERT INTO quiz (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Debate'){
$sql = "INSERT INTO debate (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Matrivia'){
$sql = "INSERT INTO matrivia (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Logo Quiz'){
$sql = "INSERT INTO logoquiz (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Bingo'){
$sql = "INSERT INTO bingo (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Paint Ball'){
$sql = "INSERT INTO paintball (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Treasure Hunt'){
$sql = "INSERT INTO treasure (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Crime Solving'){
$sql = "INSERT INTO crime (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Rab Ne Bana Di Jodi'){
$sql = "INSERT INTO rabnebanadijodi (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Fastest Finger First'){
$sql = "INSERT INTO fingerfirst (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else if ($_POST['eve']=='Mixed Medley'){
$sql = "INSERT INTO mixedmedley (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
        else if ($_POST['eve']=='Sher-A-Chef'){
$sql = "INSERT INTO sherachef (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
                    
        else if ($_POST['eve']=='Memetastic'){
$sql = "INSERT INTO memetastic (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
                    
                    
        else if ($_POST['eve']=='Dum Laga Ke Haisha'){
$sql = "INSERT INTO dumlagakehaisha (name,email,phone,institution,year,event,number,payment) VALUES ('$name',  '$email', '$phone', '$institution', '$year', '$event', '$number', '$payment')";}
        
        else {}



                
if(mysqli_query($link, $sql)){
    echo '';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
    <div class="container-fluid centered">  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             
        <br>
        <br>
        <br>
            <h2> Congratulations <span class="small-caps"><?php echo $_POST['name'] ?></span> !! You have successfully registered in <span class="small-caps"><?php echo $_POST['eve'] ?> </span>! </h2>
       
        <h2> </h2>
        
        <br>
    
    <?php
    
    if($_POST['payment']==online){
        echo '<h2>You have chosen to pay the entry fees online !</h2><br>';
        
        if ($_POST['eve']=='Counter Strike: Global Offensive'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/counter-strike-global-offensive-e28c6/"><button type="button" class="btn btn-success">Pay ₹250 </button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Fifa 11'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/fifa-11-2b31d/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Need For Speed: Most Wanted'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/need-for-speed-most-wanted-c46eb/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Mini Militia'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <!--<a href="#" target="_blank"><button type="button" class="btn btn-success">Pay </button></a>-->
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Beta Coding'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/beta-coding-95de8/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Pro Coding'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/pro-coding-bd61a/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Web Designing'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/web-designing-77220/" target="_blank"><button type="button" class="btn btn-success">Pay ₹200</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Robo Race'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/robo-race-bc4e7/" target="_blank"><button type="button" class="btn btn-success">Pay ₹250</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Robo Maze'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/robo-maze-5ff29/" target="_blank"><button type="button" class="btn btn-success">Pay ₹150</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
         else if ($_POST['eve']=='Robo Carrom'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/robo-carrom/" target="_blank"><button type="button" class="btn btn-success">Pay ₹150</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Robo Soccer'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/robo-soccer-9a189/" target="_blank"><button type="button" class="btn btn-success">Pay ₹150</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Autonomous Line Follower'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/autonomous-line-follower-98d70/" target="_blank"><button type="button" class="btn btn-success">Pay ₹150</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';} 
        
        else if ($_POST['eve']=='Logo Designing'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/logo-design-6b4ae/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Poster Designing'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/poster-design/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Face Painting'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/face-painting-d4ca5/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Nail It @19'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/nail-it-19-e389c/" target="_blank"><button type="button" class="btn btn-success">Pay ₹19</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
       else if ($_POST['eve']=='Short Film'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <!--<a href="#" target="_blank"><button type="button" class="btn btn-success">Pay </button></a>-->
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
    
        else if ($_POST['eve']=='T-Shirt Painting'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/t-shirt-painting-22c2b/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Lensation'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/lensation-photography-e70b2/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Quiz'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/general-quiz/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Debate'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/debate-7cd93/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Matrivia'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/matrivia-21bbb/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
       else if ($_POST['eve']=='Logo Quiz'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/logo-quiz-70820/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Bingo'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/bingo-a4940/" target="_blank"><button type="button" class="btn btn-success">Pay ₹10</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Paint Ball'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
       <!-- <a href="#" target="_blank"><button type="button" class="btn btn-success">Pay </button></a>-->
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Treasure Hunt'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/treasure-hunt-bd078/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Crime Solving'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/crime-solving-7432c/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Rab Ne Bana Di Jodi'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/rab-ne-bana-di-jodi/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
       else if ($_POST['eve']=='Fastest Finger First'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/fastest-finger-first-22d03/" target="_blank"><button type="button" class="btn btn-success">Pay ₹20</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
       else if ($_POST['eve']=='Mixed Medley'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/mixed-medley/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Memetastic'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/meme-tastic/" target="_blank"><button type="button" class="btn btn-success">Pay ₹30</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
       else if ($_POST['eve']=='Sher-A-Chef'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/sher-a-chef/" target="_blank"><button type="button" class="btn btn-success">Pay ₹50</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        else if ($_POST['eve']=='Dum Laga Ke Haisha'){echo '<div class="container"><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
        
        <a href="https://www.instamojo.com/Karma_Tek/dum-laga-ke-haisha/" target="_blank"><button type="button" class="btn btn-success">Pay ₹100</button></a>
        
        </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div></div><br>';}
        
        
        else {}
        
        
        echo '<p>Please note: After successful payment, you need to note down the INSTAMOJO PAYMENT ID which will be displayed in confirmation receipt. It will be also sent to your email ID and Mobile No. given at the time of payment. You should be able to produce the PAYMENT ID, if asked, at the time of the event. Personal details used for registration should match the payment details used while making payment to avoid any confusions with the organisers. Thank You !! <br></p>';
        
       
    } 
                
    else if($_POST['payment']==offline){
        
        echo '<div class="container"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Please pay the registration fees at the registration desk on the day of the event to complete your registration.<br>See you soon !</h2></div></div><br>';
        
    }
        
    else {}
    
  
        
        
    
                    
                
    ?>
      
        
        
        </div>
                 
       </div>             
         <br>
         <br>
                    
<footer id="footer" class="copyr">
                    <div class="container-fluid">
                    
                      <div>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/karmatekgcect" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Karma_Tek" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/karmatek/" target="_blank"><i class="ion-social-pinterest"></i></a></li>
                                <li><a href="https://www.instagram.com/karma_tek/" target="_blank"><i class="ion-social-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="row">

                        <p>
                            Built with <i class="ion-ios-heart" style="color: #ea0000; padding: 0 3px;"></i> by Tanmoy Purkait
                        </p>
                        <h4 class="centered grey">KarmaTek &copy;2017</h4>
                    </div>



                </footer>



                </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </body>

        </html> 
    


