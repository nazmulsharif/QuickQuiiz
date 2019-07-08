
<?php

	$conn = mysqli_connect("localhost", "root", "", "online_exam");
	
	if(!$conn)
	{
		die("Connection Loss to Database".mysql_error());
	}
?>