<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
	require 'connect.php';
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
			background-color:#800000;
			border-radius: 25px;
        }
		body{
			background-color:#D3D3D3;
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
			
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view.php"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
				<li><a href="player.php"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
				<li><a href="rankings.php"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
				<li><a href="records.php"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
			
        </ul>
      </div>
    </div>
  </div>
</nav>
<br><br><br>
    <div class="container" id="one" ><br>
        <div class="row" ><div class="col-md-4" ><label> <a href="addplayer.php"> Before continue please add new players</a></label></div></div>
        <div class="row" ><div class="col-md-4" ></div><div class="col-md-4" ><button class="form-control" type="button" class="btn btn-default"  onclick="location.href='match.php';"><font size=3 color="#800000">Continue</font></button></div></div>
        <br>
    </div>
	<br><br>
	<div class='container'>
		<div class='row'>
			<div class='col-md-1'></div>
	<div class='col-md-6'>
    <script>
    $(document).ready(function(){
        $("#myInput1").on("keyup",function(){
            var value=$(this).val().toLowerCase();
            $("#myTable1 tr").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
            });
        });
    });

    </script>
<div id="search" >
  <input class='form-control' type="text" id="myInput1" placeholder="Search..." >
  <?php
  $query="SELECT * FROM player_informations";
  $is_query_run=mysqli_query($connect,$query);
  echo "<table><th>Player Name</th><th>---Reg_no</th><tbody id='myTable1'>";
  while($query_execute=mysqli_fetch_assoc($is_query_run)){
      echo "<tr	><td >".$query_execute['Firstname']." ".$query_execute['Lastname']."</td><td>--- ".$query_execute['Reg_no']."</td></tr>";
  }
  echo "</tbody><table>";

  ?>
</div>
		</div>
	</div>
	

    
    
</body>
</html>