<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SEARCH</title>
	<link type="image/jpg" rel="icon" href="logo.jpg" />
	<link rel="stylesheet" href="./css/global.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<!-- Navigation Bar -->
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
						<li><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="view"><span class="glyphicon glyphicon-plus"></span> View Match Details</a></li>
						<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
						<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
						<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<br><br><br>

	<!-- Searching Area -->
	<div class='container mt-5'><br>
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
		$itr1 = 0;
		if (isset($_POST['searchN'])) {
			echo "<div class='container'><table class='table table-striped'><thead><tr><th>Firstname</th><th>Lastname</th></tr></thead><tbody>";
			$search_by_name_query = "SELECT * FROM `player_informations` WHERE Firstname='" . $_POST['search_name'] . "'";
			if ($is_search_by_name_query_run = mysqli_query($connect, $search_by_name_query)) {
				while ($search_by_name_query_execute = mysqli_fetch_assoc($is_search_by_name_query_run)) {
					echo "<tr>";
					echo "<td>" . $search_by_name_query_execute['Firstname'] . "</td>";
					echo "<td>" . $search_by_name_query_execute['Lastname'] . "</td>";
					if ($search_by_name_query_execute['Pics'] && file_exists($search_by_name_query_execute['Pics'])) {
						echo "<td><img src='" . $search_by_name_query_execute['Pics'] . "' style='height:50px;width:50px'></td>";
					} else {
						echo "<td><img src='logo.jpg' style='height:50px;width:50px'></td>";
					}
					echo "<td><a href='advanced_direct?direct_searched_Reg_no=" . $search_by_name_query_execute['Reg_no'] . "'>View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$search_by_lname_query = "SELECT * FROM `player_informations` WHERE Lastname='" . $_POST['search_name'] . "'";
			if ($is_search_by_lname_query_run = mysqli_query($connect, $search_by_lname_query)) {
				while ($search_by_lname_query_execute = mysqli_fetch_assoc($is_search_by_lname_query_run)) {
					echo "<tr>";
					echo "<td>" . $search_by_lname_query_execute['Firstname'] . "</td>";
					echo "<td>" . $search_by_lname_query_execute['Lastname'] . "</td>";
					if ($search_by_lname_query_execute['Pics'] != NULL) {
						echo "<td><img src='" . $search_by_lname_query_execute['Pics'] . "' style='height:50px;width:50px'></td>";
					} else {
						echo "<td><img src='logo.jpg' style='height:50px;width:50px'></td>";
					}
					echo "<td><a href='advanced_direct?direct_searched_Reg_no=" . $search_by_lname_query_execute['Reg_no'] . "'>View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$search_by_name_query1 = "SELECT * FROM `past_player_informations` WHERE Firstname='" . $_POST['search_name'] . "'";
			if ($is_search_by_name_query_run1 = mysqli_query($connect, $search_by_name_query1)) {
				while ($search_by_name_query_execute1 = mysqli_fetch_assoc($is_search_by_name_query_run1)) {
					echo "<tr>";
					echo "<td>" . $search_by_name_query_execute1['Firstname'] . "</td>";
					echo "<td>" . $search_by_name_query_execute1['Lastname'] . "</td>";
					if ($search_by_name_query_execute1['Pics'] != NULL) {
						echo "<td><img src='" . $search_by_name_query_execute1['Pics'] . "' style='height:50px;width:50px'></td>";
					} else {
						echo "<td><img src='logo.jpg' style='height:50px;width:50px'></td>";
					}
					echo "<td><a href='advanced_direct?direct_searched_Reg_no=" . $search_by_name_query_execute1['Reg_no'] . "'>View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			$search_by_lname_query1 = "SELECT * FROM `past_player_informations` WHERE Lastname='" . $_POST['search_name'] . "'";
			if ($is_search_by_lname_query_run1 = mysqli_query($connect, $search_by_lname_query1)) {
				while ($search_by_lname_query_execute1 = mysqli_fetch_assoc($is_search_by_lname_query_run1)) {
					echo "<tr>";
					echo "<td>" . $search_by_lname_query_execute1['Firstname'] . "</td>";
					echo "<td>" . $search_by_lname_query_execute1['Lastname'] . "</td>";
					if ($search_by_lname_query_execute1['Pics'] != NULL) {
						echo "<td><img src='" . $search_by_lname_query_execute1['Pics'] . "' style='height:50px;width:50px'></td>";
					} else {
						echo "<td><img src='logo.jpg' style='height:50px;width:50px'></td>";
					}
					echo "<td><a href='advanced_direct?direct_searched_Reg_no=" . $search_by_lname_query_execute1['Reg_no'] . "'>View</a></td>";
					$itr1++;
					echo "</tr>";
				}
			}
			echo "</table></div>";
		}
		?>
	</div>

</body>

</html>