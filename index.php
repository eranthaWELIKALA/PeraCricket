<?php
ob_start();
session_start();
session_destroy();
session_start();
require "connect.php";

// Array of images
$images = [
	"https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/365766818_845493214018636_5780681511218515486_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeEOWEmXz3f9_-gWuT1o_i-u0o4JZ1_ZPkXSjglnX9k-RYmISLLrhNNt4pJNRQovDQ9rmidlXpSbofEbqz4YRwQa&_nc_ohc=FZeo_dVNTtQQ7kNvgGWzSdV&_nc_ht=scontent.fcmb1-2.fna&oh=00_AYBSwUDCNZ4H56DKb3n55DRDUr-ITjlnxjilgr8aN5eaCw&oe=669CBA14",
	"https://scontent.fcmb1-2.fna.fbcdn.net/v/t39.30808-6/302164205_573602904541003_6233853855641484928_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=86c6b0&_nc_eui2=AeHjYuddMwKxZOM_y7srPG4C6sshusuAu-zqyyG6y4C77CwIBcYpw6lGc6tUB_XbJdr_K9SQ6pBenrGy-2VF5jpl&_nc_ohc=3pR55OKEcEoQ7kNvgFcjnDF&_nc_ht=scontent.fcmb1-2.fna&oh=00_AYARxTyBV58LPo_SyD7MJGL1tILEGGRlTwA3P9sKf3xEYA&oe=669CB2D6",
	"https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/50995811_2519730844707872_3773535687622524928_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeGx_mZVpGQ8WVunOLV_lIFwQewDx1WLv2pB7APHVYu_akbeuR7h20W7yGtlTUlCbD0HDHUkpp2VL-i2Cfffdd5O&_nc_ohc=_VjdkpO68CYQ7kNvgFoNM0g&_nc_ht=scontent.fcmb1-2.fna&oh=00_AYBD14FSPFNIEaWrawg_F3txij9YTItf8IdZMlhOYcGcQA&oe=66BE43F8",
	"https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/30414706_2091868584160769_2429223993560006656_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=2a1932&_nc_eui2=AeHyBKYxqw4NX05AA0p8wTgkpSw61ClGgOmlLDrUKUaA6Zpp16XvnVhNltGr3SgZ9e6pJ4qlXfHiNmv_qFp_kud5&_nc_ohc=94GS8-HvUn4Q7kNvgFUVRCO&_nc_ht=scontent.fcmb1-2.fna&oh=00_AYAzRpE1H8_E8TbsKwvuS94fu0Q-jewYH04PS_7bJpLM7w&oe=66BE3984"
];


if (isset($_POST['login'])) {

	if (isset($_POST['username']) && isset($_POST['password'])) {
		$login_query = "SELECT * FROM login_details";
		$is_login_query_run = mysqli_query($connect, $login_query);
		while ($login = mysqli_fetch_assoc($is_login_query_run)) {
			if ($_POST['username'] == $login["username"] && md5($_POST['password']) == $login["password"]) {
				$_SESSION["memID"] = $login["username"];
				$_SESSION["password"] = md5($_POST['password']);
				header("location:logged_index");
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pera Cricket</title>
	<link type="image/jpg" rel="icon" href="logo.jpg" />
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/global.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Pera Cricket</a>
			</div>
			<div style="float:right; width:90%;">
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="#" data-target="#loginModal" data-toggle="modal"><span
									class="glyphicon glyphicon-user"></span> Login</a></li>
						<li><a href="view"><span class="glyphicon glyphicon-plus"></span> View Match Details</a></li>
						<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
						<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
						<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<br><br><br><br><br>
	<p align="center"><a target="_blank" href="https://www.facebook.com/Pera-Cricket-1012760492071589/"><img
				src="home/facebook.jpg" height="40px" width="100px"></a> </p>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<div id="imageCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php foreach ($images as $index => $image): ?>
							<li data-target="#imageCarousel" data-slide-to="<?= $index ?>"
								class="<?= $index === 0 ? 'active' : '' ?>"></li>
						<?php endforeach; ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php foreach ($images as $index => $image): ?>
							<div class="item <?= $index === 0 ? 'active' : '' ?>">
								<img src="<?= $image ?>" width="100%" alt="Image <?= $index + 1 ?>">
								<div class="carousel-caption">
									<h4>Pera Cricket</h4>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<!-- Left and right controls -->
					<a href="#imageCarousel" class="left carousel-control" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a href="#imageCarousel" class="right carousel-control" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="modal" id="loginModal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Login</h4>
							</div>
							<div class="modal-body">
								<form action="index" method="post">
									<div class="form-group">
										<label for="username">Username</label>
										<input class="form-control" placeholder="ex: abc" type="text" name="username"
											id="username" />
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input class="form-control" placeholder="ex: ***" type="password"
											name="password" id="password" />
									</div>

							</div>
							<div class="modal-footer">
								<input class="form-control btn-primary" type="submit" name="login" value="Login">
								<button class="btn btn-danger mt-1" data-dismiss="modal">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>