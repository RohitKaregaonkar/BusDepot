<!-- ******************* This is a second part of registration page used to store data in database ************ -->

<!DOCTYPE html>
<html>

<head>
	<title>User Profile</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "busdepot");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fullname = $_REQUEST['fullname'];
		$email = $_REQUEST['email'];
		$age = $_REQUEST['age'];
		$gender = $_REQUEST['gender'];
		$contact = $_REQUEST['contact'];
                $username = $_REQUEST['username'];
                $photo = $_REQUEST['photo'];
                
                $dt = date('Y-m-d h:i:s');
		
                $id = 0000;
		// Performing insert query execution
		// here our table name is college
                
                    $sql = "UPDATE users SET fullname='$fullname', email='$email', age='$age', gender='$gender', contact='$contact', photo='$photo' WHERE username='$username'";          
		
                    if(mysqli_query($conn, $sql))
                    {
                        /*
                        echo "<h3>data stored in a database successfully."
                           	. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$fullname\n "
				. "\n $email");
                     */
                        
                        echo "<script>window.location='dashboard.php';</script>";
                    }
                    else
                    {
                        echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
                    }
               
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
