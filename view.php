<?php
    ob_start();
    require "connect.php";
    $won_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Won' AND format='50-50'";
    $is_won_query_run=mysqli_query($connect,$won_query);
    $won_execute=mysqli_fetch_assoc($is_won_query_run);
    
    $lost_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Lost' AND format='50-50'";
    $is_lost_query_run=mysqli_query($connect,$lost_query);
    $lost_execute=mysqli_fetch_assoc($is_lost_query_run);
    
    $drawn_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Drawn' AND format='50-50'";
    $is_drawn_query_run=mysqli_query($connect,$drawn_query);
    $drawn_execute=mysqli_fetch_assoc($is_drawn_query_run);
    
    $tie_query="SELECT  COUNT(*) FROM matches_directory WHERE Decision='Tie' AND format='50-50'";
    $is_tie_query_run=mysqli_query($connect,$tie_query);
    $tie_execute=mysqli_fetch_assoc($is_tie_query_run);
    
    $t20won_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Won' AND format='T20'";
    $t20is_won_query_run=mysqli_query($connect,$t20won_query);
    $t20won_execute=mysqli_fetch_assoc($t20is_won_query_run);
    
    $t20lost_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Lost' AND format='T20'";
    $t20is_lost_query_run=mysqli_query($connect,$t20lost_query);
    $t20lost_execute=mysqli_fetch_assoc($t20is_lost_query_run);
    
    $t20drawn_query="SELECT COUNT(*) FROM matches_directory WHERE Decision='Drawn' AND format='T20'";
    $t20is_drawn_query_run=mysqli_query($connect,$t20drawn_query);
    $t20drawn_execute=mysqli_fetch_assoc($t20is_drawn_query_run);
    
    $t20tie_query="SELECT  COUNT(*) FROM matches_directory WHERE Decision='Tie' AND format='T20'";
    $t20is_tie_query_run=mysqli_query($connect,$t20tie_query);
    $t20tie_execute=mysqli_fetch_assoc($t20is_tie_query_run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Details</title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Results', 'Matches'],
          <?php echo "['Won',".$won_execute['COUNT(*)']."],"; ?>
          <?php echo "['Lost',".$lost_execute['COUNT(*)']."],"; ?>
          <?php echo "['Drawn',".$drawn_execute['COUNT(*)']."],"; ?>
          <?php echo "['Tie',".$tie_execute['COUNT(*)']."]"; ?>
        ]);

        var options = {
          title: '50-50 Matches'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Results', 'Matches'],
          <?php echo "['Won',".$t20won_execute['COUNT(*)']."],"; ?>
          <?php echo "['Lost',".$t20lost_execute['COUNT(*)']."],"; ?>
          <?php echo "['Drawn',".$t20drawn_execute['COUNT(*)']."],"; ?>
          <?php echo "['Tie',".$t20tie_execute['COUNT(*)']."]"; ?>
        ]);

        var options = {
          title: 'T20 Matches'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
    </script>
    <style>
        #one{
            border: 2px dashed black;
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
    <div class='container' id='one'>
        <br><br>
    <div class='row' >
        <div class='col-md-1' ></div>
        <div class='col-md-2' >Enter Match No : </div>
        <div class='col-md-4' >
            <form action="prev_match" method="post">
            <?php
			$match_query="SELECT * FROM matches_directory";
            $is_match_query_run=mysqli_query($connect,$match_query);

	        echo "<input type='text' class='form-control' name='prev' list='prev'><datalist id='prev'>";

            while($match_query_execute=mysqli_fetch_assoc($is_match_query_run)){
	
	            echo   "<option value='".$match_query_execute['match_no']."'>".$match_query_execute['Date']." with ". $match_query_execute['Opponent']."</option>";
	
            }
            echo "</datalist>";
            ?>
            </div>
            <div class='col-md-2' >
            <input class='form-control' type="submit" value="done">
            </div>
            </form>
        
    </div>
    <br><br>
    <div id="piechart" style="float:left;width:50%;"></div>
    <div id="piechart1" style="float:right;width:50%;"></div>
    <br><br>
    <div class="container">
        <?php
            $query = 'SELECT * FROM `matches_directory` ORDER BY `Date` DESC LIMIT 10';
            $is_query_run = mysqli_query($connect,$query);
            echo "<div class='container'><div class='row'><div class='col-md-2 col-xs-2'><h4>Match No</h4></div><div class='col-md-3 col-xs-3'><h4>Date</h4></div><div class='col-md-3 col-xs-3'><h4>Opponent Team</h4></div><div class='col-md-2 col-xs-2'><h4>Format</h4></div><div class='col-md-2 col-xs-2'><h4>Decision</h4></div></div>";
            while($query_execute = mysqli_fetch_assoc($is_query_run)){
                echo "<div class='row'><div class='col-md-2 col-xs-2'>".$query_execute['match_no']."</div><div class='col-md-3 col-xs-3'>".$query_execute['Date']."</div><div class='col-md-3 col-xs-3'>".$query_execute['Opponent']."</div><div class='col-md-2 col-xs-2'>".$query_execute['format']."</div><div class='col-md-2 col-xs-2'>".$query_execute['Decision']."</div></div>";
            }
            echo "</div>";
        ?>
    </div>
    <br><br><br><br>
    
</div>

<div class='container' id='one'>
        <br><br><p align="center"><h4>Home-Home Matches</h4></p>
    <div class='row' >
        <div class='col-md-1' ></div>
        <div class='col-md-2' >Enter Match No : </div>
        <div class='col-md-4' >
            <form action="prev_home_match" method="post">
            <?php
            
			$match_query1="SELECT * FROM home_matches_scorecarda";
            $is_match_query_run1=mysqli_query($connect,$match_query1);

	        echo "<input type='text' class='form-control' name='prev1' list='prev1'><datalist id='prev1'>";

            while($match_query_execute1=mysqli_fetch_assoc($is_match_query_run1)){
	
	            echo   "<option value='".$match_query_execute1['match_no']."'>".$match_query_execute1['date']." a ". $match_query_execute1['format']." match</option>";
	
            }
            echo "</datalist>";
            ?>
            </div>
            <div class='col-md-2' >
            <input class='form-control' type="submit" value="done">
            </div>
            </form>
        
    </div>
    <br><br>
<div class="container">
        <?php
            $query = 'SELECT * FROM `home_matches_scorecarda` ORDER BY `date` DESC LIMIT 10';
            $is_query_run = mysqli_query($connect,$query);
            echo "<div class='container'><div class='row'><div class='col-md-2 col-xs-2'><h4>Match No</h4></div><div class='col-md-3 col-xs-3'><h4>Date</h4></div><div class='col-md-2 col-xs-2'><h4>Format</h4></div></div>";
            while($query_execute = mysqli_fetch_assoc($is_query_run)){
                echo "<div class='row'><div class='col-md-2 col-xs-2'>".$query_execute['match_no']."</div><div class='col-md-3 col-xs-3'>".$query_execute['date']."</div><div class='col-md-2 col-xs-2'>".$query_execute['format']."</div></div>";
            }
            echo "</div>";
        ?>
    </div>    
    

</div>



</body>
</html>