<?php 
include('server.php'); 

?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = pg_query($db, "SELECT * FROM logintta WHERE id=$id");

		if (count($record) == 1 ) {
			$n = pg_fetch_array($record);
			$name = $n['name'];
			$phone = $n['phone'];
			$email = $n['email'];
			$pwd = $n['pwd'];
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TTA</title>
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

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>email</th>
			<th>pwd</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = pg_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['pwd']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>




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
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Sign up</button>
<?php endif ?>
		</div>
	</form>

</body>
</html>
