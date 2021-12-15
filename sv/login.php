<?php
require 'connection.php';
	$id = ($_POST['id']);
	$password = ($_POST['password']);
	$password = md5($password);
	
	$sql = "select * from tbl_admin where adm_id = '$id'";
	$rs = mysqli_query($con,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if($password==$row['password']){
			session_start();
			$_SESSION['$adm_id']=$row['adm_id'];
            header('location:../admin/admindashboard.php');            }	
		
		}
		else{
			echo "Wrong Password";
		}

	
?>