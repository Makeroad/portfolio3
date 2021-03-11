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
<link rel="stylesheet" type="text/css" href="styles/menu.css">
<link rel="stylesheet" type="text/css" href="styles/menu_responsive.css">
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
	</header>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">MoguMogu</div>
							<div class="home_title"><h1>店舗情報</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Menu -->

	<div class="themenu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle page_subtitle">MoguMogu</div>
						<div class="section_title"><h1>あらしー名駅店</h1></div>
					</div>
				</div>
			</div>
			<div class="row themenu_text_row">
				<div class="col-lg-6">
					<div class="themenu_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="themenu_text">
						<p>Sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti. Vivamus luctus diam eu neque rutrum, vitae aliquet dolor venenatis. Nulla consequat fringilla.</p>
					</div>
				</div>
			</div>
			<div class="row themenu_row">
				
				<!-- 1 -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/maje1.png" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">看板まぜそば</div>
						<div class="dish_list">

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">並盛り</div>
									<div class="dish_price">¥900</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
	
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">大盛り</div>
									<div class="dish_price">¥1000</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>

				<!-- 2 -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/maje1.png" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">台湾まぜそば</div>
						<div class="dish_list">
							
							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">並盛り</div>
									<div class="dish_price">¥900</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
	
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">大盛り</div>
									<div class="dish_price">¥1000</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>

				<!-- 3 -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_image"><img src="images/maje1.png" alt=""></div>
					<div class="themenu_col trans_400">
						<div class="themenu_col_title">塩台湾まぜそば</div>
						<div class="dish_list">

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">並盛り</div>
									<div class="dish_price">¥900</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
	
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">大盛り</div>
									<div class="dish_price">¥1000</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

							<!-- Dish -->
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<div class="dish_title">Null</div>
									<div class="dish_price">¥???</div>
								</div>
								<div class="dish_contents">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									</ul>
								</div>
								<div class="dish_order"><a href="#">Order Now</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Side  -->

	<div class="sig">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_subtitle page_subtitle">Something new</div>
						<div class="section_title"><h1>サイドメニュー</h1></div>
					</div>
				</div>
			</div>
			<div class="row sig_row">
				<div class="col">

					<!-- Signature Dish -->
					<div class="sig_dish">
						<div class="row row-eq-height">
							<div class="col-lg-6 sig_col d-flex flex-column align-items-start justify-content-center">
								<div class="sig_content">
									<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
										<div class="sig_name">ビール</div>
										<div class="sig_price ml-auto">¥350</div>
									</div>
									<div class="sig_content_list">
										<ul class="d-flex flex-row align-items-center justify-content-start">
											<li>アサヒ</li>
											<li>キリン</li>
											<li>サッポロ</li>
											<li>エビス</li>
										</ul>
									</div>
									<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
								</div>
							</div>
							<div class="col-lg-6 sig_col">
								<div class="sig_image"><img src="images/beer.jpg" alt=""></div>
							</div>
						</div>
					</div>

					<!-- side -->
					<div class="sig_dish">
						<div class="row row-eq-height">
							<div class="col-lg-6 sig_col d-flex flex-column align-items-start justify-content-center">
								<div class="sig_content">
									<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
										<div class="sig_name">餃子</div>
										<div class="sig_price ml-auto">¥350</div>
									</div>
									<div class="button sig_button trans_200"><a href="#">Order Now</a></div>
								</div>
							</div>
							<div class="col-lg-6 sig_col">
								<div class="sig_image"><img src="images/gyoza.jpg" alt=""></div>
							</div>
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
<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script>YG PARK All rights reserved </p>
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
<script src="js/custom.js"></script>
</body>
</html>