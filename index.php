<?php 
    session_start();

    if (!isset ($_SESSION['access_token'])) {
        header('Location: login/login.php');
        exit();
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

<style>
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
<div class='popup'>
<div class='cnt223'>
<h1 style="text-align:center;">Welcome to Career Path Guidance</h1><br>
<h3 style="text-align:center;"><?php echo $_SESSION['givenName'] ?></h3><br>
<a  href="#"><img src="<?php echo $_SESSION['picture'] ?>" alt="Avatar" class="avatar2"></a>
<p>
<br> 
<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>

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
              <a href="index.php"><h1><span>CAREER </span>PATH <span>GUIDANCE</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="services.php">APS Calculator</a></li>
                <li role="presentation"><a href="q.html">Questionnaire</a></li>
                <li role="presentation"><a href="uni.html">Institutions & Prospectus</a></li>
                <li role="presentation"><a  href="iprofile.php"><img src="<?php echo $_SESSION['picture'] ?>" alt="Avatar" class="avatar"></a></li>
                <li role="presentation"><a  href="php/logout.php" onclick="return confirm('Are you sure you want to logout?');">Logout</a></li>
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
        <div class="item active" style="background-image: url(images/slider/students2.jpeg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">Welcome to <span>Career Path Guidance</span></h2>
                  <p class="animation animated-item-2">Your Online Career Guidance Counsellor</p>
                  
                  <!---<a class="btn-slide animation animated-item-3" href="#" ><img src="images/slider/google.png" width="30px" height="30px" float="left-center"/> Login with Gmail account</a>
                  <a class="btn-slide animation animated-item-3" href="#"><img src="images/slider/facebook.png" width="30px" height="30px" float="left-center"/>Login with Facebook account</a>-->
                </div>
              </div>

              <!--<div class="col-sm-6 hidden-xs animation animated-item-4">
                <div class="slider-img">
                  <img src="images/slider/students2.png" class="img-responsive">
                </div>
              </div>-->

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->

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
        <h2>about us</h2>
        <img src="images/slider/student.jpg" class="img-responsive" />
        <p>Career Path Guidance is an online career guidance site for high school learners that assist Grade 11 learners in identifying the field of tertiary studies they would most likely get accepted in.


        </p>
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2>Your Future. Our Business.</h2>
        <p> Each individual will take a psychometric assessment test that will be based on their personality characteristics and generate your very own personal report with possible fields of studies that is best suited for them where they can choose from. We aim to make the decision-making process of selecting a career path easy and with confidence.<br>

        Career Path Guidance ensures learners pursue the right career with confidence</p>

        <p>Each individual will take a psychometric assessment test that will be based on their personality characteristics and generate your very own personal report with possible fields of studies that is best suited for them where they can choose from. We aim to make the decision-making process of selecting a career path easy and with confidence.<br>

        Career Path Guidance ensures learners pursue the right career with confidence </p><br>

        <p>Each individual will take a psychometric assessment test that will be based on their personality characteristics and generate your very own personal report with possible fields of studies that is best suited for them where they can choose from. We aim to make the decision-making process of selecting a career path easy and with confidence.<br>

        Career Path Selection ensures learners pursue the right career with confidence </p>
      </div>
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
              <p>Email address: careerpathselection@webmail.co.za</p><br>
              <p>Phone number: 011 754 2345</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
            </ul>
          </div>
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
