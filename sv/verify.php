<?php require 'connection.php';
use PHPMailer\PHPMailer\PHPMailer;
require_once "../class/PHPMailer.php";
require_once "../class/SMTP.php";
require_once "../class/Exception.php";


$id = $_GET['id'];
$email = $_GET['email'];
$vstatus = $_GET['vstatus'];
$q = "UPDATE tbl_payment SET vstatus='$vstatus' WHERE id='$id'";
mysqli_query($con,$q);
if ($vstatus==2){
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
    $mail->Subject='Payment approved';
            $mail->Body="Your payment has been approved. Log in from here http://localhost/electoralproject/loginpage.php";
            $mail->send();
}
elseif ($vstatus==1){
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
    $mail->Subject='Payment declined';
            $mail->Body="Your payment has been declined. contact helpline";
            $mail->send();
}





header("location:../admin/admindashboard.php");





?>