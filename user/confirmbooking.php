<!-- ******************* This is a second part of ticket booking page used to store data in database for user ************ -->

<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
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
		$username = $_REQUEST['username'];
                $buscode = $_REQUEST['buscode'];
                $source = $_REQUEST['source'];
		$dest = $_REQUEST['dest'];
		$total_tickets = $_REQUEST['total_tickets'];
		$journey_date = $_REQUEST['journey_date'];
		$journey_time = $_REQUEST['journey_time'];
                
                
                #$dt = date('Y-m-d h:i:s');
		
                $id = 0000;
		// Performing insert query execution
                // 
                $query = "SELECT username FROM users WHERE username='$username'";
                
                if(mysqli_query($conn, $query))
                    {
                       
                        $sql = "INSERT INTO ticket VALUES ('$id','$username', '$buscode','$source','$dest','$total_tickets','$journey_date','$journey_time')";          
		
                        if(mysqli_query($conn, $sql))
                        {
                            /*
                            echo "<h3>data stored in a database successfully."
                            . " Please browse your localhost php my admin"
                            . " to view the updated data</h3>";

                            echo nl2br("\n$fullname\n "
                            . "\n $email");
                            */
                            echo "<script>window.location='success.php';</script>";
                        }
                        else
                        {
                            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
                        }
                  
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
