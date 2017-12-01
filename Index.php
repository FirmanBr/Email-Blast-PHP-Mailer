<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>PT Taka Indonesia</title>
 <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="css/style.css">
 <script src='form_ajax.js'></script>
 </head>


<body>
 <form action="mail_massal.php" method="post" id="notification" name="notification">
 <h2><i class="fa fa-user"></i>Email Notification</h2>
<br/>
	
<div class="form-group">
<input name="subject" type="text" id="subject1" class="input-mode" placeholder="Subject..."  onblur="validate('subject', this.value)"/>
</div>
 
<div class="form-group">
<input type="textarea" name="pesan" id="pesan1" class="input-mode" placeholder="Message..." onblur="validate('pesan', this.value)"/ > 
</div>
<br/>
<br/>

<div class="form-group">
<button onclick= 'checkForm()' class="btn btn-submit" type="submit" name = "tambah">Send Notification &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>

</div>
<br/>
 </form>

</body>
</html>


