<html>
<header>
    <title></title>

</header>
<body>
<form name=Form1 action= "login1.php" method=post>
Username <input type="text" name="username">
Password <input type="password" name="password">
<input type="submit" value="Send" name="button1"  onclick="return OnButton1();"> 


<script>

function OnButton1()
{
    document.Form1.action = "login2.php"    // First target
    document.Form1.target = "iframe1";    // Open in a iframe
    document.Form1.submit();        // Submit the page
    document.Form1.action = "page3.php"    // Second target
    document.Form1.target = "iframe2";    // Open in a iframe
    document.Form1.submit();        // Submit the page
    window.location.href = "newrepo.php";
    return true;
}

</script>
</body>
</html>
