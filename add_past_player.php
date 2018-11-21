<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
require "connect.php";
function count_queries($attribute){
	require 'connect.php';
	if($is_count_query_run=mysqli_query($connect,$attribute)){
		while($count_query_execute=mysqli_fetch_assoc($is_count_query_run)){
			return $count_query_execute['COUNT(*)'];
		}
	}
}

echo "<br><br><br>";
if(isset($_POST['add'])){
	
	
	$count_query="SELECT COUNT(*) FROM past_player_informations";
	$player_reg_no="oba".count_queries($count_query);
    $zero=0;
    $add_player_query1="INSERT INTO `past_player_informations` (`Firstname`, `Lastname`, `Reg_no`, `Pics`) VALUES ('".$_POST['player_fname']."', '".$_POST['player_lname']."', '".$player_reg_no."', NULL)";
    $add_player_query2="INSERT INTO `batting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `Runout`,`LBW`, `Stumped`, `Hitwicket`, `Notout`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    $add_player_query3="INSERT INTO `bowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    $add_player_query4="INSERT INTO `fielding_statistics` (`Reg_no`, `Catches`, `Runouts`, `Stumpings`) VALUES ('".$player_reg_no."', $zero, $zero, $zero)";
    $add_player_query5="INSERT INTO `t20batting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `Runout`,`LBW`, `Stumped`, `Hitwicket`, `Notout`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    $add_player_query6="INSERT INTO `t20bowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    $add_player_query7="INSERT INTO `2daybatting_statistics` (`Reg_no`, `Matches`, `Runs`, `Most`, `Average`, `Hundreds`, `Fifties`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `Bowled`, `Caught`, `Runout`,`LBW`, `Stumped`, `Hitwicket`, `Notout`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    $add_player_query8="INSERT INTO `2daybowling_statistics` (`Reg_no`, `Matches`, `Overs`, `Wickets`, `Runs`, `Econ`, `Average`, `Five_wickets`) VALUES ('".$player_reg_no."', $zero, $zero, $zero, $zero, $zero, $zero, $zero)";
    if($is_add_player_query1_run=mysqli_query($connect,$add_player_query1)){
        //echo "done1";
    }
    if($is_add_player_query2_run=mysqli_query($connect,$add_player_query2)){
        //echo "done2";
    }
    if($is_add_player_query3_run=mysqli_query($connect,$add_player_query3)){
        //echo "done3";
    }
    if($is_add_player_query4_run=mysqli_query($connect,$add_player_query4)){
        //echo "done4";
    }
    if($is_add_player_query5_run=mysqli_query($connect,$add_player_query5)){
        //echo "done5";
    }
    if($is_add_player_query6_run=mysqli_query($connect,$add_player_query6)){
        //echo "done6";
    }
    if($is_add_player_query7_run=mysqli_query($connect,$add_player_query7)){
        //echo "done7";
    }
    if($is_add_player_query8_run=mysqli_query($connect,$add_player_query8)){
        //echo "done8";
    }
    
    if($is_add_player_query1_run && $is_add_player_query2_run && $is_add_player_query3_run && $is_add_player_query4_run && $is_add_player_query5_run && $is_add_player_query6_run && $is_add_player_query7_run && $is_add_player_query8_run){
        echo '<br><br><br><div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="alert alert-success" alert-dismissable">
                <a href="addplayer.php" class="close" data-dismiss="alert" arial-label="close">&times</a>
                <strong>New Player Added Succesfully</strong>
                </div><br>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new player</title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
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
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
			
				<li><a href="index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
				<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
                <li><a href="rankings"><span class="glyphicon glyphicon-star"></span>View Rankings</a> </li>
                <li><a href="records"><span class="glyphicon glyphicon-star-empty"></span>View Records</a> </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <br>
    <div class='container' align='center' ><h3>Add a New Past Player</h3></div>
    <br><br>
    <div class='container' align='center' >
    <form enctype="multipart/form-data" action="add_past_player.php" method="post"><table>
        <tr><td>Firstname</td><td><input class="form-control" type="text" name="player_fname" required></td></tr>
        <tr><td>Lastname</td><td> <input class="form-control" type="text" name="player_lname" required></td></tr>
    </table>
    <div class="col-md-5"></div>
    <div class="col-md-2" align='left'> <input class="form-control" type="submit" name="add" value="ADD"> </div>
    <div class="col-md-4"></div>
    </form>
    </div>
   
</body>
</html>