<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LOGIN TTA</title>
<link rel="shortcut icon" href="logo.png">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="home2.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['name'])){
        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	//$name = pg_real_escape_string($con,$name);
	$pwd = stripslashes($_REQUEST['pwd']);
	//$pwd = pg_real_escape_string($con,$pwd);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM logintta WHERE name='$name'
and pwd='$pwd'";
	$result = pg_query($query) or die(mysql_error());
	$rows = pg_num_rows($result);
        if($rows==1){
	    $_SESSION['name'] = $name;
            // Redirect user to index.php
	    header("Location: http://www.tnpsctoppers.com/");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
		<center><div class="bgindex">
			<p class="headtextindex"> TNPSC TOPPERS ACADEMY
			<p class="p1index" style="text-align:center">- a simplified learning methodology</p>
			</p>
			</div></center>
<form action="" method="post" name="login">
<div class="input-group">
	<input type="text" name="name" placeholder="Username" required />
</div>
<div class="input-group">
	<input type="password" name="pwd" placeholder="Password" required />
</div>
	<center><input class="btn" name="submit" type="submit" value="Login" /></center>
</form>
<center><p style="font-family:Calibri; color:white;">Not registered yet? <a href='register.php'>Register Here</a></p></center>
</div>
<?php } ?>
</body>
</html>
