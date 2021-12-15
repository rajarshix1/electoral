<?php
require 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
require_once "../class/PHPMailer.php";
require_once "../class/SMTP.php";
require_once "../class/Exception.php";

		$id = uniqid();
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pincode = $_POST['pincode'];
		$dob = $_POST['dob'];
		
		$sql = "insert into tbl_users (id, name, email, pincode, dob) value('".$id."', '".$name."',  '".$email."', '".$pincode."','".$dob."')";
		$result = mysqli_query($con, $sql);
?>
		<!DOCTYPE html>
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
		
		<head>
			<meta charset='utf-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<title>Register</title>
			<link href='../css/style.css' rel='stylesheet'>
			<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
			<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
			<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			</head>
			<style>
        body{
            background-color: #dddddd;
        }
    </style>
		<html>
									
										<body oncontextmenu='return false' class='snippet-body'>
										<div class="loginBox"> 
										<?php if($result)
		{
			mysqli_query($con, $sql);
			echo "<h5>Registration successfull!</h5><br>";
			echo "<h5>Your UID is $id<br>keep this for future use. </h5><br>";
			echo "<h6><a href='http://localhost/electoralproject/payment.php'>Click here to pay</a></h6>";
			//mail
			$mail = new PHPMailer();
            $mail->SMTPoptions = array('ssl'=>array('verify_peer='=>false,'verify_peer_name='=>false,'allow_self_signed='=>true));
            $mail->SMTPDebug=0; 
            $mail->IsSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port='587';
            $mail->Username = '';
            $mail->Password= '';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure='tls';
            $mail->From='';
            $mail->FromName='Rajarshi Mandal';
            $mail->AddAddress(($email));
            $mail->IsHTML(true);
            $mail->Subject='Thank you for Registration';
            $mail->Body="Your UID is $id<br>Click on this link to pay http://localhost/electoralproject/payment.php";
            $mail->send();
			//end mail
			
		}?>

		</div>
			<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
			<script type='text/javascript' src=''></script>
			<script type='text/javascript' src=''></script>
			<script type='text/Javascript'></script>
			</body>
		</html>   