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
  <title>Report</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />

<script src="js/jquery.min.js"></script>
  <!-- jsPDF library -->
<script src="js/jsPDF/dist/jspdf.min.js"></script>

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

#main-slider .carousel h2 {
  color: #000;
  text-transform:uppercase;
  font-size:50px;
  font-weight:800;
}

#main-slider .carousel h2 span {
  color: #0D66F9;
}

#main-slider .carousel h2 span spani {
  color: #000;
}

#main-slider .carousel p {
  color: #000;
  font-size:25px;
  font-weight:400;

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
  height: 450px;
  -webkit-transition: opacity ease-in-out 500ms;
  -moz-transition: opacity ease-in-out 500ms;
  -o-transition: opacity ease-in-out 500ms;
  transition: opacity ease-in-out 500ms;
}



.feature {
  padding:50px;
   background:#000;
}

.text-center i {
  font-size:40px;
  margin-top:70px;
  margin-bottom:30px;
  color:#000;
  padding:50px;
  background:#becfeb;
  border-radius:50%;
}

.text-center h2 {
  margin-top:20px;
  margin-bottom:20px;
  text-transform:uppercase;
  font-size:18px;
  color: #0D66F9;
}

.text-center p {
  color: #becfeb;
}

.hi-icon-effect i.fa:hover {
  background:#FFFFFF;
  color:#0D66F9 ;
  -webkit-transition: color 300ms, background-color 300ms;
  -moz-transition: color 300ms, background-color 300ms;
  -o-transition:  color 300ms, background-color 300ms;
  transition:  color 300ms, background-color 300ms;
}


.about {
  padding:50px;
  background:#FFFFFF;
}

table.imagetable {
  font-family:'Open Sans', Arial, sans-serif;
  font-size:11px;
  font-weight: 2px;
  color:#FFFFFF;
  border-width: 1px;
  border-color: #000;
  border-collapse: collapse;
}
table.imagetable th {
  background:#0D66F9 url('cell-blue.jpg');
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #0D66F9;
}
table.imagetable td {
  background:#000 url('cell-grey.jpg');
  border-width: 1px;
  padding: 8px;
  border-style: solid;
  border-color: #999999;
}



#partner {
  color: #fff;
  text-align: center;
  padding:100px;
}

#partner h2 {
  color: #000;
  font-size:30px;
  font-weight:600;
}

#partner h3 {
  color: #000;
  font-weight:600;
}

#partner p {
  color: #fff;
  font-size:16px;

}

.partners ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.partners ul li{
  display: inline-block;
  float: left;
  width: 20%;
}

.partners ul li a img {
  margin-top:50px;
}

button {
  background-color: #1BBD36;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Open Sans', Arial, sans-serif;
  cursor: pointer;
  border: 3px solid #1BBD36;
  border-radius: 30px;
}

button:hover {
  opacity: 0.8;
  color:#1BBD36;
  background-color: #ffffff;
}

</style>
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
                 <li role="presentation"><a href="services3.php">APS Calculator</a></li>
                <li role="presentation"><a href="q2.php">Questionnaire</a></li>
                <li role="presentation"><a href="uni.html">Institutions & Prospectus</a></li>
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
        <div class="item active" style="background-image: url(images/board.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-6">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">Career Path Guidance <span>Report</span></h2>
                  <p class="animation animated-item-2">Which courses do you qualify for?</p>
                  
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
            <i class="fa fa-file-text" aria-hidden="true"></i>
            <h2>Subjects</h2>
          <p><b>Your Subjects</b><br>
            <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(1);
              var queries = queryString.split("",153);
              
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i]);
              }

 
            </script>
        </p> 
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
            <h2>APS Points</h2>
          <p><b>Your APS Points</b><br>
            <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(155);
              var queries = queryString.split("",87);
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i]);
              }
 
            </script>
          </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <i class="fa fa-search"></i>
            <h2>Total</h2>
          <p><b>Your APS Total</b><br>
            <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(242);
              var queries = queryString.split("",2);
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i]);
              }
 
            </script> 
          </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <i class="fa fa-question-circle"></i> 
            <h2>Admissible Courses</h2>
            <p>You are eligble to study:<br>
              <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(244);
              var queries = queryString.split("",200);
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i]);
              }
 
            </script> 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/admission.jpg" class="img-responsive" />
        <p>*Admission Points Score totals vary for each course from university to university. Students need to consult the prospectus of their universities of choice to see the different APS totals*</p>
        <h3>University of Johannesburg</h3>
<table class="imagetable">
<tr>
  <th>Field</th><th>Programme Name</th><th>Duration</th>
</tr>
<tr>
  <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Civil Engineering</td><td>4 years</td>
</tr>
</table><br>

        <h3>University of Cape Town</h3>
<table class="imagetable">
<tr>
  <th>Field</th><th>Programme Name</th><th>Duration</th>
</tr>
<tr>
   <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Chemical Engineering</td><td>4 years</td>
</tr>
</table><br>

        <h3>University of Kwa-Zulu Natal</h3>
<table class="imagetable">
<tr>
  <th>Field</th><th>Programme Name</th><th>Duration</th>
</tr>
<tr>
   <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Civil Engineering</td><td>4 years</td>
</tr>
<tr>
   <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Chemical Engineering</td><td>4 years</td>
</table>
      </div>

      <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <h2>What Can You Study?</h2>
          <p>Based upon the APS points you've scored and the subjects you've studied which include:<br><b>• Mathematics<br>• English [Primary Language]<br>• Physical Sciences</b></p> 
           <p>You are eligble to study:</b><br>
            <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(244);
              var queries = queryString.split("",200);
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i]);
              }
 
            </script> 
            </p>
        <h2>Where Can You Study?</h2>
        <p>There are several universities that offer these courses. The list of universities include:</p><br>
        <h3>University of the Witwatersrand</h3>
<table class="imagetable">
<tr>
  <th>Field</th><th>Programme Name</th><th>Duration</th>
</tr>
<tr>
   <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Civil Engineering</td><td>4 years</td>
</tr>
<tr>
  <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Chemical Engineering</td><td>4 years</td>
</tr>
</table><br>

        <h3>University of Pretoria</h3>
<table class="imagetable">
<tr>
  <th>Field</th><th>Programme Name</th><th>Duration</th>
</tr>
<tr>
   <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Civil Engineering</td><td>4 years</td>
</tr>
<tr>
  <td>Engineering</td><td>Bachelor of Science in Engineering (BEng) in Chemical Engineering</td><td>4 years</td>
</tr>
</table>

        
      </div>
    </div>
  </div>


  <section id="partner">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Recommendation</h2>
        <p>With all the options available, it's understandable that you as a student may need some extra information to guide your decisions. This section provides:<br><br>• Background information on the courses<br><br>• Information on the universities<br><br>• Course rankings<br><br>• Accreditations<br><br>• Recommendations</p><br><br>

      </div>

      <div class="partners">
        <ul>

            <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/up.png"></a></li><br>
           <h2>1. University of Pretoria</h2>
           <h3><b>Background & Recommendation</b></h3>
          <p>The University of Pretoria has consistently taken the first position in many courses in Africa with a few upsets from other universities. It was established as a public university on March 4, 1908 and has since been a great place to study engineering.<br><br>

Its Faculty of Engineering, Built Environment & IT has the following offerings: Bio Systems, Civil, Chemical, Electronic, Computer Engineering and many others. It has a large population of students estimated to be around 26,000 who have come from several African countries to learn the nitty-gritty of engineering.<br><br><b>*Ranked the no #1 engineering school in South Africa, the University of Pretoria is the top recommendation for any student who wants to study any engineering course.*</b></p>

           <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/ukz.png"></a></li><br>
           <h2>2. University of Kwa-Zulu Natal</h2>
           <h3><b>Background & Recommendation</b></h3>
          <p>Founded on January 1, 2014 with Mogoeng Mogoeng as its chancellor, the University of KwaZulu-Natal is a relatively new entrant into the scene but has made noteworthy strides already. Perhaps, the secret was the merger of the University of Durban and the University of Natal.<br><br><b>*Ranked the 2nd best engineering school in South Africa, its School of Engineering offers students specialization in the following areas: Land Surveying, Civil, Electronic, Electrical, Computer, Agricultural, Chemical and Mechanical Engineering. The institution has a large student population of more than 30,000 students enrolled in it.*</b></p>

           <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/wits.png"></a></li><br>
           <h2>3. University of the Witwatersrand</h2>
           <h3><b>Background & Recommendation</b></h3>
          <p>The University of Witwatersrand is situated in Johannesburg, South Africa; and is one of best engineering schools, competing with institutions like the University of Cape Town and the University of Pretoria. It was established in 1922 and is the third oldest university in South Africa.<br><br>

Available courses in its Faculty of Engineering and Built Environment include Electrical and Information Engineering, Environmental Engineering, Biomedical Engineering, Computational Sciences and many others. In addition, the university also boasts industrial links to deepen the students’ experience in their course of study.<br><br><b>*Ranked the 3th best engineering school in South Africa, Wits is considred the one of best engineering schools in the country.*</b></p>

           <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/uct.gif"></a></li><br>
           <h2>4. University of Cape Town</h2>
           <h3><b>Background & Recommendation</b></h3>
          <p>Situated in Rondebosch, Cape Town in South Africa, the University of Cape Town is a government research-based university that’s ranked one of the best engineering universities in Africa. The University was founded in 1829 as the South African College but was upgraded to a university status.<br><br><b>*Ranked the 4th best engineering school in South Africa, the Faculty of Engineering and Built Environment of the university offers the following engineering courses Chemical, Civil, Electrical and Mechanical Engineering as well as Architecture, Planning and Geomatics among others. The University of Cape Town is the oldest tertiary education institution in Sub-Saharan Africa, hosting over 26,000 students from around the world.*</b></p>


        <li> <a href="uni.html"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/uj.png"></a></li><br>
          <h2>5. University of Johannesburg</h2>
          <h3><b>Background & Recommendation</b></h3>
          <p>The Faculty of Engineering and the Built Environment (FEBE) is one of eight faculties at the University of Johannesburg, home to five schools, 12 departments and two technology stations.  It offers both Engineering Technology and Engineering Science undergraduate and postgraduate programmes. In keeping with the University’s comprehensive status, the Faculty is the first in South Africa to offer global education to a full range of professional engineering qualifications.</p><br><br>

              <p><b>*Ranked the 6th best engineering school in South Africa, the university’s Faculty of Engineering and the Built Environment awards degrees in the following courses: Quantity surveying, Metallurgy, Mining, Civil, Mechanical, Electrical and Electronic and several others.*</b></p>

        


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
              <i class="fa fa-user"></i>
            </div>
            <div class="media-body">
              <h2>Profile</h2>
              <h5><b>Name:    </b>  <?php echo $_SESSION['e_name'] ?></h5><br>
              <h5><b>Surname:    </b>  <?php echo $_SESSION['e_surname'] ?></h5><br>
              <h5><b>Email Address:    </b>  <?php echo $_SESSION['e_email'] ?></h5><br>
              <h5><b>Click the 'Download Report' button to download this report.</b></h5><br>
              <button type="button">Download Report</button>
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
