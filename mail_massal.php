<?php

	if(isset ($_POST['tambah']))
	{	
	
	$subject1 =$_POST['subject'];
	$pesan1	 = $_POST['pesan'];		
//	$subject = $_POST['subject'];
//	$pesan	 =  $_POST['pesan'];
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set('Etc/UTC');

	require 'C:\xampp\htdocs\NotificationEmail\phpmail/PHPMailerAutoload.php';	
	
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html'; 
	$mail->Host = 'mail.taka.co.id'; 
	$mail->Port = 587; 
	$mail->SMTPSecure = 'tls'; 
	$mail->SMTPAuth = true; 
	$mail->Username = "";
	$mail->Password = ""; 	($Email,$name);
	$mail->setFrom('', '');
	$mail->addReplyTo('', '');
	$mail->Subject =$subject1;
	$link = mysqli_connect("localhost", "root", "", "goblooge"); 
	$result=mysqli_query($link,"SELECT * FROM keluarga");
	
	while($row=mysqli_fetch_array($result))
	{
		$mail->addAddress($row["email"], $row["nama"]);
		$pesan= $pesan1;
		$mail->msgHTML($pesan);
		if (!$mail->send()) 
		{
//		echo "Ada Yang Error Gan: " . $mail->ErrorInfo;
		} 
		else 
		{
//		echo "Berhasil di Send!";
		}
	//	<script> document.location.href="http://localhost/notificationemail/index.php" </script>	
	}
	}
//	mysqli_close($result);
	?>
	<script> document.location.href="http://localhost/notificationemail/index.php" </script>