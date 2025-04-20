<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
         

		// servername => localhost
		// username => root
		// password => empty
		// database name => xx
		$conn = mysqli_connect("localhost", "root", "", "xx");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$Email = $_REQUEST['Email'];
		$Passport_number = $_REQUEST['Passport_number'];
		$Personal_contact = $_REQUEST['Personal_contact'];
		$Father_name= $_REQUEST['Father_name'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sss VALUES ('$Name',
			'$Email','$Passport_number','$Personal_contact','$Father_name')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$Name\n $Email\n "
				. "$Passport_number\n $Personal_contact\n $Father_name");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
