<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index");
}
require "connect.php";

echo "<br>";
if(isset($_POST['add'])){echo "<br><br><br>";
	
	$file_uploaded = '0';
	$upload_to = 'pics/';
	//$print1 = '';
	//$print2 = '';

		# code...
		$file_name = $_FILES['image']['name'];
		$file_type = $_FILES['image']['type'];
		$file_size = $_FILES['image']['size'];
		$file_tmp_name = $_FILES['image']['tmp_name'];
		$file_extension = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

		$valid_file_types = array('jpeg', 'jpg', 'png', 'gif');

		//checking file type is valid or not
		if(in_array($file_extension,$valid_file_types)){
			$valid_file_extension = ".".strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
			$file_uploaded = move_uploaded_file($file_tmp_name, $upload_to.$_POST['player_reg_no'].$valid_file_extension);
			$update_pic_query="UPDATE `past_player_informations` SET `Pics` = '".$upload_to.$_POST['player_reg_no'].$valid_file_extension."'  WHERE Reg_no = '".$_POST['player_reg_no']."'";
			$update_pic_query_run=mysqli_query($connect,$update_pic_query );
			header('location:editpastplayer');
		}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Past Player</title>
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
				<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
				<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Rrecords</a></li>
			
        </ul>
      </div>
    </div>
  </div>
</nav>
    <br>
    <div class='container' align='center' ><h3>Edit Past Player</h3></div>
    <br><br>
    <div class='container' align='center' >
    <form enctype="multipart/form-data" action="editpastplayer.php" method="post"><table>
		<tr><td>Reg No.</td><td><?php
				$player_query="SELECT * FROM past_player_informations";
				$is_player_query_run=mysqli_query($connect,$player_query);
				echo "<input class='form-control' type='text' name='player_reg_no' list='player_reg_no' placeholder='Search Player...' required/>";
				echo "<datalist id='player_reg_no'>";
				while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
			
					echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
			
				}
				echo "</datalist>";
		?></td></tr>
		<tr><td>Image</td><td><input class="form-control" type="file" name="image" id=""> </td></tr>
    </table>
    <div class="col-md-5"></div>
    <div class="col-md-2" align='left'> <input class="form-control" type="submit" name="add" value="ADD"> </div>
    <div class="col-md-4"></div>
    </form>
	
    </div>

	
   
</body>
</html>