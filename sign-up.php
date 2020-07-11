<?php 
    session_start();

    //if (!isset ($_SESSION['access_token'])) {
        //header('Location: index.php');
        //exit();
    //}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <img src="<?php echo $_SESSION['picture'] ?>">

    <table> 
        <tbody>
            <tr>
                <td>ID</td>
                <td><?php echo $_SESSION['id'] ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $_SESSION['givenName'] ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $_SESSION['familyName'] ?></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><?php echo $_SESSION['verifiedEmail'] ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $_SESSION['gender'] ?></td>
            </tr>
        </tbody>
    </table>


</body>
</html>