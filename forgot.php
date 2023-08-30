<?php
require('connection.inc.php');
require('functions.inc.php');
require('./sendmail.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){
   header('location:index.php');
   die();
}
$msg='';
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$sql="select * from admin_users where email='$email' ";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
   
	if($count>0){
		$row=mysqli_fetch_assoc($res);
		send_mail($email, "Quên mật khẩu", "Mật khẩu bạn là : ".$row["password"] , "ALTBODY");
		$success_message = "Vui lòng kiểm tra email để nhận mật khẩu!";
	}else{
      $error_message = "Email không tồn tại hệ thống!";
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
				<h3 class="title">Quên mật khẩu</h3>
            <?php
            if(isset($error_message) && $error_message != ""){
              echo "<div class='field_error'>".$error_message."</div>";
            }
			if(isset($success_message) && $success_message != ""){
				echo "<div class='field_success'>".$success_message." </div> <span class='not_account field_success' style='margin-bottom: 20px;'>Tới trang đăng nhập? <a href='login.php'>Đăng nhập</a></span>";
			  }
            ?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" class="input" required>
           		   </div>
           		</div>

               <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">QUÊN MẬT KHẨU</button>
               <span class="not_account">Bạn chưa có tài khoản? <a href="signup.php">Đăng ký</a></span>

            </form>
            

        </div>
    </div>
	<div>

	</div>
	<?php
	require('gohome.inc.php');
	?>
</html>


<script type="text/javascript" src="assets/js/main.js"></script>
