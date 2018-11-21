<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index");
}
?>
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
				<form action="move" method="post">
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
if(isset($_GET['moved'])){
                echo "<div class='container'>
                    <div class='row'>
                        <div class='col-md-3'></div>
                        <div class='col-md-6'>
                            <div class='alert alert-success' alert-dismissable>
                            <a href='move' class='close' data-dismiss='alert arial-label='close'>&times</a>
                            <strong>".$_GET['moved']."</strong>
                            </div><br>
                        </div>
                        <div class='col-md-3'></div>
                    </div>
                </div>";
            }
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
					echo "<td>  <a type='button' class='btn btn-info' href='move_direct?moved_reg_no=".$seach_by_name_query_execute['Reg_no']."'>Move To Old Pera</a></td>";
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
				echo "<td>  <a type='button' class='btn btn-info' href='move_direct?moved_reg_no=".$seach_by_lname_query_execute['Reg_no']."'>Move To Old Pera</a>/td>";
					$itr1++;
					echo "</tr>";
				}
			}
			echo "</table></div>";

		}

		?>
  
    



</html>

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
            echo "MOVE";
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