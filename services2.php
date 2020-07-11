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

* {
  box-sizing: border-box;
}

body {
 background-image: url("images/slider/newnum.jpg");
 background-size:cover;
 

}


.box{
  width:650px;
}
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: 'Open Sans', Arial, sans-serif;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  top:100%;
  right:100%;
  transform: translate(30%,-130%);
  border: 10px solid #3498db;
  border-radius: 24px;
  font-weight: 500;
}
#regForm h1{
  font-weight:500;
  font-size:40px;
  border-bottom: 6px solid #3498db;
}

#regForm p{
  font-weight:500;
  font-size:20px;
  border-bottom:3px solid #3498db;

}

#regForm b{
  font-weight:500;
  font-size:20px;
  
}
#regform input{
  padding: 14px 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Open Sans', Arial, sans-serif;
  border: 1px solid #aaaaaa;
  border-radius: 24px;
  display:block;
  transition: 0.25s;
}
.invisible{
  display:none;
}
h1 {
  text-align: center;  
}
 .text{color: #ffffff;}
  
 }

input {
  padding: 14px 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Open Sans', Arial, sans-serif;
  border: 1px solid #aaaaaa;
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

#prevBtn {
  background-color: #3498db;
}

#prevBtn:hover {
  background-color: #ffffff;
  color:#3498db;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #3498db;
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
      
      </div>
      
     
  <div class="row contact-wrap">
        
          
            <p>
              <div class="sub">
                
              <div id="regForm">
  <h1>APS Calculator</h1><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><b>Select a mathematics major:</b><br>
                <select id = "comp1" onselect="select()" >
                  <option value =  "primary-language">Please select a mathematics major</option>   
                  <option value="Math">Math</option>
                  <option value="Math Literacy">Math Literacy</option>
                  <option value="AP Math">AP Math</option>
                </select>
                <!--<input name="idValue" id="idValue" type="hidden">-->
                <br>
               <p>Enter Mark :</p>
                &nbsp;&nbsp;<br>
                <input type="text" id="Text1" name="TextBox2" oninput="APS()" >
                &nbsp;&nbsp;<br>
                <p>APS :</p>&nbsp;&nbsp;
                <p id ="txtresult" ></p>

  </div>
  <div class="tab"><b>Select a first additional language:</b><br>
                      <select id = "comp2" onselect="select()" >
                        <option value =  "primary-language">Please select a home language</option>   
                        <option value="English">English</option>
                        <option value="Afrikaans">Afrikaans</option>
                        <option value="IsiZulu">Zulu</option>
                      </select>
                      <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text2" name="TextBox2" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult2" ></p>
  </div>
  <div class="tab"><b>Select a second additional language:</b><br>
                    <select id= "comp3" onselect="select()" >
                      <option value =  "secondary-language">Please select a second additional language</option>   
                      <option value="English">English</option>
                      <option value="Afrikaans">Afrikaans</option>
                      <option value="IsiZulu">Zulu</option>
                    </select>
                      <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text3" name="TextBox3" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult3" ></p>
  </div>
  <div class="tab"><b>Select a subject:</b><br>
                    <select id = "comp4" onselect="select()" >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Life Orientation">Life Orientation</option>
                    </select>
                    <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text4" name="TextBox4" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult4" ></p>
  </div>
  <div class="tab"><b>Select fifth subject:</b><br>
                    <select id = "comp5" onselect="select()" >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text5" name="TextBox5" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult5" ></p>
  </div>
   <div class="tab"><b>Select sixth subject:</b><br>
                    <select id = "comp6" onselect="select()" >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text6" name="TextBox6" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult6" ></p>
  </div>
  <div class="tab"><b>Select final subject:</b><br>
                    <select id = "comp7" onselect="select()" >
                      <option value =  "secondary-language">Please select a subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                    </select>
                    <!--<input name="idValue" id="idValue" type="hidden">-->
                    <br>
                    <p>Enter Mark :</p>
                    &nbsp;&nbsp;<br>
                   <input type="text" id="Text7" name="TextBox7" oninput="APS()" >
                    &nbsp;&nbsp;<br>
                    <p>APS :</p>&nbsp;&nbsp;
                    <p id ="txtresult7" ></p>
  </div>

 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <!--<button onclick="select()">Click me</button>-->
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>

<div class="invisible">
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
  ,<!--<input id="answer10"><br><br>-->
               
                    <p>Total APS:</p>
                    <input id="display7"><br><br>


                    
</div>
  
  

  
&nbsp;&nbsp;
                </p>
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

                select(aps1,aps2,aps3,aps4,aps5,aps6,aps7);


                //,aps2,aps3,aps4,aps5,aps6,aps7);

              }

              

function select(val1,val2,val3,val4,val5,val6,val7) {

  var sel1= document.getElementById("comp1").value ;
  var sel2= document.getElementById("comp2").value ;
  var sel3= document.getElementById("comp3").value ;
  var sel5= document.getElementById("comp5").value ;
  var sel6= document.getElementById("comp6").value ;
  var sel7= document.getElementById("comp7").value ;

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



var value1=total;
var value2=v1;
var value3=v2;
var value4=v3;
var value5=v4;
var value6=v5;
var value7=v6;
var value8=v7;

   if (sel1 == 'Math' && sel2 == 'English' && sel5 == 'Physical Sciences'){
   
       var subject1 = "Bachelor of Science in Engineering (BEng) in Civil Engineering";
       var subject2 = "Bachelor of Science in Engineering (BEng) in Chemical Engineering";
       var queryString = "?APS Total = " + value1 + "<br><br>" + sel1 + " = " + value2 + "<br><br>" + sel2 + " = " + value3 + "<br><br>" + sel3 + " = " + value4 + "<br>&Life Orientation  = " + value5 + "<br><br>" + sel5 + " = " + value6 + "<br><br>" + sel6 + " = " + value7 + "<br><br>" + sel7 + " = " + value8 + "<br>&<b>What Can You Study?</b><br><br>Based upon the subjects you've studied in high school:<br><br>" + sel1 + "<br>" + sel2 + "<br>" + sel5 +"<br><br>You meet the minimum requirements for:<br><b>University of Johannesburg</b><br><br>" + subject1 + "<br><br><b>University of Pretoria</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Witwaterstrand</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University Cape Town</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Kwa-Zulu Natal</b><br><br>"  + subject1 + "<br><br>" + subject2;

      alert("Generate your report now?");
      window.location.href = "report.php" + queryString;

    }
    else if(sel2 == 'English' || sel3 == 'Afrikaans'){

       var subject1 = "BEd Degree in Foundation Phase Teaching";
        var subject2 = "BEd Degree in Intermediate Phase Teaching";
         var subject3 = "BEd Degree in Senior Phase and Further Education and Training";

       var queryString = "?APS Total = " + value1 + "<br><br>" + sel1 + " = " + value2 + "<br><br>" + sel2 + " = " + value3 + "<br><br>" + sel3 + " = " + value4 + "<br>&Life Orientation  = " + value5 + "<br><br>" + sel5 + " = " + value6 + "<br><br>" + sel6 + " = " + value7 + "<br><br>" + sel7 + " = " + value8 + "<br>&<b>What Can You Study?</b><br><br>Based upon the subjects you've studied in high school:<br><br>" + sel2 + "<br> OR<br>" + sel3 + "<br><br>You meet the minimum requirements for:<br><b>University of Johannesburg</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Pretoria</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Witwaterstrand</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University Cape Town</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Kwa-Zulu Natal</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3;

      alert("Generate your report now?");  
      window.location.href = "report.php" + queryString;

    }




  

//var queryString = "?APS Total = " + sel1 + "<br>&Subject 1 APS = " + sel2; 



  
  

  

//var sel = document.getElementById("display");

   

  



//if (total >= 26) {
    //document.getElementById("display").value = "yes";
  //}

//var selected = document.getElementById("comp");
// var strUser = selected.options[select.selectedIndex].value
  


};

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Generate Report";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>
</body>

</html>
