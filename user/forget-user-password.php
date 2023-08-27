<!-- ******************* This is a second part of registration page used to store data in database ************ -->

<!DOCTYPE html>
<html>

<head>
	<title>Forget Password</title>
</head>

<body>
	<center>
		<?php
                
                    include_once('DBConnect.php');
                    if($con === false)
                    {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
                    }
                    
                    #Taking data from forget-password.php form
                    $username = $_REQUEST['username'];
                    $newpassword = $_REQUEST['newpassword'];
                    $confirmpassword = $_REQUEST['confirmpassword'];
                    
                    if ($newpassword == $confirmpassword)
                    {
                        #Searching for username
                        $sql = "SELECT * FROM users WHERE username='$username'";
                        
                        #Checking whether user is found or not
                        if(!$result)
                        {
                            echo "The username you entered does not exist";
                        }
                        
                        #Updating Password with new password
                        $sql = "UPDATE users SET password='$newpassword' where username='$username'";
                        
                        
                        if(mysqli_query($con, $sql))
                        {
                            
                            echo "<script>window.location='success.php';</script>";
                            
                        }
                        else
                        {
                            echo "ERROR: Sorry! Password not Changed.\n </br> ";
                        }
                        
                        
                        
                    }
                    else
                    {
                        echo "ERROR: Sorry! Password & Confirm Password does not Match.\n </br> ";
                        echo "Retry Again...!";
                    }
                    
                    #Closing Connection
                    mysqli_close($con);
                                      
                ?>
	</center>
</body>

</html>
