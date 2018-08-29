<?php 

	$host        = "ec2-50-16-196-57.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = dcm93kbr90info";
	$credentials = "user = oostgnbdygtoto password=8d8fff9ac1a7fdcc85ac1624f2504ac86d79804556c7a62a604cd5c12dfd1d8e";

   $db = pg_connect( "$host $port $dbname $credentials"  );
 //  if(!$db) {
  //    echo "Error : Unable to open database\n";
  // } else {
  //    echo "Opened database successfully\n";
   //}

	// initialize variables
	$name = "";
	$phone = "";
	$email = "";
	$pwd = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		pg_query($db, "INSERT INTO logintta (name, phone, email, pwd) VALUES ('$name', '$phone', '$email' ,'$pwd')"); 
		$_SESSION['message'] = "Successfully saved"; 
		header('location: index.php');
	}
	
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	pg_query($db, "UPDATE logintta SET name='$name', phone='$phone', email='$email', pwd='$pwd' WHERE id=$id");
	$_SESSION['message'] = "Successfully updated!"; 
	header('location: index.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	pg_query($db, "DELETE FROM logintta WHERE id=$id");
	$_SESSION['message'] = "Successfully deleted!"; 
	header('location: index.php');
}
