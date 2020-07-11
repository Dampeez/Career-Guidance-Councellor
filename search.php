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
  <title>Search</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />

  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
    .sub{
      color: #000000;
      
      padding: 7px 12px;
    }


    p{
      display: inline-block;
      
    }

    select{
      width:300px;
      text-align: center;
    }

  .avatar2 {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  
  
  }

* {
  box-sizing: border-box;
}




.box{
  width:650px;
}


h1{
  font-family: 'Oswald', sans-serif;
  text-align: justify;
  font-weight:500;
  font-size:50px;
  color:#050e5c;
}

 p{
  font-family: 'Oswald', sans-serif;
  text-align: justify;
  font-weight:500;
  font-size:20px;
  

}

 b{
  font-family: 'Oswald', sans-serif;
  text-align: justify;
  font-weight:500;
  font-size:20px;
  
}
 input{
  padding: 14px 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
  text-align: justify;
  border: 1px solid #aaaaaa;
  border-radius: 24px;
  display:block;
  transition: 0.25s;
}
.invisible{
  display:none;
}


 .text{color: #ffffff;}
  
 }

input {
  padding: 14px 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
  border: 1px solid #050e5c;
  border-radius: 24px;
  display:block;
  transition: 0.25s;

}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #050e5c;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
  cursor: pointer;
  border: 3px solid #050e5c;
  border-radius: 30px;
}

button:hover {
  opacity: 0.8;
  color:#050e5c;
  background-color: #ffffff;
}

#prevBtn {
  background-color: #050e5c;
}

#prevBtn:hover {
  background-color: #ffffff;
  color:#050e5c;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #050e5c;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #3498db;
}

#myDIV {
  width: 30%;
  padding: 30px 0;
  text-align: center;
  background-color: #ffffff;
  margin-top: 20px;
  border: 10px solid #3498db;
  border-radius: 45px;
  font-weight: 500;
}

#main-slider .carousel p {
  color:#000;
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
              <a href="index.php"><h1><span>CAREER </span>PATH <span>GUIDANCE</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="services3.php">Take our test!!</a></li>
                <li role="presentation"><a href="uni.html">Institutions & Prospectus</a></li>
                <li role="presentation"><a href="search.php">Search</a></li>
                <li role="presentation"><a  href="php/userlogin/logout.php" onclick="return confirm('Are you sure you want to logout?');">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        
      </div>
    </div>
  </div>

  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
     
          <div class="container">
            <div class="row slide-margin">      

  <h1>Search Prospectus</h1><br>
  <!-- One "tab" for each step in the form: -->
  <p>Search the prospectus of the five sponsored universities and find out if your favourite instituition offers the course you looking for.</p>
                    <p>Search</p>
                    &nbsp;&nbsp;<br>
<form action="searchdets.php" method="POST">
<input style="height:50px; width:400px;font-size:14pt;border-radius: 20px;" type="text" name="search" placeholder="Search for field of study" autocomplete="off"><br><br>

<div style="overflow:auto;">
    <div style="float:right;">
      <button type="submit" name="submit-search">Search</button>
    </div>
      
</form>
  
</div>


  
  

  
&nbsp;&nbsp;


  </div>

  </div>
    </div>




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