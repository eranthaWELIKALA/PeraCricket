<?php
ob_start();
session_start();

//importing pages
require 'connect.php';

//access controlling
if(!isset($_SESSION["memID"]) || !isset($_SESSION["password"])){
	header ("location:index");
}

//assigning variables
$memID=$_SESSION['memID'];
$password=$_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link type="image/jpg" rel="icon" href="logo.jpg"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- importing bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- adding styles -->
	<style>
		body{
			width:100%;
			height:100%;
			background-size:cover;
			padding:15px;
		}
		#one{
			width:100%;
			height:100%;
			background-image:url('navbar.jpg');
			background-size:cover;
		}

		.nav-pills > li.active > a, .nav-pills > li.active > a:focus {
			color: black;
			background-color: #fcd900;
		}

		.nav-pills > li.active > a:hover {
			background-color: #000000;
			color:white;
		}
	</style>
</head>

<body>


<form action="change_password" method="post">
	<div class="container"><br><br><h1 align='center'>Change Password</h1><br><br>
		<div class="row" align="right">
			<div class="col-md-4"><h4>Old Password</h4></div>
			<div class="col-md-4"><input class="form-control" type="password" name="old_password" required></div>
		</div>
		<div class="row" align="right">
			<div class="col-md-4"><h4>New Password</h4></div>
			<div class="col-md-4"><input class="form-control" type="password" name="new_password" id="new_password" required></div>
			<div class="col-md-1" align="left"><a class="btn" onclick="myFunction()"><span class="glyphicon glyphicon-eye-open"></span></a></div>
		</div>
		<div class="row" align="right">
			<div class="col-md-4"><h4>Re-enter Password</h4></div>
			<div class="col-md-4"><input class="form-control" type="password" name="rnew_password" required></div>
		</div><br>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><input class="form-control" type="submit" name="change" value="CHANGE"></div>
		</div>
	</div>
</form>
<script type="text/javascript">

$(document).ready(function () {

window.setTimeout(function() {
    $(".alert").fadeTo(1500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);

});

function myFunction() {
    var x = document.getElementById("new_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>
<?php
		//displaying alerts & updating passwords
		if(isset($_POST['change'])){
			if(md5($_POST['old_password'])!=$password){
				//display_alerts("info","change_password","Old password is not correct");
			}else{
				if($_POST['new_password']!=$_POST['rnew_password']){
					//display_alerts("info","change_password","New password are not matching");
				}
				else{
					//updating passwords
					$new_password=md5($_POST['new_password']);
					$update_password_query="UPDATE `login_details` SET `Password` = '".$new_password."' WHERE `login_details`.`Username` = '".$memID."'";
					$is_update_firstname_query_run=mysqli_query($connect,$update_password_query);
					header("location:index");
				}
			}
		}
?>

</html>
