<?php

include "php/userlogin/connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Results</title>

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
	.heading{
   font-weight:Bold;
   color:#000;
   font-size: 50px;
   text-align: center;

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
  table{
    
    width:50%;
   
    box-shadow: 3px 3px 	#808080;
    top:100%;
    right:100%;
   transform: translate(50%,-10%);
    

  }
  a:hover{
    color: navy;
  }


  th{
    background-color: #f8fbf8;
    border-left:3px solid #000;
   
  }
  tr{
    border:3px solid #000;
    width:50%;
    
    
  }
  td{
    border-left:3px solid #000;
    padding:20px;
  }

  
.responsive {
  width: 50%;
  height: auto;
}
 
img{
  width:500px;
  height:500px;
  
  box-shadow: 10px 10px 10px -10px rgba(0,0,0,.2);
  
}
a{
  padding-left: 50px;
}
body{
  padding-left: 50px;
}
p{
  padding-left: 50px;
  color:#000;
}

h3{
  font-size: 30px;
  color:#050e5c;
  padding-left: 50px;
  
}

.al{
    align:right;
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
              <a href="uindex.php"><h1><span>CAREER </span>PATH <span>GUIDANCE</span></h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
               <li role="presentation"><a href="services3.php">Take our Test!!</a></li>
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
             

 <br><br>
	  <div id="heading">
            <h1>Once you are complete with viewing our prospectus, take our test to see whether your choice of career will suit your personality</h1>
            </div>
			  <br><br>
      <h3>University of Johannesburg</h3>
      <hr>

        <img src="images/uni/uj.jpg" class="img-responsive">
          
             <a class="preview" href="pdf/uj.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br>
             <a class="preview" href="images/uj.jpg" rel="prettyPhoto"><i class="fa fa-eye" ></i> View campus</a><br><br>
         
     
  <?php
  if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']); 
    $sql = "SELECT * FROM uj  WHERE choice LIKE '%$search%' OR field LIKE '%$search%' OR prog_name LIKE '%$search%' OR duration LIKE '%$search%' OR aps LIKE '%$search%' OR faculty LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);


    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id= 'myDIV'>
        <table>
        <tr>
        <th><h3>".$row['choice']."</h3></th>
         <th><p><a class='preview' href='prospics/".$row['image']."' rel='prettyPhoto'><i class='fa fa-eye' ></i> View prospectus</a></p></th>
         </tr>
          <tr>
          <td><p>Field:</p></td>
          <td>".$row['field']."</td>
          </tr>
          <tr><td><p>Progamme Name:  </td><td>".$row['prog_name']."</p></td></tr>
          <tr><td><p>Duration:  </td><td>".$row['duration']." years</p></td></tr>
          <tr><td><p>Minimum APS:  </td><td>".$row['aps']."</p></td></tr>
          <tr><td><p>Faculty: </td><td>".$row['faculty']."</p><br></td></tr><br><br>
          
          </table>
          </div>";  
      }


    } else {
      echo "<p>There are no results matching your search<p><br>";
    }
  }


?>
  </div>
  <br><br>
      <h3 >University of Pretoria</h3>
      <hr>
      <img src="images/uni/up1.jpg" class="img-responsive">
     
     <a class="preview" href="pdf/up.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br>
     <a class="preview" href="images/up.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View campus</a><br><br>
<?php
    if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']); 
    $sql = "SELECT * FROM up  WHERE choice LIKE '%$search%' OR field LIKE '%$search%' OR prog_name LIKE '%$search%' OR duration LIKE '%$search%' OR aps LIKE '%$search%' OR faculty LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);


    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id= 'myDIV2'>
        <table>
        <tr>
        <th><h3>".$row['choice']."</h3></th>
         <th><p><a class='preview' href='prospics/".$row['image']."' rel='prettyPhoto'><i class='fa fa-eye' ></i> View prospectus</a></p></th>
         </tr>
         <tr>
         <td><p>Field:</p></td>
         <td>".$row['field']."</td>
         </tr>
         <tr><td><p>Progamme Name:  </td><td>".$row['prog_name']."</p></td></tr>
         <tr><td><p>Duration:  </td><td>".$row['duration']." years</p></td></tr>
         <tr><td><p>Minimum APS:  </td><td>".$row['aps']."</p></td></tr>
         <tr><td><p>Faculty:  </td><td>".$row['faculty']."</p><br></td></tr><br><br>
         
         </table>
        </div>";  
      }


    } else {
      echo "<p>There are no results matching your search<p><br>";
    }
  }


?>
     

      
      
         
  

     <br><br>
      <h3>University of Witwaterstand</h3>
      <hr>
    
        <img src="images/uni/wits.jpeg" class="img-responsive">
        
             <a class="preview" href="pdf/wits.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br>
             <a class="preview" href="images/wits.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View campus</a><br><br>
          
<?php
    if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']); 
    $sql = "SELECT * FROM wits  WHERE choice LIKE '%$search%' OR field LIKE '%$search%' OR prog_name LIKE '%$search%' OR duration LIKE '%$search%' OR aps LIKE '%$search%' OR faculty LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);


    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id= 'myDIV3'>
        <table>
        <tr>
        <th><h3>".$row['choice']."</h3></th>
         <th><p><a class='preview' href='prospics/".$row['image']."' rel='prettyPhoto'><i class='fa fa-eye' ></i> View prospectus</a></p></th>
         </tr>
         <tr>
         <td><p>Field: </p></td>
         <td>".$row['field']."</td>
         </tr>
         <tr><td><p>Progamme Name: </td><td>".$row['prog_name']."</p></td></tr>
         <tr><td><p>Duration:  </td><td>".$row['duration']." years</p></td></tr>
         <tr><td><p>Minimum APS:  </td><td>".$row['aps']."</p></td></tr>
         <tr><td><p>Faculty:  </td><td>".$row['faculty']."</p><br></td></tr><br><br>
         
         </table>
        </div>";  
      }


    } else {
      echo "<p>There are no results matching your search<p><br>";
    }
  }


?>
      
  

      <br><br>
      <h3>University of Cape Town</h3>
      <hr>
      <img src="images/uni/uct.jpg" class="img-responsive">
        
             <a class="preview" href="pdf/uct.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br>
             <a class="preview" href="images/uct.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View campus</a><br><br>
<?php
    if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']); 
    $sql = "SELECT * FROM uct  WHERE choice LIKE '%$search%' OR field LIKE '%$search%' OR prog_name LIKE '%$search%' OR duration LIKE '%$search%' OR aps LIKE '%$search%' OR faculty LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);


    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id= 'myDIV4'>
        <table>
        <tr>
        <th><h3>".$row['choice']."</h3></th>
         <th><p><a class='preview' href='prospics/".$row['image']."' rel='prettyPhoto'><i class='fa fa-eye' ></i> View prospectus</a></p></th>
         </tr>
         <tr>
         <td><p>Field: </p></td>
         <td>".$row['field']."</td>
         </tr>
         <tr><td><p>Progamme Name:  </td><td>".$row['prog_name']."</p></td></tr>
         <tr><td><p>Duration:  </td><td>".$row['duration']." years</p></td></tr>
         <tr><td><p>Minimum APS:  </td><td>".$row['aps']."</p></td></tr>
         <tr><td><p>Faculty: </td><td>".$row['faculty']."</p><br></td></tr><br><br>
         
         </table>
        </div>";  
      }


    } else {
      echo "<p>There are no results matching your search<p><br>";
    }
  }


?>
      
        
         
   

      <br><br>
      <h3>University of Kwa-Zulu Natal</h3>
      <hr>
    
        <img src="images/uni/ukzn.jpg" class="img-responsive">
 
             <a class="preview" href="pdf/ukzn.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br>
             <a class="preview" href="images/ukzn.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View campus</a><br><br>
         
<?php
    if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']); 
    $sql = "SELECT * FROM ukzn  WHERE choice LIKE '%$search%' OR field LIKE '%$search%' OR prog_name LIKE '%$search%' OR duration LIKE '%$search%' OR aps LIKE '%$search%' OR faculty LIKE '%$search%'";
    $result = mysqli_query($db, $sql);
    $queryResult = mysqli_num_rows($result);


    if ($queryResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div id= 'myDIV5'>
        <table>
        <tr>
        <th><h3>".$row['choice']."</h3></th>
         <th><p><a class='preview' href='prospics/".$row['image']."' rel='prettyPhoto'><i class='fa fa-eye' ></i> View prospectus</a></p></th>
         </tr>
         <tr>
         <td><p>Field: </p></td>
         <td>".$row['field']."</td>
         </tr>
         <tr><td><p>Progamme Name:  </td><td>".$row['prog_name']."</p></td></tr>
         <tr><td><p>Duration:  </td><td>".$row['duration']." years</p></td></tr>
         <tr><td><p>Minimum APS:  </td><td>".$row['aps']."</p></td></tr>
         <tr><td><p>Faculty:  </td><td>".$row['faculty']."</p><br></td></tr><br><br>
         
         </table>
        </div>";  
      }


    } else {
      echo "<p>There are no results matching your search<p><br>";
    }
  }


?>
    </div>
</div>
</div>
<a href="services3.php"><button id="begin" class="butt">Take our Test</button></a>

</section>


   <footer>
     <br><br><br>
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
