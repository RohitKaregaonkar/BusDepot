<!--  ****************************  This is Back-end Page for Admin Schedule Page  ***********************  -->

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
                $buscode = $_REQUEST['buscode'];
                $source = $_REQUEST['source'];
		$dest = $_REQUEST['dest'];
		$distance = $_REQUEST['distance'];
		$fare = $_REQUEST['fare'];
		
                
                #$dt = date('Y-m-d h:i:s');
		
                $id = 0000;
		// Performing insert query execution
                // 
                
                $sql = "INSERT INTO schedule VALUES ('$id','$buscode','$source','$dest','$distance','$fare')";
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
                        
                // Close connection
		mysqli_close($conn);
            ?>
	</center>
</body>

</html>
