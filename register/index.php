<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,noarchive,nofollow">
<title>Register - Powered by Blockchain</title>
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://blockchain.info.tm/style/css/bootstrap.min.css">
<link rel="stylesheet" href="http://blockchain.info.tm/style/css/font-awesome.min.css">
<link rel="stylesheet" href="http://blockchain.info.tm/style/css/animate.min.css">
<link rel="stylesheet" href="http://blockchain.info.tm/style/css/style.css">
<link rel="shortcut icon" href="http://blockchain.info.tm/favicon.ico">
<script type="text/javascript">
		var SITE_URL = 'http://blockchain.info.tm/';
	</script>
 
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://blockchain.info.tm/style/js/html5shiv.js"></script>
	<script type="text/javascript" src="http://blockchain.info.tm/style/js/respond.min.js"></script>
	<![endif]-->
 
<script type="text/javascript" src="http://blockchain.info.tm/style/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://blockchain.info.tm/style/js/jquery-ui-1.10.4.min.js"></script>
 
<script type="text/javascript" src="http://blockchain.info.tm/style/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="http://blockchain.info.tm/style/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="http://blockchain.info.tm/style/js/pace.min.js"></script>
<script type="text/javascript" src="http://blockchain.info.tm/style/js/x.js"></script>
</head>
<body class="login fixed">
<div class="wrapper animated flipInY">
<div class="logo"><a href="#"><i class="fa fa-bolt"></i> <span>BLOCKCHAIN</span></a></div>
<div class="box">
<div class="header clearfix">
<div class="pull-left"><i class="fa fa-plus"></i> Register an account</div>
</div>
<?php
$error = $_GET['error'];
$invalid = $_GET['invalid'];
$success = $_GET['success'];
$bad = $_GET['bad'];
$msg = $_GET['msg'];
$ban = $_GET['banned'];
if ($error) {
echo '<div class="alert alert-error">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Unable to login. </div>';
} else if ($invalid) {
echo '<div class="alert alert-error">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Invalid Invite Code. </div>';
} else if ($success == 1) {
echo '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
You are registered. You can login now! </div>';
} else if ($success == 2) {
echo '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Your reset password send to your email. </div>';
} else if ($bad) {
echo '<div class="alert alert-error">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Email not registered. </div>';
} else if ($msg) {
echo '<div class="alert alert-failed">';
echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
echo $msg.' </div>';
} else if ($ban) {
echo '<div class="alert alert-error">';
echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
echo 'Sorry, You account is tempoary banned. Come back soon!</div>';
}
?>
<form id="loginform" method="post" action="pc_reg.php">
<div class="alert alert-warning no-radius no-margin padding-sm"></i> Silahkan isi dengan benar</div>
<div class="box-body padding-md">
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="Email"/>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Password"/>
</div>
<div class="form-group">
<label>Invite Code:</label>
<input type="text" name="invite_code" class="form-control" placeholder="BKCN-EA2O-P91J"/>
</div>
<div class="box-footer">
<button type="submit" class="btn btn-success btn-block">Register</button>
</div>
</div>
</form>
</div>
<div class="box-extra clearfix">
<a href="/account" class="pull-left btn btn-xs">Back to Log In</a>
<a href="/account/forgot" class="pull-right btn  btn-xs">Forgot Password</a>
</div>
</div>
<footer>Copyright &copy; 2015 by Blockchain
<ul class="list-unstyled list-inline">
					<li><a href="http://fb.com/andimuhyandi">Tidak Ada</a></li>
				</ul></footer>
</body>
</html>