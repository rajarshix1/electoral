<?php
require 'connection.php';
	$email = ($_POST['email']);
	$dob = ($_POST['dob']);
	$sql = mysqli_query($con,"select vstatus,tbl_users.id from tbl_payment inner join tbl_users on tbl_payment.email=tbl_users.email where tbl_users.email='$email'");
	$numRows = mysqli_num_rows($sql);
	
	if($numRows  == 1){
		// echo "pritimoy bal";
		$row = mysqli_fetch_assoc($sql);
			if($row['vstatus']==2){
			$_SESSION['id']=$row['id'];
			header('location: ../dashboard.php');
			echo $_SESSION['id'];
				
            }
			else{
echo '<script type="text/JavaScript"> 
     window.alert("Payment not done or not verified");
     </script>';
	 header('location: ../loginpage.php');

				 }
       }
		else{
			echo '<script type="text/JavaScript"> 
     window.alert("Payment not done or not verified");
     </script>';
	 header('location: ../loginpage.php');
	}
    
	
?>