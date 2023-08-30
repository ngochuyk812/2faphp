<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
   header('location:index.php');
   die();
}
$msg='';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	$sql="select * from admin_users where username='$username' or email='$email'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$error_message = "Tài khoản hoặc email đã tồn tại";
	}else{
		$sql = "INSERT INTO admin_users (username, email, password, role, status) VALUES ('$username', '$email', '$password', 1, 1)";
		$res=mysqli_query($con,$sql);	
		if ($res) {
			header('location:login.php');
			die();
		} else {
			$error_message = "Lỗi khi thêm dữ liệu: ";
		}
	}
	
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>LOGIN PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="assets/css/login.css">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
      <script src="assets/js/kit_fontaw.js"></script>

   </head>
<body>
	<img class="wave" src="/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
            
      <form method="post">
				<img src="images/avatar.svg">
				<h3 class="title">Đăng ký</h3>
            <?php
            if(isset($error_message) && $error_message != ""){
              echo "<div class='field_error'>".$error_message."</div>";
            }
            ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" required>
           		   </div>
           		</div>

				<div class="input-div one">
           		   <div class="i">
					  <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input" required>
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a style ="margin-top:10px" href="forgot.php">Quên mật khẩu?</a>
               <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">ĐĂNG KÝ</button>
               <span class="not_account">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></span>

            </form>
		

        </div>
    </div>
	<?php
	require('gohome.inc.php');
	?>
</html>

<script type="text/javascript" src="assets/js/main.js"></script>
