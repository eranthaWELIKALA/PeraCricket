<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
if(isset($_POST["update"])){
     header ("location:index.php");
}

require 'connect.php';

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
			
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view.php"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
				<li><a href="player.php"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
				<li><a href="rankings.php"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
				<li><a href="records.php"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>

        </ul>
      </div>
    </div>
  </div>
</nav>
</html>

<?php
    echo "<br><br><br><div class='row' >
            <br>
            <div class='col-md-4' align='center' ><label>";echo $_SESSION['date'];echo "</label></div>
            <div class='col-md-4' align='center' ><label>UOP Vs ";echo $_SESSION['op'];echo "</label></div>
            <div class='col-md-4' align='center' ><label>Match No. : ";echo $_SESSION['match_no'];echo "</label></div>
        </div>
        <div class='row' >
            <br>
            <div class='col-md-4' align='center' ></div>
            <div class='col-md-4' align='center' ><label>@ ";echo $_SESSION['venue'];echo "</label></div>
            <div class='col-md-4' align='center' ><label>";echo $_SESSION['format'];echo " match</label></div>
        </div>
        <div class='row' >
        <br><div class='col-md-12' align='center' ><h3>Batting Statistics</h3></div>
        </div>";
for($itr=1;$itr<$_SESSION["batsmen"];$itr++){
    if($_SESSION['howout'.$itr]=='dnb'){$_SESSION['howout'.$itr]="Did Not Bat";}
    else if($_SESSION['howout'.$itr]=='no'){$_SESSION['howout'.$itr]="Not Out";}
    else if($_SESSION['howout'.$itr]=='b' ){$_SESSION['howout'.$itr]="Bowled";}
    else if($_SESSION['howout'.$itr]=='l' ){$_SESSION['howout'.$itr]="LBW";}
    else if($_SESSION['howout'.$itr]=='c' ){$_SESSION['howout'.$itr]="Caught";}
    else if($_SESSION['howout'.$itr]=='ro'){$_SESSION['howout'.$itr]="Run Out";}
    else if($_SESSION['howout'.$itr]=='s' ){$_SESSION['howout'.$itr]="Stumped";}
    else if($_SESSION['howout'.$itr]=='ht'){$_SESSION['howout'.$itr]="Hit Wicket";}
    echo "<br><div class='container' id='player'>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$_SESSION['name'.$itr]."</div>
                <div class='col-md-2'>".$_SESSION['howout'.$itr]."</div>
                <div class='col-md-2' align='right'>".$_SESSION['marks'.$itr]."</div>
                <div class='col-md-2'></div>
            </div>";
            if($itr==$_SESSION["batsmen"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['extras']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['total']."</div><div class='col-md-2'></div></div>";
            }
        echo "</div>";
        
}
echo "<br><br><div class='container' id='player' align='center'>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Scored ".$_SESSION['total']." for ".$_SESSION['wickets']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$_SESSION['overs']." Overs</h4</div>
        </div>
        </div>";




        echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$_SESSION["bowlers"];$itr2++){

echo "<br><div class='container' id='player'>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$_SESSION['b'.$itr2]."</div>
            <div class='col-md-2'>".$_SESSION['bovers'.$itr2]."</div>
            <div class='col-md-1'>".$_SESSION['bruns'.$itr2]."</div>
            <div class='col-md-1'>".$_SESSION['bextras'.$itr2]."</div>
            <div class='col-md-1'>".$_SESSION['bwickets'.$itr2]."</div>
            
            <div class='col-md-2'></div>
        </div>";
        if($itr2==$_SESSION["bowlers"]-1){
            echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['opextras']."</div><div class='col-md-2'></div></div>";
            echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['optotal']."</div><div class='col-md-2'></div></div>";
        }
    echo "</div>";
    
}
echo "<br><br><div class='container' id='player' align='center'>
    <div class='row' >
        <div class='col-md-12' align='center' ><h4>Opponent Scored ".$_SESSION['optotal']." for ".$_SESSION['opwickets']."</h4></div>
    </div>
    <div class='row' >    
        <div class='col-md-12' align='center' ><h4>In ".$_SESSION['opovers']." Overs</h4</div>
    </div>
    </div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #player{
            background-color:;
        }
    </style>
    
</head>

<body>
<?php

if(isset($_SESSION['decision'])){
	if($_SESSION['decision']=="Won"){
		echo "<br><h3>UOP Won</h3><br>";
	}
	else if($_SESSION['decision']=="Lost"){
		echo "<br><h3>UOP Lost</h3><br>";
	}
	else if($_SESSION['decision']=="Tie"){
		echo "<br><h3>It's a tie</h3><br>";
	}
	else if($_SESSION['decision']=="Drawn"){
		echo "<br><h3>It's Drawn</h3><br>";
	}
}

?>
<form action="result.php" method="post">
 <input type='submit' class='form-control' value='Update Database' name='update'>
<br><br>
</form>

</body>


<?php

if(isset($_POST["update"])){

	for($itr3=1;$itr3<12;$itr3++){
		if(!isset($_SESSION['name'.$itr3])){$_SESSION['name'.$itr3]=NULL;}
		if(!isset($_SESSION['howout'.$itr3])){$_SESSION['howout'.$itr3]=NULL;}
		if(!isset($_SESSION['marks'.$itr3])){$_SESSION['marks'.$itr3]=NULL;}
	}
	for($itr4=1;$itr4<12;$itr4++){
		if(!isset($_SESSION['b'.$itr4])){$_SESSION['b'.$itr4]=NULL;}
		if(!isset($_SESSION['bruns'.$itr4])){$_SESSION['bruns'.$itr4]=NULL;}
		if(!isset($_SESSION['bovers'.$itr4])){$_SESSION['bovers'.$itr4]=NULL;}
		if(!isset($_SESSION['bextras'.$itr4])){$_SESSION['bextras'.$itr4]=NULL;}
		if(!isset($_SESSION['bwickets'.$itr4])){$_SESSION['bwickets'.$itr4]=NULL;}
	}
	if(!isset($_SESSION['overs'])){$_SESSION['overs']=NULL;}
	if(!isset($_SESSION['opovers'])){$_SESSION['opovers']=NULL;}
	if(!isset($_SESSION['extras'])){$_SESSION['extras']=NULL;}
	if(!isset($_SESSION['opextras'])){$_SESSION['opextras']=NULL;}




	$add_scorecard_query="INSERT INTO `matches_scorecard` (`match_no`,
	  `total`, `overs`, `extras`, `wickets`,
	  `optotal`, `opovers`, `opextras`, `opwickets` , `batsmen` , `bowlers` ,
	  `name1`, `howout1`, `marks1`, 
	  `name2`, `howout2`, `marks2`, 
	  `name3`, `howout3`, `marks3`, 
	  `name4`, `howout4`, `marks4`, 
	  `name5`, `howout5`, `marks5`, 
	  `name6`, `howout6`, `marks6`, 
	  `name7`, `howout7`, `marks7`, 
	  `name8`, `howout8`, `marks8`, 
	  `name9`, `howout9`, `marks9`, 
	  `name10`, `howout10`, `marks10`, 
	  `name11`, `howout11`, `marks11`, 
	  
	  `b1`, `bovers1`, `bruns1`, `bextras1`, `bwickets1`, 
	  `b2`, `bovers2`, `bruns2`, `bextras2`, `bwickets2`, 
	  `b3`, `bovers3`, `bruns3`, `bextras3`, `bwickets3`, 
	  `b4`, `bovers4`, `bruns4`, `bextras4`, `bwickets4`, 
	  `b5`, `bovers5`, `bruns5`, `bextras5`, `bwickets5`, 
	  `b6`, `bovers6`, `bruns6`, `bextras6`, `bwickets6`, 
	  `b7`, `bovers7`, `bruns7`, `bextras7`, `bwickets7`, 
	  `b8`, `bovers8`, `bruns8`, `bextras8`, `bwickets8`, 
	  `b9`, `bovers9`, `bruns9`, `bextras9`, `bwickets9`, 
	  `b10`, `bovers10`, `bruns10`, `bextras10`, `bwickets10`, 
	  `b11`, `bovers11`, `bruns11`, `bextras11`, `bwickets11`) 
	  VALUES ('".$_SESSION['match_no']."',
	  '".$_SESSION['total']."','".$_SESSION['overs']."', '".$_SESSION['extras']."' , '".$_SESSION['wickets']."',
	   '".$_SESSION['optotal']."', '".$_SESSION['opovers']."', '".$_SESSION['opextras']."' , '".$_SESSION['opwickets']."', '".$_SESSION['batsmen']."', '".$_SESSION['bowlers']."', 
	   '".$_SESSION['name1']."', '".$_SESSION['howout1']."', '".$_SESSION['marks1']."', 
	   '".$_SESSION['name2']."', '".$_SESSION['howout2']."', '".$_SESSION['marks2']."', 
	   '".$_SESSION['name3']."', '".$_SESSION['howout3']."', '".$_SESSION['marks3']."', 
	   '".$_SESSION['name4']."', '".$_SESSION['howout4']."', '".$_SESSION['marks4']."', 
	   '".$_SESSION['name5']."', '".$_SESSION['howout5']."', '".$_SESSION['marks5']."', 
	   '".$_SESSION['name6']."', '".$_SESSION['howout6']."', '".$_SESSION['marks6']."', 
	   '".$_SESSION['name7']."', '".$_SESSION['howout7']."', '".$_SESSION['marks7']."', 
	   '".$_SESSION['name8']."', '".$_SESSION['howout8']."', '".$_SESSION['marks8']."', 
	   '".$_SESSION['name9']."', '".$_SESSION['howout9']."', '".$_SESSION['marks9']."', 
	   '".$_SESSION['name10']."', '".$_SESSION['howout10']."', '".$_SESSION['marks10']."', 
	   '".$_SESSION['name11']."', '".$_SESSION['howout11']."', '".$_SESSION['marks11']."',
		
	   '".$_SESSION['b1']."', '".$_SESSION['bovers1']."', '".$_SESSION['bruns1']."', '".$_SESSION['bextras1']."', '".$_SESSION['bwickets1']."', 
	   '".$_SESSION['b2']."', '".$_SESSION['bovers2']."', '".$_SESSION['bruns2']."', '".$_SESSION['bextras2']."', '".$_SESSION['bwickets2']."', 
	   '".$_SESSION['b3']."', '".$_SESSION['bovers3']."', '".$_SESSION['bruns3']."', '".$_SESSION['bextras3']."', '".$_SESSION['bwickets3']."', 
	   '".$_SESSION['b4']."', '".$_SESSION['bovers4']."', '".$_SESSION['bruns4']."', '".$_SESSION['bextras4']."', '".$_SESSION['bwickets4']."', 
	   '".$_SESSION['b5']."', '".$_SESSION['bovers5']."', '".$_SESSION['bruns5']."', '".$_SESSION['bextras5']."', '".$_SESSION['bwickets5']."', 
	   '".$_SESSION['b6']."', '".$_SESSION['bovers6']."', '".$_SESSION['bruns6']."', '".$_SESSION['bextras6']."', '".$_SESSION['bwickets6']."', 
	   '".$_SESSION['b7']."', '".$_SESSION['bovers7']."', '".$_SESSION['bruns7']."', '".$_SESSION['bextras7']."', '".$_SESSION['bwickets7']."', 
	   '".$_SESSION['b8']."', '".$_SESSION['bovers8']."', '".$_SESSION['bruns8']."', '".$_SESSION['bextras8']."', '".$_SESSION['bwickets8']."', 
	   '".$_SESSION['b9']."', '".$_SESSION['bovers9']."', '".$_SESSION['bruns9']."', '".$_SESSION['bextras9']."', '".$_SESSION['bwickets9']."', 
	   '".$_SESSION['b10']."', '".$_SESSION['bovers10']."', '".$_SESSION['bruns10']."', '".$_SESSION['bextras10']."', '".$_SESSION['bwickets10']."', 
	   '".$_SESSION['b11']."', '".$_SESSION['bovers11']."', '".$_SESSION['bruns11']."', '".$_SESSION['bextras11']."', '".$_SESSION['bwickets11']."')
	";
			if($is_add_scorecard_query_run=mysqli_query($connect,$add_scorecard_query)){
				echo '<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-info" alert-dismissable">
						<a href="result.php" class="close" data-dismiss="alert" arial-label="close">&times</a>
						<strong>Database is successfully updated</strong>
						</div><br>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>';
			}
			else{
				//echo "oops";
			}
			/* for($itr6=1;$itr6<$_SESSION["batsmen"];$itr6++){
				$_SESSION['reg_no'.$itr6]=$itr6;
			} */
if($_SESSION['format']=="T20"){
		for($itr5=1;$itr5<$_SESSION["batsmen"];$itr5++){
			$search_player_query="SELECT * FROM `t20batting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5]."' ";
			$is_search_player_query_run=mysqli_query($connect,$search_player_query);
			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);

			$matches=$search_player_query_execute["Matches"];
			$matches++;
			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5];
			$most=$search_player_query_execute["Most"];
			$one=$search_player_query_execute["one"];
			$two=$search_player_query_execute["two"];
			$three=$search_player_query_execute["three"];
			$four=$search_player_query_execute["four"];
			$five=$search_player_query_execute["five"];
			$six=$search_player_query_execute["six"];
			$seven=$search_player_query_execute["seven"];
			$eight=$search_player_query_execute["eight"];
			$nine=$search_player_query_execute["nine"];
			$ten=$search_player_query_execute["ten"];
			$eleven=$search_player_query_execute["eleven"];
			$bowled=$search_player_query_execute["Bowled"];
			$caught=$search_player_query_execute["Caught"];
			$lbw=$search_player_query_execute["LBW"];
			$runout=$search_player_query_execute["Runout"];
			$stumped=$search_player_query_execute["Stumped"];
			$hitwicket=$search_player_query_execute["Hitwicket"];
			$notout=$search_player_query_execute["Notout"];

			//Updating how out?
			if($_SESSION['howout'.$itr5]=="Not Out"){$notout++;}
			else if ($_SESSION['howout'.$itr5]=="Bowled"){$bowled++;}
			else if ($_SESSION['howout'.$itr5]=="Caught"){$caught++;}
			else if ($_SESSION['howout'.$itr5]=="LBW"){$lbw++;}
			else if ($_SESSION['howout'.$itr5]=="Run Out"){$runout++;}
			else if ($_SESSION['howout'.$itr5]=="Stumped"){$stumped++;}
			else if ($_SESSION['howout'.$itr5]=="Hit Wicket"){$hitwicket++;}



			//Most Runs in an individual innings
			if($_SESSION['marks'.$itr5]>$most){
				$most=$_SESSION['marks'.$itr5];
			}

			//Calculating the average
			$outs=$matches-$notout;
			if($outs==0){$outs=1;}
			$average=$runs/$outs;

			//Calculating the no. hundreds
			$hundreds=$search_player_query_execute["Hundreds"];
			if($_SESSION['marks'.$itr5]>99){
				$hundreds++;
			}

			//Calculating the no. fifties
			$fifties=$search_player_query_execute["Fifties"];
			if(49<$_SESSION['marks'.$itr5] && $_SESSION['marks'.$itr5]<100){
				$fifties++;
			}

			
			
		
			//Adding batting place scores
			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5];}
			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5];}
			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5];}
			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5];}
			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5];}
			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5];}
			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5];}
			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5];}
			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5];}
			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5];}
			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5];}

			$add_batting_statistics_query="UPDATE `t20batting_statistics` SET `Matches`='".$matches."',
			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 
			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',
			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',
			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `t20batting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5]."'";
			$is_add_batting_statistics_query_run=mysqli_query($connect,$add_batting_statistics_query);

		}

		for($itr6=1;$itr6<$_SESSION["bowlers"];$itr6++){

			$search_player_query2="SELECT * FROM `t20bowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6]."' ";
			$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);
			$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);
			$bmatches=$search_player_query2_execute["Matches"];
			$bmatches++;
			$overs=$search_player_query2_execute["Overs"];
			$overs=$overs+$_SESSION['bovers'.$itr6];
			$wickets=$search_player_query2_execute["Wickets"];
			$wickets=$wickets+$_SESSION['bwickets'.$itr6];
			$bruns=$search_player_query2_execute["Runs"];
			$bruns=$bruns+$_SESSION['bruns'.$itr6];
			if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}
			if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}
			$five=$search_player_query2_execute["Five_wickets"];
			if($_SESSION['bwickets'.$itr6]>4){
				$five++;
			}

			$add_bowling_statistics_query="UPDATE `t20bowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `t20bowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6]."' ";
			$is_add_bowling_statistics_query_run=mysqli_query($connect,$add_bowling_statistics_query);
		}
}
else if($_SESSION['format']=="2_Day"){
    for($itr5=1;$itr5<$_SESSION["batsmen"];$itr5++){
			$search_player_query="SELECT * FROM `2daybatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5]."' ";
			$is_search_player_query_run=mysqli_query($connect,$search_player_query);
			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);

			$matches=$search_player_query_execute["Matches"];
			$matches++;
			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5];
			$most=$search_player_query_execute["Most"];
			$one=$search_player_query_execute["one"];
			$two=$search_player_query_execute["two"];
			$three=$search_player_query_execute["three"];
			$four=$search_player_query_execute["four"];
			$five=$search_player_query_execute["five"];
			$six=$search_player_query_execute["six"];
			$seven=$search_player_query_execute["seven"];
			$eight=$search_player_query_execute["eight"];
			$nine=$search_player_query_execute["nine"];
			$ten=$search_player_query_execute["ten"];
			$eleven=$search_player_query_execute["eleven"];
			$bowled=$search_player_query_execute["Bowled"];
			$caught=$search_player_query_execute["Caught"];
			$lbw=$search_player_query_execute["LBW"];
			$runout=$search_player_query_execute["Runout"];
			$stumped=$search_player_query_execute["Stumped"];
			$hitwicket=$search_player_query_execute["Hitwicket"];
			$notout=$search_player_query_execute["Notout"];

			//Updating how out?
			if($_SESSION['howout'.$itr5]=="Not Out"){$notout++;}
			else if ($_SESSION['howout'.$itr5]=="Bowled"){$bowled++;}
			else if ($_SESSION['howout'.$itr5]=="Caught"){$caught++;}
			else if ($_SESSION['howout'.$itr5]=="LBW"){$lbw++;}
			else if ($_SESSION['howout'.$itr5]=="Run Out"){$runout++;}
			else if ($_SESSION['howout'.$itr5]=="Stumped"){$stumped++;}
			else if ($_SESSION['howout'.$itr5]=="Hit Wicket"){$hitwicket++;}



			//Most Runs in an individual innings
			if($_SESSION['marks'.$itr5]>$most){
				$most=$_SESSION['marks'.$itr5];
			}

			//Calculating the average
			$outs=$matches-$notout;
			if($outs==0){$outs=1;}
			$average=$runs/$outs;

			//Calculating the no. hundreds
			$hundreds=$search_player_query_execute["Hundreds"];
			if($_SESSION['marks'.$itr5]>99){
				$hundreds++;
			}

			//Calculating the no. fifties
			$fifties=$search_player_query_execute["Fifties"];
			if(49<$_SESSION['marks'.$itr5] && $_SESSION['marks'.$itr5]<100){
				$fifties++;
			}

			
			
		
			//Adding batting place scores
			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5];}
			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5];}
			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5];}
			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5];}
			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5];}
			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5];}
			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5];}
			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5];}
			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5];}
			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5];}
			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5];}

			$add_batting_statistics_query="UPDATE `2daybatting_statistics` SET `Matches`='".$matches."',
			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 
			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',
			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',
			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `2daybatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5]."'";
			$is_add_batting_statistics_query_run=mysqli_query($connect,$add_batting_statistics_query);

		}

		for($itr6=1;$itr6<$_SESSION["bowlers"];$itr6++){

			$search_player_query2="SELECT * FROM `2daybowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6]."' ";
			$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);
			$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);
			$bmatches=$search_player_query2_execute["Matches"];
			$bmatches++;
			$overs=$search_player_query2_execute["Overs"];
			$overs=$overs+$_SESSION['bovers'.$itr6];
			$wickets=$search_player_query2_execute["Wickets"];
			$wickets=$wickets+$_SESSION['bwickets'.$itr6];
			$bruns=$search_player_query2_execute["Runs"];
			$bruns=$bruns+$_SESSION['bruns'.$itr6];
			if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}
			if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}
			$five=$search_player_query2_execute["Five_wickets"];
			if($_SESSION['bwickets'.$itr6]>4){
				$five++;
			}

			$add_bowling_statistics_query="UPDATE `2daybowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `2daybowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6]."' ";
			$is_add_bowling_statistics_query_run=mysqli_query($connect,$add_bowling_statistics_query);
		}
}
else if($_SESSION['format']=="Inter_University"){
    for($itr5=1;$itr5<$_SESSION["batsmen"];$itr5++){
			$search_player_query="SELECT * FROM `interunibatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5]."' ";
			$is_search_player_query_run=mysqli_query($connect,$search_player_query);
			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);

			$matches=$search_player_query_execute["Matches"];
			$matches++;
			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5];
			$most=$search_player_query_execute["Most"];
			$one=$search_player_query_execute["one"];
			$two=$search_player_query_execute["two"];
			$three=$search_player_query_execute["three"];
			$four=$search_player_query_execute["four"];
			$five=$search_player_query_execute["five"];
			$six=$search_player_query_execute["six"];
			$seven=$search_player_query_execute["seven"];
			$eight=$search_player_query_execute["eight"];
			$nine=$search_player_query_execute["nine"];
			$ten=$search_player_query_execute["ten"];
			$eleven=$search_player_query_execute["eleven"];
			$bowled=$search_player_query_execute["Bowled"];
			$caught=$search_player_query_execute["Caught"];
			$lbw=$search_player_query_execute["LBW"];
			$runout=$search_player_query_execute["Runout"];
			$stumped=$search_player_query_execute["Stumped"];
			$hitwicket=$search_player_query_execute["Hitwicket"];
			$notout=$search_player_query_execute["Notout"];

			//Updating how out?
			if($_SESSION['howout'.$itr5]=="Not Out"){$notout++;}
			else if ($_SESSION['howout'.$itr5]=="Bowled"){$bowled++;}
			else if ($_SESSION['howout'.$itr5]=="Caught"){$caught++;}
			else if ($_SESSION['howout'.$itr5]=="LBW"){$lbw++;}
			else if ($_SESSION['howout'.$itr5]=="Run Out"){$runout++;}
			else if ($_SESSION['howout'.$itr5]=="Stumped"){$stumped++;}
			else if ($_SESSION['howout'.$itr5]=="Hit Wicket"){$hitwicket++;}



			//Most Runs in an individual innings
			if($_SESSION['marks'.$itr5]>$most){
				$most=$_SESSION['marks'.$itr5];
			}

			//Calculating the average
			$outs=$matches-$notout;
			if($outs==0){$outs=1;}
			$average=$runs/$outs;

			//Calculating the no. hundreds
			$hundreds=$search_player_query_execute["Hundreds"];
			if($_SESSION['marks'.$itr5]>99){
				$hundreds++;
			}

			//Calculating the no. fifties
			$fifties=$search_player_query_execute["Fifties"];
			if(49<$_SESSION['marks'.$itr5] && $_SESSION['marks'.$itr5]<100){
				$fifties++;
			}

			
			
		
			//Adding batting place scores
			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5];}
			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5];}
			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5];}
			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5];}
			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5];}
			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5];}
			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5];}
			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5];}
			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5];}
			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5];}
			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5];}

			$add_batting_statistics_query="UPDATE `interunibatting_statistics` SET `Matches`='".$matches."',
			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 
			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',
			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',
			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `interunibatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5]."'";
			$is_add_batting_statistics_query_run=mysqli_query($connect,$add_batting_statistics_query);

		}

		for($itr6=1;$itr6<$_SESSION["bowlers"];$itr6++){

			$search_player_query2="SELECT * FROM `interunibowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6]."' ";
			$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);
			$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);
			$bmatches=$search_player_query2_execute["Matches"];
			$bmatches++;
			$overs=$search_player_query2_execute["Overs"];
			$overs=$overs+$_SESSION['bovers'.$itr6];
			$wickets=$search_player_query2_execute["Wickets"];
			$wickets=$wickets+$_SESSION['bwickets'.$itr6];
			$bruns=$search_player_query2_execute["Runs"];
			$bruns=$bruns+$_SESSION['bruns'.$itr6];
			if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}
			if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}
			$five=$search_player_query2_execute["Five_wickets"];
			if($_SESSION['bwickets'.$itr6]>4){
				$five++;
			}

			$add_bowling_statistics_query="UPDATE `interunibowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `interunibowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6]."' ";
			$is_add_bowling_statistics_query_run=mysqli_query($connect,$add_bowling_statistics_query);
		}
		for($itr5=1;$itr5<$_SESSION["batsmen"];$itr5++){
			$search_player_query="SELECT * FROM `batting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5]."' ";
			$is_search_player_query_run=mysqli_query($connect,$search_player_query);
			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);

			$matches=$search_player_query_execute["Matches"];
			$matches++;
			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5];
			$most=$search_player_query_execute["Most"];
			$one=$search_player_query_execute["one"];
			$two=$search_player_query_execute["two"];
			$three=$search_player_query_execute["three"];
			$four=$search_player_query_execute["four"];
			$five=$search_player_query_execute["five"];
			$six=$search_player_query_execute["six"];
			$seven=$search_player_query_execute["seven"];
			$eight=$search_player_query_execute["eight"];
			$nine=$search_player_query_execute["nine"];
			$ten=$search_player_query_execute["ten"];
			$eleven=$search_player_query_execute["eleven"];
			$bowled=$search_player_query_execute["Bowled"];
			$caught=$search_player_query_execute["Caught"];
			$lbw=$search_player_query_execute["LBW"];
			$runout=$search_player_query_execute["Runout"];
			$stumped=$search_player_query_execute["Stumped"];
			$hitwicket=$search_player_query_execute["Hitwicket"];
			$notout=$search_player_query_execute["Notout"];

			//Updating how out?
			if($_SESSION['howout'.$itr5]=="Not Out"){$notout++;}
			else if ($_SESSION['howout'.$itr5]=="Bowled"){$bowled++;}
			else if ($_SESSION['howout'.$itr5]=="Caught"){$caught++;}
			else if ($_SESSION['howout'.$itr5]=="LBW"){$lbw++;}
			else if ($_SESSION['howout'.$itr5]=="Run Out"){$runout++;}
			else if ($_SESSION['howout'.$itr5]=="Stumped"){$stumped++;}
			else if ($_SESSION['howout'.$itr5]=="Hit Wicket"){$hitwicket++;}



			//Most Runs in an individual innings
			if($_SESSION['marks'.$itr5]>$most){
				$most=$_SESSION['marks'.$itr5];
			}

			//Calculating the average
			$outs=$matches-$notout;
			if($outs==0){$outs=1;}
			$average=$runs/$outs;

			//Calculating the no. hundreds
			$hundreds=$search_player_query_execute["Hundreds"];
			if($_SESSION['marks'.$itr5]>99){
				$hundreds++;
			}

			//Calculating the no. fifties
			$fifties=$search_player_query_execute["Fifties"];
			if(49<$_SESSION['marks'.$itr5] && $_SESSION['marks'.$itr5]<100){
				$fifties++;
			}

			
			
		
			//Adding batting place scores
			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5];}
			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5];}
			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5];}
			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5];}
			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5];}
			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5];}
			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5];}
			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5];}
			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5];}
			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5];}
			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5];}

			$add_batting_statistics_query="UPDATE `batting_statistics` SET `Matches`='".$matches."',
			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 
			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',
			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',
			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `batting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5]."'";
			$is_add_batting_statistics_query_run=mysqli_query($connect,$add_batting_statistics_query);

		}

		for($itr6=1;$itr6<$_SESSION["bowlers"];$itr6++){

			$search_player_query2="SELECT * FROM `bowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6]."' ";
			$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);
			$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);
			$bmatches=$search_player_query2_execute["Matches"];
			$bmatches++;
			$overs=$search_player_query2_execute["Overs"];
			$overs=$overs+$_SESSION['bovers'.$itr6];
			$wickets=$search_player_query2_execute["Wickets"];
			$wickets=$wickets+$_SESSION['bwickets'.$itr6];
			$bruns=$search_player_query2_execute["Runs"];
			$bruns=$bruns+$_SESSION['bruns'.$itr6];
			if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}
			if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}
			$five=$search_player_query2_execute["Five_wickets"];
			if($_SESSION['bwickets'.$itr6]>4){
				$five++;
			}

			$add_bowling_statistics_query="UPDATE `bowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `bowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6]."' ";
			$is_add_bowling_statistics_query_run=mysqli_query($connect,$add_bowling_statistics_query);
		}
}
else{
    for($itr5=1;$itr5<$_SESSION["batsmen"];$itr5++){
			$search_player_query="SELECT * FROM `batting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5]."' ";
			$is_search_player_query_run=mysqli_query($connect,$search_player_query);
			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);

			$matches=$search_player_query_execute["Matches"];
			$matches++;
			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5];
			$most=$search_player_query_execute["Most"];
			$one=$search_player_query_execute["one"];
			$two=$search_player_query_execute["two"];
			$three=$search_player_query_execute["three"];
			$four=$search_player_query_execute["four"];
			$five=$search_player_query_execute["five"];
			$six=$search_player_query_execute["six"];
			$seven=$search_player_query_execute["seven"];
			$eight=$search_player_query_execute["eight"];
			$nine=$search_player_query_execute["nine"];
			$ten=$search_player_query_execute["ten"];
			$eleven=$search_player_query_execute["eleven"];
			$bowled=$search_player_query_execute["Bowled"];
			$caught=$search_player_query_execute["Caught"];
			$lbw=$search_player_query_execute["LBW"];
			$runout=$search_player_query_execute["Runout"];
			$stumped=$search_player_query_execute["Stumped"];
			$hitwicket=$search_player_query_execute["Hitwicket"];
			$notout=$search_player_query_execute["Notout"];

			//Updating how out?
			if($_SESSION['howout'.$itr5]=="Not Out"){$notout++;}
			else if ($_SESSION['howout'.$itr5]=="Bowled"){$bowled++;}
			else if ($_SESSION['howout'.$itr5]=="Caught"){$caught++;}
			else if ($_SESSION['howout'.$itr5]=="LBW"){$lbw++;}
			else if ($_SESSION['howout'.$itr5]=="Run Out"){$runout++;}
			else if ($_SESSION['howout'.$itr5]=="Stumped"){$stumped++;}
			else if ($_SESSION['howout'.$itr5]=="Hit Wicket"){$hitwicket++;}



			//Most Runs in an individual innings
			if($_SESSION['marks'.$itr5]>$most){
				$most=$_SESSION['marks'.$itr5];
			}

			//Calculating the average
			$outs=$matches-$notout;
			if($outs==0){$outs=1;}
			$average=$runs/$outs;

			//Calculating the no. hundreds
			$hundreds=$search_player_query_execute["Hundreds"];
			if($_SESSION['marks'.$itr5]>99){
				$hundreds++;
			}

			//Calculating the no. fifties
			$fifties=$search_player_query_execute["Fifties"];
			if(49<$_SESSION['marks'.$itr5] && $_SESSION['marks'.$itr5]<100){
				$fifties++;
			}

			
			
		
			//Adding batting place scores
			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5];}
			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5];}
			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5];}
			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5];}
			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5];}
			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5];}
			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5];}
			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5];}
			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5];}
			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5];}
			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5];}

			$add_batting_statistics_query="UPDATE `batting_statistics` SET `Matches`='".$matches."',
			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 
			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',
			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',
			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `batting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5]."'";
			$is_add_batting_statistics_query_run=mysqli_query($connect,$add_batting_statistics_query);

		}

		for($itr6=1;$itr6<$_SESSION["bowlers"];$itr6++){

			$search_player_query2="SELECT * FROM `bowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6]."' ";
			$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);
			$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);
			$bmatches=$search_player_query2_execute["Matches"];
			$bmatches++;
			$overs=$search_player_query2_execute["Overs"];
			$overs=$overs+$_SESSION['bovers'.$itr6];
			$wickets=$search_player_query2_execute["Wickets"];
			$wickets=$wickets+$_SESSION['bwickets'.$itr6];
			$bruns=$search_player_query2_execute["Runs"];
			$bruns=$bruns+$_SESSION['bruns'.$itr6];
			if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}
			if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}
			$five=$search_player_query2_execute["Five_wickets"];
			if($_SESSION['bwickets'.$itr6]>4){
				$five++;
			}

			$add_bowling_statistics_query="UPDATE `bowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `bowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6]."' ";
			$is_add_bowling_statistics_query_run=mysqli_query($connect,$add_bowling_statistics_query);
		}
}
		$add_match_directory_query="INSERT INTO `matches_directory` (`match_no`, `format`, `Date`, `Opponent`, `Venue`, `UOP_scores`, `UOP_wickets`, `UOP_overs`, `Opp_scores`, `Opp_wickets`, `Opp_overs`, `Decision`) VALUES ('".$_SESSION['match_no']."', '".$_SESSION['format']."', '".$_SESSION['date']."', '".$_SESSION['op']."', '".$_SESSION['venue']."', '".$_SESSION['total']."', '".$_SESSION['wickets']."', '".$_SESSION['overs']."', '".$_SESSION['optotal']."', '".$_SESSION['opwickets']."', '".$_SESSION['opovers']."', '".$_SESSION['decision']."')";
		/*$add_match_directory_query="INSERT INTO `matches_directory` (`match_no`, `Date`, `Opponent`, `Venue`, `UOP_scores`, `UOP_wickets`, `UOP_overs`, `Opp_scores`, `Opp_wickets`, `Opp_overs`, `Decision`) VALUES ('".$_SESSION['match_no']."', NULL, '".$_SESSION['op']."', '".$_SESSION['venue']."', '".$_SESSION['total']."', '".$_SESSION['wickets']."', '".$_SESSION['overs']."', '".$_SESSION['optotal']."', '".$_SESSION['opwickets']."', '".$_SESSION['opovers']."', '".$_SESSION['decision']."')";*/
		$is_add_match_directory_query_run=mysqli_query($connect,$add_match_directory_query);
}

?>

<script type="text/javascript">

$(document).ready(function () {

window.setTimeout(function() {
    $(".alert").fadeTo(1500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);

});
</script>
</html>