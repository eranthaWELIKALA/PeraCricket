<?php
    require "connect.php";
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Records
    </title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<styles>
	    .modal-backdrop {
   background-color: red;
}
	</styles>
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
            <li>
                <a class="btn btn-danger" href="t20records.php">T20</a>
            </li>
			
				<li><a href="index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				
							<li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
							<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
							<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h2 align="center">Records</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#batting" data-toggle="tab">Batting</a> </li>
                <li><a href="#bowling" data-toggle="tab">Bowling</a> </li>
            </ul>
        </div>
    </div>
</div>
<div class="tab-content">
    <div id="batting" class="tab-pane">
        <div class="container">
            <div class="row"><div class="col-xs-10 col-xs-offset-1">
        <h4>Batting</h4>
    <table class="table table-hover table-responsive">
        <th></th><th>Name</th><th></th>
        <tbody>
            <tr>
                <td>
                    Who got out mostly by CAUGHT?
                </td><td> 
                <?php 
                $caught_query="SELECT * FROM batting_statistics ORDER BY Caught DESC LIMIT 1";
                $is_caught_query_run=mysqli_query($connect,$caught_query);
                $caught_query_execute=mysqli_fetch_assoc($is_caught_query_run);
                if($caught_query_execute['Caught']!=0){
                $caught_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$caught_query_execute['Reg_no']."'";
                $is_caught_retrieve_query_run=mysqli_query($connect,$caught_retrieve_query);
                $caught_retrieve_query_execute=mysqli_fetch_assoc($is_caught_retrieve_query_run);
                echo $caught_retrieve_query_execute['Firstname']." ".$caught_retrieve_query_execute['Lastname']."</td><td>".$caught_query_execute['Caught'];
                }
                else{
                echo "</td><td>";
                }?>
                </td><td><a href="#" data-target="#caughtModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got out mostly by BOWLED?
                </td><td>
                <?php 
                $bowled_query="SELECT * FROM batting_statistics ORDER BY Bowled DESC LIMIT 1";
                $is_bowled_query_run=mysqli_query($connect,$bowled_query);
                $bowled_query_execute=mysqli_fetch_assoc($is_bowled_query_run);
                if($bowled_query_execute['Bowled']!=0){
                $bowled_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$bowled_query_execute['Reg_no']."'";
                $is_bowled_retrieve_query_run=mysqli_query($connect,$bowled_retrieve_query);
                $bowled_retrieve_query_execute=mysqli_fetch_assoc($is_bowled_retrieve_query_run);
                echo $bowled_retrieve_query_execute['Firstname']." ".$bowled_retrieve_query_execute['Lastname']."</td><td>".$bowled_query_execute['Bowled'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#bowledModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got out mostly by LBW?
                </td><td>
                <?php 
                $lbw_query="SELECT * FROM batting_statistics ORDER BY LBW DESC LIMIT 1";
                $is_lbw_query_run=mysqli_query($connect,$lbw_query);
                $lbw_query_execute=mysqli_fetch_assoc($is_lbw_query_run);
                if($lbw_query_execute['LBW']!=0){
                $lbw_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$lbw_query_execute['Reg_no']."'";
                $is_lbw_retrieve_query_run=mysqli_query($connect,$lbw_retrieve_query);
                $lbw_retrieve_query_execute=mysqli_fetch_assoc($is_lbw_retrieve_query_run);
                echo $lbw_retrieve_query_execute['Firstname']." ".$lbw_retrieve_query_execute['Lastname']."</td><td>".$lbw_query_execute['LBW'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#lbwModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got out mostly by RUN OUT?
                </td><td>
                <?php 
                $runout_query="SELECT * FROM batting_statistics ORDER BY Runout DESC LIMIT 1";
                $is_runout_query_run=mysqli_query($connect,$runout_query);
                $runout_query_execute=mysqli_fetch_assoc($is_runout_query_run);
                if($runout_query_execute['Runout']!=0){
                $runout_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$runout_query_execute['Reg_no']."'";
                $is_runout_retrieve_query_run=mysqli_query($connect,$runout_retrieve_query);
                $runout_retrieve_query_execute=mysqli_fetch_assoc($is_runout_retrieve_query_run);
                echo $runout_retrieve_query_execute['Firstname']." ".$runout_retrieve_query_execute['Lastname']."</td><td>".$runout_query_execute['Runout'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#runoutModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got out mostly by STUMPED?
                </td><td>
                <?php 
                $stumped_query="SELECT * FROM batting_statistics ORDER BY Stumped DESC LIMIT 1";
                $is_stumped_query_run=mysqli_query($connect,$stumped_query);
                $stumped_query_execute=mysqli_fetch_assoc($is_stumped_query_run);
                if($stumped_query_execute['Stumped']!=0){
                $stumped_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$stumped_query_execute['Reg_no']."'";
                $is_stumped_retrieve_query_run=mysqli_query($connect,$stumped_retrieve_query);
                $stumped_retrieve_query_execute=mysqli_fetch_assoc($is_stumped_retrieve_query_run);
                echo $stumped_retrieve_query_execute['Firstname']." ".$stumped_retrieve_query_execute['Lastname']."</td><td>".$stumped_query_execute['Stumped'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#stumpedModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got out mostly by HIT WICKET?
                </td><td><?php 
                $hitwicket_query="SELECT * FROM batting_statistics ORDER BY Hitwicket DESC LIMIT 1";
                $is_hitwicket_query_run=mysqli_query($connect,$hitwicket_query);
                $hitwicket_query_execute=mysqli_fetch_assoc($is_hitwicket_query_run);
                if($hitwicket_query_execute['Hitwicket']!=0){
                $hitwicket_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$hitwicket_query_execute['Reg_no']."'";
                $is_hitwicket_retrieve_query_run=mysqli_query($connect,$hitwicket_retrieve_query);
                $hitwicket_retrieve_query_execute=mysqli_fetch_assoc($is_hitwicket_retrieve_query_run);
                echo $hitwicket_retrieve_query_execute['Firstname']." ".$hitwicket_retrieve_query_execute['Lastname']."</td><td>".$hitwicket_query_execute['Hitwicket'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#hitwicketModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who got most NOT OUT?
                </td><td>
                <?php 
                $notout_query="SELECT * FROM batting_statistics ORDER BY Notout DESC LIMIT 1";
                $is_notout_query_run=mysqli_query($connect,$notout_query);
                $notout_query_execute=mysqli_fetch_assoc($is_notout_query_run);
                if($notout_query_execute['Notout']!=0){
                $notout_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$notout_query_execute['Reg_no']."'";
                $is_notout_retrieve_query_run=mysqli_query($connect,$notout_retrieve_query);
                $notout_retrieve_query_execute=mysqli_fetch_assoc($is_notout_retrieve_query_run);
                echo $notout_retrieve_query_execute['Firstname']." ".$notout_retrieve_query_execute['Lastname']."</td><td>".$notout_query_execute['Notout'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#" data-target="#notoutModal" data-toggle="modal"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Most Centuries
                </td><td><?php 
                $hundreds_query="SELECT * FROM batting_statistics ORDER BY Hundreds DESC LIMIT 1";
                $is_hundreds_query_run=mysqli_query($connect,$hundreds_query);
                $hundreds_query_execute=mysqli_fetch_assoc($is_hundreds_query_run);
                if($hundreds_query_execute['Hundreds']!=0){
                $hundreds_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$hundreds_query_execute['Reg_no']."'";
                $is_hundreds_retrieve_query_run=mysqli_query($connect,$hundreds_retrieve_query);
                $hundreds_retrieve_query_execute=mysqli_fetch_assoc($is_hundreds_retrieve_query_run);
                echo $hundreds_retrieve_query_execute['Firstname']." ".$hundreds_retrieve_query_execute['Lastname']."</td><td>".$hundreds_query_execute['Hundreds'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Most Half Centuries
                </td><td><?php 
                $fifties_query="SELECT * FROM batting_statistics ORDER BY Fifties DESC LIMIT 1";
                $is_fifties_query_run=mysqli_query($connect,$fifties_query);
                $fifties_query_execute=mysqli_fetch_assoc($is_fifties_query_run);
                if($fifties_query_execute['Fifties']!=0){
                $fifties_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$fifties_query_execute['Reg_no']."'";
                $is_fifties_retrieve_query_run=mysqli_query($connect,$fifties_retrieve_query);
                $fifties_retrieve_query_execute=mysqli_fetch_assoc($is_fifties_retrieve_query_run);
                echo $fifties_retrieve_query_execute['Firstname']." ".$fifties_retrieve_query_execute['Lastname']."</td><td>".$fifties_query_execute['Fifties'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Highest Individual Score
                </td><td><?php 
                $most_query="SELECT * FROM batting_statistics ORDER BY Most DESC LIMIT 1";
                $is_most_query_run=mysqli_query($connect,$most_query);
                $most_query_execute=mysqli_fetch_assoc($is_most_query_run);
                if($most_query_execute['Most']!=0){
                $most_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$most_query_execute['Reg_no']."'";
                $is_most_retrieve_query_run=mysqli_query($connect,$most_retrieve_query);
                $most_retrieve_query_execute=mysqli_fetch_assoc($is_most_retrieve_query_run);
                echo $most_retrieve_query_execute['Firstname']." ".$most_retrieve_query_execute['Lastname']."</td><td>".$most_query_execute['Most'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            
        </tbody>
    </table>
    </div> </div>
        </div>
    </div>
    
    <div id="bowling" class="tab-pane">
        <div class="container">
            <div class="row"><div class="col-xs-10 col-xs-offset-1">
        <h4>Bowling</h4>
    <table class="table table-hover table-responsive">
        <th></th><th>Name</th><th></th>
        <tbody>
           <tr>
                <td>
                    Most Five Wicket Hauls
                </td><td><?php 
                $five_wickets_query="SELECT * FROM bowling_statistics ORDER BY Five_wickets DESC LIMIT 1";
                $is_five_wickets_query_run=mysqli_query($connect,$five_wickets_query);
                $five_wickets_query_execute=mysqli_fetch_assoc($is_five_wickets_query_run);
                if($five_wickets_query_execute['Five_wickets']!=0){
                $five_wickets_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$five_wickets_query_execute['Reg_no']."'";
                $is_five_wickets_retrieve_query_run=mysqli_query($connect,$five_wickets_retrieve_query);
                $five_wickets_retrieve_query_execute=mysqli_fetch_assoc($is_five_wickets_retrieve_query_run);
                echo $five_wickets_retrieve_query_execute['Firstname']." ".$five_wickets_retrieve_query_execute['Lastname']."</td><td>".$five_wickets_query_execute['Five_wickets'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who bowled most overs?
                </td><td><?php 
                $overs_query="SELECT * FROM bowling_statistics ORDER BY Overs DESC LIMIT 1";
                $is_overs_query_run=mysqli_query($connect,$overs_query);
                $overs_query_execute=mysqli_fetch_assoc($is_overs_query_run);
                if($overs_query_execute['Overs']!=0){
                $overs_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$overs_query_execute['Reg_no']."'";
                $is_overs_retrieve_query_run=mysqli_query($connect,$overs_retrieve_query);
                $overs_retrieve_query_execute=mysqli_fetch_assoc($is_overs_retrieve_query_run);
                echo $overs_retrieve_query_execute['Firstname']." ".$overs_retrieve_query_execute['Lastname']."</td><td>".$overs_query_execute['Overs'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
            <tr>
                <td>
                    Who considered most runs?
                </td><td><?php 
                $runs_query="SELECT * FROM bowling_statistics ORDER BY Runs DESC LIMIT 1";
                $is_runs_query_run=mysqli_query($connect,$runs_query);
                $runs_query_execute=mysqli_fetch_assoc($is_runs_query_run);
                if($runs_query_execute['Runs']!=0){
                $runs_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$runs_query_execute['Reg_no']."'";
                $is_runs_retrieve_query_run=mysqli_query($connect,$runs_retrieve_query);
                $runs_retrieve_query_execute=mysqli_fetch_assoc($is_runs_retrieve_query_run);
                echo $runs_retrieve_query_execute['Firstname']." ".$runs_retrieve_query_execute['Lastname']."</td><td>".$runs_query_execute['Runs'];
                }
                else{
                echo "</td><td>";
                }?> </td><td><a href="#"> <span class="glyphicon glyphicon-chevron-down"></span> </a></td>
            </tr>
        </tbody>
    </table>
    </div> </div>
        </div>
    </div>
</div>

<!--Modals-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="caughtModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by CAUGHT</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $caught_query="SELECT * FROM batting_statistics ORDER BY Caught DESC LIMIT 5";
                $is_caught_query_run=mysqli_query($connect,$caught_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($caught_query_execute=mysqli_fetch_assoc($is_caught_query_run)){
												if($caught_query_execute['Caught']!=0){
							                    $caught_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$caught_query_execute['Reg_no']."'";
                                                $is_caught_retrieve_query_run=mysqli_query($connect,$caught_retrieve_query);
                                                $caught_retrieve_query_execute=mysqli_fetch_assoc($is_caught_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$caught_retrieve_query_execute['Firstname']." ".$caught_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$caught_query_execute['Caught']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="bowledModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by BOWLED</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $bowled_query="SELECT * FROM batting_statistics ORDER BY Bowled DESC LIMIT 5";
                $is_bowled_query_run=mysqli_query($connect,$bowled_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($bowled_query_execute=mysqli_fetch_assoc($is_bowled_query_run)){
												if($bowled_query_execute['Bowled']!=0){
							                    $bowled_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$bowled_query_execute['Reg_no']."'";
                                                $is_bowled_retrieve_query_run=mysqli_query($connect,$bowled_retrieve_query);
                                                $bowled_retrieve_query_execute=mysqli_fetch_assoc($is_bowled_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$bowled_retrieve_query_execute['Firstname']." ".$bowled_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$bowled_query_execute['Bowled']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="lbwModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by LBW</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $lbw_query="SELECT * FROM batting_statistics ORDER BY LBW DESC LIMIT 5";
                $is_lbw_query_run=mysqli_query($connect,$lbw_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($lbw_query_execute=mysqli_fetch_assoc($is_lbw_query_run)){
												if($lbw_query_execute['LBW']!=0){
							                    $lbw_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$lbw_query_execute['Reg_no']."'";
                                                $is_lbw_retrieve_query_run=mysqli_query($connect,$lbw_retrieve_query);
                                                $lbw_retrieve_query_execute=mysqli_fetch_assoc($is_lbw_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$lbw_retrieve_query_execute['Firstname']." ".$lbw_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$lbw_query_execute['LBW']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="runoutModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by RUN OUT</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $runout_query="SELECT * FROM batting_statistics ORDER BY Runout DESC LIMIT 5";
                $is_runout_query_run=mysqli_query($connect,$runout_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($runout_query_execute=mysqli_fetch_assoc($is_runout_query_run)){
												if($runout_query_execute['Runout']!=0){
							                    $runout_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$runout_query_execute['Reg_no']."'";
                                                $is_runout_retrieve_query_run=mysqli_query($connect,$runout_retrieve_query);
                                                $runout_retrieve_query_execute=mysqli_fetch_assoc($is_runout_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$runout_retrieve_query_execute['Firstname']." ".$runout_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$runout_query_execute['Runout']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="stumpedModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by STUMPED</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $stumped_query="SELECT * FROM batting_statistics ORDER BY Stumped DESC LIMIT 5";
                $is_stumped_query_run=mysqli_query($connect,$stumped_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($stumped_query_execute=mysqli_fetch_assoc($is_stumped_query_run)){
												if($stumped_query_execute['Stumped']!=0){
							                    $stumped_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$stumped_query_execute['Reg_no']."'";
                                                $is_stumped_retrieve_query_run=mysqli_query($connect,$stumped_retrieve_query);
                                                $stumped_retrieve_query_execute=mysqli_fetch_assoc($is_stumped_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$stumped_retrieve_query_execute['Firstname']." ".$stumped_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$stumped_query_execute['Stumped']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="hitwicketModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by HIT WICKET</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $hitwicket_query="SELECT * FROM batting_statistics ORDER BY Hitwicket DESC LIMIT 5";
                $is_hitwicket_query_run=mysqli_query($connect,$hitwicket_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($hitwicket_query_execute=mysqli_fetch_assoc($is_hitwicket_query_run)){
												if($hitwicket_query_execute['Hitwicket']!=0){
							                    $hitwicket_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$hitwicket_query_execute['Reg_no']."'";
                                                $is_hitwicket_retrieve_query_run=mysqli_query($connect,$hitwicket_retrieve_query);
                                                $hitwicket_retrieve_query_execute=mysqli_fetch_assoc($is_hitwicket_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$hitwicket_retrieve_query_execute['Firstname']." ".$hitwicket_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$hitwicket_query_execute['Hitwicket']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="modal" id="notoutModal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Got out by NOT OUT</h4>
						</div>
						<div class="modal-body" style="background-color:#800000;text-color:white;">
                <?php 
                $notout_query="SELECT * FROM batting_statistics ORDER BY Notout DESC LIMIT 5";
                $is_notout_query_run=mysqli_query($connect,$notout_query);
                ?> 
                </td><td> <?php ?> </td>
							<table class="table table-hover">
							    <tbody>
							       
							            <?php 
							                
							                while($notout_query_execute=mysqli_fetch_assoc($is_notout_query_run)){
												if($notout_query_execute['Notout']!=0){
							                    $notout_retrieve_query="SELECT * FROM player_informations WHERE Reg_no='".$notout_query_execute['Reg_no']."'";
                                                $is_notout_retrieve_query_run=mysqli_query($connect,$notout_retrieve_query);
                                                $notout_retrieve_query_execute=mysqli_fetch_assoc($is_notout_retrieve_query_run);
                                                echo "<tr>";
                                                echo "<td><font color='white'> ".$notout_retrieve_query_execute['Firstname']." ".$notout_retrieve_query_execute['Lastname']."</font></td>";
                                                echo "<td><font color='white'> ".$notout_query_execute['Notout']."</font><td>"; 
                                                echo "</tr>";
												}
							                }
							                
							            ?>

							    </tbody>
							</table>
							
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function call(){
        alert("If you want to see T20 Records Click \"T20\" Red Button");
    }
   //call();
    setTimeout(call, 5000);
</script>
</body>
</html>