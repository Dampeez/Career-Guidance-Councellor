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
  <!-- MapPress Easy Google Maps Version:2.53.3 (http://www.mappresspro.com/mappress) -->
  <script type='text/javascript'>mapp = window.mapp || {}; mapp.data = [];</script>


  <title>APS Score Generator</title>

  <!--APS Calculator-->
  <meta name="description" content="Calculate your high school GPA with our easy to use free online high school GPA calculator, and stay on top of your high school study grades.">
<link rel="canonical" href="index.htm">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="High School GPA Calculator">
<meta property="og:description" content="Calculate your high school GPA with our easy to use free online high school GPA calculator, and stay on top of your high school study grades.">
<meta property="og:url" content="https://gpacalculator.net/high-school-gpa-calculator/">
<meta property="og:site_name" content="GPA Calculator">
<meta property="og:image" content="https://gpacalculator.net/wp-content/uploads/high-school-gpa-calculator-e1446610933512.png">
<meta property="og:image:secure_url" content="https://gpacalculator.net/wp-content/uploads/high-school-gpa-calculator-e1446610933512.png">
<meta property="og:image:width" content="400">
<meta property="og:image:height" content="238">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="Calculate your high school GPA with our easy to use free online high school GPA calculator, and stay on top of your high school study grades.">
<meta name="twitter:title" content="High School GPA Calculator">
<meta name="twitter:image" content="https://gpacalculator.net/wp-content/uploads/high-school-gpa-calculator-e1446610933512.png">
<script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://gpacalculator.net/#organization","name":"GPA Calculator","url":"https://gpacalculator.net/","sameAs":[]},{"@type":"WebSite","@id":"https://gpacalculator.net/#website","url":"https://gpacalculator.net/","name":"GPA Calculator","publisher":{"@id":"https://gpacalculator.net/#organization"},"potentialAction":{"@type":"SearchAction","target":"https://gpacalculator.net/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://gpacalculator.net/high-school-gpa-calculator/#webpage","url":"https://gpacalculator.net/high-school-gpa-calculator/","inLanguage":"en-US","name":"High School GPA Calculator","isPartOf":{"@id":"https://gpacalculator.net/#website"},"image":{"@type":"ImageObject","@id":"https://gpacalculator.net/high-school-gpa-calculator/#primaryimage","url":"https://gpacalculator.net/wp-content/uploads/high-school-gpa-calculator-e1446610933512.png","width":400,"height":238,"caption":"High School GPA Calculator Featured Image"},"primaryImageOfPage":{"@id":"https://gpacalculator.net/high-school-gpa-calculator/#primaryimage"},"datePublished":"2012-06-14T05:21:22+00:00","dateModified":"2019-03-02T17:21:13+00:00","description":"Calculate your high school GPA with our easy to use free online high school GPA calculator, and stay on top of your high school study grades."}]}</script>
<!-- / Yoast SEO Premium plugin. -->

<link rel='dns-prefetch' href='//code.jquery.com'>
<link rel='dns-prefetch' href='//fonts.googleapis.com'>
<link rel='dns-prefetch' href='//s.w.org'>
<link rel="alternate" type="application/rss+xml" title="GPA Calculator &raquo; Feed" href="https://gpacalculator.net/feed/">
<link rel="alternate" type="application/rss+xml" title="GPA Calculator &raquo; Comments Feed" href="https://gpacalculator.net/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="GPA Calculator &raquo; High School GPA Calculator Comments Feed" href="feed\index.rss">
    <script type="text/javascript">
      window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/gpacalculator.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.4"}};
      !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
  <link rel='stylesheet' id='centric-theme-css' href='https://gpacalculator.net/wp-content/themes/centric-pro/style.css?ver=1.21' type='text/css' media='all'>
<link rel='stylesheet' id='wp-block-library-css' href='https://gpacalculator.net/wp-includes/css/dist/block-library/style.min.css?ver=5.2.4' type='text/css' media='all'>
<link rel='stylesheet' id='cdb_main-css' href='https://gpacalculator.net/wp-content/plugins/CollegeDB/css/main.css?ver=5.2.4' type='text/css' media='all'>
<link rel='stylesheet' id='jquery-ui-css' href='https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css?ver=5.2.4' type='text/css' media='all'>
<link rel='stylesheet' id='gpa-calculator-css' href='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/css/gpa-calculator-public.css?v=1572113382&ver=1.0.0' type='text/css' media='all'>
<link rel='stylesheet' id='final-grade-calculator-css' href='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/css/final-grade-public.css?rev=2&ver=1.0.0' type='text/css' media='all'>
<link rel='stylesheet' id='ez-grader-css' href='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/css/ez-grader-public.css?v=1572113382&ver=1.0.0' type='text/css' media='all'>
<link rel='stylesheet' id='gpa-college-css' href='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/css/gpa-college-public.css?v=1572113382&ver=1.0.0' type='text/css' media='all'>
<link rel='stylesheet' id='mappress-leaflet-css' href='https://gpacalculator.net/wp-content/plugins/mappress-google-maps-for-wordpress/css/leaflet/leaflet.css?ver=1.4.0' type='text/css' media='all'>
<link rel='stylesheet' id='mappress-css' href='https://gpacalculator.net/wp-content/plugins/mappress-google-maps-for-wordpress/css/mappress.css?ver=2.53.3' type='text/css' media='all'>
<link rel='stylesheet' id='google-fonts-css' href='//fonts.googleapis.com/css?family=Lato%3A300%2C700%7CSpinnaker%7CLato%7CMontserrat&ver=5.2.4' type='text/css' media='all'>
<link rel='stylesheet' id='dashicons-css' href='https://gpacalculator.net/wp-includes/css/dashicons.min.css?ver=5.2.4' type='text/css' media='all'>
<link rel='stylesheet' id='tablepress-default-css' href='https://gpacalculator.net/wp-content/plugins/tablepress/css/default.min.css?ver=1.9.2' type='text/css' media='all'>
<link rel='stylesheet' id='gppro-style-css' href='//gpacalculator.net/wp-content/uploads/gppro/gppro-custom-1.css?ver=1530524692' type='text/css' media='all'>
<script type='text/javascript' src='https://gpacalculator.net/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://code.jquery.com/ui/1.11.2/jquery-ui.js?ver=5.2.4'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/CollegeDB/js/application.js?ver=5.2.4'></script>
<link rel='https://api.w.org/' href='https://gpacalculator.net/wp-json/'>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://gpacalculator.net/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://gpacalculator.net/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.2.4">
<link rel='shortlink' href='https://gpacalculator.net/?p=77'>
<link rel="alternate" type="application/json+oembed" href="https://gpacalculator.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgpacalculator.net%2Fhigh-school-gpa-calculator%2F">
<link rel="alternate" type="text/xml+oembed" href="https://gpacalculator.net/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgpacalculator.net%2Fhigh-school-gpa-calculator%2F&format=xml">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<!-- This site is using AdRotate v4.14 Professional to display their advertisements - https://ajdg.solutions/products/adrotate-for-wordpress/ -->
<!-- AdRotate CSS -->
<style type="text/css" media="screen">
  .g { margin:0px; padding:0px; overflow:hidden; line-height:1; zoom:1; }
  .g img { height:auto; }
  .g-col { position:relative; float:left; }
  .g-col:first-child { margin-left: 0; }
  .g-col:last-child { margin-right: 0; }
  @media only screen and (max-width: 480px) {
    .g-col, .g-dyn, .g-single { width:100%; margin-left:0; margin-right:0; }
  }
</style>
<!-- /AdRotate CSS -->

<link rel="icon" href="https://gpacalculator.net/wp-content/themes/centric-pro/images/favicon.ico">
<link rel="pingback" href="https://gpacalculator.net/xmlrpc.php">
<script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4010317732222545",
          enable_page_level_ads: true
     });
</script><script src="/wp-content/plugins/gpabs/hscalc.js" type="text/javascript"></script>



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
  font-family: 'Oswald', sans-serif;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  top:100%;
  right:100%;
  transform: translate(0%,-25%);
  border: 1px solid #A9A9A9;
  
  font-weight: 500;
}


#regForm h1{
  font-weight:500;
  font-size:40px;
  color:#050e5c;

  
}

#regForm p{
  font-weight:500;
  font-size:25px;

}

#regForm b{
  font-weight:500;
  font-size:30px;
  
}
#regform input{
  padding: 14px 10px;
  width: 100%;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
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
  font-family: 'Oswald', sans-serif;
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
  background-color: #050e5c;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
  cursor: pointer;
  border: 3px solid #fff;
  border-radius: 30px;
}
.buttNew{
  font-family: 'Oswald', sans-serif;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: 'Oswald', sans-serif;
  cursor: pointer;
  border: 3px solid #fff;
  border-radius: 30px;
	
}

.buttNew:hover{
  opacity: 0.8;
  color:#050e5c;
  background-color: #fff;
  border: 3px solid #050e5c;
}

button:hover {
  opacity: 0.8;
  color:#050e5c;
  background-color: #fff;
  border: 3px solid #050e5c;
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
  background-color: #050e5c;
}

#myDIV {
  width: 30%;
  padding: 30px 0;
  text-align: center;
  background-color: #ffffff;
  margin-top: 20px;
  border: 10px solid #050e5c;
  border-radius: 45px;
  font-weight: 500;
 
}

div.display_inline
{
display: inline;
}


#q2 {
     display : none;
}


#q3 {
     display : none;
}


#q4 {
     display : none;
}


#q5 {
     display : none;
}


#q6 {
     display : none;
}


#q7 {
     display : none;
}

#frontpageanimateblock {
    width: 2600px;
    height: 3000px;
    overflow: hidden;
}
#frontpageblock {
    width:1300px;
    overflow:hidden;
}
#welcomepage {
    height: 30000px;
    width: 1300px;
    padding-top:40px;
    float:left;
}
#logindiv {
    height: 3000px;
    width: 1300px;
    padding-top:40px;
    float:left;
}

p span{
    width:120px;
    background: black;
    color: white;
    padding: 5px 0;
    text-align: center;
    border-radius:8px;
    display:block;
    opacity: 0;
    transition: 0.6s opacity;
}

p span:before{
  content: '';
  width:10px;
  height:10px;
  position:absolute;
  top:-6px;
  background: black;
  z-index: -1;
  left: 50%;
  transform: translateX(-10%) rotate(45deg);
}

p:hover > span{
  opacity:1;
}
	

  </style>


</head>

<body>
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
background: #F2F0F5;
color: #050e5c;
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
<h1 style="text-align:center;">Welcome to the CPG Career Quiz</h1><br>
<h2 style="text-align:center;">Follow 3 easy steps:</h2><br>
<h3 style="text-align:center;">1. Complete the questionnaire.</h3>
<h3 style="text-align:center;">2. Click 'Next' button to proceed to the APS Calculator</h3>
<h3 style="text-align:center;">3. Enter your marks and generate your report</h3>
<p>
<br> 
<br/>
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>
	
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

<div class="services">
  <div class="container">
     
        
   
      
     
  <div class="row contact-wrap">      
<div class="sub">

<div id="frontpageblock">
  <div id="frontpageanimateblock">
    <div id="welcomepage">
            <a href="#" id="loginlink" ><button name="anpesx"  class="buttNew">Next</button></a>
            <div class="signuplink" >
                
<section class="grade-calculator">
    


        

<!--<form class="col-sm-12 row grade-entry">-->

<form id="regForm" action="/action_page.php">       
           <h1>Personality Quiz</h1><br>
  <!-- One "tab" for each step in the form: -->
   <div class="tab"><b>Question 1</b><br><p>During class, would you consider yourself to be an individual who is:</p>
  <p><input type="radio" id="composed"  name="Q1" value="composed" onclick="APS()" >Composed<span>quiet</span></p>
  <p><input type="radio" id="outspoken" name="Q1" value="outspoken" onclick="APS()" >Outspoken <span>loud and proud </span></p>
           </div>
  <div class="tab"><b>Question 2</b><br><p>Which would describe you best?:</p>
  <p><input type="radio" id="outgoing" name="Q2" value="outgoing" onclick="APS()" >Extroverted<span>outgoing</span</p>
  <p><input type="radio" id="private" name="Q2" value="private" onclick="APS()" >Private<span>stay at home</span></p>
             </div>
  <div class="tab"><b>Question 3</b><br><p>For a school project, would you work better:</p>
  <p><input type="radio" id="alone" name="Q3" value="alone" onclick="APS()" >Alone<span>work alone</span></p>
  <p><input type="radio" id="team" name="Q3" value="team" onclick="APS()" >In a team<span>work as 1 unit</span></p>
 </div>
 <div class="tab"><b>Question 4</b><br><p>At a social event, which would you prefer:</p>
 <p><input type="radio" id="known" name="Q4" value="known" onclick="APS()" >Assocociate with a few familiar people<span>talk to known people</span></p>
 <p><input type="radio" id="unknown" name="Q4" value="unknown" onclick="APS()" >Assocociate with many unknown people<span>talk to strangers</span></p>
          </div>
  <div class="tab"><b>Question 5</b><br><p>In a project group meeting, would you:</p>
  <p><input type="radio" id="speak" name="Q5" value="speak" onclick="APS()" >Speak up <span>do you prefer talking</span></p>
  <p><input type="radio" id="listen" name="Q5" value="listen" onclick="APS()" >Just listen <span>do you prefer listening</span></p>
          </div>
  <div class="tab"><b>Question 6</b><br><p>As an individual, would you focus on:</p>
  <p><input type="radio" id="is" name="Q6" value="is" onclick="APS()" >What is? <span>see and touch</span></p>
  <p><input type="radio" id="could-be" name="Q6" value="could-be" onclick="APS()" >What could be? <span>imagine</span></p>
             </div>
   <div class="tab"><b>Question 7</b><br><p>Which would be more appealing to you for a school assignment:</p>
   <p><input type="radio" id="real" name="Q7" value="realities" onclick="APS()">Focusing on realities <span>here and now</span></p>
   <p><input type="radio" id="possibilities" name="Q7" value="possibilities" onclick="APS()">Dreaming about possibilities <span>future</span></p>
         </div>
   <div class="tab"><b>Question 8</b><br><p>When assisting a sports coach in preparation for a game, would you:</p>
   <p><input type="radio" id="facts" name="Q8" value="facts" onclick="APS()">Focus on facts <span>what you know is right</span></p>
   <p><input type="radio" id="instinct"  name="Q8" value="instinct" onclick="APS()">Trust your instinct <span>what you think is right</span></p>
           </div>
   <div class="tab"><b>Question 9</b><br><p>In an English essay with an open topic, would you be:</p>
   <p><input type="radio" id="realistic" name="Q9" value="realistic" onclick="APS()">Realistic <span>real things</span></p>
   <p><input type="radio" id="creative" name="Q9" value="creative" onclick="APS()">Creative <span>abstract</span></p>
             </div>
   <div class="tab"><b>Question 10</b><br><p>When you think of your future, which would be more appealing: </p>
   <p><input type="radio" id="see" name="Q10" value="see" onclick="APS()">What you can see and touch<span>hold it in your hands</span></p>
   <p><input type="radio" id="envision" name="Q10" value="envision" onclick="APS()">What you can envision and invent <span>imagine and expand</span></p>
            </div>

            <!--f/T-->
  <div class="tab"><b>Question 11</b><br><p>During a class, would you describe yourself as a:</p>
  <p><input type="radio" id = "Feeling" name="Q11" value="Feeling" onclick="APS()">Feeling <span>emotional</span></p>
  <p><input type="radio" id = "Thinking" name="Q11" value="Thinking" onclick="APS()">Thinking<span>logical</span></p>
     </div>
  <div class="tab"><b>Question 12</b><br><p>When dealing with personal items, would you consider yourself being:</p>
  <p><input type="radio" id = "sentimental" name="Q12" value="sentimental" onclick="APS()">Sentimental<span>pay attention to small details</span></p>
  <p><input type="radio" id = "analytical" name="Q12" value="analytical"onclick="APS()" >Analytical<span>make decisions based on facts</span></p>
    </div>
 <div class="tab"><b>Question 13</b><br><p>In a heated argument on a sports pitch, would you:</p>
 <p><input type="radio" id = "stand" name="Q13" value="stand" onclick="APS()" >Stand your ground<span>fight back</span></p>
 <p><input type="radio" id = "avoid" name="Q13" value="avoid" onclick="APS()">Avoid the arguement<span>walk away</span></p>
          </div>
  <div class="tab"><b>Question 14</b><br><p>Which would you appreciate a friend more for, their:</p>
  <p><input type="radio" id = "compassion" name="Q14" value="compassion" onclick="APS()">Compassion <span>kind hearted</span></p>
  <p><input type="radio" id = "insight" name="Q14" value="insight" onclick="APS()" >Insight<span>knowledge</span><br></p>
      </div>
 <div class="tab"><b>Question 15</b><br><p>When dealing with a sensitive matter, would you think with your:</p>
 <p><input type="radio" id = "head" name="Q15" value="head" onclick="APS()" >Head</p>
 <p><input type="radio" id = "heart" name="Q15" value="heart" onclick="APS()">Heart</p>
</div>

<!--P/J-->
  <div class="tab"><b>Question 16</b><br><p>How would you make daily decisions during the holiday?</p>
  <p><input type="radio" id = "arise" name="Q16" value="arise" onclick="APS()">When they arise<span>last minute</span></p>
  <p><input type="radio" id = "plan" name="Q16" value="plan" onclick="APS()" >Planned consideration<span>planned before</span></p>
            </div>
  <div class="tab"><b>Question 17</b><br><p>How would you undertake a project group meeting?</p>
  <p><input type="radio" id = "planned" name="Q17" value="planned" onclick="APS()">Planned<span>think of future</span></p>
  <p><input type="radio" id = "prompted" name="Q17" value="prompted"  onclick="APS()">Prompted<span>worry about it when it happens</span></p>
            </div>
  <div class="tab"><b>Question 18</b><br><p>How would a change of school make you feel?</p>
  <p><input type="radio" id = "comfortable" name="Q18" value="comfortable"  onclick="APS()">Comfortable<span>chilled</span></p>
  <p><input type="radio" id = "uncomfortable" name="Q18" value="uncomfortable"  onclick="APS()">Uncomfortable<span>anxious</span></p>
                 </div>
  <div class="tab"><b>Question 19</b><br><p>When doing your homework, which manner would you prefer working in? </p>
  <p><input type="radio" id = "spontaneous" name="Q19" value="spontaneous"   onclick="APS()">Spontaneous <span>no planning</span></p>
  <p><input type="radio" id = "scheduled" name="Q19" value="scheduled" onclick="APS()" >Scheduled<span>planning</span></p>
                 </div>
  <div class="tab"><b>Question 20</b><br><p>To you, which would feel more satisfying?</p>
  <p><input type="radio" id = "organizing" name="Q20" value="organizing"  onclick="APS()">Organizing</p>
  <p><input type="radio" id = "flow" name="Q20" value="flow"  onclick="APS()">Going with the flow</p>
                  </div>
            
            
  <div class="tab"><br>
	  <div class = "invisible">
      <p>Thank you for completing our questionnaire! Press next to complete the APS calculator</p>
      
            <p id = "result"></p>
            <p id = "resultb"></p>
            <p id = "resultc"></p>
            <p id = "resultd"></p>
    </div>
    <div class="invisible">
            <p id = "result2" ></p>
            <p id = "result3" ></p>
            <p id = "result4" ></p>
            <p id = "result5" ></p>
            <p id = "displayyyy" ></p>
    </div>
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
	
            
    

</section>
				
            </div>
        </div>
        <div id="logindiv">
          <a href="#"  id="loginlinkback"><button name="apsprev"  class="buttNew">Back</button></a>
            <div class="signuplink">
                
                 <section class="grade-calculator">
    <div id="grade-calculator" class="col-sm-12 row">
            <div class="row wrapper">
            <div class="col-lg-9 col-md-12 topbar">
                <div class="card current-gpa gc-clearfix">
                <a v-bind:class="{ active: includeCurrentGPA }" @click="includeCurrentGPA=!includeCurrentGPA">
                APS Calculator
                <img v-if="!includeCurrentGPA" src="https://gpacalculator.net/wp-content/plugins/grade-calculators/public/partials/../img/semester-expand.svg">
                <img v-if="includeCurrentGPA" src="https://gpacalculator.net/wp-content/plugins/grade-calculators/public/partials/../img/contract.svg">
                </a>
               
                </div>
            </div>

        </div>


        <div class="row wrapper">
        <div id="gc-main" class="gc-main col-lg-9 col-md-12 calculator">

            <span class="gc-error" v-cloak="" v-if="validation.valid==false">
                <img src="https://gpacalculator.net/wp-content/plugins/grade-calculators/public/partials/../img/icon-error.png">
                {{validation.message}}
            </span>

           
            <div class="card gc-clearfix" v-for="(semester, semesterIndex) in semesters">
            <div class="col-sm-12 row">
            
                <a class="remove-semester" @click="removeSemester($event, semesterIndex)">
                    <img class="visible-xs" src="https://gpacalculator.net/wp-content/plugins/grade-calculators/public/partials/../img/trash.svg">
                </a>
            </div>

                <form class="col-sm-12 row grade-entry">

          
            <ul class="classes col-sm-12 row">  
              <div class="input-wrapper class-name">
                 
              <p style=" font-size: 20px;">Select a major:</p>

              <span class="select-wrapper">
                <select id = "comp1" onselect="select()" >
                  <option value =  "primary-language">Select subject</option>   
                  <option value="Math">Math</option>
                  <option value="Math Literacy">Math Literacy</option>
                  <option value="AP Math">AP Math</option>
                </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text1" name="TextBox2" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult" ></p></label>

            </div>
            <div class="input-wrapper class-name">
            <label class="desktop heading class-name"><a  href="#" onclick="openDiv1()">Next</a></label>&nbsp;&nbsp;
              
            </div>
          </ul>
        
        <div id="q2">
          <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a language:</p>

              <span class="select-wrapper">
                <select id = "comp2" onselect="select()" >
                        <option value =  "primary-language">Select subject</option>   
                        <option value="English">English</option>
                        <option value="Afrikaans">Afrikaans</option>
                        <option value="IsiZulu">IsiZulu</option>
                </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text2" name="TextBox2" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult2" ></p></label>

            </div>
            <div class="input-wrapper class-name">
               <label class="desktop heading class-name"><a  href="#" onclick="openDiv2()">Next</a></label>&nbsp;&nbsp;

            </div>
          </ul>
        </div>
        <div id="q3">
          <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a FAL:</p>

              <span class="select-wrapper">
                <select id= "comp3" onselect="select()" >
                      <option value =  "secondary-language">Select subject</option>   
                      <option value="English">English</option>
                      <option value="Afrikaans">Afrikaans</option>
                      <option value="IsiZulu">IsiZulu</option>
                </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text3" name="TextBox3" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult3" ></p></label>

            </div>
            <div class="input-wrapper class-name">
               <label class="desktop heading class-name"><a  href="#" onclick="openDiv3()">Next</a></label>&nbsp;&nbsp;

            </div>
          </ul>  
        </div>
        <div id="q4">
          <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a subject:</p>

              <span class="select-wrapper">
                 <select id = "comp4" onselect="select()" >
                      <option value =  "secondary-language">Select subject</option>   
                      <option value="Life Orientation">Life Orientation</option>
                    </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text4" name="TextBox4" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult4" ></p></label>

            </div>
            <div class="input-wrapper class-name">
               <label class="desktop heading class-name"><a  href="#" onclick="openDiv4()">Next</a></label>&nbsp;&nbsp;

            </div>
          </ul>  
        </div>
        <div id="q5">
          <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a subject:</p>

              <span class="select-wrapper">
                <select id = "comp5" onselect="select()" >
                      <option value =  "secondary-language">Select subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text5" name="TextBox5" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult5" ></p></label>

            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;"><a  href="#" onclick="openDiv5()">Next</a></p>&nbsp;&nbsp;

            </div>
          </ul>  
        </div>
        <div id="q6">
          <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a subject:</p>

              <span class="select-wrapper">
                 <select id = "comp6" onselect="select()" >
                      <option value =  "secondary-language">Select subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                  </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text6" name="TextBox6" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <label class="desktop heading class-name"><p id ="txtresult6" ></p></label>

            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;"><a  href="#" onclick="openDiv6()">Next</a></p>&nbsp;&nbsp;

            </div>
          </ul>  
        </div>
        <div id="q7">
            <ul class="classes col-sm-12 row">
            <div class="input-wrapper class-name">
                 
            <p style=" font-size: 20px;">Select a subject:</p>

              <span class="select-wrapper">
                <select id = "comp7" onselect="select()" >
                      <option value =  "secondary-language">Select subject</option>   
                      <option value="Physical Sciences">Physical Sciences</option>
                      <option value="Life Sciences">Life Sciences</option>
                      <option value="Accounting">Accounting</option>
                      <option value="Geography">Geography</option>
                      <option value="History">History</option>
                </select>

              </span>

            </div>
                <!--<input name="idValue" id="idValue" type="hidden">-->
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">Enter Mark:</p>
                <input type="text" id="Text7" name="TextBox7" oninput="APS()" maxlength="
                2" required>
                &nbsp;&nbsp;<br>
            </div>
            <div class="input-wrapper class-name">
            <p style=" font-size: 20px;">APS:</p>&nbsp;&nbsp;
                <p id ="txtresult7" ></p>

            </div>
          </ul>  
        </div>

            

        
                    
                    <div class="col-sm-12 add-class">
                    </div>

        <div class="invisible">
          <p >Current Score:</p>                   
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
                    
          
                </form>                    

            </div>

        
        
        </div>
    </div>
    </div>

</section>
            </div>
        </div>
  </div>
   
</div>
 

            
            
          
        
  </div>
  </div>

</div>
</div>



 
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate.min.js"></script>


<script type='text/javascript'>
/* <![CDATA[ */
var click_object = {"ajax_url":"https:\/\/gpacalculator.net\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/adrotate-prone/library/jquery.adrotate.clicktracker.js'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/prefix-free.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/vue.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/hammer.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/velocity.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/visible.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/toasts.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/gpa-calculator-public.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/final-grade-calculator-public.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/ez-grader-public.js?v=1572113382&ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/plugins/grade-calculators/public/js/gpa-college-calculator-public.js?v=1572113382&ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-includes/js/comment-reply.min.js?ver=5.2.4'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/themes/centric-pro/js/global.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-content/themes/centric-pro/js/calcs.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://gpacalculator.net/wp-includes/js/wp-embed.min.js?ver=5.2.4'></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
  



<script>
$(document).ready(function () {

    $('#loginlink').click(function () {

        $('div#frontpageanimateblock').animate({
            'marginLeft': '-=1300px'
        });

    });

    $('#loginlinkback').click(function () {

        $('div#frontpageanimateblock').animate({
            'marginLeft': '+=1300px'
        });

    });

}); 

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
				else if (first_num >= 40 && first_num < 50) {
                var result1 = 3;
                
                document.getElementById("txtresult").innerHTML = result1.toString();
                aps1=Number(document.getElementById("answer").value=result1);
               
                }
				else if (first_num >= 30 && first_num < 40) {
                var result1 = 2;
                
                document.getElementById("txtresult").innerHTML = result1.toString();
                aps1=Number(document.getElementById("answer").value=result1);
               
                }
				else if (first_num >= 0 && first_num < 29) {
                var result1 = 1;
                
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
				else if (second_number >= 40 && second_number < 50) {
                	var result2 = 3;
                
                	document.getElementById("txtresult2").innerHTML = result2.toString();
               	 	aps2=Number(document.getElementById("answer").value=result2);
               
                }
				else if (second_number >= 30 && second_number < 40) {
                	var result2 = 2;
                
                	document.getElementById("txtresult2").innerHTML = result2.toString();
                	aps2=Number(document.getElementById("answer").value=result2);
               
                }
				else if (second_number >= 0 && second_number < 29) {
                	var result2 = 1;
                
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
				else if (third_number >= 40 && third_number < 50) {
                	var result3 = 3;
                
                	document.getElementById("txtresult3").innerHTML = result3.toString();
               	 	aps3=Number(document.getElementById("answer").value=result3);
               
                }
				else if (third_number >= 30 && third_number < 40) {
                	var result3 = 2;
                
                	document.getElementById("txtresult3").innerHTML = result3.toString();
                	aps3=Number(document.getElementById("answer").value=result3);
               
                }
				else if (third_number >= 0 && third_number < 29) {
                	var result3 = 1;
                
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
				else if (fourth_number >= 40 && fourth_number < 50) {
                	var result4 = 3;
                
                	document.getElementById("txtresult4").innerHTML = result4.toString();
               	 	aps4=Number(document.getElementById("answer").value=result4);
               
                }
				else if (fourth_number >= 30 && fourth_number < 40) {
                	var result4 = 2;
                
                	document.getElementById("txtresult4").innerHTML = result4.toString();
                	aps4=Number(document.getElementById("answer").value=result4);
               
                }
				else if (fourth_number >= 0 && fourth_number < 29) {
                	var result4 = 1;
                
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
				else if (fifth_number >= 40 && fifth_number < 50) {
                	var result5 = 3;
                
                	document.getElementById("txtresult5").innerHTML = result5.toString();
               	 	aps5=Number(document.getElementById("answer").value=result5);
               
                }
				else if (fifth_number >= 30 && fifth_number < 40) {
                	var result5 = 2;
                
                	document.getElementById("txtresult5").innerHTML = result5.toString();
                	aps5=Number(document.getElementById("answer").value=result5);
               
                }
				else if (fifth_number >= 0 && fifth_number < 29) {
                	var result5 = 1;
                
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
				else if (sixth_number >= 40 && sixth_number < 50) {
                	var result6 = 3;
                
                	document.getElementById("txtresult6").innerHTML = result6.toString();
               	 	aps6=Number(document.getElementById("answer").value=result6);
               
                }
				else if (sixth_number >= 30 && sixth_number < 40) {
                	var result6 = 2;
                
                	document.getElementById("txtresult6").innerHTML = result6.toString();
                	aps6=Number(document.getElementById("answer").value=result6);
               
                }
				else if (sixth_number >= 0 && sixth_number < 29) {
                	var result6 = 1;
                
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
				else if (seven_number >= 40 && seven_number < 50) {
                	var result7 = 3;
                
                	document.getElementById("txtresult7").innerHTML = result7.toString();
               	 	aps7=Number(document.getElementById("answer").value=result7);
               
                }
				else if (seven_number >= 30 && seven_number < 40) {
                	var result7 = 2;
                
                	document.getElementById("txtresult7").innerHTML = result7.toString();
                	aps7=Number(document.getElementById("answer").value=result7);
               
                }
				else if (seven_number >= 0 && seven_number < 29) {
                	var result7 = 1;
                
                	document.getElementById("txtresult7").innerHTML = result7.toString();
                	aps7=Number(document.getElementById("answer").value=result7);
               
                }   



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
        var two = (document.getElementById("result3").value = "N");
    }

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
    
    select(aps1,aps2,aps3,aps4,aps5,aps6,aps7,one,two,three,four);//,one,two,three,four);
                


}

  

                //,aps2,aps3,aps4,aps5,aps6,aps7);

              


              

function select(val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11) { //,val8,val9,val10,val11) 

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
  var v8 = val8;
  var v9 = val9;
  var v10 = val10;
  var v11 = val11;  
  
document.getElementById("displayyyy").innerHTML= v8+"-"+v9+"-"+v10+"-"+v11;
var code = (document.getElementById("displayyyy").value= v8+"-"+v9+"-"+v10+"-"+v11);



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

    if (code == 'I-S-F-P'){
          
      //alert("I-S-F-P");

      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "isfp.php" + queryString;

        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "isfp.php" + queryString;

        }
      }
      

    }
    else if(code == 'E-S-F-P'){

      alert("E-S-F-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "esfp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "esfp.php" + queryString;
        }
      }


    }
     else if(code == 'I-N-F-P'){

      alert("I-N-F-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'E-N-F-P'){

      alert("E-N-F-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'I-S-T-P'){

      alert("I-S-T-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'E-S-T-P'){

      alert("E-S-T-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'I-N-T-P'){

      alert("I-N-T-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            //alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'E-N-T-P'){

      alert("E-N-T-P");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'I-S-F-J'){

      alert("I-S-F-J");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }
     else if(code == 'E-S-F-J'){

      alert("E-S-F-J");
      if (total >= 28 && total <= 48) {

        if (sel1 == 'Math' && sel2 == 'English'){
            //report of courses that need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
        else if(sel1 == 'Math Literacy' && sel2 == 'English'){
            //report of courses that dont need pure maths
            var queryString = "?"+value1+" "+sel1+" & "+sel2;
            alert("Congrats! You finished. Generate report now.");
            window.location.href = "infp.php" + queryString;
        }
      }

    }


   //if (sel1 == 'Math' && sel2 == 'English' && sel5 == 'Physical Sciences'){
   
       //var subject1 = "<b>• Bachelor of Science in Engineering (BEng) in Civil Engineering</b>";
       //var subject2 = "<b>• Bachelor of Science in Engineering (BEng) in Chemical Engineering</b>";

       //var queryString = "?These subjects are: <br><br>" + sel1 + "<br><br>" + sel2 + "<br><br>" + sel3 + "<br><br>Life Orientation<br><br>" + sel5 + "<br><br>" + sel6 + "<br><br>" + sel7; //+ " = " + value8 + "<br>&<b>What Can You Study?</b><br><br>Based upon the subjects you've studied in high school:<br><br>" + sel1 + "<br>" + sel2 + "<br>" + sel5 +"<br><br>You meet the minimum requirements for:<br><b>University of Johannesburg</b><br><br>" + subject1 + "<br><br><b>University of Pretoria</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Witwaterstrand</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University Cape Town</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Kwa-Zulu Natal</b><br><br>"  + subject1 + "<br><br>" + subject2;

       //var queryString2 = "******Your APS points are: <br><br>" + value2 + "<br><br>" + value3 + "<br><br>" + value4 + "<br><br>" + value5 +  "<br><br>" + value6 + "<br><br>" + value7 + "<br><br>" + value8;

        //var queryString3 = value1;

         //var queryString4 = subject1 + "<br><br>" + subject2;

       //var queryString2 = "******APS Total = " + value1 + "<br><br>" + sel1 + " = " + value2 + "<br><br>" + sel2 + " = " + value3 + "<br><br>" + sel3 + " = " + value4 + "<br>&Life Orientation  = " + value5 + "<br><br>" + sel5 + " = " + value6 + "<br><br>" + sel6 + " = " + value7 + "<br><br>" + sel7 + " = " + value8 + "<br>&<b>What Can You Study?</b><br><br>Based upon the subjects you've studied in high school:<br><br>" + sel1 + "<br>" + sel2 + "<br>" + sel5 +"<br><br>You meet the minimum requirements for:<br><b>University of Johannesburg</b><br><br>" + subject1 + "<br><br><b>University of Pretoria</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Witwaterstrand</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br><b>University Cape Town</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br><b>University of Kwa-Zulu Natal</b><br><br>"  + subject1 + "<br><br>" + subject2;

      //alert("Congrats! You finished. Generate report now.");
      //window.location.href = "newrepo.php" + queryString2;
      //window.location.href = "newrepo.php" + queryString + queryString2 + queryString3 + queryString4;

    //}
    //else if(sel2 == 'English' || sel3 == 'Afrikaans'){

       /*var subject1 = "BEd Degree in Foundation Phase Teaching";
        var subject2 = "BEd Degree in Intermediate Phase Teaching";
         var subject3 = "BEd Degree in Senior Phase and Further Education and Training";

       var queryString = "?APS Total = " + value1 + "<br><br>" + sel1 + " = " + value2 + "<br><br>" + sel2 + " = " + value3 + "<br><br>" + sel3 + " = " + value4 + "<br>&Life Orientation  = " + value5 + "<br><br>" + sel5 + " = " + value6 + "<br><br>" + sel6 + " = " + value7 + "<br><br>" + sel7 + " = " + value8 + "<br>&<b>What Can You Study?</b><br><br>Based upon the subjects you've studied in high school:<br><br>" + sel2 + "<br> OR<br>" + sel3 + "<br><br>You meet the minimum requirements for:<br><b>University of Johannesburg</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Pretoria</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Witwaterstrand</b><br><br>" + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University Cape Town</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3 + "<br><br><b>University of Kwa-Zulu Natal</b><br><br>"  + subject1 + "<br><br>" + subject2 + "<br><br>" + subject3;

      alert("Generate your report now?");  
      window.location.href = "newrepo.php" + queryString;

    }*/
}

//var queryString = "?APS Total = " + sel1 + "<br>&Subject 1 APS = " + sel2; 
//var sel = document.getElementById("display");
//if (total >= 26) {
    //document.getElementById("display").value = "yes";
  //}
//var selected = document.getElementById("comp");
// var strUser = selected.options[select.selectedIndex].value
  

function openDiv1() {
  var x = document.getElementById("q2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function openDiv2() {
  var x = document.getElementById("q3");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function openDiv3() {
  var x = document.getElementById("q4");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function openDiv4() {
  var x = document.getElementById("q5");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function openDiv5() {
  var x = document.getElementById("q6");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function openDiv6() {
  var x = document.getElementById("q7");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
 
 
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
    document.getElementById("nextBtn").innerHTML = "Click next for APS Calculator";
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
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

</html>