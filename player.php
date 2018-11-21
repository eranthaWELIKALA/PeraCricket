<html>
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
        </ul>
      </div>
    </div>
  </div>
</nav>
<br><br><br>
<!-- searching area -->
<div class='container'><br>
	<div class='row'>
		<div class='col-md-9'>
		<div class='container'>
			<div class="row">
				<form action="player" method="post">
				<div class='col-md-4'>
				<input class='form-control' type='text' name='search_name'>
				</div>
				<div class="col-md-2">
				<input class="form-control" type="submit" name="searchN" value="Search by Name">
				</div>
			</form>
			</div>
			<h2></h2>
		</div>
		</div>
		</div>
<?php
require "connect.php";
				$itr1=0;
		if(isset($_POST['searchN'])){
			echo "<div class='container'><table class='table table-striped'><thead><tr><th>Firstname</th><th>Lastname</th></tr></thead><tbody>";
			$seach_by_name_query="SELECT * FROM `player_informations` WHERE Firstname='".$_POST['search_name']."'";
			if($is_seach_by_name_query_run=mysqli_query($connect,$seach_by_name_query)){
				while($seach_by_name_query_execute=mysqli_fetch_assoc($is_seach_by_name_query_run)){
					echo "<tr>";
					echo "<td>".$seach_by_name_query_execute['Firstname']."</td>";
					echo "<td>".$seach_by_name_query_execute['Lastname']."</td>";
					if($seach_by_name_query_execute['Pics']!=NULL){
						echo "<td><img src = '".$seach_by_name_query_execute['Pics']."' style = 'height:50px;width:50px'></td>";}
					else{
						echo "<td><img src = 'logo.jpg' style = 'height:50px;width:50px'></td>";}
					echo "<td> <a href='advanced_direct.php?direct_searched_Reg_no=".$seach_by_name_query_execute['Reg_no']."' >View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$seach_by_lname_query="SELECT * FROM `player_informations` WHERE Lastname='".$_POST['search_name']."'";
			if($is_seach_by_lname_query_run=mysqli_query($connect,$seach_by_lname_query)){
				while($seach_by_lname_query_execute=mysqli_fetch_assoc($is_seach_by_lname_query_run)){
					echo "<tr>";
					echo "<td>".$seach_by_lname_query_execute['Firstname']."</td>";
					echo "<td>".$seach_by_lname_query_execute['Lastname']."</td>";
					if($seach_by_lname_query_execute['Pics']!=NULL){
						echo "<td><img src = '".$seach_by_lname_query_execute['Pics']."' style = 'height:50px;width:50px'></td>";}
					else{
						echo "<td><img src = 'logo.jpg' style = 'height:50px;width:50px'></td>";}
				echo "<td> <a href='advanced_direct.php?direct_searched_Reg_no=".$seach_by_lname_query_execute['Reg_no']."' >View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$seach_by_name_query1="SELECT * FROM `past_player_informations` WHERE Firstname='".$_POST['search_name']."'";
			if($is_seach_by_name_query_run1=mysqli_query($connect,$seach_by_name_query1)){
				while($seach_by_name_query_execute1=mysqli_fetch_assoc($is_seach_by_name_query_run1)){
					echo "<tr>";
					echo "<td>".$seach_by_name_query_execute1['Firstname']."</td>";
					echo "<td>".$seach_by_name_query_execute1['Lastname']."</td>";
					if($seach_by_name_query_execute1['Pics']!=NULL){
						echo "<td><img src = '".$seach_by_name_query_execute1['Pics']."' style = 'height:50px;width:50px'></td>";}
					else{
						echo "<td><img src = 'logo.jpg' style = 'height:50px;width:50px'></td>";}
					echo "<td> <a href='advanced_direct.php?direct_searched_Reg_no=".$seach_by_name_query_execute1['Reg_no']."' >View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$seach_by_lname_query1="SELECT * FROM `past_player_informations` WHERE Lastname='".$_POST['search_name']."'";
			if($is_seach_by_lname_query_run1=mysqli_query($connect,$seach_by_lname_query1)){
				while($seach_by_lname_query_execute1=mysqli_fetch_assoc($is_seach_by_lname_query_run1)){
					echo "<tr>";
					echo "<td>".$seach_by_lname_query_execute1['Firstname']."</td>";
					echo "<td>".$seach_by_lname_query_execute1['Lastname']."</td>";
					if($seach_by_lname_query_execute1['Pics']!=NULL){
						echo "<td><img src = '".$seach_by_lname_query_execute1['Pics']."' style = 'height:50px;width:50px'></td>";}
					else{
						echo "<td><img src = 'logo.jpg' style = 'height:50px;width:50px'></td>";}
				echo "<td> <a href='advanced_direct?direct_searched_Reg_no=".$seach_by_lname_query_execute1['Reg_no']."' >View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			echo "</table></div>";

		}

		?>
  
    



</html><?php
/*
echo "<br><br><div class='col-md-1'></div><div class='col-md-11'><form action='player.php' method='post'>";
				$player_query="SELECT * FROM player_informations";
				$is_player_query_run=mysqli_query($connect,$player_query);
				echo "<tr><td><input class='form-control' type='text' name='player' list='player' placeholder='Search Player...'/>";
				echo "<datalist id='player'>";

				while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
			
					echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
			
				}
				echo "</datalist>";
echo "</form></div>";
if(isset($_POST['player'])){
    $player_query0="SELECT * FROM player_informations WHERE Reg_no='".$_POST['player']."'";
    $is_player_query0_run=mysqli_query($connect,$player_query0);
    $player_query0_execute=mysqli_fetch_assoc($is_player_query0_run);

    $player_query1="SELECT * FROM batting_statistics WHERE Reg_no='".$_POST['player']."'";
    $is_player_query1_run=mysqli_query($connect,$player_query1);
    $player_query1_execute=mysqli_fetch_assoc($is_player_query1_run);

    $player_query2="SELECT * FROM bowling_statistics WHERE Reg_no='".$_POST['player']."'";
    $is_player_query2_run=mysqli_query($connect,$player_query2);
    $player_query2_execute=mysqli_fetch_assoc($is_player_query2_run);

    $player_query3="SELECT * FROM fielding_statistics WHERE Reg_no='".$_POST['player']."'";
    $is_player_query3_run=mysqli_query($connect,$player_query3);
    $player_query3_execute=mysqli_fetch_assoc($is_player_query3_run);

    echo "<br><br><div class='container'><div class='row'><h3>Player Details</h3></div><div class='row'><div class='col-md-1'>Firstname</div><div class='col-md-1'>".
    $player_query0_execute['Firstname']."</div></div><div class='row'><div class='col-md-1'>Lastname</div><div class='col-md-1'>".
    $player_query0_execute['Lastname']."</div></div><div class='row'><div class='col-md-1'>Reg no.</div><div class='col-md-1'>".
    $player_query0_execute['Reg_no']."</div></div><div class='row'>";if($player_query0_execute['Pics']!=NULL){echo "<img src = '".$player_query0_execute['Pics']."' style = 'height:150px;width:150px'>";}else{echo "<img src = 'pics/default.png' style = 'height:150px;width:150px'>";} echo "</div></div>";

    echo "<br><br><div class='container'><div class='row'><h3>Batting Performances</h3></div><div class='row'><div class='col-md-1'>Matches</div><div class='col-md-1'>".
    $player_query1_execute['Matches']."</div></div><div class='row'><div class='col-md-1'>Runs</div><div class='col-md-1'>".
    $player_query1_execute['Runs']."</div></div><div class='row'><div class='col-md-1'>Highest</div><div class='col-md-1'>".
    $player_query1_execute['Most']."</div></div><div class='row'><div class='col-md-1'>Average</div><div class='col-md-1'>".
    $player_query1_execute['Average']."</div></div><div class='row'><div class='col-md-1'>Hundreds</div><div class='col-md-1'>".
    $player_query1_execute['Hundreds']."</div></div><div class='row'><div class='col-md-1'>Fifties</div><div class='col-md-1'>".
    $player_query1_execute['Fifties']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>Runs Scored According To The Batting Position</h4></div><div class='row'><div class='col-md-1' align='center'> No. 1 </div><div class='col-md-1' align='center'> No. 2 </div><div class='col-md-1' align='center'> No. 3 </div><div class='col-md-1' align='center'> No. 4 </div><div class='col-md-1' align='center'> No. 5 </div><div class='col-md-1' align='center'> No. 6 </div>
    <div class='col-md-1' align='center'> No. 7 </div><div class='col-md-1' align='center'> No. 8 </div><div class='col-md-1' align='center'> No. 9 </div><div class='col-md-1' align='center'> No.10 </div><div class='col-md-1' align='center'>No.11</div></div>
    <div class='row'><div class='col-md-1' align='center'>".
    $player_query1_execute['one']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['two']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['three']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['four']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['five']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['six']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['seven']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['eight']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['nine']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['ten']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['eleven']."</div></div></div>";


    echo "<div class='container'><div class='row' align='left'><h4>How Getting Out?</h4></div><div class='row'><div class='col-md-1' align='center'>Bowled</div><div class='col-md-1' align='center'>Caught</div><div class='col-md-1' align='center'>LBW</div><div class='col-md-1' align='center'>Runout</div><div class='col-md-1' align='center'>Stumped</div><div class='col-md-1' align='center'>Hitwicket</div>
    <div class='col-md-1' align='center'>Notout</div></div>
    <div class='row'><div class='col-md-1' align='center'>".
    $player_query1_execute['Bowled']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['Caught']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['LBW']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['Runout']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['Stumped']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['Hitwicket']."</div><div class='col-md-1' align='center'>".
    $player_query1_execute['Notout']."</div></div></div>";


    echo "<br><br><div class='container'><div class='row'><h3>Bowling Performances</h3></div><div class='row'><div class='col-md-2'>Matches</div><div class='col-md-1'>".
    $player_query2_execute['Matches']."</div></div><div class='row'><div class='col-md-2'>Overs</div><div class='col-md-1'>".
    $player_query2_execute['Overs']."</div></div><div class='row'><div class='col-md-2'>Wickets</div><div class='col-md-1'>".
    $player_query2_execute['Wickets']."</div></div><div class='row'><div class='col-md-2'>Runs Considered</div><div class='col-md-1'>".
    $player_query2_execute['Runs']."</div></div><div class='row'><div class='col-md-2'>Econ</div><div class='col-md-1'>".
    $player_query2_execute['Econ']."</div></div><div class='row'><div class='col-md-2'>Average</div><div class='col-md-1'>".
    $player_query2_execute['Average']."</div></div><div class='row'><div class='col-md-2'>Five Wickets</div><div class='col-md-1'>".
    $player_query2_execute['Five_wickets']."</div></div></div>";


    echo "<br><br><div class='container'><div class='row'><h3>Fielding Performances</h3></div><div class='row'><div class='col-md-1'>Catches</div><div class='col-md-1'>".
    $player_query3_execute['Catches']."</div></div><div class='row'><div class='col-md-1'>Runouts</div><div class='col-md-1'>".
    $player_query3_execute['Runouts']."</div></div><div class='row'><div class='col-md-1'>Stumpings</div><div class='col-md-1'>".
    $player_query3_execute['Stumpings']."</div></div></div>";



    $player_query1_execute['Reg_no'];
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_POST['player'])){
            echo $player_query0_execute['Firstname']." Information";
        }
        else{
            echo "SEARCH";
        }
        ?>
    </title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    
</body>
</html>`