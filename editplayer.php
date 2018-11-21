<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index");
}
require "connect.php";

echo "<br>";
if(isset($_POST['add'])){echo "<br><br><br>";
    if(!empty($_POST['change'])){
        echo "<br><br><br>";
        $update1 = "UPDATE `player_informations` SET `Reg_no` = '".$_POST['change']."' WHERE `player_informations`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update1=mysqli_query($connect,$update1);
        $update2 = "UPDATE `2daybatting_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `2daybatting_statisics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update2=mysqli_query($connect,$update2);
        $update3 = "UPDATE `2daybowling_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `2daybowling_statisics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update3=mysqli_query($connect,$update3);
        $update4 = "UPDATE `batting_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `batting_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update4=mysqli_query($connect,$update4);
        $update5 = "UPDATE `bowling_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `bowling_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update5=mysqli_query($connect,$update5);
        $update6 = "UPDATE `fielding_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `fielding_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update6=mysqli_query($connect,$update6);
        $update7 = "UPDATE `interunibatting_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `interunibatting_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update7=mysqli_query($connect,$update7);
        $update8 = "UPDATE `interunibowling_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `interunibowling_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update8=mysqli_query($connect,$update8);
        $update9 = "UPDATE `t20batting_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `t20batting_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update9=mysqli_query($connect,$update9);
        $update10 = "UPDATE `t20bowling_statistics` SET `Reg_no` = '".$_POST['change']."' WHERE `t20bowling_statistics`.`Reg_no` = '".$_POST['player_reg_no']."'";
        $is_update10=mysqli_query($connect,$update10);
        if($is_update1 && $is_update2 && $is_update3 && $is_update4 && $is_update5 && $is_update6 && $is_update7 && $is_update8 && $is_update9 && $is_update10){
            echo '<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="alert alert-success" alert-dismissable">
                <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                <strong>Reg No Updated</strong>
                </div><br>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>';
        }
        if(isset($_POST['batting_hand'])){
            $update = "UPDATE `player_informations` SET `Batting_Hand` = '".$_POST['batting_hand']."' WHERE `player_informations`.`Reg_no` = '".$_POST['change']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-success" alert-dismissable">
                    <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                    <strong>Batting Hand Updated</strong>
                    </div><br>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>';
            }
        }
        if(isset($_POST['bowling_type'])){
            $update = "UPDATE `player_informations` SET `Bowling_Type` = '".$_POST['bowling_type']."' WHERE `player_informations`.`Reg_no` = '".$_POST['change']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-success" alert-dismissable">
                    <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                    <strong>Bowling Type Updated</strong>
                    </div><br>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>';
            }
        }
        if(!empty($_POST['firstname'])){
            $update = "UPDATE `player_informations` SET `Firstname` = '".$_POST['firstname']."' WHERE `player_informations`.`Reg_no` = '".$_POST['change']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-success" alert-dismissable">
                            <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                            <strong>Firstname Updated</strong>
                            </div><br>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>';
            }
        }
        if(!empty($_POST['lastname'])){
            $update = "UPDATE `player_informations` SET `Lastname` = '".$_POST['lastname']."' WHERE `player_informations`.`Reg_no` = '".$_POST['change']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-success" alert-dismissable">
                            <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                            <strong>Lastname Updated</strong>
                            </div><br>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>';
            }
        }
    }
    else{
        if(isset($_POST['batting_hand'])){
            $update = "UPDATE `player_informations` SET `Batting_Hand` = '".$_POST['batting_hand']."' WHERE `player_informations`.`Reg_no` = '".$_POST['player_reg_no']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-success" alert-dismissable">
                    <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                    <strong>Batting Hand Updated</strong>
                    </div><br>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>';
            }
        }
        if(isset($_POST['bowling_type'])){
            $update = "UPDATE `player_informations` SET `Bowling_Type` = '".$_POST['bowling_type']."' WHERE `player_informations`.`Reg_no` = '".$_POST['player_reg_no']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-success" alert-dismissable">
                    <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                    <strong>Bowling Type Updated</strong>
                    </div><br>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>';
            }
        }
        if(!empty($_POST['firstname'])){
            $update = "UPDATE `player_informations` SET `Firstname` = '".$_POST['firstname']."' WHERE `player_informations`.`Reg_no` = '".$_POST['player_reg_no']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-success" alert-dismissable">
                            <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                            <strong>Firstname Updated</strong>
                            </div><br>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>';
            }
        }
        if(!empty($_POST['lastname'])){
            $update = "UPDATE `player_informations` SET `Lastname` = '".$_POST['lastname']."' WHERE `player_informations`.`Reg_no` = '".$_POST['player_reg_no']."'";
            $is_update=mysqli_query($connect,$update);
            if($is_update){
                echo '<div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="alert alert-success" alert-dismissable">
                            <a href="editplayer" class="close" data-dismiss="alert" arial-label="close">&times</a>
                            <strong>Lastname Updated</strong>
                            </div><br>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>';
            }
        }
    }
	
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
		    $delete_prev="SELECT * FROM `player_informations` WHERE Reg_no = '".$_POST['player_reg_no']."'";
		    $is_delete_prev_run=mysqli_query($connect,$delete_prev);
		    $delete_query_execute=mysqli_fetch_assoc($is_delete_prev_run);
		    unlink($delete_query_execute['Pics']);
			$valid_file_extension = ".".strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
			$file_uploaded = move_uploaded_file($file_tmp_name, $upload_to.$_POST['player_reg_no'].$valid_file_extension);
			$update_pic_query="UPDATE `player_informations` SET `Pics` = '".$upload_to.$_POST['player_reg_no'].$valid_file_extension."'  WHERE Reg_no = '".$_POST['player_reg_no']."'";
			$update_pic_query_run=mysqli_query($connect,$update_pic_query );
			header('location:editplayer');
		}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit player</title>
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
				<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>

			<li><a href="editplayer"><span class="glyphicon glyphicon-refresh"></span> Refresh</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <br>
    <div class='container' align='center' ><h3>Edit Player</h3></div>
    <br><br>
    <div class='container' align='center' >
    <form enctype="multipart/form-data" action="editplayer.php" method="post"><table>
		<tr><td>Reg No.</td><td><?php
				$player_query="SELECT * FROM player_informations";
				$is_player_query_run=mysqli_query($connect,$player_query);
				echo "<input class='form-control' type='text' name='player_reg_no' list='player_reg_no' placeholder='Search Player...' required/>";
				echo "<datalist id='player_reg_no'>";
				while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
			
					echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
			
				}
				echo "</datalist>";
		?></td><td><input class='form-control typr='text' name='change' value='<?php echo $player_query_execute['Reg_no']; ?>' placeholder='changed reg no.'/></td></td></tr>
		<tr><td>Image</td><td><input class="form-control" type="file" name="image" id=""> </td></tr>
		<tr><td>Firstname</td><td><input  class='form-control' type='text' name='firstname' placeholder='Changed Firstname'></td></tr>
		<tr><td>Firstname</td><td><input  class='form-control' type='text' name='lastname' placeholder='Changed Lastname'></td></tr>
		<tr><td>Batting Hand</td><td>
<select class="form-control" name="batting_hand">
<option value="Right Hand">Right Hand Batsmen</option>    
<option value="Left Hand">Left Hand Batsmen</option>
</select>
</td></tr>
<tr><td>Bowling Type</td><td>
<select class="form-control" name="bowling_type">
<option value="Right Arm Fast">Right Arm Fast</option>    
<option value="Left Arm Fast">Left Arm Fast</option>
<option value="Right Arm Fast Medium">Right Arm Fast Medium</option>    
<option value="Left Arm Fast Medium">Left Arm Fast Medium</option>
<option value="Right Arm Medium Fast">Right Arm Medium Fast</option>    
<option value="Left Arm Medium Fast">Left Arm Medium Fast</option>
<option value="Right Arm Medium">Right Arm Medium</option>    
<option value="Left Arm Medium">Left Arm Medium</option>
<option value="Off Break">Off Break</option>    
<option value="Leg Break">Leg Break</option>
<option value="Slow Left Arm Orthodox">Slow Left Arm Orthodox</option>    
<option value="Slow Left Arm Chinaman">Slow Left Arm Chinaman</option>
</select>
</td></tr>
    </table>
    <div class="col-md-5"></div>
    <div class="col-md-2" align='left'> <input class="form-control" type="submit" name="add" value="ADD"> </div>
    <div class="col-md-4"></div>
    </form>
	
    </div>

	
   
</body>
</html>