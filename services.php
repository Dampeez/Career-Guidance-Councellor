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
              <a href="uindex.php"><h1><span>CAREER </span>PATH <span>SELECTION</span></h1></a>
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
      <h3>Admission Point Score Calculator</h3>
      <h5><b>Name:    </b>  <?php echo $_SESSION['e_name'] ?></h5><br>
      <h5><b>Surname:    </b>  <?php echo $_SESSION['e_surname'] ?></h5><br>
      <img src="images/avatar/pro.png" alt="Avatar" class="avatar2"><br>
      <h4>In order to apply to any university in South Africa, an Admission Points Score is required. </h4><br>
      <h5>Not sure what your Admission Point Score is? Calculate it today!</h5><br>
      <h5>In addition to calculating your APS, find out which fields of study you qualify for entry at the five main public universities based on your subject choices, marks and APS.</h5><br>
      
      
        <div class="row contact-wrap">
        
          
            <p>
              <div class="sub">
                
                <select id = "comp1" onselect="select()" >
                  <option value =  "primary-language">Please select a mathematics major</option>   
                  <option value="Math">Math</option>
                  <option value="Math Literacy">Math Literacy</option>
                  <option value="AP Math">AP Math</option>
                </select>
                <input name="idValue" id="idValue" type="hidden">
                &nbsp;&nbsp;
               Enter Mark :
                &nbsp;&nbsp;
                <input type="text" id="Text1" name="TextBox2" oninput="APS()" >
                &nbsp;&nbsp;
                APS :&nbsp;&nbsp;
                <p id ="txtresult" ></p>
                <br>

                      <select id = "comp2" onselect="select()" >
                        <option value =  "primary-language">Please select a home language</option>   
                        <option value="English">English</option>
                        <option value="Afrikaans">Afrikaans</option>
                        <option value="Zulu">Zulu</option>
                      </select>
                      <input name="idValue" id="idValue" type="hidden">
                    &nbsp;&nbsp;
                    Enter Mark :
                    &nbsp;&nbsp;
                   <input type="text" id="Text2" name="TextBox2" oninput="APS()" >
                    &nbsp;&nbsp;
                    APS :&nbsp;&nbsp;
                    <p id ="txtresult2" ></p>
                    <br>

                    <!--3-->
                    <select id= "comp3" onselect="select()">
                      <option value =  "secondary-language">Please select a second additional language</option>   
                      <option value="English">English</option>
                      <option value="Afrikaans">Afrikaans</option>
                      <option value="Zulu">Zulu</option>
                    </select>
                    <input name="idValue" id="idValue" type="hidden">


&nbsp;&nbsp;
                    Enter Mark :
&nbsp;&nbsp;
                    <input type="text" id="Text3" name="TextBox3" oninput="APS()" >
                    &nbsp;&nbsp;
                    APS : &nbsp;&nbsp;
                    <p id ="txtresult3" ></p>
&nbsp;&nbsp;
                    <br>
                    <!--4-->
                    <select >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Life Orientation">Life Orientation</option>
                    </select>
                    <input name="idValue" id="idValue" type="hidden">
&nbsp;&nbsp;


                    Enter Mark :
&nbsp;&nbsp;
                    <input type="text" id="Text4" name="TextBox4" oninput="APS()" >
                    &nbsp;&nbsp;
                    APS : &nbsp;&nbsp;
                    <p id ="txtresult4" ></p>
&nbsp;&nbsp;
                    <br>
                    <!--5-->
                    <select >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <input name="idValue" id="idValue" type="hidden">


&nbsp;&nbsp;
                    Enter Mark :
&nbsp;&nbsp;
                    <input type="text" id="Text5" name="TextBox5" oninput="APS()" > 
                    &nbsp;&nbsp;
                    APS :&nbsp;&nbsp;
                    <p id ="txtresult5" ></p>
&nbsp;&nbsp;
                    <br>
                    <!--6-->
                    <select >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <input name="idValue" id="idValue" type="hidden">
&nbsp;&nbsp;


                    Enter Mark :
&nbsp;&nbsp;
                    <input type="text" id="Text6" name="TextBox6" oninput="APS()" >
                    &nbsp;&nbsp;
                    APS : &nbsp;&nbsp;
                    <p id ="txtresult6" ></p>
&nbsp;&nbsp;
                    <br>
                    <!--7-->
                    <select id="comp7" onchange="select()" >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <input name="idValue" id="idValue" type="hidden">

&nbsp;&nbsp;

                    Enter Mark :
&nbsp;&nbsp;
                    <input type="text" id="Text7" name="TextBox7" oninput="APS()" >
                    &nbsp;&nbsp;
                    APS : &nbsp;&nbsp;
                    <p id ="txtresult7" ></p><br><br>

<p>Current Score:</p>                   
<input id="answer"><br><br>
<p>Subject 1:</p>  
  <input id="answer3"><br><br>
<p>Subject 2:</p>
  <input id="answer4"><br><br>
<p>Subject 3:</p>
  <input id="answer5"><br><br>
<p>Subject 4:</p>
  <input id="answer6"><br><br>
<p>Subject 5:</p>
  <input id="answer7"><br><br>
<p>Subject 6:</p>
  <input id="answer8"><br><br>
<p>Subject 7:</p>
  <input id="answer9"><br><br>
  <!--<input id="answer10"><br><br>-->
               
                    <p>Total APS:</p>
                    <input id="display7"><br><br>

  
  

  
&nbsp;&nbsp;
                </p>
              </div>
            
            
          
        
      </div>
    </div>

  </div>

  <div class="services">
    <div class="container">
      <br>
      <h3>University of Johannesburg</h3>
      <hr>
      <div class="col-md-6">
        <img src="images/uni/uj.jpg" class="img-responsive">
          <div class="carousel-content">
             <a class="preview" href="pdf/uj.pdf"><i class="fa fa-file-text"></i> View prospectus</a><br><br>
             <a class="preview" href="images/uj.jpg" rel="prettyPhoto"><i class="fa fa-eye" ></i> View campus</a>
          </div>
      </div>

      <div class="col-md-6">
        <h3>What can you study?</h3>
        <h4>You meet the minimum entry requirements for:</h4>
        <p id ="demo"></p>
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



  <script>
function APS(){
  var x = document.getElementById("Text1").value;
  

    var first_num = parseInt(x) ;

    if (first_num >= 50 && first_num < 60) {
                var result1 = 4;
                
                document.getElementById("txtresult").innerHTML = result1.toString();

                aps1=Number(document.getElementById("answer").value=result1);

               
                }   
               else if (first_num >= 60 && first_num < 70) {
                var result1 = 5;
                
                document.getElementById("txtresult").innerHTML = result1.toString();

                aps1=Number(document.getElementById("answer").value=result1); 
                }   
               else if (first_num >= 70 && first_num < 80) {
                var result1 = 6;
                
                document.getElementById("txtresult").innerHTML = result1.toString();
                aps1=Number(document.getElementById("answer").value=result1);
               
                }

                else if (first_num >= 80 && first_num < 90) {
                var result1 = 7;
                
                document.getElementById("txtresult").innerHTML = result1.toString();
                aps1=Number(document.getElementById("answer").value=result1);
               
                }   

                else if (first_num >= 90 ) {
                var result1 = 8;
                
                document.getElementById("txtresult").innerHTML = result1.toString();
                aps1=Number(document.getElementById("answer").value=result1);
                }
                //second sub---------------------------------------------------------------------------------------------------------------------------------------
                
    
    var y = document.getElementById("Text2").value; 
    var second_number = parseInt(y) ;

    if (second_number >= 50 && second_number < 60) {
                var result2 = 4;
                
                document.getElementById("txtresult2").innerHTML = result2.toString();
                aps2=Number(document.getElementById("answer").value=result2);

               
                }   
               else if (second_number >= 60 && second_number < 70) {
                var result2 = 5;
                
                document.getElementById("txtresult2").innerHTML = result2.toString();
                aps2=Number(document.getElementById("answer").value=result2);

               
                }   
               else if (second_number >= 70 && second_number < 80) {
                var result2 = 6;
                
                document.getElementById("txtresult2").innerHTML = result2.toString();
                aps2=Number(document.getElementById("answer").value=result2);

               
                }   

                else if (second_number >= 80 && second_number < 90) {
                var result2 = 7;
                
                document.getElementById("txtresult2").innerHTML = result2.toString();
                aps2=Number(document.getElementById("answer").value=result2);

               
                }   

                else if (second_number >= 90) {
                var result2 = 8;
                
                document.getElementById("txtresult2").innerHTML = result2.toString();
                aps2=Number(document.getElementById("answer").value=result2);

               
                }
                //Third SUb-------------------------------------------------------------------------------------------------------------------------------
              
                var z = document.getElementById("Text3").value;
    

    var third_number = parseInt(z) ;

    if (third_number >= 50 && third_number < 60) {
                var result3 = 4;
                
                document.getElementById("txtresult3").innerHTML = result3.toString();
                aps3=Number(document.getElementById("answer").value=result3);

               
                }   
               else if (third_number >= 60 && third_number < 70) {
                var result3 = 5;
                
                document.getElementById("txtresult3").innerHTML = result3.toString();
                aps3=Number(document.getElementById("answer").value=result3);

               
                }   
               else if (third_number >= 70 && third_number < 80) {
                var result3 = 6;
                
                document.getElementById("txtresult3").innerHTML = result3.toString();
                aps3=Number(document.getElementById("answer").value=result3);

               
                }   
                else if (third_number >= 80 && third_number < 90) {
                var result3 = 7;
                
                document.getElementById("txtresult3").innerHTML = result3.toString();
                aps3=Number(document.getElementById("answer").value=result3);

               
                }   

                else if (third_number >= 90) {
                var result3 = 8;
                
                document.getElementById("txtresult3").innerHTML = result3.toString();
                aps3=Number(document.getElementById("answer").value=result3);

               
                }
              //4th num-------------------------------------------------------------------------------------------------------------------------
              var a = document.getElementById("Text4").value;
    

    var fourth_number = parseInt(a) ;

    if (fourth_number >= 50 && fourth_number < 60) {
                var result4 = 4;
                
                document.getElementById("txtresult4").innerHTML = result4.toString();
                aps4=Number(document.getElementById("answer").value=result4);

               
                }   
               else if (fourth_number >= 60 && fourth_number < 70) {
                var result4 = 5;
                
                document.getElementById("txtresult4").innerHTML = result4.toString();
                aps4=Number(document.getElementById("answer").value=result4);


               
                }   
               else if (fourth_number >= 70 && fourth_number < 80) {
                var result4 = 6;
                
                document.getElementById("txtresult4").innerHTML = result4.toString();
                aps4=Number(document.getElementById("answer").value=result4);


               
                }   

                else if (fourth_number >= 80 && fourth_number < 90) {
                var result4 = 7;
                
                document.getElementById("txtresult4").innerHTML = result4.toString();
                aps4=Number(document.getElementById("answer").value=result4);


               
                }   

                else if (fourth_number >= 90) {
                var result4 = 8;
                
                document.getElementById("txtresult4").innerHTML = result4.toString();
                aps4=Number(document.getElementById("answer").value=result4);


               
                }
                //5th num-----------------------------------------------------------------------------------------------------------------------------
                
                var b = document.getElementById("Text5").value;
    

    var fifth_number = parseInt(b) ;

    if (fifth_number >= 50 && fifth_number < 60) {
                var result5 = 4;
                
                document.getElementById("txtresult5").innerHTML = result5.toString();
                aps5=Number(document.getElementById("answer").value=result5);


               
                }   
               else if (fifth_number >= 60 && fifth_number < 70) {
                var result5 = 5;
                
                document.getElementById("txtresult5").innerHTML = result5.toString();
                aps5=Number(document.getElementById("answer").value=result5);

               
                }   
               else if (fifth_number >= 70 && fifth_number < 80) {
                var result5 = 6;
                
                document.getElementById("txtresult5").innerHTML = result5.toString();
                aps5=Number(document.getElementById("answer").value=result5);

               
                }   

                else if (fifth_number >= 80 && fifth_number < 90) {
                var result5 = 7;
                
                document.getElementById("txtresult5").innerHTML = result5.toString();
                aps5=Number(document.getElementById("answer").value=result5);

               
                }   

                else if (fifth_number >= 90) {
                var result5 = 8;
                
                document.getElementById("txtresult5").innerHTML = result5.toString();
                aps5=Number(document.getElementById("answer").value=result5);

               
                }
             //6th-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
             var c = document.getElementById("Text6").value;
    

    var sixth_number = parseInt(c) ;

    if (sixth_number >= 50 && sixth_number < 60) {
                var result6 = 4;
                
                document.getElementById("txtresult6").innerHTML = result6.toString();
                aps6=Number(document.getElementById("answer").value=result6);

               
                }   
               else if (sixth_number >= 60 && sixth_number < 70) {
                var result6 = 5;
                
                document.getElementById("txtresult6").innerHTML = result6.toString();
                aps6=Number(document.getElementById("answer").value=result6);

               
                }   
               else if (sixth_number >= 70 && sixth_number < 80) {
                var result6 = 6;
                
                document.getElementById("txtresult6").innerHTML = result6.toString();
                aps6=Number(document.getElementById("answer").value=result6);
                a

               
                }  

                else if (sixth_number >= 80 && sixth_number < 90) {
                var result6 = 7;
                
                document.getElementById("txtresult6").innerHTML = result6.toString();
                aps6=Number(document.getElementById("answer").value=result6);

               
                }   

                else if (sixth_number >= 90) {
                var result6 = 8;
                
                document.getElementById("txtresult6").innerHTML = result6.toString();
                aps6=Number(document.getElementById("answer").value=result6);

               
                } 

                //7th num---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                var d = document.getElementById("Text7").value;
    

    var seven_number = parseInt(d) ;

    if (seven_number >= 50 && seven_number < 60) {
                var result7 = 4;
                
                document.getElementById("txtresult7").innerHTML = result7.toString();
                aps7=Number(document.getElementById("answer").value=result7);

               
                }   
               else if (seven_number >= 60 && seven_number < 70) {
                var result7 = 5;
                
                document.getElementById("txtresult7").innerHTML = result7.toString();
                aps7=Number(document.getElementById("answer").value=result7);


               
                }   
               else if (seven_number >= 70 && seven_number < 80) {
                var result7 = 6;
                
                document.getElementById("txtresult7").innerHTML = result7.toString();
                aps7=Number(document.getElementById("answer").value=result7);


               
                }   

                else if (seven_number >= 80 && seven_number < 90) {
                var result7 = 7;
                
                document.getElementById("txtresult7").innerHTML = result7.toString();
                aps7=Number(document.getElementById("answer").value=result7);


               
                }   

                else if (seven_number >= 90) {
                var result7 = 8;
                
                document.getElementById("txtresult7").innerHTML = result7.toString();
                aps7=Number(document.getElementById("answer").value=result7);


               
                }

                select(aps1,aps2,aps3,aps4,aps5,aps6,aps7);//,aps2,aps3,aps4,aps5,aps6,aps7);

              }

              

function select(val1,val2,val3,val4,val5,val6,val7) {

  var sel1= document.getElementById("comp1").value ;
  var sel2= document.getElementById("comp2").value ;
  var sel3= document.getElementById("comp3").value ;
  var sel7= document.getElementById("comp7").value ;


//var sel = document.getElementById("display");

    if (sel1 == 'Math' && sel2 == 'English' && sel3 == 'Afrikaans' && sel7 == 'History'){

        if(v2 <= 5 && v3 <= 6){

        }document.getElementById("demo").innerHTML = "Teaching: BEd Degree in Foundation Phase Teaching";
        
    
    
  
    }

  var v1 = val1;
  var v2 = val2;
  var v3 = val3;
  var v4 = val4;
  var v5 = val5;
  var v6 = val6;
  var v7 = val7;

document.getElementById("answer3").value = v1;
document.getElementById("answer4").value = v2;
document.getElementById("answer5").value = v3;
document.getElementById("answer6").value = v4;
document.getElementById("answer7").value = v5;
document.getElementById("answer8").value = v6;
document.getElementById("answer9").value = v7;

var total = v1+v2+v3+v4+v5+v6+v7;
document.getElementById("display7").value =total;

//if (total >= 26) {
    //document.getElementById("display").value = "yes";
  //}

//var selected = document.getElementById("comp");
// var strUser = selected.options[select.selectedIndex].value
  


};





</script>
</body>

</html>
