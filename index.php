<?php
ob_start();
session_start();session_destroy();session_start();
require "connect.php";


if(isset($_POST['login'])){	
   
    if(isset($_POST['username']) && isset($_POST['password'])){	
        $login_query = "SELECT * FROM login_details";
        $is_login_query_run = mysqli_query($connect,$login_query);
        while($login=mysqli_fetch_assoc($is_login_query_run)){
            if($_POST['username'] == $login["Username"] && md5($_POST['password']) == $login["Password"]){	
                $_SESSION["memID"]=$login["Username"];
                $_SESSION["password"]=md5($_POST['password']);
                header("location:logged_index.php");		
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
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #one{
            border:10px solid black;
        }
		body{
			background-color:#D3D3D3;
		}
	    .carousel .item{
			height: 400px;
		}
		@media screen and (max-width: 992px) {
            .carousel .item{
    			height:150px;
    		}
		}
    </style>

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
			<li><a href="#" data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
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
<p align="center"><a href="https://www.facebook.com/Pera-Cricket-1012760492071589/"><img src="facebook.jpg" height="20px" width="100px"></a> </p>

<br>
<div class="container">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			
			<div id="imageCarousel" class="carousel slide" data-interval="2000" data-ride="carousel" >
			    <ol class="carousel-indicators">
			        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
			        <li data-target="#imageCarousel" data-slide-to="1"></li>
			        <li data-target="#imageCarousel" data-slide-to="2 "></li>
			        <li data-target="#imageCarousel" data-slide-to="3 "></li>
			        
			    </ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="home/sapumal1.jpg" width="100%"/>
						<div class="carousel-caption">
						    <h4>Pera Cricket</h4>
						    By Sapumal Narampanawa
						</div>
					</div>
					<div class="item">
						<img src="home/sapumal2.jpg" width="100%"/>
						<div class="carousel-caption">
						    <h4>Pera Cricket</h4>
						    By Sapumal Narampanawa
						</div>
					</div>
					<div class="item">
						<img src="home/sapumal3.jpg" width="100%"/>
						<div class="carousel-caption">
						    <h4>Pera Cricket</h4>
						    By Sapumal Narampanawa
						</div>
					</div>
					<div class="item">
						<img src="home/sapumal4.jpg" width="100%"/>
						<div class="carousel-caption">
						    <h4>Pera Cricket</h4>
						    By Sapumal Narampanawa
						</div>
					</div>
				</div>
				<a href="#imageCarousel" class="carousel-control left" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="#imageCarousel" class="carousel-control right" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
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
							<form action="index.php" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" placeholder="ex: abc" type="text" name="username" id="username"/>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" placeholder="ex: ***" type="password" name="password" id="password"/>
								</div>
							
						</div>
						<div class="modal-footer">
							<input class="form-control" type="submit" name="login" value="Login">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 

    
    <!--<br><br>

<div class="container">
	<fieldset>
	<div class="container" align="center" >
		<div>
		<img src="logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="176" height="176">
		</div>
	</div>
	</fieldset>

	<br><br>
</div>

    <div class="container" id="one" style="width:60%;background-color:#800000;border-radius: 25px;"><br>		<form action="index.php" method="post">
        <div class="row">
		<div class="col-md-4" align="right"><label><font color="#ff0000">Username : </font></label></div>
		<div class="col-md-4"><input class="form-control" type="text" name="username" placeholder="ex: abc" required></div>
		</div>
		<div class="row" align="center">
		<div class="col-md-4" align="right"><label><font color="#ff0000">Password : </font></label></div>
		<div class="col-md-4"><input class="form-control" type="password" name="password" id="password" placeholder="ex: ****" required></div>
		<div class="col-md-1" align="left"><a class="btn" onclick="myFunction()"><span class="glyphicon glyphicon-eye-open"></span></a></div>
		</div><br>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><input class="form-control" style="background-color:#38ACEC;color:black;" type="submit" value="LOGIN" name="submit"></div>		</form>
		</div><br><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='view.php';"><font size=3 color="#800000">View Details</font></button>
        </div>
        </div><br>
        <br><label><font color='white'>recommended to use in PC browsers</font></label>
    </div>
-->    
<script type="text/javascript">

function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
				x.type = "text";
		} else {
				x.type = "password";
		}
}
</script>  
    
</body>
</html>