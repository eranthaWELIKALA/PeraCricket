<html>
<head>
<title>Pera Cricket</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
    <div>
		<div style="float:right; width:75%>
		  <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="#" data-target="#loginModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Login</a></li>
			<li><a href="view.php"><span class="glyphicon glyphicon-plus"></span> View Details</a></li>
			</ul>
		  </div>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			
			<div id="imageCarousel" class="carousel slide" data-interval="2000">
				<div class="carousel-inner">
					<div class="item">
						<img src="pics/default.jpg" class="img-responisive"/> 
					</div>
				</div>
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
							<form action="logged_index.php" method="post">
								<div class="form-group">
									<label for="inputUserName">Username</label>
									<input class="form-control" placeholder="ex: abc" type="text" id="inputUserName"/>
								</div>
								<div class="form-group">
									<label for="inputPassword">Password</label>
									<input class="form-control" placeholder="ex: ***" type="password" id="inputPassword"/>
								</div>
							
						</div>
						<div class="modal-footer">
							<input class="form-control" type="submit" value="Login">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
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