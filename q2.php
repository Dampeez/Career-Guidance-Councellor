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
<h1 style="text-align:center;">Welcome to CPG Personality Quiz</h1><br>
<p style="text-align:center;">We'd like to get to know you better.</p><br>
<p style="text-align:center;">Answer these 20 questions so we can get a better understanding of who you are and your potential career options.</p><br>
<p>
<br> 
<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>


  <style>
      
.li{
  color: black;
  }

* {
  box-sizing: border-box;
}

 .avatar2 {
  vertical-align: middle;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  
  
  }

  #form-header{
  border: 1px solid #000;
  background-color: #ffff;
  margin: 10px auto;
  font-family: 'Open Sans', Arial, sans-serif;
  text-align:left;
  width: 70%;
 height:100px;
  top:100%;
  right:100%;
  transform: translate(0%,25%);
  border: 1px solid #A9A9A9;
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
  transform: translate(0%,-20%);
  border: 1px solid #A9A9A9;
  
  font-weight: 500;
}


#regForm h1{
  font-weight:500;
  font-size:40px;
  
}

#regForm p{
  font-weight:500;
  font-size:17px;

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

div.display_inline
{
display: inline;
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
      <br>
      
      <br>
     
      
        <div class="row contact-wrap">
        
          
            <p>
              <div class="sub">
                <div class="li">
                <ol id = "mylist">
  

                <div id="form-header">
  <h1>CPG Personality Quiz</h1><br>
</div>

<form id="regForm" action="/action_page.php">

  <!-- One "tab" for each step in the form: -->
  <div class="tab"><b>Question 1</b><br><p>Do you consider yourself to be more:</p>
  <p><input type="radio" id="composed"  name="Q1" value="composed" onclick="que()" >Composed</p>
  <p><input type="radio" id="outspoken" name="Q1" value="outspoken" onclick="que()" >Outspoken</p>
           </div>
  <div class="tab"><b>Question 2</b><br><p>In which way do you work better:</p>
  <p><input type="radio" id="outgoing" name="Q2" value="outgoing" onclick="que()" >Extroverted</p>
  <p><input type="radio" id="private" name="Q2" value="private" onclick="que()" >Private</p>
             </div>
  <div class="tab"><b>Question 3</b><br><p>At an event, would you:</p>
  <p><input type="radio" id="alone" name="Q3" value="alone" onclick="que()" >Alone</p>
  <p><input type="radio" id="team" name="Q3" value="team" onclick="que()" >In a team</p>
 </div>
 <div class="tab"><b>Question 4</b><br><p>In a meeting, would you:</p>
 <p><input type="radio" id="known" name="Q4" value="known" onclick="que()" >Assocociate with a few familiar people</p>
 <p><input type="radio" id="unknown" name="Q4" value="unknown" onclick="que()" >Assocociate with many unknown people</p>
          </div>
  <div class="tab"><b>Question 5</b><br><p>Do you focus on:</p>
  <p><input type="radio" id="speak" name="Q5" value="speak" onclick="que()" >Speak up</p>
  <p><input type="radio" id="listen" name="Q5" value="listen" onclick="que()" >Just listen</p>
          </div>
  <div class="tab"><b>Question 6</b><br><p>Are you drawn to deals that are:</p>
  <p><input type="radio" id="is" name="Q6" value="is" onclick="que2()" >What is?</p>
  <p><input type="radio" id="could-be" name="Q6" value="could-be" onclick="que2()" >What could be?</p>
             </div>
   <div class="tab"><b>Question 7</b><br><p>Would you rather:</p>
   <p><input type="radio" id="real" name="Q7" value="realities" onclick="que2()">Realities</p>
   <p><input type="radio" id="possibilities" name="Q7" value="possibilities" onclick="que2()">Possibilities</p>
         </div>
   <div class="tab"><b>Question 8</b><br><p>Do you focus on being more:</p>
   <p><input type="radio" id="facts" name="Q8" value="facts" onclick="que2()">Focus on facts</p>
   <p><input type="radio" id="instinct"  name="Q8" value="instinct" onclick="que2()">Trust your instinct</p>
           </div>
   <div class="tab"><b>Question 9</b><br><p>Would you be drawn to:</p>
   <p><input type="radio" id="realistic" name="Q9" value="realistic" onclick="que2()">Realistic</p>
   <p><input type="radio" id="creative" name="Q9" value="creative" onclick="que2()">Creative</p>
             </div>
   <div class="tab"><b>Question 10</b><br><p>Which describes you best:</p>
   <p><input type="radio" id="see" name="Q10" value="see" onclick="que2()">What you can see and touch</p>
   <p><input type="radio" id="envision" name="Q10" value="envision" onclick="que2()">What you can envision and invent</p>
            </div>

            <!--f/T-->
  <div class="tab"><b>Question 11</b><br><p>Do you think of yourself as:</p>
  <p><input type="radio" id = "Feeling" name="Q11" value="Feeling" onclick="que3()">Feeling </p>
  <p><input type="radio" id = "Thinking" name="Q11" value="Thinking" onclick="que3()">Thinking</p>
     </div>
  <div class="tab"><b>Question 12</b><br><p>Would you:</p>
  <p><input type="radio" id = "sentimental" name="Q12" value="sentimental" onclick="que3()">Sentimental</p>
  <p><input type="radio" id = "analytical" name="Q12" value="analytical"onclick="que3()" >Analytical</p>
    </div>
 <div class="tab"><b>Question 13</b><br><p>Do you consider yourself to be more:</p>
 <p><input type="radio" id = "stand" name="Q13" value="stand" onclick="que3()" >Stand your ground</p>
 <p><input type="radio" id = "avoid" name="Q13" value="avoid" onclick="que3()">Avoid the arguem</p>
          </div>
  <div class="tab"><b>Question 14</b><br><p>Would you appreciate someone for their:</p>
  <p><input type="radio" id = "compassion" name="Q14" value="compassion" onclick="que3()">Compassion</p>
  <p><input type="radio" id = "insight" name="Q14" value="insight" onclick="que3()" >Insight<br></p>
      </div>
 <div class="tab"><b>Question 15</b><br><p>Do you make decisions with your:</p>
 <p><input type="radio" id = "head" name="Q15" value="head" onclick="que3()" >Head</p>
 <p><input type="radio" id = "heart" name="Q15" value="heart" onclick="que3()">Heart</p>
</div>

<!--P/J-->
  <div class="tab"><b>Question 16</b><br><p>How do you make day-to-day decisions:</p>
  <p><input type="radio" id = "arise" name="Q16" value="arise" onclick="que4()">When they arise</p>
  <p><input type="radio" id = "plan" name="Q16" value="plan" onclick="que4()" >Planned consideration</p>
            </div>
  <div class="tab"><b>Question 17</b><br><p>How do you plan a meeting:</p>
  <p><input type="radio" id = "planned" name="Q17" value="planned" onclick="que4()">Planned</p>
  <p><input type="radio" id = "prompted" name="Q17" value="prompted"  onclick="que4()">Prompted</p>
            </div>
  <div class="tab"><b>Question 18</b><br><p>How do you feel about change:</p>
  <p><input type="radio" id = "comfortable" name="Q18" value="comfortable"  onclick="que4()">Comfortable</p>
  <p><input type="radio" id = "uncomfortable" name="Q18" value="uncomfortable"  onclick="que4()">Uncomfortable</p>
                 </div>
  <div class="tab"><b>Question 19</b><br><p>Would you prefer working in a manner that is:</p>
  <p><input type="radio" id = "spontaneous" name="Q19" value="spontaneous"   onclick="que4()">Spontaneous</p>
  <p><input type="radio" id = "scheduled" name="Q19" value="scheduled" onclick="que4()" >Scheduled</p>
                 </div>
  <div class="tab"><b>Question 20</b><br><p>What is more satisfying</p>
  <p><input type="radio" id = "organizing" name="Q20" value="organizing"  onclick="que4()">Organizing</p>
  <p><input type="radio" id = "flow" name="Q20" value="flow"  onclick="que4()">Going with the flow</p>
                  </div>
                 
            
            
  <div class="tab"><br>
      <p>Thank you for completing our questionnaire!</p>
      <div class = "invisible">
            <p id = "result"></p>
            <p id = "resultb"></p>
            <p id = "resultc"></p>
            <p id = "resultd"></p>
    </div>
    
            <p id = "result2" ></p>
            <p id = "result3" ></p>
            <p id = "result4" ></p>
            <p id = "result5" ></p>
            <input type="text" id = "displayyyy" onchange="display()" value= "please enter code here"></p>

  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


</ol>
</div>


<script>

// questionaire logic

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
    document.getElementById("nextBtn").innerHTML = "Submit";
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

function que(){
   var comp = document.getElementById("composed"); 
   var outsp = document.getElementById("outspoken");
   var outgoing = document.getElementById("outgoing");
   var private = document.getElementById("private");
   var alo = document.getElementById("alone");
   var tee = document.getElementById("team");
   var knw = document.getElementById("known");
   var unk = document.getElementById("unknown");
   var speak = document.getElementById("speak");
   var list = document.getElementById("listen");
  

   var intru = [];
   var out = [];

   if(comp.checked == true){
       intru.push("comp")
   }

   if(outsp.checked == true){
       out.push("outsp")
   }

   if(outgoing.checked == true){
       intru.push("outgoing")
   }

   if(private.checked == true){
       out.push("Private")
   }

   if(alo.checked == true){
       intru.push("alo")
   }
   if(tee.checked == true){
       out.push("tee")
   }
   if(knw.checked == true){
       intru.push("knw")
   }
   if(unk.checked == true){
       out.push("unk")
   }
   if(speak.checked == true){
       intru.push("speak")
   }
   if(list.checked == true){
       out.push("list")
   }
   
   
   for (var i = 0; i < 5; i++){
   document.getElementById("result").innerHTML = "I:"+ intru.length + "E:"+ out.length;
   
   }

   var inlength = intru.length;
   var outlength = out.length;

   if (inlength > outlength){
       document.getElementById("result2").innerHTML = "I";
       var one = (document.getElementById("result2").value = "I");
                    }
    else if (inlength<outlength){
        document.getElementById("result2").innerHTML = "E";
        var one = (document.getElementById("result2").value = "E");
    }
    //display(one,two,three,four);
    
}

function que2(){

    

 var is = document.getElementById("is");
  var could = document.getElementById("could-be");
  var real = document.getElementById("real");
  var possibilities = document.getElementById("possibilities");
  var facts = document.getElementById("facts");
  var instinct = document.getElementById("instinct");
  var realistic = document.getElementById("realistic");
  var creative = document.getElementById("creative");
  var see = document.getElementById("see");
  var envision = document.getElementById("envision");

  var sensing = [];
  var intuitive = [];

  if(is.checked == true){
      sensing.push("is")
   }

  if(could.checked == true){
       intuitive.push("could")
   }

   if(real.checked == true){
      sensing.push("real")
   }

  if(possibilities.checked == true){
       intuitive.push("possibilities")
   }
   if(facts.checked == true){
      sensing.push("facts")
   }

  if(instinct.checked == true){
       intuitive.push("instinct")
   }
   if(realistic.checked == true){
      sensing.push("realistic")
   }

  if(creative.checked == true){
       intuitive.push("creative")
   }
   if(see.checked == true){
      sensing.push("see")
   }

  if(envision.checked == true){
       intuitive.push("envision")
   }

   for (var i = 0; i < 5; i++){
   document.getElementById("resultb").innerHTML = "S:"+ sensing.length + "N:"+ intuitive.length;
   
   }

   var senlength = sensing.length;
   var intuitivelength = intuitive.length;

   if (senlength > intuitivelength){
       document.getElementById("result3").innerHTML = "S";
        var two = (document.getElementById("result3").value = "S");            }
    else if (intuitivelength > senlength){
        document.getElementById("result3").innerHTML = "N";
        var two = (document.getElementById("result3").value = "S");
    }
    //display(one,two,three,four);
}

function que3(){
var Feeling = document.getElementById("Feeling");
var Thinking  = document.getElementById("Thinking");
var sentimental = document.getElementById("sentimental");
var analytical = document.getElementById("analytical");
var stand = document.getElementById("stand");
var avoid  = document.getElementById("avoid");
var compassion = document.getElementById("compassion");
var insight = document.getElementById("insight");
var head = document.getElementById("head");
var heart = document.getElementById("heart");

var feel = [];
var think = [];

    if(Feeling.checked == true){
       feel.push("Feeling")
   }

   if(Thinking.checked == true){
       think.push("Thinking")
   }

   if(sentimental.checked == true){
       feel.push("sentimental")
   }

   if(analytical.checked == true){
       think.push("analytical")
   }

   if(stand.checked == true){
       feel.push("stand")
   }

   if(avoid.checked == true){
       think.push("avoid")
   }

   if(compassion.checked == true){
       feel.push("compassion")
   }

   if(insight.checked == true){
       think.push("insight")
   }

   if(head.checked == true){
       feel.push("head")
   }

   if(heart.checked == true){
       think.push("heart")
   }

   for (var i = 0; i < 5; i++){
   document.getElementById("resultc").innerHTML = "F:"+ feel.length + "T:"+ think.length;
   
   }

   var feellength = feel.length;
   var thinklength = think.length;

   if (feellength > thinklength){
       document.getElementById("result4").innerHTML = "F";
       var three = (document.getElementById("result4").value = "F");
                    }
    else if (thinklength > feellength){
        document.getElementById("result4").innerHTML = "T";
        var three = (document.getElementById("result4").value = "T");
    }
    //display(one,two,three,four);
}


function que4(){
var arise = document.getElementById("arise");
var plan = document.getElementById("plan");
var planned = document.getElementById("planned");
var prompted = document.getElementById("prompted");
var comfortable = document.getElementById("comfortable");
var uncomfortable = document.getElementById("uncomfortable");
var spontaneous = document.getElementById("spontaneous");
var scheduled = document.getElementById("scheduled");
var organizing = document.getElementById("organizing");
var flow = document.getElementById("flow");

var perceive= [];
var judge = [];

    if(arise.checked == true){
        perceive.push("arise")
    }

    if(plan.checked == true){
        judge.push("plan")
    }

    if(planned.checked == true){
        perceive.push("planned")
    }

    if(prompted.checked == true){
        judge.push("prompted")
    }

    if(comfortable.checked == true){
        perceive.push("comfortable")
    }

    if(uncomfortable.checked == true){
        judge.push("uncomfortable")
    }

    if(spontaneous.checked == true){
        perceive.push("spontaneous")
    }

    if(scheduled.checked == true){
        judge.push("scheduled")
    }

    if(organizing.checked == true){
        perceive.push("organizing")
    }

    if(flow.checked == true){
        judge.push("flow")
    }


    for (var i = 0; i < 5; i++){
   document.getElementById("resultd").innerHTML = "P:"+ perceive.length + "J:"+ judge.length;
   
   }

   var perclength = perceive.length;
   var judgelength = judge.length;

   if (perclength > judgelength){
       document.getElementById("result5").innerHTML = "P";
       var four = (document.getElementById("result5").value = "P");
                    }
    else if (judgelength > perclength){
        document.getElementById("result5").innerHTML = "J";
        var four = (document.getElementById("result5").value = "J");
    }

    
}

function display(){
    var first = document.getElementById("displayyyy").innerHTML;
    
    if (first == "INFJ"){
      alert(FUCCCCKKKKK);
    }
    

   

}
    





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