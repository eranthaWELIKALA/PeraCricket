<?php
    require "connect.php";
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Records
    </title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body></body>
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
			
				<li><a href="index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
				<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
				<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3 algin="center"> View According to Formats</h3><br/>
<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <a class="btn btn-info"  style="width:100%;" href="50records">50-50</a>
        </div>
        <div class="col-xs-3">
            <a class="btn btn-danger"  style="width:100%;" href="t20records">T20</a>
        </div>
    </div>
</div>


</body>
</html>