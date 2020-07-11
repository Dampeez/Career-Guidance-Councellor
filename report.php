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
  <title>APS Score Generator</title>

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

  #report{
    width: 70%;
  padding: 30px 0;
  text-align: center;
  background-color: #ffffff;
  margin-top: 20px;
  border: 10px solid #3498db;
  border-radius: 70px;
  border-width: 70px;
  font-weight: 500;
  color: #000000;
  transform: translate(49%,-47%);
  }

  #repo{
    width: 30%;
  padding: 30px 0;
  text-align: center;
  background-size: 150px ;
  margin-top: 20px;
  border: 10px solid #3498db;
  border-radius: 45px;
  font-weight: 500;
  color: #000000;
  /*(left to right, top to bottom)*/
  transform: translate(225%,-213%);
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


button {
  background-color: #3498db;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Open Sans', Arial, sans-serif;
  cursor: pointer;
  border: 3px solid #3498db;
  border-radius: 30px;
}

button:hover {
  opacity: 0.8;
  color:#3498db;
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
               <li role="presentation"><a href="services2.php">APS Calculator</a></li>
                <li role="presentation"><a href="q2.php">Questionnaire</a></li>
                <li role="presentation"><a href="uni.html">Institutions & Prospectus</a></li>
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

  <div class="services">
    <div class="container">
      <br>
      <div id="myDIV">
        <h3>APS Calculator</h3>
        <h3>My Profile</h3>
        <img src="images/avatar/pro.png" alt="Avatar" class="avatar2"><br>
        <h5><b>Name:    </b>  <?php echo $_SESSION['e_name'] ?></h5><br>
        <h5><b>Surname:    </b>  <?php echo $_SESSION['e_surname'] ?></h5><br>
        <h5><b>Email:    </b>  <?php echo $_SESSION['e_email'] ?></h5><br>
        <h5><button type="button">Download Report</button></h5>
      </div>
      
        <div class="row contact-wrap">
        <div id="report">

          <h1>Your APS points and Total</h1>
          <script>
 
              var queryString = decodeURIComponent(window.location.search);
              queryString = queryString.substring(1);
              var queries = queryString.split("&");
              for (var i = 0; i < queries.length; i++)
              {
                document.write(queries[i] + "<br>");
              }
 
          </script> 
          <div class="navbar-brand">
              <a href="uni.html"><h1>To view and search the prospectus here: CLICK HERE</h1></a>
          </div>
        </div>
          
        
      </div>
    </div>

  </div>

  


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