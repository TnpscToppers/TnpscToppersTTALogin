<?php 
	$host       = "host = ec2-50-16-196-57.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = dcm93kbr90info";
	$credentials = "user = oostgnbdygtoto password=8d8fff9ac1a7fdcc85ac1624f2504ac86d79804556c7a62a604cd5c12dfd1d8e";

   $db = pg_connect( "$host $port $dbname $credentials"  );
  // if(!$db) {
  // echo "Error : Unable to open database\n";}
	//else {
   //  echo "Opened database successfully\n";
  // }
?>
