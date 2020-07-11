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
      #delay{
        transition-duration: 5s;
        transition-delay: 2s;
      }

      .button{
        width : 200px;


        
        border-radius: 12px;
 
        
        background-color: #0D66F9;
        border: none;
        color: white;
        cursor: pointer;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition-duration: 0.4s;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
      }
      
      .button:hover {
        background-color: rgb(255, 255, 255);
  color: #0D66F9;
  border:#0D66F9

}

.li{
  color: black;
}

.avatar2 {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  
  
  }
      </style>
      <script src="jquery.js" type="text/javascript"></script>
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
              <a href="index.php"><h1><span>CAREER </span>PATH <span>SELECTION</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
               <li role="presentation"><a href="services.php">APS Calculator</a></li>
                <li role="presentation"><a href="q.php">Questionnaire</a></li>
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
      <h3>Career Selection Questionnaire</h3>
      <h5><b>Name:    </b>  <?php echo $_SESSION['e_name'] ?></h5><br>
      <h5><b>Surname:    </b>  <?php echo $_SESSION['e_surname'] ?></h5><br>
      <img src="images/avatar/pro.png" alt="Avatar" class="avatar2"><br>
        <div class="row contact-wrap">
        
          
            <p>
              <div class="sub">
                <div class="li">
                <ol id = "mylist">
  
    <li>
<p>Do you consider yourself to be more:</p>
<input type="radio" name="composed" value="composed"> composed<br>
  <input type="radio" name="outspoken" value="outspoken"> outspoken<br>
</li>


<li>
<p>Which describes you better:</p>
<input type="radio" name="extroverted" value="extroverted"> extroverted<br>
  <input type="radio" name="private" value="private"> private<br>
</li>
<li>
<p>In which way do you work better:</p>
<input type="radio" name="alone" value="alone"> alone<br>
  <input type="radio" name="team" value="team"> In a team<br>
</li>
<li>
<p>At an event, would you:</p>
<input type="radio" name="known" value="known"> Assocociate with a few familiar people<br>
  <input type="radio" name="unknown" value="unknown"> Assocociate with many unknown people<br>
  </li>
  <li>
<p>In a meeting, would you:</p>
<input type="radio" name="speak" value="speak"> Speak up<br>
  <input type="radio" name="listen" value="listen"> Just listen<br>
</li>
<li>
  <p>Do you focus on:</p>
<input type="radio" name="is" value="is"> What is?<br>
  <input type="radio" name="could-be" value="could-be"> What could be?<br>
</li>
<li>
<p>Are you drawn to deals that are:</p>
<input type="radio" name="realities" value="realities"> realities<br>
  <input type="radio" name="possibilities" value="possibilities"> possibilities<br>
</li>
<li>
  <p>Would you rather:</p>
<input type="radio" name="facts" value="facts"> focus on facts<br>
  <input type="radio" name="instinct" value="instinct"> trust your instinct<br>
</li>
<li>
  <p>Do you focus on being more:</p>
<input type="radio" name="realistic" value="realistic"> Realistic<br>
  <input type="radio" name="creative" value="creative"> Creative<br>
</li>
<li>
  <p>Would you be drawn to:</p>
<input type="radio" name="see" value="see"> What you can see and touch<br>
  <input type="radio" name="envision" value="envision"> What you can envision and invent<br>
</li>
<li>
<p>Which descrribes you best:</p>
<input type="radio" name="feeling" value="feeling"> Feeling<br>
  <input type="radio" name="thinking" value="thinking"> Thinking<br>
</li>
<li>
<p>Do you think of yourself as:</p>
<input type="radio" name="sentimental" value="sentimental"> sentimental<br>
  <input type="radio" name="analytical" value="analytical"> analytical<br>
</li>
<li>
<p>Would you:</p>
<input type="radio" name="stand" value="stand"> Stand your ground<br>
  <input type="radio" name="avoid" value="avoid"> Avoid an argument<br>
</li>
<li>
<p>Would you appreciate someone for their:</p>
<input type="radio" name="compassion" value="compassion"> compassion<br>
  <input type="radio" name="insight" value="insight"> insight<br>
</li>
<li>
<p>Do you make decisions with your:</p>
<input type="radio" name="head" value="head"> head<br>
  <input type="radio" name="heart" value="heart"> heart<br>
</li>
<li>
<p>How do you make day-to-day decisions:</p>
<input type="radio" name="arise" value="arise"> When they arise<br>
  <input type="radio" name="plan" value="plan"> Planned consideration<br>
</li>
<li>
<p>How do you plan a meeting:</p>
<input type="radio" name="planned" value="planned"> Planned<br>
  <input type="radio" name="prompted" value="prompted"> Prompted<br>
</li>
<li>
<p>How do you feel about change:</p>
<input type="radio" name="comfortable" value="comfortable"> comfortable<br>
  <input type="radio" name="uncomfortable" value="uncomfortable"> uncomfortable<br>
</li>
<li>
<p>Would you prefer working in a manner that is:</p>
<input type="radio" name="spontaneous" value="spontaneous"> spontaneous<br>
  <input type="radio" name="scheduled" value="scheduled"> scheduled<br>
</li>
<li>
<p>What is more satisfying:</p>
<input type="radio" name="organizing" value="organizing"> organizing<br>
  <input type="radio" name="flow" value="flow"> going with the flow<br>
</li>

</ol>
</div>
<br><br><br>
<div class="button">
<button" id = "report">Generate report</button>
</div>

<br><br>
<script>
 




</script>
</body>

  


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