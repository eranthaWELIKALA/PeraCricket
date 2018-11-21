<?php
    require "connect.php";
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        50-50 Rankings
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
            <li>
                <a class="btn btn-danger" href="t20rankings.php">T20</a>
            </li>
			
				<li><a href="index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				
							<li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
							<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
							<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br/><br/><br/>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="panel-heading">
                    <button class="btn btn-primary" style="width:100%" id="bat_btn">Batting</button>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel-heading">
                    <button class="btn btn-primary" style="width:100%" id="bowl_btn">Bowling</button>
                </div>
            </div>
        </div>
    </div>

    <div class='container'>
        <div class="panel-body collapse" id="batting">
                  <?php
            $average_query="SELECT * from batting_statistics ORDER BY Average DESC LIMIT 10";
            $is_average_query_run=mysqli_query($connect,$average_query);
            $itr=1;
            echo "<br><p align='center'><h4>50-50 Batting Rankings</h4>(According to the Batting Average)</p>";
            while($average_query_execute=mysqli_fetch_assoc($is_average_query_run)){
                $avg_query="SELECT * FROM player_informations WHERE Reg_no='".$average_query_execute['Reg_no']."'";
                $is_avg_query_run=mysqli_query($connect,$avg_query);
                $avg_query_execute=mysqli_fetch_assoc($is_avg_query_run);
                if($avg_query_execute["Firstname"]==NULL){
                    $avg_query="SELECT * FROM past_player_informations WHERE Reg_no='".$average_query_execute['Reg_no']."'";
                $is_avg_query_run=mysqli_query($connect,$avg_query);
                $avg_query_execute=mysqli_fetch_assoc($is_avg_query_run);
                }
                echo "<div class='row'><div class='col-xs-1'>".$itr."</div><div class='col-xs-6'>".$avg_query_execute['Firstname']." ".$avg_query_execute['Lastname']."</div>";
                echo "<div class='col-xs-3'>".$average_query_execute['Average']."</div></div>";
                $itr++;
            }
            
        ?>
        <br><br>
        <?php
            $runs_query="SELECT * from batting_statistics ORDER BY Runs DESC LIMIT 10";
            $is_runs_query_run=mysqli_query($connect,$runs_query);
            $itr=1;
            echo "<br><p align='center'><h4>50-50 Batting Rankings</h4>(According to Runs)</p>";
            while($runs_query_execute=mysqli_fetch_assoc($is_runs_query_run)){
                $rn_query="SELECT * FROM player_informations WHERE Reg_no='".$runs_query_execute['Reg_no']."'";
                $is_rn_query_run=mysqli_query($connect,$rn_query);
                $rn_query_execute=mysqli_fetch_assoc($is_rn_query_run);
                if($rn_query_execute["Firstname"]==NULL){
                    $rn_query="SELECT * FROM past_player_informations WHERE Reg_no='".$runs_query_execute['Reg_no']."'";
                $is_rn_query_run=mysqli_query($connect,$rn_query);
                $rn_query_execute=mysqli_fetch_assoc($is_rn_query_run);
                }
                echo "<div class='row'><div class='col-xs-1'>".$itr."</div><div class='col-xs-6'>".$rn_query_execute['Firstname']." ".$rn_query_execute['Lastname']."</div>";
                echo "<div class='col-xs-3'>".$runs_query_execute['Runs']."</div></div>";
                $itr++;
            }
            
        ?>    
        </div>
          
    </div>
    
    <div class='container'>
        <div class="panel-body collapse" id="bowling">
                    <?php
            $wickets_query="SELECT * from bowling_statistics ORDER BY Wickets DESC LIMIT 10";
            $is_wickets_query_run=mysqli_query($connect,$wickets_query);
            $itr=1;
            echo "<br><p align='center'><h4>50-50 Bowling Rankings</h4>(According to No. of Wickets)</p>";
            while($wickets_query_execute=mysqli_fetch_assoc($is_wickets_query_run)){
                $wk_query="SELECT * FROM player_informations WHERE Reg_no='".$wickets_query_execute['Reg_no']."'";
                $is_wk_query_run=mysqli_query($connect,$wk_query);
                $wk_query_execute=mysqli_fetch_assoc($is_wk_query_run);
                if($wk_query_execute["Firstname"]==NULL){
                    $wk_query="SELECT * FROM past_player_informations WHERE Reg_no='".$wickets_query_execute['Reg_no']."'";
                $is_wk_query_run=mysqli_query($connect,$wk_query);
                $wk_query_execute=mysqli_fetch_assoc($is_wk_query_run);
                }
                echo "<div class='row'><div class='col-xs-1'>".$itr."</div><div class='col-xs-6'>".$wk_query_execute['Firstname']." ".$wk_query_execute['Lastname']."</div>";
                echo "<div class='col-xs-3'>".$wickets_query_execute['Wickets']."</div></div>";
                $itr++;
            }
            
        ?>
        <br><br>
        <?php
            $econ_query="SELECT * from bowling_statistics  WHERE Overs>1 ORDER BY Econ ASC LIMIT 10";
            $is_econ_query_run=mysqli_query($connect,$econ_query);
            $itr=1;
            echo "<br><p align='center'><h4>50-50 Bowling Rankings</h4>(According to Economy)</p>";
            while($econ_query_execute=mysqli_fetch_assoc($is_econ_query_run)){
                $ec_query="SELECT * FROM player_informations WHERE Reg_no='".$econ_query_execute['Reg_no']."'";
                $is_ec_query_run=mysqli_query($connect,$ec_query);
                $ec_query_execute=mysqli_fetch_assoc($is_ec_query_run);
                if($ec_query_execute["Firstname"]==NULL){
                    $ec_query="SELECT * FROM past_player_informations WHERE Reg_no='".$econ_query_execute['Reg_no']."'";
                $is_ec_query_run=mysqli_query($connect,$ec_query);
                $ec_query_execute=mysqli_fetch_assoc($is_ec_query_run);
                }
                echo "<div class='row'><div class='col-xs-1'>".$itr."</div><div class='col-xs-6'>".$ec_query_execute['Firstname']." ".$ec_query_execute['Lastname']."</div>";
                echo "<div class='col-xs-3'>".$econ_query_execute['Econ']."</div></div>";
                $itr++;
            }
            
        ?>
        <br><br>
        <?php
            $econ_query="SELECT * from bowling_statistics  WHERE Wickets>1 ORDER BY Average ASC LIMIT 10";
            $is_econ_query_run=mysqli_query($connect,$econ_query);
            $itr=1;
            echo "<br><p align='center'><h4>50-50 Bowling Rankings</h4>(According to Average)</p>";
            while($econ_query_execute=mysqli_fetch_assoc($is_econ_query_run)){
                $ec_query="SELECT * FROM player_informations WHERE Reg_no='".$econ_query_execute['Reg_no']."'";
                $is_ec_query_run=mysqli_query($connect,$ec_query);
                $ec_query_execute=mysqli_fetch_assoc($is_ec_query_run);
                if($ec_query_execute["Firstname"]==NULL){
                    $ec_query="SELECT * FROM past_player_informations WHERE Reg_no='".$econ_query_execute['Reg_no']."'";
                $is_ec_query_run=mysqli_query($connect,$ec_query);
                $ec_query_execute=mysqli_fetch_assoc($is_ec_query_run);
                }
                echo "<div class='row'><div class='col-xs-1'>".$itr."</div><div class='col-xs-6'>".$ec_query_execute['Firstname']." ".$ec_query_execute['Lastname']."</div>";
                echo "<div class='col-xs-3'>".$econ_query_execute['Average']."</div></div>";
                $itr++;
            }
            
        ?>
    </div>
            
</div>
    

<script type="text/javascript">
    $(document).ready(function(){
        $("#bat_btn").click(function(){
            $("#bowling").collapse("hide");
            $("#batting").collapse("show");
            $("#bat_btn").prop("disabled",true);
            $("#bowl_btn").prop("disabled",false);
        });
        $("#bowl_btn").click(function(){
            $("#batting").collapse("hide");
            $("#bowling").collapse("show");
            $("#bowl_btn").prop("disabled",true);
            $("#bat_btn").prop("disabled",false);
        });
    });
    function call(){
        alert("If you want to see T20 Rankings Click \"T20\" Red Button");
    }
    //call();
    setTimeout(call, 5000);
</script>
</body>
</html>