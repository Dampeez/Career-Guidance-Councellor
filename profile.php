<?php 
    //session_start();

    include_once'php/userlogin/elogin.php';
    include "php/userlogin/connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
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

table{
    
    width:50%;
    padding:10px;
    box-shadow: 3px 3px     #000;
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
  
  color:#000;
}

h3{
  font-size: 30px;
  color:#050e5c;
  text-align: justify;
  
}

.al{
    align:right;
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
              <li role="presentation"><a href="uni.html">Take our Test!!</a></li>
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
    <div class="wrapper">
        <div class="container">
            <div class="row">
                
                <!--/.span3-->
                 <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-body">
                                <div class="profile-head media">
                                    <a href="#" class="media-avatar pull-left">
                                        <img src="images/user.png">
                                    </a>
                                    <div class="media-body">
                                        <h4>

                                            Monwabisi Tyobeka<small>Report</small>
                                        </h4>
                                        <p class="profile-brief">
                                           <b>Phone Number:</b><br>
                                           <b>Email Address:</b>
                                        </p>
                                        <div class="profile-details muted">
                                            <a href="#" class="btn"><i class="icon-plus shaded"></i>Download Report </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="profile-tab nav nav-tabs">
                                    <li class="active"><a href="#activity" data-toggle="tab">Personality</a></li>
                                    <li><a href="#friends" data-toggle="tab">APS</a></li>
                                </ul>
                                <div class="profile-tab-content tab-content">
                                    <div class="tab-pane fade active in" id="activity">
                                        <div class="module-option clearfix">
                                            <h2 style="text-align: center;">Career Path Guidance</h2>
                                        </div>
                                        <div class="module-body">
                                            <div class="row-fluid">
                                                
                                                    <h3 style="text-align: center;">The Healer</h3>
                                                    <p style="text-align: justify;">Healers are creative visionaries, guided by their own basic beliefs and convictions. To you, conceivable outcomes are central; the truth existing apart from everything else is just of passing concern. You see potential for a superior future and seek after truth and significance with their own pizazz.</p><br>
                                                    
                                                    <h3 style="text-align: center;">Suitable Career Paths</h3>
                                                    <p style="text-align: justify;">Healers often seem reserved, especially by those who do not know them well. You are creative problem-solvers that desire solitude to express themselves creatively.</p><br>
                                                    <p style="text-align: justify;">Some career options or jobs best suited for 'Healers' include:</p>
                                                    <ul>
                                                        <li>Writer (Arts)</li><br>
                                                        <li>Fine artist (Arts)</li><br>
                                                        <li>Graphic designer (Commercial Media and Communications)</li><br>
                                                        <li>Photographer (Commercial Media and Communications)</li><br>
                                                        <li>Guidance counsellor (Health Care)</li>
                                                    </ul>
                                               
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="row-fluid">
                                                <h3 style="text-align: center;">What must you study?</h3>
                                                <p style="text-align: justify;">Based on the user’s characteristic traits, we advise the user to look at the options below and make an informed decision:</p><br><br>

                                                <table align:right>
                                                <tr>
                                                <th><h3>Course</h3></th>
                                                 <th><h3>Course Type</h3></th>
                                                 <th><h3>University</h3></th>
                                                 </tr>
                                                  <tr>
                                                      <td colspan="2"><h4 style="text-align: center;">Art, Design, and Architecture </h4></td>
                                                  </tr>
                                                  <tr>
                                                      
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td colspan="2"><h4 style="text-align: center;">Humanities </h4></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td colspan="2"><h4 style="text-align: center;">College of Business and Economics</h4></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  <tr>
                                                      <td><p><b> </b></p></td>
                                                      <td><p></p></td>
                                                      <td><p></p></td>
                                                  </tr>
                                                  
                                                  </table>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            
                                            
                                            <!--/.row-fluid-->
                                            <br />
                                        </div>
                                        <!--/.stream-list-->
                                    </div>
                                    <div class="tab-pane fade" id="friends">
                                        <div class="module-option clearfix">
                                            <h2 style="text-align: center;">Career Path Guidance</h2>
                                        </div>
                                        <div class="module-body">
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga
                                                            </h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            <div class="row-fluid">
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                John Donga</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">
                                                    <div class="media user">
                                                        <a class="media-avatar pull-left" href="#">
                                                            <img src="images/user.png">
                                                        </a>
                                                        <div class="media-body">
                                                            <h3 class="media-title">
                                                                Donga John</h3>
                                                            <p>
                                                                <small class="muted">Pakistan</small></p>
                                                            <div class="media-option btn-group shaded-icon">
                                                                <button class="btn btn-small">
                                                                    <i class="icon-envelope"></i>
                                                                </button>
                                                                <button class="btn btn-small">
                                                                    <i class="icon-share-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                            
                                                </div>
                                            </div>
                                            <!--/.row-fluid-->
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.module-body-->
                        </div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
                </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
