<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coin Toss</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #one{
        border:1px solid black;
        align:center;
        padding:15px;
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
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> Options<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php"><span class="glyphicon glyphicon-pushpin"></span> Home</a></li>
				<li><a href="view.php"><span class="glyphicon glyphicon-plus"></span> View Details</a></li>
			</ul>
			</li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br><br><br><br>
    <div class="container" id="one" ><form action="match.php" method="post">
    <div class="col-md-4" ></div><div class="col-md-4" align="center"><label ><h1> Toss: Won ? </h1></label> <input  type="checkbox" name="toss" id="toss"></div><div class="col-md-4" ></div>
    <select class="form-control" name="action">
        <option value="fielding">Fielding</option>
        <option value="batting">Batting</option>
    </select>
    <input class="form-control" type="submit" value="Continue" name="ctn">
    </form>
<br></div>

</body>
</html>