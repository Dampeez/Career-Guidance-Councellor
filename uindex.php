<?php 
    //session_start();

    include_once'php/userlogin/elogin.php';
    include "php/userlogin/connection.php";

if(!isset($_SESSION['e_name'])){

     header("Location: login/login.php");
    
  }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

<style>
   body{
    font-family: 'Oswald', sans-serif;
    
  }
  .butt{
    color:#000;
    background-color:#f5f5f5;
    font-size:20px;
    width:200px;
    height:100px;
    border-color:#050e5c;
    box-shadow: -1px -1px 0 #000,1px -1px 0 #000,
		-1px 1px 0 #000,
		1px 1px 0 #000;
  }

  .butt:hover{
    color:#fff;
    background-color:#050e5c;
    box-shadow: -1px -1px 0 #fff,1px -1px 0 #fff,
		-1px 1px 0 #fff,
		1px 1px 0 #fff;
  }
  li{
    font-size:20px;
    
  }

  .heading{
   font-weight:Bold;
   color:#000;
   font-size: 50px;
   text-align: center;

  }
  h1{
    font-size:50px;
    color:#050e5c;
    
  }
  h2{
    color: #000;
    font-size:30px;
  
  }
  #partner h2{
    color: #F8F8FF;
    text-shadow: -1px -1px 0 #000,1px -1px 0 #000,
		-1px 1px 0 #000,
		1px 1px 0 #000;
  }
  #partner p{
    color: #F8F8FF;
    text-align: justify;
    font-size:30px;
    line-height: 1.5em;
    text-shadow: -1px -1px 0 #000,1px -1px 0 #000,
		-1px 1px 0 #000,
		1px 1px 0 #000;
  }
.avatar {
  vertical-align: middle;
  width: 30px;
  height: 30px;
  border-radius: 50%;
}

.avatar2 {
 display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}

#main-slider .carousel .item {
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: cover;
  left: 0 !important;
  opacity: 0;
  top: 0;
  position: absolute;
  width: 100%;
  display: block !important;
  height: 730px;
  -webkit-transition: opacity ease-in-out 500ms;
  -moz-transition: opacity ease-in-out 500ms;
  -o-transition: opacity ease-in-out 500ms;
  transition: opacity ease-in-out 500ms;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #0D66F9;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: 'Open Sans', Arial, sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
font-family:'Open Sans', Arial, sans-serif;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});


 

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>


</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="uindex.php"><h1><span>CAREER </span>PATH <span>GUIDANCE</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="services3.php">Take our Test!!</a></li>
                <li role="presentation"><a href="uni.html">Institutions & Prospectus</a></li>
                <li role="presentation"><a href="search.php">Search</a></li>
                <li role="presentation"><a  href="uprofile.php"><img src="images/avatar/pro.png" alt="Avatar" class="avatar"></a></li>
                <li role="presentation"><a  href="php/userlogin/logout.php" onclick="return confirm('Are you sure you want to logout?');">Logout</a></li>
                <!--<li role="presentation">
                  <form action="php/userlogin/logout.php" method="POST">
                    <button type="submit" name="submit">Logout </button>
                  </form>
                </li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
     
          <div class="container">
            <div class="row slide-margin">
            
            <div id="heading">
            <h1>Welcome to <span>CAREER </span>PATH <span>GUIDANCE</span><br> Lets get started, search our prospectus for a career you would like to pursue</h1>
            </div>
            <a href="search.php"><button id="begin" class="butt">Search</button></a><br><br>

                  
                  <!---<a class="btn-slide animation animated-item-3" href="#" ><img src="images/slider/google.png" width="30px" height="30px" float="left-center"/> Login with Gmail account/a>
                  <a class="btn-slide animation animated-item-3" href="#"><img src="images/slider/facebook.png" width="30px" height="30px" float="left-center"/>Login with Facebook account</a>-->
                
             

              <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/students2.png" class="img-responsive">
                </div>
              </div>-->

            </div>
          </div>
     
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>


  <div class="feature">
    <div class="container">
      <div class="text-center">
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            
            <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
            <h2>APS Score Calculator</h2>
            <p>The CPG system requires you to enter your most recent school subjects and results and generates a report which entails fields of study and at which universities you would likely get accepted in.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            <h2>Questionnaire</h2>
            <p>The CPG questionnaire will assist you in making an informed decision by asking you personal questions and matching the results to specific fields of study in the form of a report. </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <i class="fa fa-search"></i>
            <h2>Institutions</h2>
            <p>CPG provides you with information on the University of the Witswatersland, the University of Johannesburg, the University of Pretoria, the University of Cape Town, and the University of KwaZulu-Natal.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-file-text"></i> 
            <h2>View prospectus </h2>
            <p>CPG provides the prospectuses of the different universities. This provides information on what the different universities in South Africa have to offer. Viewing the prospectus will also advice you on the requirements needed to get in for the different fields of study.  </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>ABOUT US</h2>
        <img src="images/slider/student.jpg" class="img-responsive" />
        <p>Career Path Guidance is an online career guidance site for high school learners that assist Grade 11 learners in identifying the field of tertiary studies they would most likely get accepted in.


        </p>
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2>Your Future. Our Business.</h2>
        <p> Each individual will take a psychometric assessment test that will be based on their personality characteristics and generate your very own personal report with possible fields of studies that is best suited for them where they can choose from. We aim to make the decision-making process of selecting a career path easy and with confidence.<br>

        Career Path Guidance ensures learners pursue the right career with confidence</p>

        <p>Each individual will take a psychometric assessment test that will be based on their personality characteristics and generate your very own personal report with possible fields of studies that is best suited for them where they can choose from. We aim to make the decision-making process of selecting a career path easy and with confidence.<br>

        Career Path Guidance ensures learners pursue the right career with confidence </p>
      </div>
    </div>
  </div>


  <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Institutions</h2>
        <p>CPG provides you with information on the University of the Witswatersland, the University of Johannesburg, the University of Pretoria, the University of Cape Town, and the University of KwaZulu-Natal. This includes information about the application process, dates and prospectus information.</p>
      </div>

      <div class="partners">
        <ul>
          <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/uj.png"></a></li>
          <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/wits.png"></a></li>
          <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/up.png"></a></li>
          <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/uct.gif"></a></li>
          <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/ukz.png"></a></li>
        </ul>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#partner-->
  <footer>
    <div class="footer">
  <section id="conatcat-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="pull-left">
              <i class="fa fa-phone"></i>
            </div>
            <div class="media-body">
              <h2>Have an enquiry?</h2>
              <p>Contact us for any questions, queries or concerns.</p>
              <p>Email address: careerpathselection@webmail.co.za</p>
              <p>Phone number: 011 754 2345</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->


      
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
          </div>
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
