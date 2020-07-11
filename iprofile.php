<?php 
    session_start();

    if (!isset ($_SESSION['access_token'])) {
        header('Location: login/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

<style>
.avatar2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%; 
}
</style>
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
<h1>Profile</h1><br>
<a  href="#"><img src="<?php echo $_SESSION['picture'] ?>" alt="Avatar" class="avatar2"></a>
<h3>Name: <?php echo $_SESSION['givenName'] ?></h3><br>
<h3>Surame: <?php echo $_SESSION['familyName'] ?></h3>
<p>
<br> 
<br/>
<br/>
<a href='index.php' class='close'>Close</a>
</p>
</div>
</div>

</head>
<body>

</body>
</html>