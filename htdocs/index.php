<?php
include 'loginsession.php';
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="plugins/colorbox/colorbox.css">



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
								echo "<a onClick=\"javascript: return confirm('ログアウトしてもよろしでしょうか?');\" href='logout.php'>ログアウト</a>"; 
								echo"</li>";
								}
								?>
							</ul>
						</nav>
						<?php
					if ( $user_login ){
						echo "<div class='user_name ml-auto'>$_SESSION[name].さま";
									}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">MoguMogu</div>
							<div class="home_title"><h1>名古屋</h1></div>
							<div class="home_text ml-auto mr-auto">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll_icon"></div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content">
						<div class="intro_subtitle page_subtitle">Recommendation</div>
						<div class="intro_title"><h2>本郷亭 名駅店</h2></div>
						<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="intro_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla massa.</p>
						</div>
						<div class="button sig_button trans_200"><a href="Reservation.php">今すぐ予約</a></div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="images/intro_1.jpg"></div>
						</div>
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="images/intro_2.jpg"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Video -->

	<div class="video_section">
		<div class="background_image" style="background-image:url(images/video.jpg)"></div>
		<div class="video_section_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="video_section_title">韓国の番組でも出演！！</div>
			<div class="video_section_icon"><a class="vimeo video_button" href="https://www.youtube.com/embed/Z-R2Mxkh71Q"><i class="fa fa-play" aria-hidden="true"></i></a></div>
		</div>
	</div>

	<!-- Signature Dish -->

	<div class="sig">
		<div class="sig_content_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="sig_content">
							<div class="sig_subtitle page_subtitle">Recommendation</div>
							<div class="sig_title"><h1>あらし名駅店</h1></div>
							<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
								<div class="sig_name">まぜそば</div>
								<div class="sig_price ml-auto">¥850</div>
							</div>
							<div class="sig_content_list">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>まぜそば</li>
								</ul>
							</div>
							<div class="button sig_button trans_200"><a href="Reservation.php">今すぐ予約</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sig_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5">
						<div class="sig_image">
							<div class="background_image" style="background-image:url(images/sig.jpg)"></div>
							<img src="images/sig.jpg" alt="">
						</div>
					</div>
				</div>
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