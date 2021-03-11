<?php
include 'loginsession.php';
if($user_login){
    echo '<script>alert("既にログインしました。")</script>';
	echo '<script>window.location="index.php"</script>';  
}
 ?> 
<!DOCTYPE html>
<html lang="jp">
<head>
<title>もぐもぐ美味しい上手い！</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MOGUMOGU project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="plugins/colorbox/colorbox.css">

<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="index.php">
								<div>モグモグ</div>
								<div>NAGOYA</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.php">ホーム</a></li>
								<li><a href="omise.php">店舗情報</a></li>
								<li><a href="Reservation.php">予約</a></li>
								<?php
								if($user_login==null){
								echo "<li>";
								echo"<a href='login.php'>無料会員登録／ログイン";
								echo"</a>";
								echo"</li>";
								}else{
								echo"<li>";
								echo"<a href='logout.php'>ログアウト";
								echo"</a>";
								echo"</li>";
								}
								?>
							</ul>
						</nav>
						<?php
					if ( $user_login ){
						echo "<div class='user_name'>$_SESSION[name].さま";
									}
						?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Home -->



<section class="login-form">
<div class="limiter">
<div class="container-login100" style="background-image: url('images/home.jpg');">
  <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <form method='post' action="/LoginAction.php" class="login100-form validate-form">
      <span class="login100-form-title p-b-49">
        ログイン
      </span>

      <div class="wrap-input100 validate-input m-b-23" data-validate = "UserID is reauired">
        <span class="label-input100">ID</span>
        <input class="input100" type="text" name="id" placeholder="IDを入力してください">
        <span class="focus-input100" data-symbol="&#xf206;"></span>
      </div>

      <div class="wrap-input100 validate-input" data-validate="Password is required">
        <span class="label-input100">Password</span>
        <input class="input100" type="password" name="password" placeholder="パスワードを入力してください">
        <span class="focus-input100" data-symbol="&#xf190;"></span>
      </div>
      
      <div class="text-right p-t-8 p-b-31">
      </div>
      
      <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
          <div class="login100-form-bgbtn"></div>
          <button class="login100-form-btn">
            Login
          </button>
        </div>
      </div>

      <div class="txt1 text-center p-t-54 p-b-20">
        <span>
          <a href="Register.php">
          Sign Up
        </a>
        </span>
      </div>

      <div class="flex-c-m">
        <a href="#" class="login100-social-item bg1">
          <i class="fa fa-facebook"></i>
        </a>

        <a href="#" class="login100-social-item bg2">
          <i class="fa fa-twitter"></i>
        </a>

        <a href="#" class="login100-social-item bg3">
          <i class="fa fa-google"></i>
        </a>
      </div>

      <div class="flex-col-c p-t-155">
        <span class="txt1 p-b-17">
        </span>
        <a href="#" class="txt2">
        </a>
      </div>
    </form>
  </div>
</div>
</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo">
						<div class="footer_logo_title">MOGUMOGU</div>
						<div class="footer_logo_subtitle">NAGOYA</div>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> YG PARK All rights reserved </p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>

				<!-- Footer About -->
				<div class="col-lg-6 footer_col">
					<div class="footer_about">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio.</p>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<ul>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">愛知県名古屋市</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">+81 123 456 789</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">pledudrb@gmail.com</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>