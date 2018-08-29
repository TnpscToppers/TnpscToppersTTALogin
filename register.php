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

	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>User Name *</label>
			
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Phone *</label>
			
	<input type="text" name="phone" value="<?php echo $phone; ?>">
		</div>
		<div class="input-group">
			<label>Email *</label>
			
	<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Pwd *</label>
			
	<input type="password" name="pwd" value="<?php echo $pwd; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save">Sign up</button>
<?php endif ?>
	<a href='index.php' class="btn" style="font-family:Calibri; font-size:15px;">Login</a></div>
		</div>
	</form>


</body>
</html>
