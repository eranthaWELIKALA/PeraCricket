<?php
	ob_start();
	session_start();

	//importing pages
	require 'connect.php';

	$details_query="SELECT * FROM player_informations WHERE Reg_no='".$_SESSION['player']."'";

	if($is_details_query_run=mysqli_query($connect,$details_query)){
		$query_execute=mysqli_fetch_assoc($is_details_query_run);
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $query_execute['Firstname']." ".$query_execute['Lastname']; ?></title>
  <link type="image/jpg" rel="icon" href="logo.jpg"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- importing bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- adding styles -->
  <style>
  body {
      position: relative;
  }
  #details0 {padding-top:50px;height:675px;color: #000; }
  #details1 {padding-top:50px;height:1000px;color: #000; background-color: #1E88E5;}
  #details2 {padding-top:50px;height:1000px;color: #000; }
  #details3 {padding-top:50px;height:1000px;color: #000; background-color: #ff9800;}
  #details4 {padding-top:50px;height:1000px;color: #000; }
  </style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- navigation bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo "<b>".$query_execute['Firstname']."</b>"; ?></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		  <li><a href="#details0">Player Details</a></li>
          <li><a href="#details1">Main Career</a></li>
          <li><a href="#details2">T-20 Career</a></li>
          <li><a href="#details3">2 Day Career</a></li>
		  <li><a href="#details4">Inter University Tournament</a></li>
		  <li><a href="player"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- displaying information -->
<div id="details0" class="container-fluid">
  <h1>Player Details</h1><br><?php
  $player_query0="SELECT * FROM player_informations WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query0_run=mysqli_query($connect,$player_query0);
    $player_query0_execute=mysqli_fetch_assoc($is_player_query0_run);

    echo "<br><br><div class='container'><div class='row'><div class='col-md-1 col-xs-4'>Firstname</div><div class='col-md-1 col-xs-4'><h4>".
    $player_query0_execute['Firstname']."</h4></div></div><div class='row'><div class='col-md-1 col-xs-4'>Lastname</div><div class='col-md-1 col-xs-4'><h4>".
    $player_query0_execute['Lastname']."</h4></div></div>
    <div class='row'><div class='col-md-1 col-xs-4'>Reg no.</div><div class='col-md-1 col-xs-4'><h5>".
    $player_query0_execute['Reg_no']."</h5></div></div>
    <div class='row'><div class='col-md-1 col-xs-4'></div><div class='col-md-2 col-xs-4'><h4>".
    $player_query0_execute['Batting_Hand']."</h4></div></div>
    <div class='row'><div class='col-md-1 col-xs-4'></div><div class='col-md-2 col-xs-4'><h4>".
    $player_query0_execute['Bowling_Type']."</h4></div></div>
    <div class='row'>";if($player_query0_execute['Pics']!=NULL){echo "<img src = '".$player_query0_execute['Pics']."' style = 'height:150px;width:150px'>";}else{echo "<img src ='logo.jpg' style = 'height:150px;width:150px'>";} echo "</div></div>";

?>
</div>


<div id="details1" class="container-fluid">
  <h1>Career Details</h1><?php

    $player_query1="SELECT * FROM batting_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query1_run=mysqli_query($connect,$player_query1);
    $player_query1_execute=mysqli_fetch_assoc($is_player_query1_run);

    $player_query2="SELECT * FROM bowling_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query2_run=mysqli_query($connect,$player_query2);
    $player_query2_execute=mysqli_fetch_assoc($is_player_query2_run);

    $player_query3="SELECT * FROM fielding_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query3_run=mysqli_query($connect,$player_query3);
    $player_query3_execute=mysqli_fetch_assoc($is_player_query3_run);

    echo "<div class='container'><div class='row'><h3>Batting Performances</h3></div><div class='row'><div class='col-md-1 col-xs-4'>Matches</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Matches']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Runs</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Runs']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Highest</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Most']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Average</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Average']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Hundreds</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Hundreds']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Fifties</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Fifties']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>Runs Scored According To The Batting Position</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'> No. 1 </div><div class='col-md-1 col-xs-2' align='center'> No. 2 </div><div class='col-md-1 col-xs-2' align='center'> No. 3 </div><div class='col-md-1 col-xs-2' align='center'> No. 4 </div><div class='col-md-1 col-xs-2' align='center'> No. 5 </div><div class='col-md-1 col-xs-2' align='center'> No. 6 </div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 7 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 8 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 9 </div></div><div class='col-md-1 ' align='center'><div class='visible-md visible-lg'> No.10 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No.11 </div></div></div>
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['one']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['two']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['three']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['four']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['five']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['six']."</div><div class='col-md-1 col-xs-' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['seven']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['eight']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['nine']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['ten']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['eleven']."</div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'> No.7 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.8 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.9 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.10 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.11 </div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['seven']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['eight']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['nine']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['ten']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['eleven']."</div></div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>How Getting Out?</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'>Bowled</div><div class='col-md-1 col-xs-2' align='center'>Caught</div><div class='col-md-1 col-xs-2' align='center'>LBW</div><div class='col-md-1 col-xs-2' align='center'>Runout</div><div class='col-md-1 col-xs-2' align='center'>Stumped</div><div class='col-md-1 col-xs-2' align='center'>Hitwicket</div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'>Notout</div></div></div><div class='
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Bowled']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Caught']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['LBW']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Runout']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Stumped']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Hitwicket']."</div><div class='col-md-1' align='center'><div class= 'visible-md visible-lg'>".
    $player_query1_execute['Notout']."</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>Notout</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>".
    $player_query1_execute['Notout']."</div></div></div></div>";


    echo "<br><br><div class='col-md-6 col-xs-6'><div class='container'><div class='row'><h3>Bowling Performances</h3></div><div class='row'><div class='col-md-2 col-xs-8'>Matches</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Matches']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Overs</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Overs']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Wickets</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Wickets']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Runs Considered</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Runs']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Econ</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Econ']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Average</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Average']."</div></div><div class='row'><div class='col-md-2 col-xs-8'>Five Wickets</div><div class='col-md-1 col-xs-4'>".
    $player_query2_execute['Five_wickets']."</div></div></div></div>";


    echo "<div class='col-md-6 col-xs-6'><div class='container'><div class='row'><h3>Fielding Performances</h3></div><div class='row'><div class='col-md-1 col-xs-6'>Catches</div><div class='col-md-1 col-xs-6'>".
    $player_query3_execute['Catches']."</div></div><div class='row'><div class='col-md-1 col-xs-6'>Runouts</div><div class='col-md-1 col-xs-6'>".
    $player_query3_execute['Runouts']."</div></div><div class='row'><div class='col-md-1 col-xs-6'>Stumpings</div><div class='col-md-1 col-xs-6'>".
    $player_query3_execute['Stumpings']."</div></div></div></div>";



    $player_query1_execute['Reg_no'];?>
</div>


<div id="details2" class="container-fluid">
  <h1>T20 Career</h1><br><?php

    $player_query3="SELECT * FROM t20batting_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query3_run=mysqli_query($connect,$player_query3);
    $player_query3_execute=mysqli_fetch_assoc($is_player_query3_run);

    $player_query4="SELECT * FROM t20bowling_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query4_run=mysqli_query($connect,$player_query4);
    $player_query4_execute=mysqli_fetch_assoc($is_player_query4_run);

    echo "<div class='container'><div class='row'><h3>Batting Performances</h3></div><div class='row'><div class='col-md-1 col-xs-4'>Matches</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Matches']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Runs</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Runs']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Highest</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Most']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Average</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Average']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Hundreds</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Hundreds']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Fifties</div><div class='col-md-1 col-xs-4'>".
    $player_query3_execute['Fifties']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>Runs Scored According To The Batting Position</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'> No. 1 </div><div class='col-md-1 col-xs-2' align='center'> No. 2 </div><div class='col-md-1 col-xs-2' align='center'> No. 3 </div><div class='col-md-1 col-xs-2' align='center'> No. 4 </div><div class='col-md-1 col-xs-2' align='center'> No. 5 </div><div class='col-md-1 col-xs-2' align='center'> No. 6 </div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 7 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 8 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 9 </div></div><div class='col-md-1 ' align='center'><div class='visible-md visible-lg'> No.10 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No.11 </div></div></div>
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['one']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['two']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['three']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['four']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['five']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['six']."</div><div class='col-md-1 col-xs-' align='center'><div class='visible-md visible-lg'>".
    $player_query3_execute['seven']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query3_execute['eight']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query3_execute['nine']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query3_execute['ten']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query3_execute['eleven']."</div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'> No.7 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.8 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.9 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.10 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.11 </div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query3_execute['seven']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query3_execute['eight']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query3_execute['nine']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query3_execute['ten']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query3_execute['eleven']."</div></div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>How Getting Out?</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'>Bowled</div><div class='col-md-1 col-xs-2' align='center'>Caught</div><div class='col-md-1 col-xs-2' align='center'>LBW</div><div class='col-md-1 col-xs-2' align='center'>Runout</div><div class='col-md-1 col-xs-2' align='center'>Stumped</div><div class='col-md-1 col-xs-2' align='center'>Hitwicket</div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'>Notout</div></div></div><div class='
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['Bowled']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['Caught']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['LBW']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['Runout']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['Stumped']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query3_execute['Hitwicket']."</div><div class='col-md-1' align='center'><div class= 'visible-md visible-lg'>".
    $player_query3_execute['Notout']."</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>Notout</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>".
    $player_query3_execute['Notout']."</div></div></div></div>";


    echo "<br><br><div class='container'><div class='row'><h3>Bowling Performances</h3></div><div class='row'><div class='col-md-2 col-xs-6'>Matches</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Matches']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Overs</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Overs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Wickets']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Runs Considered</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Runs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Econ</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Econ']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Average</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Average']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Five Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query4_execute['Five_wickets']."</div></div></div>";




    $player_query3_execute['Reg_no'];?>
</div>

<div id="details3" class="container-fluid">
  <h1>Two Day Career</h1><br><br><?php

    $player_query5="SELECT * FROM 2daybatting_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query5_run=mysqli_query($connect,$player_query5);
    $player_query5_execute=mysqli_fetch_assoc($is_player_query5_run);

    $player_query6="SELECT * FROM 2daybowling_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query6_run=mysqli_query($connect,$player_query6);
    $player_query6_execute=mysqli_fetch_assoc($is_player_query6_run);

    echo "<div class='container'><div class='row'><h3>Batting Performances</h3></div><div class='row'><div class='col-md-1 col-xs-4'>Matches</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Matches']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Runs</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Runs']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Highest</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Most']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Average</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Average']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Hundreds</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Hundreds']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Fifties</div><div class='col-md-1 col-xs-4'>".
    $player_query5_execute['Fifties']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>Runs Scored According To The Batting Position</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'> No. 1 </div><div class='col-md-1 col-xs-2' align='center'> No. 2 </div><div class='col-md-1 col-xs-2' align='center'> No. 3 </div><div class='col-md-1 col-xs-2' align='center'> No. 4 </div><div class='col-md-1 col-xs-2' align='center'> No. 5 </div><div class='col-md-1 col-xs-2' align='center'> No. 6 </div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 7 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 8 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 9 </div></div><div class='col-md-1 ' align='center'><div class='visible-md visible-lg'> No.10 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No.11 </div></div></div>
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['one']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['two']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['three']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['four']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['five']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['six']."</div><div class='col-md-1 col-xs-' align='center'><div class='visible-md visible-lg'>".
    $player_query5_execute['seven']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query5_execute['eight']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query5_execute['nine']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query5_execute['ten']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query5_execute['eleven']."</div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'> No.7 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.8 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.9 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.10 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.11 </div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query5_execute['seven']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query5_execute['eight']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query5_execute['nine']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query5_execute['ten']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query5_execute['eleven']."</div></div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>How Getting Out?</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'>Bowled</div><div class='col-md-1 col-xs-2' align='center'>Caught</div><div class='col-md-1 col-xs-2' align='center'>LBW</div><div class='col-md-1 col-xs-2' align='center'>Runout</div><div class='col-md-1 col-xs-2' align='center'>Stumped</div><div class='col-md-1 col-xs-2' align='center'>Hitwicket</div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'>Notout</div></div></div><div class='
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['Bowled']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['Caught']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['LBW']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['Runout']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['Stumped']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query5_execute['Hitwicket']."</div><div class='col-md-1' align='center'><div class= 'visible-md visible-lg'>".
    $player_query5_execute['Notout']."</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>Notout</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>".
    $player_query5_execute['Notout']."</div></div></div></div>";


    echo "<br><br><div class='container'><div class='row'><h3>Bowling Performances</h3></div><div class='row'><div class='col-md-2 col-xs-6'>Matches</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Matches']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Overs</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Overs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Wickets']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Runs Considered</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Runs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Econ</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Econ']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Average</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Average']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Five Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query6_execute['Five_wickets']."</div></div></div>";




    $player_query5_execute['Reg_no'];?>
</div>

<div id="details4" class="container-fluid">
  <h1>Inter University</h1><br><?php

    $player_query1="SELECT * FROM interunibatting_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query1_run=mysqli_query($connect,$player_query1);
    $player_query1_execute=mysqli_fetch_assoc($is_player_query1_run);

    $player_query2="SELECT * FROM interunibowling_statistics WHERE Reg_no='".$_SESSION['player']."'";
    $is_player_query2_run=mysqli_query($connect,$player_query2);
    $player_query2_execute=mysqli_fetch_assoc($is_player_query2_run);

    echo "<div class='container'><div class='row'><h3>Batting Performances</h3></div><div class='row'><div class='col-md-1 col-xs-4'>Matches</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Matches']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Runs</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Runs']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Highest</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Most']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Average</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Average']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Hundreds</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Hundreds']."</div></div><div class='row'><div class='col-md-1 col-xs-4'>Fifties</div><div class='col-md-1 col-xs-4'>".
    $player_query1_execute['Fifties']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>Runs Scored According To The Batting Position</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'> No. 1 </div><div class='col-md-1 col-xs-2' align='center'> No. 2 </div><div class='col-md-1 col-xs-2' align='center'> No. 3 </div><div class='col-md-1 col-xs-2' align='center'> No. 4 </div><div class='col-md-1 col-xs-2' align='center'> No. 5 </div><div class='col-md-1 col-xs-2' align='center'> No. 6 </div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 7 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 8 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No. 9 </div></div><div class='col-md-1 ' align='center'><div class='visible-md visible-lg'> No.10 </div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'> No.11 </div></div></div>
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['one']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['two']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['three']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['four']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['five']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['six']."</div><div class='col-md-1 col-xs-' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['seven']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['eight']."</div></div><div class='col-md-1 col-xs-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['nine']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['ten']."</div></div><div class='col-md-1' align='center'><div class='visible-md visible-lg'>".
    $player_query1_execute['eleven']."</div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'> No.7 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.8 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.9 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.10 </div></div><div class='col-xs-2'><div class='visible-xs visible-sm'> No.11 </div></div></div><div class='row'><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['seven']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['eight']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['nine']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['ten']."</div></div><div class='col-xs-2'><div class='visible-xs visible-sm'>".
    $player_query1_execute['eleven']."</div></div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>How Getting Out?</h4></div><div class='row'><div class='col-md-1 col-xs-2' align='center'>Bowled</div><div class='col-md-1 col-xs-2' align='center'>Caught</div><div class='col-md-1 col-xs-2' align='center'>LBW</div><div class='col-md-1 col-xs-2' align='center'>Runout</div><div class='col-md-1 col-xs-2' align='center'>Stumped</div><div class='col-md-1 col-xs-2' align='center'>Hitwicket</div>
    <div class='col-md-1' align='center'><div class='visible-md visible-lg'>Notout</div></div></div><div class='
    <div class='row'><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Bowled']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Caught']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['LBW']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Runout']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Stumped']."</div><div class='col-md-1 col-xs-2' align='center'>".
    $player_query1_execute['Hitwicket']."</div><div class='col-md-1' align='center'><div class= 'visible-md visible-lg'>".
    $player_query1_execute['Notout']."</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>Notout</div></div></div><div class='row'><div class='col-xs-2' align='center'><div class='visible-xs visible-sm'>".
    $player_query1_execute['Notout']."</div></div></div></div>";


    echo "<br><br><div class='container'><div class='row'><h3>Bowling Performances</h3></div><div class='row'><div class='col-md-2 col-xs-6'>Matches</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Matches']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Overs</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Overs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Wickets']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Runs Considered</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Runs']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Econ</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Econ']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Average</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Average']."</div></div><div class='row'><div class='col-md-2 col-xs-6'>Five Wickets</div><div class='col-md-1 col-xs-6'>".
    $player_query2_execute['Five_wickets']."</div></div></div>";




    $player_query1_execute['Reg_no'];?>
</div>

</body>
</html>
