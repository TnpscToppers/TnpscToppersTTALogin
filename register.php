<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup TTA</title>
<link rel="shortcut icon" href="logo.png">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="home2.css" />
</head>
<?php 
include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register TTA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- code for showing message -->
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<!--ends here-->
<!-- to display the details from the db in html -->
<?php $results = pg_query($db, "SELECT * FROM logintta"); ?>
<center><div class="bgindex">
			<p class="headtextindex"> TNPSC TOPPERS ACADEMY
			<p class="p1index" style="text-align:center">- a simplified learning methodology</p>
			</p>
			</div></center>
	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label style="font-family:Calibri;color:white;">User Name *</label>
			
			<input type="text" name="name" value="<?php echo $name; ?>" required></input>
		</div>
		<div class="input-group">
			<label style="font-family:Calibri;color:white;">Phone *</label>
			
	<input type="text" name="phone" pattern="[1-9]{1}[0-9]{9}" value="<?php echo $phone; ?>" required></input>
		</div>
		<div class="input-group">
			<label style="font-family:Calibri;color:white;">Email *</label>
			
	<input type="text" name="email" value="<?php echo $email; ?>" required></input>
		</div>
		<div class="input-group">
			<label style="font-family:Calibri;color:white;">Password *</label>
			
	<input type="password" name="pwd" value="<?php echo $pwd; ?>" required></input>
		</div>
		<center><div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save">Sign up</button>
<?php endif ?>
	<a href='index.php' class="btn" style="font-family:Calibri; font-size:15px;">Login</a></div></center>
		</div>
	</form>
<center><p style="font-family:Calibri; color:white;">If the login is not successful try registering with valid mobile number. Thanks !!</center>

</body>
</html>
