<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
if(isset($_POST["update"])){
	session_destroy();
    header ("location:index.php");
}



require 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match Team A</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #two{
            background-color:grey;
            padding:15px;
            color:white;
        }
		body{
			padding-left:25px;
		}
    </style>
</head>
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
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> Options<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view.php"><span class="glyphicon glyphicon-plus"></span> View Details</a></li>
			</ul>
			</li>
        </ul>
      </div>
    </div>
  </div>
</nav><br><br>

<?php

if(isset($_SESSION['decision'])){
	if($_SESSION['decision']=="AWon"){
		echo "<br><h3>UOP Team A Won</h3><br>";
	}
	else if($_SESSION['decision']=="BWon"){
		echo "<br><h3>UOP Team B Won</h3><br>";
	}
	else if($_SESSION['decision']=="Tie"){
		echo "<br><h3>It's a tie</h3><br>";
	}
	else if($_SESSION['decision']=="Drawn"){
		echo "<br><h3>It's Drawn</h3><br>";
	}
}
echo "<br><div class='row' >
            <br>
            <div class='col-md-4' align='center' ><label>";echo $_SESSION['date'];echo "</label></div><div class='col-md-4' align='center' ><label>";echo $_SESSION['format'];echo "</label></div>
            <div class='col-md-4' align='center' ><label>Match No. : ";echo $_SESSION['match_no'];echo "</label></div>
        </div>";

?>
<div class='container'><div class='col-md-6'>
<?php
echo "<h3>Team A</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$_SESSION["batsmenA"];$itr++){
    if($_SESSION['howout'.$itr.'a']=='dnb'){$_SESSION['howout'.$itr.'a']="Did Not Bat";}
    else if($_SESSION['howout'.$itr.'a']=='no'){$_SESSION['howout'.$itr.'a']="Not Out";}
    else if($_SESSION['howout'.$itr.'a']=='b' ){$_SESSION['howout'.$itr.'a']="Bowled";}
    else if($_SESSION['howout'.$itr.'a']=='l' ){$_SESSION['howout'.$itr.'a']="LBW";}
    else if($_SESSION['howout'.$itr.'a']=='c' ){$_SESSION['howout'.$itr.'a']="Caught";}
    else if($_SESSION['howout'.$itr.'a']=='ro'){$_SESSION['howout'.$itr.'a']="Run Out";}
    else if($_SESSION['howout'.$itr.'a']=='s' ){$_SESSION['howout'.$itr.'a']="Stumped";}
    else if($_SESSION['howout'.$itr.'a']=='ht'){$_SESSION['howout'.$itr.'a']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$_SESSION['name'.$itr.'a']."</div>
                <div class='col-md-3'>".$_SESSION['howout'.$itr.'a']."</div>
                <div class='col-md-2' align='right'>".$_SESSION['marks'.$itr.'a']."</div>
                <div class='col-md-1'></div>
            </div>";
            if($itr==$_SESSION["batsmenA"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['extrasA']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['totalA']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team A Scored ".$_SESSION['totalA']." for ".$_SESSION['wicketsA']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$_SESSION['opoversB']." Overs</h4></div>
        </div>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$_SESSION["bowlersA"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$_SESSION['b'.$itr2.'a']."</div>
            <div class='col-md-2'>".$_SESSION['bovers'.$itr2.'a']."</div>
            <div class='col-md-1'>".$_SESSION['bruns'.$itr2.'a']."</div>
            <div class='col-md-1'>".$_SESSION['bextras'.$itr2.'a']."</div>
            <div class='col-md-1'>".$_SESSION['bwickets'.$itr2.'a']."</div>
        </div>";
    
}
?>

</div><div class='col-md-6'>
<?php
echo "<h3>Team B</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$_SESSION["batsmenB"];$itr++){
    if($_SESSION['howout'.$itr.'b']=='dnb'){$_SESSION['howout'.$itr.'b']="Did Not Bat";}
    else if($_SESSION['howout'.$itr.'b']=='no'){$_SESSION['howout'.$itr.'b']="Not Out";}
    else if($_SESSION['howout'.$itr.'b']=='b' ){$_SESSION['howout'.$itr.'b']="Bowled";}
    else if($_SESSION['howout'.$itr.'b']=='l' ){$_SESSION['howout'.$itr.'b']="LBW";}
    else if($_SESSION['howout'.$itr.'b']=='c' ){$_SESSION['howout'.$itr.'b']="Caught";}
    else if($_SESSION['howout'.$itr.'b']=='ro'){$_SESSION['howout'.$itr.'b']="Run Out";}
    else if($_SESSION['howout'.$itr.'b']=='s' ){$_SESSION['howout'.$itr.'b']="Stumped";}
    else if($_SESSION['howout'.$itr.'b']=='ht'){$_SESSION['howout'.$itr.'b']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$_SESSION['name'.$itr.'b']."</div>
                <div class='col-md-3'>".$_SESSION['howout'.$itr.'b']."</div>
                <div class='col-md-1' align='right'>".$_SESSION['marks'.$itr.'b']."</div>
                <div class='col-md-2'></div>
            </div>";
            if($itr==$_SESSION["batsmenB"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['extrasB']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['totalB']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team B Scored ".$_SESSION['totalB']." for ".$_SESSION['wicketsB']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$_SESSION['opoversA']." Overs</h4></div>
        </div>";
		
echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$_SESSION["bowlersB"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$_SESSION['b'.$itr2.'b']."</div>
            <div class='col-md-2'>".$_SESSION['bovers'.$itr2.'b']."</div>
            <div class='col-md-1'>".$_SESSION['bruns'.$itr2.'b']."</div>
            <div class='col-md-1'>".$_SESSION['bextras'.$itr2.'b']."</div>
            <div class='col-md-1'>".$_SESSION['bwickets'.$itr2.'b']."</div>
        </div>";
    
}
?></div></div>

<!--2nd Innings-->
<div class='container'><div class='col-md-6'>
<?php
echo "<h3>Team A 2nd Innings</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A 2nd Innings Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$_SESSION["batsmenA2nd"];$itr++){
    if($_SESSION['howout'.$itr.'a2nd']=='dnb'){$_SESSION['howout'.$itr.'a2nd']="Did Not Bat";}
    else if($_SESSION['howout'.$itr.'a2nd']=='no'){$_SESSION['howout'.$itr.'a2nd']="Not Out";}
    else if($_SESSION['howout'.$itr.'a2nd']=='b' ){$_SESSION['howout'.$itr.'a2nd']="Bowled";}
    else if($_SESSION['howout'.$itr.'a2nd']=='l' ){$_SESSION['howout'.$itr.'a2nd']="LBW";}
    else if($_SESSION['howout'.$itr.'a2nd']=='c' ){$_SESSION['howout'.$itr.'a2nd']="Caught";}
    else if($_SESSION['howout'.$itr.'a2nd']=='ro'){$_SESSION['howout'.$itr.'a2nd']="Run Out";}
    else if($_SESSION['howout'.$itr.'a2nd']=='s' ){$_SESSION['howout'.$itr.'a2nd']="Stumped";}
    else if($_SESSION['howout'.$itr.'a2nd']=='ht'){$_SESSION['howout'.$itr.'a2nd']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$_SESSION['name'.$itr.'a2nd']."</div>
                <div class='col-md-3'>".$_SESSION['howout'.$itr.'a2nd']."</div>
                <div class='col-md-2' align='right'>".$_SESSION['marks'.$itr.'a2nd']."</div>
                <div class='col-md-1'></div>
            </div>";
            if($itr==$_SESSION["batsmenA2nd"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['extrasA2nd']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['totalA2nd']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team A Scored ".$_SESSION['totalA2nd']." for ".$_SESSION['wicketsA2nd']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$_SESSION['opoversB2nd']." Overs</h4></div>
        </div>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A 2nd Innings Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$_SESSION["bowlersA2nd"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$_SESSION['b'.$itr2.'a2nd']."</div>
            <div class='col-md-2'>".$_SESSION['bovers'.$itr2.'a2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bruns'.$itr2.'a2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bextras'.$itr2.'a2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bwickets'.$itr2.'a2nd']."</div>
        </div>";
    
}
?>

</div><div class='col-md-6'>
<?php
echo "<h3>Team B 2nd Innings</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B 2nd Innings Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$_SESSION["batsmenB2nd"];$itr++){
    if($_SESSION['howout'.$itr.'b2nd']=='dnb'){$_SESSION['howout'.$itr.'b2nd']="Did Not Bat";}
    else if($_SESSION['howout'.$itr.'b2nd']=='no'){$_SESSION['howout'.$itr.'b2nd']="Not Out";}
    else if($_SESSION['howout'.$itr.'b2nd']=='b' ){$_SESSION['howout'.$itr.'b2nd']="Bowled";}
    else if($_SESSION['howout'.$itr.'b2nd']=='l' ){$_SESSION['howout'.$itr.'b2nd']="LBW";}
    else if($_SESSION['howout'.$itr.'b2nd']=='c' ){$_SESSION['howout'.$itr.'b2nd']="Caught";}
    else if($_SESSION['howout'.$itr.'b2nd']=='ro'){$_SESSION['howout'.$itr.'b2nd']="Run Out";}
    else if($_SESSION['howout'.$itr.'b2nd']=='s' ){$_SESSION['howout'.$itr.'b2nd']="Stumped";}
    else if($_SESSION['howout'.$itr.'b2nd']=='ht'){$_SESSION['howout'.$itr.'b2nd']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$_SESSION['name'.$itr.'b2nd']."</div>
                <div class='col-md-3'>".$_SESSION['howout'.$itr.'b2nd']."</div>
                <div class='col-md-1' align='right'>".$_SESSION['marks'.$itr.'b2nd']."</div>
                <div class='col-md-2'></div>
            </div>";
            if($itr==$_SESSION["batsmenB2nd"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['extrasB2nd']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$_SESSION['totalB2nd']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team B Scored ".$_SESSION['totalB2nd']." for ".$_SESSION['wicketsB2nd']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$_SESSION['opoversA2nd']." Overs</h4></div>
        </div>";
		
echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B 2nd Innings Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$_SESSION["bowlersB2nd"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$_SESSION['b'.$itr2.'b2nd']."</div>
            <div class='col-md-2'>".$_SESSION['bovers'.$itr2.'b2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bruns'.$itr2.'b2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bextras'.$itr2.'b2nd']."</div>
            <div class='col-md-1'>".$_SESSION['bwickets'.$itr2.'b2nd']."</div>
        </div>";
    
}
?></div></div>



<form action="h_result_2day" method="post">
 <input type='submit' class='form-control' value='Update Database' name='update'>
<br><br>
</form>
<?php
if(isset($_POST["update"])){
	for($itr3=1;$itr3<12;$itr3++){
		if(!isset($_SESSION['name'.$itr3.'a'])){$_SESSION['name'.$itr3.'a']=NULL;}
		if(!isset($_SESSION['howout'.$itr3.'a'])){$_SESSION['howout'.$itr3.'a']=NULL;}
		if(!isset($_SESSION['marks'.$itr3.'a'])){$_SESSION['marks'.$itr3.'a']=NULL;}
	}
	for($itr3=1;$itr3<12;$itr3++){
		if(!isset($_SESSION['name'.$itr3.'b'])){$_SESSION['name'.$itr3.'b']=NULL;}
		if(!isset($_SESSION['howout'.$itr3.'b'])){$_SESSION['howout'.$itr3.'b']=NULL;}
		if(!isset($_SESSION['marks'.$itr3.'b'])){$_SESSION['marks'.$itr3.'b']=NULL;}
	}

	for($itr4=1;$itr4<12;$itr4++){
		if(!isset($_SESSION['b'.$itr4.'a'])){$_SESSION['b'.$itr4.'a']=NULL;}
		if(!isset($_SESSION['bruns'.$itr4.'a'])){$_SESSION['bruns'.$itr4.'a']=NULL;}
		if(!isset($_SESSION['bovers'.$itr4.'a'])){$_SESSION['bovers'.$itr4.'a']=NULL;}
		if(!isset($_SESSION['bextras'.$itr4.'a'])){$_SESSION['bextras'.$itr4.'a']=NULL;}
		if(!isset($_SESSION['bwickets'.$itr4.'a'])){$_SESSION['bwickets'.$itr4.'a']=NULL;}
	}
	for($itr4=1;$itr4<12;$itr4++){
		if(!isset($_SESSION['b'.$itr4.'b'])){$_SESSION['b'.$itr4.'b']=NULL;}
		if(!isset($_SESSION['bruns'.$itr4.'b'])){$_SESSION['bruns'.$itr4.'b']=NULL;}
		if(!isset($_SESSION['bovers'.$itr4.'b'])){$_SESSION['bovers'.$itr4.'b']=NULL;}
		if(!isset($_SESSION['bextras'.$itr4.'b'])){$_SESSION['bextras'.$itr4.'b']=NULL;}
		if(!isset($_SESSION['bwickets'.$itr4.'b'])){$_SESSION['bwickets'.$itr4.'b']=NULL;}
	}

	
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	
	
	for($itr3=1;$itr3<12;$itr3++){
		if(!isset($_SESSION['name'.$itr3.'a2nd'])){$_SESSION['name'.$itr3.'a2nd']=NULL;}
		if(!isset($_SESSION['howout'.$itr3.'a2nd'])){$_SESSION['howout'.$itr3.'a2nd']=NULL;}
		if(!isset($_SESSION['marks'.$itr3.'a2nd'])){$_SESSION['marks'.$itr3.'a2nd']=NULL;}
	}
	for($itr3=1;$itr3<12;$itr3++){
		if(!isset($_SESSION['name'.$itr3.'b2nd'])){$_SESSION['name'.$itr3.'b2nd']=NULL;}
		if(!isset($_SESSION['howout'.$itr3.'b2nd'])){$_SESSION['howout'.$itr3.'b2nd']=NULL;}
		if(!isset($_SESSION['marks'.$itr3.'b2nd'])){$_SESSION['marks'.$itr3.'b2nd']=NULL;}
	}

	for($itr4=1;$itr4<12;$itr4++){
		if(!isset($_SESSION['b2nd'.$itr4.'a2nd'])){$_SESSION['b2nd'.$itr4.'a2nd']=NULL;}
		if(!isset($_SESSION['bruns'.$itr4.'a2nd'])){$_SESSION['bruns'.$itr4.'a2nd']=NULL;}
		if(!isset($_SESSION['bovers'.$itr4.'a2nd'])){$_SESSION['bovers'.$itr4.'a2nd']=NULL;}
		if(!isset($_SESSION['bextras'.$itr4.'a2nd'])){$_SESSION['bextras'.$itr4.'a2nd']=NULL;}
		if(!isset($_SESSION['bwickets'.$itr4.'a2nd'])){$_SESSION['bwickets'.$itr4.'a2nd']=NULL;}
	}
	for($itr4=1;$itr4<12;$itr4++){
		if(!isset($_SESSION['b2nd'.$itr4.'b2nd'])){$_SESSION['b2nd'.$itr4.'b2nd']=NULL;}
		if(!isset($_SESSION['bruns'.$itr4.'b2nd'])){$_SESSION['bruns'.$itr4.'b2nd']=NULL;}
		if(!isset($_SESSION['bovers'.$itr4.'b2nd'])){$_SESSION['bovers'.$itr4.'b2nd']=NULL;}
		if(!isset($_SESSION['bextras'.$itr4.'b2nd'])){$_SESSION['bextras'.$itr4.'b2nd']=NULL;}
		if(!isset($_SESSION['bwickets'.$itr4.'b2nd'])){$_SESSION['bwickets'.$itr4.'b2nd']=NULL;}
	}
	
	
	if(!isset($_SESSION['opoversA'])){$_SESSION['opoversA']=NULL;}
	if(!isset($_SESSION['extrasA'])){$_SESSION['extrasA']=NULL;}
	if(!isset($_SESSION['wicketsA'])){$_SESSION['wicketsA']=NULL;}
	if(!isset($_SESSION['totalA'])){$_SESSION['totalA']=NULL;}
	
	if(!isset($_SESSION['opoversB'])){$_SESSION['opoversB']=NULL;}
	if(!isset($_SESSION['extrasB'])){$_SESSION['extrasB']=NULL;}
	if(!isset($_SESSION['wicketsB'])){$_SESSION['wicketsB']=NULL;}
	if(!isset($_SESSION['totalB'])){$_SESSION['totalB']=NULL;}
	
	
	/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	
	if(!isset($_SESSION['opoversA2nd'])){$_SESSION['opoversA2nd']=NULL;}
	if(!isset($_SESSION['extrasA2nd'])){$_SESSION['extrasA2nd']=NULL;}
	if(!isset($_SESSION['wicketsA2nd'])){$_SESSION['wicketsA2nd']=NULL;}
	if(!isset($_SESSION['totalA2nd'])){$_SESSION['totalA2nd']=NULL;}
	
	if(!isset($_SESSION['opoversB2nd'])){$_SESSION['opoversB2nd']=NULL;}
	if(!isset($_SESSION['extrasB2nd'])){$_SESSION['extrasB2nd']=NULL;}
	if(!isset($_SESSION['wicketsB2nd'])){$_SESSION['wicketsB2nd']=NULL;}
	if(!isset($_SESSION['totalB2nd'])){$_SESSION['totalB2nd']=NULL;}

	
	
	

	$add_scorecard_querya="INSERT INTO `home_matches_scorecarda` (`match_no`, `date`, `venue`,`decision`,`totalA`, `extrasA`, `wicketsA`, `opoversA`, `batsmenA`, `bowlersA`, `name1a`, `howout1a`, `marks1a`, `name2a`, `howout2a`, `marks2a`, `name3a`, `howout3a`, `marks3a`, `name4a`, `howout4a`, `marks4a`, `name5a`, `howout5a`, `marks5a`, `name6a`, `howout6a`, `marks6a`, `name7a`, `howout7a`, `marks7a`, `name8a`, `howout8a`, `marks8a`, `name9a`, `howout9a`, `marks9a`, `name10a`, `howout10a`, `marks10a`, `name11a`, `howout11a`, `marks11a`, `b1a`, `bovers1a`, `bruns1a`, `bextras1a`, `bwickets1a`, `b2a`, `bovers2a`, `bruns2a`, `bextras2a`, `bwickets2a`, `b3a`, `bovers3a`, `bruns3a`, `bextras3a`, `bwickets3a`, `b4a`, `bovers4a`, `bruns4a`, `bextras4a`, `bwickets4a`, `b5a`, `bovers5a`, `bruns5a`, `bextras5a`, `bwickets5a`, `b6a`, `bovers6a`, `bruns6a`, `bextras6a`, `bwickets6a`, `b7a`, `bovers7a`, `bruns7a`, `bextras7a`, `bwickets7a`, `b8a`, `bovers8a`, `bruns8a`, `bextras8a`, `bwickets8a`, `b9a`, `bovers9a`, `bruns9a`, `bextras9a`, `bwickets9a`, `b10a`, `bovers10a`, `bruns10a`, `bextras10a`, `bwickets10a`, `b11a`, `bovers11a`, `bruns11a`, `bextras11a`, `bwickets11a`) VALUES ('".$_SESSION['match_no']."','".$_SESSION['date']."','".$_SESSION['venue']."','".$_SESSION['decision']."', '".$_SESSION['totalA']."',  '".$_SESSION['extrasA']."', '".$_SESSION['wicketsA']."',  '".$_SESSION['opoversA']."', '".$_SESSION['batsmenA']."', '".$_SESSION['bowlersA']."', '".$_SESSION['name1a']."', '".$_SESSION['howout1a']."', '".$_SESSION['marks1a']."', '".$_SESSION['name2a']."', '".$_SESSION['howout2a']."', '".$_SESSION['marks2a']."', '".$_SESSION['name3a']."', '".$_SESSION['howout3a']."', '".$_SESSION['marks3a']."', '".$_SESSION['name4a']."', '".$_SESSION['howout4a']."', '".$_SESSION['marks4a']."', '".$_SESSION['name5a']."', '".$_SESSION['howout5a']."', '".$_SESSION['marks5a']."', '".$_SESSION['name6a']."', '".$_SESSION['howout6a']."', '".$_SESSION['marks6a']."', '".$_SESSION['name7a']."', '".$_SESSION['howout7a']."', '".$_SESSION['marks7a']."', '".$_SESSION['name8a']."', '".$_SESSION['howout8a']."', '".$_SESSION['marks8a']."', '".$_SESSION['name9a']."', '".$_SESSION['howout9a']."', '".$_SESSION['marks9a']."', '".$_SESSION['name10a']."', '".$_SESSION['howout10a']."', '".$_SESSION['marks10a']."', '".$_SESSION['name11a']."', '".$_SESSION['howout11a']."', '".$_SESSION['marks11a']."', '".$_SESSION['b1a']."', '".$_SESSION['bovers1a']."', '".$_SESSION['bruns1a']."', '".$_SESSION['bextras1a']."', '".$_SESSION['bwickets1a']."','".$_SESSION['b2a']."', '".$_SESSION['bovers2a']."', '".$_SESSION['bruns2a']."', '".$_SESSION['bextras2a']."', '".$_SESSION['bwickets2a']."', '".$_SESSION['b3a']."', '".$_SESSION['bovers3a']."', '".$_SESSION['bruns3a']."', '".$_SESSION['bextras3a']."', '".$_SESSION['bwickets3a']."', '".$_SESSION['b4a']."', '".$_SESSION['bovers4a']."', '".$_SESSION['bruns4a']."', '".$_SESSION['bextras4a']."', '".$_SESSION['bwickets4a']."', '".$_SESSION['b5a']."', '".$_SESSION['bovers5a']."', '".$_SESSION['bruns5a']."', '".$_SESSION['bextras5a']."', '".$_SESSION['bwickets5a']."', '".$_SESSION['b6a']."', '".$_SESSION['bovers6a']."', '".$_SESSION['bruns6a']."', '".$_SESSION['bextras6a']."', '".$_SESSION['bwickets6a']."', '".$_SESSION['b7a']."', '".$_SESSION['bovers7a']."', '".$_SESSION['bruns7a']."', '".$_SESSION['bextras7a']."', '".$_SESSION['bwickets7a']."', '".$_SESSION['b8a']."', '".$_SESSION['bovers8a']."', '".$_SESSION['bruns8a']."', '".$_SESSION['bextras8a']."', '".$_SESSION['bwickets8a']."', '".$_SESSION['b9a']."', '".$_SESSION['bovers9a']."', '".$_SESSION['bruns9a']."', '".$_SESSION['bextras9a']."', '".$_SESSION['bwickets9a']."', '".$_SESSION['b10a']."', '".$_SESSION['bovers10a']."', '".$_SESSION['bruns10a']."', '".$_SESSION['bextras10a']."', '".$_SESSION['bwickets10a']."', '".$_SESSION['b11a']."', '".$_SESSION['bovers11a']."', '".$_SESSION['bruns11a']."', '".$_SESSION['bextras11a']."', '".$_SESSION['bwickets11a']."')";
	
	
	$add_scorecard_queryb="INSERT INTO `home_matches_scorecardb` (`match_no`, `totalB`, `extrasB`, `wicketsB`, `opoversB`, `batsmenB`, `bowlersB`, `name1b`, `howout1b`, `marks1b`, `name2b`, `howout2b`, `marks2b`, `name3b`, `howout3b`, `marks3b`, `name4b`, `howout4b`, `marks4b`, `name5b`, `howout5b`, `marks5b`, `name6b`, `howout6b`, `marks6b`, `name7b`, `howout7b`, `marks7b`, `name8b`, `howout8b`, `marks8b`, `name9b`, `howout9b`, `marks9b`, `name10b`, `howout10b`, `marks10b`, `name11b`, `howout11b`, `marks11b`, `b1b`, `bovers1b`, `bruns1b`, `bextras1b`, `bwickets1b`, `b2b`, `bovers2b`, `bruns2b`, `bextras2b`, `bwickets2b`, `b3b`, `bovers3b`, `bruns3b`, `bextras3b`, `bwickets3b`, `b4b`, `bovers4b`, `bruns4b`, `bextras4b`, `bwickets4b`, `b5b`, `bovers5b`, `bruns5b`, `bextras5b`, `bwickets5b`, `b6b`, `bovers6b`, `bruns6b`, `bextras6b`, `bwickets6b`, `b7b`, `bovers7b`, `bruns7b`, `bextras7b`, `bwickets7b`, `b8b`, `bovers8b`, `bruns8b`, `bextras8b`, `bwickets8b`, `b9b`, `bovers9b`, `bruns9b`, `bextras9b`, `bwickets9b`, `b10b`, `bovers10b`, `bruns10b`, `bextras10b`, `bwickets10b`, `b11b`, `bovers11b`, `bruns11b`, `bextras11b`, `bwickets11b`) VALUES ('".$_SESSION['match_no']."', '".$_SESSION['totalB']."',  '".$_SESSION['extrasB']."', '".$_SESSION['wicketsB']."',  '".$_SESSION['opoversB']."', '".$_SESSION['batsmenB']."', '".$_SESSION['bowlersB']."', '".$_SESSION['name1b']."', '".$_SESSION['howout1b']."', '".$_SESSION['marks1b']."', '".$_SESSION['name2b']."', '".$_SESSION['howout2b']."', '".$_SESSION['marks2b']."', '".$_SESSION['name3b']."', '".$_SESSION['howout3b']."', '".$_SESSION['marks3b']."', '".$_SESSION['name4b']."', '".$_SESSION['howout4b']."', '".$_SESSION['marks4b']."', '".$_SESSION['name5b']."', '".$_SESSION['howout5b']."', '".$_SESSION['marks5b']."', '".$_SESSION['name6b']."', '".$_SESSION['howout6b']."', '".$_SESSION['marks6b']."', '".$_SESSION['name7b']."', '".$_SESSION['howout7b']."', '".$_SESSION['marks7b']."', '".$_SESSION['name8b']."', '".$_SESSION['howout8b']."', '".$_SESSION['marks8b']."', '".$_SESSION['name9b']."', '".$_SESSION['howout9b']."', '".$_SESSION['marks9b']."', '".$_SESSION['name10b']."', '".$_SESSION['howout10b']."', '".$_SESSION['marks10b']."', '".$_SESSION['name11b']."', '".$_SESSION['howout11b']."', '".$_SESSION['marks11b']."', '".$_SESSION['b1b']."', '".$_SESSION['bovers1b']."', '".$_SESSION['bruns1b']."', '".$_SESSION['bextras1b']."', '".$_SESSION['bwickets1b']."','".$_SESSION['b2b']."', '".$_SESSION['bovers2b']."', '".$_SESSION['bruns2b']."', '".$_SESSION['bextras2b']."', '".$_SESSION['bwickets2b']."', '".$_SESSION['b3b']."', '".$_SESSION['bovers3b']."', '".$_SESSION['bruns3b']."', '".$_SESSION['bextras3b']."', '".$_SESSION['bwickets3b']."', '".$_SESSION['b4b']."', '".$_SESSION['bovers4b']."', '".$_SESSION['bruns4b']."', '".$_SESSION['bextras4b']."', '".$_SESSION['bwickets4b']."', '".$_SESSION['b5b']."', '".$_SESSION['bovers5b']."', '".$_SESSION['bruns5b']."', '".$_SESSION['bextras5b']."', '".$_SESSION['bwickets5b']."', '".$_SESSION['b6b']."', '".$_SESSION['bovers6b']."', '".$_SESSION['bruns6b']."', '".$_SESSION['bextras6b']."', '".$_SESSION['bwickets6b']."', '".$_SESSION['b7b']."', '".$_SESSION['bovers7b']."', '".$_SESSION['bruns7b']."', '".$_SESSION['bextras7b']."', '".$_SESSION['bwickets7b']."', '".$_SESSION['b8b']."', '".$_SESSION['bovers8b']."', '".$_SESSION['bruns8b']."', '".$_SESSION['bextras8b']."', '".$_SESSION['bwickets8b']."', '".$_SESSION['b9b']."', '".$_SESSION['bovers9b']."', '".$_SESSION['bruns9b']."', '".$_SESSION['bextras9b']."', '".$_SESSION['bwickets9b']."', '".$_SESSION['b10b']."', '".$_SESSION['bovers10b']."', '".$_SESSION['bruns10b']."', '".$_SESSION['bextras10b']."', '".$_SESSION['bwickets10b']."', '".$_SESSION['b11b']."', '".$_SESSION['bovers11b']."', '".$_SESSION['bruns11b']."', '".$_SESSION['bextras11b']."', '".$_SESSION['bwickets11b']."')";

	
	
	$add_scorecard_querya2nd="INSERT INTO `home_matches_scorecarda2nd` (`match_no`,`totalA2nd`, `extrasA2nd`, `wicketsA2nd`, `opoversA2nd`, `batsmenA2nd`, `bowlersA2nd`, `name1a2nd`, `howout1a2nd`, `marks1a2nd`, `name2a2nd`, `howout2a2nd`, `marks2a2nd`, `name3a2nd`, `howout3a2nd`, `marks3a2nd`, `name4a2nd`, `howout4a2nd`, `marks4a2nd`, `name5a2nd`, `howout5a2nd`, `marks5a2nd`, `name6a2nd`, `howout6a2nd`, `marks6a2nd`, `name7a2nd`, `howout7a2nd`, `marks7a2nd`, `name8a2nd`, `howout8a2nd`, `marks8a2nd`, `name9a2nd`, `howout9a2nd`, `marks9a2nd`, `name10a2nd`, `howout10a2nd`, `marks10a2nd`, `name11a2nd`, `howout11a2nd`, `marks11a2nd`, `b1a2nd`, `bovers1a2nd`, `bruns1a2nd`, `bextras1a2nd`, `bwickets1a2nd`, `b2a2nd`, `bovers2a2nd`, `bruns2a2nd`, `bextras2a2nd`, `bwickets2a2nd`, `b3a2nd`, `bovers3a2nd`, `bruns3a2nd`, `bextras3a2nd`, `bwickets3a2nd`, `b4a2nd`, `bovers4a2nd`, `bruns4a2nd`, `bextras4a2nd`, `bwickets4a2nd`, `b5a2nd`, `bovers5a2nd`, `bruns5a2nd`, `bextras5a2nd`, `bwickets5a2nd`, `b6a2nd`, `bovers6a2nd`, `bruns6a2nd`, `bextras6a2nd`, `bwickets6a2nd`, `b7a2nd`, `bovers7a2nd`, `bruns7a2nd`, `bextras7a2nd`, `bwickets7a2nd`, `b8a2nd`, `bovers8a2nd`, `bruns8a2nd`, `bextras8a2nd`, `bwickets8a2nd`, `b9a2nd`, `bovers9a2nd`, `bruns9a2nd`, `bextras9a2nd`, `bwickets9a2nd`, `b10a2nd`, `bovers10a2nd`, `bruns10a2nd`, `bextras10a2nd`, `bwickets10a2nd`, `b11a2nd`, `bovers11a2nd`, `bruns11a2nd`, `bextras11a2nd`, `bwickets11a2nd`) VALUES ('".$_SESSION['match_no']."', '".$_SESSION['totalA2nd']."',  '".$_SESSION['extrasA2nd']."', '".$_SESSION['wicketsA2nd']."',  '".$_SESSION['opoversA2nd']."', '".$_SESSION['batsmenA2nd']."', '".$_SESSION['bowlersA2nd']."', '".$_SESSION['name1a2nd']."', '".$_SESSION['howout1a2nd']."', '".$_SESSION['marks1a2nd']."', '".$_SESSION['name2a2nd']."', '".$_SESSION['howout2a2nd']."', '".$_SESSION['marks2a2nd']."', '".$_SESSION['name3a2nd']."', '".$_SESSION['howout3a2nd']."', '".$_SESSION['marks3a2nd']."', '".$_SESSION['name4a2nd']."', '".$_SESSION['howout4a2nd']."', '".$_SESSION['marks4a2nd']."', '".$_SESSION['name5a2nd']."', '".$_SESSION['howout5a2nd']."', '".$_SESSION['marks5a2nd']."', '".$_SESSION['name6a2nd']."', '".$_SESSION['howout6a2nd']."', '".$_SESSION['marks6a2nd']."', '".$_SESSION['name7a2nd']."', '".$_SESSION['howout7a2nd']."', '".$_SESSION['marks7a2nd']."', '".$_SESSION['name8a2nd']."', '".$_SESSION['howout8a2nd']."', '".$_SESSION['marks8a2nd']."', '".$_SESSION['name9a2nd']."', '".$_SESSION['howout9a2nd']."', '".$_SESSION['marks9a2nd']."', '".$_SESSION['name10a2nd']."', '".$_SESSION['howout10a2nd']."', '".$_SESSION['marks10a2nd']."', '".$_SESSION['name11a2nd']."', '".$_SESSION['howout11a2nd']."', '".$_SESSION['marks11a2nd']."', '".$_SESSION['b1a2nd']."', '".$_SESSION['bovers1a2nd']."', '".$_SESSION['bruns1a2nd']."', '".$_SESSION['bextras1a2nd']."', '".$_SESSION['bwickets1a2nd']."','".$_SESSION['b2a2nd']."', '".$_SESSION['bovers2a2nd']."', '".$_SESSION['bruns2a2nd']."', '".$_SESSION['bextras2a2nd']."', '".$_SESSION['bwickets2a2nd']."', '".$_SESSION['b3a2nd']."', '".$_SESSION['bovers3a2nd']."', '".$_SESSION['bruns3a2nd']."', '".$_SESSION['bextras3a2nd']."', '".$_SESSION['bwickets3a2nd']."', '".$_SESSION['b4a2nd']."', '".$_SESSION['bovers4a2nd']."', '".$_SESSION['bruns4a2nd']."', '".$_SESSION['bextras4a2nd']."', '".$_SESSION['bwickets4a2nd']."', '".$_SESSION['b5a2nd']."', '".$_SESSION['bovers5a2nd']."', '".$_SESSION['bruns5a2nd']."', '".$_SESSION['bextras5a2nd']."', '".$_SESSION['bwickets5a2nd']."', '".$_SESSION['b6a2nd']."', '".$_SESSION['bovers6a2nd']."', '".$_SESSION['bruns6a2nd']."', '".$_SESSION['bextras6a2nd']."', '".$_SESSION['bwickets6a2nd']."', '".$_SESSION['b7a2nd']."', '".$_SESSION['bovers7a2nd']."', '".$_SESSION['bruns7a2nd']."', '".$_SESSION['bextras7a2nd']."', '".$_SESSION['bwickets7a2nd']."', '".$_SESSION['b8a2nd']."', '".$_SESSION['bovers8a2nd']."', '".$_SESSION['bruns8a2nd']."', '".$_SESSION['bextras8a2nd']."', '".$_SESSION['bwickets8a2nd']."', '".$_SESSION['b9a2nd']."', '".$_SESSION['bovers9a2nd']."', '".$_SESSION['bruns9a2nd']."', '".$_SESSION['bextras9a2nd']."', '".$_SESSION['bwickets9a2nd']."', '".$_SESSION['b10a2nd']."', '".$_SESSION['bovers10a2nd']."', '".$_SESSION['bruns10a2nd']."', '".$_SESSION['bextras10a2nd']."', '".$_SESSION['bwickets10a2nd']."', '".$_SESSION['b11a2nd']."', '".$_SESSION['bovers11a2nd']."', '".$_SESSION['bruns11a2nd']."', '".$_SESSION['bextras11a2nd']."', '".$_SESSION['bwickets11a2nd']."')";
	
	
	
	$add_scorecard_queryb2nd="INSERT INTO `home_matches_scorecardb2nd` (`match_no`, `totalB2nd`, `extrasB2nd`, `wicketsB2nd`, `opoversB2nd`, `batsmenB2nd`, `bowlersB2nd`, `name1b2nd`, `howout1b2nd`, `marks1b2nd`, `name2b2nd`, `howout2b2nd`, `marks2b2nd`, `name3b2nd`, `howout3b2nd`, `marks3b2nd`, `name4b2nd`, `howout4b2nd`, `marks4b2nd`, `name5b2nd`, `howout5b2nd`, `marks5b2nd`, `name6b2nd`, `howout6b2nd`, `marks6b2nd`, `name7b2nd`, `howout7b2nd`, `marks7b2nd`, `name8b2nd`, `howout8b2nd`, `marks8b2nd`, `name9b2nd`, `howout9b2nd`, `marks9b2nd`, `name10b2nd`, `howout10b2nd`, `marks10b2nd`, `name11b2nd`, `howout11b2nd`, `marks11b2nd`, `b1b2nd`, `bovers1b2nd`, `bruns1b2nd`, `bextras1b2nd`, `bwickets1b2nd`, `b2b2nd`, `bovers2b2nd`, `bruns2b2nd`, `bextras2b2nd`, `bwickets2b2nd`, `b3b2nd`, `bovers3b2nd`, `bruns3b2nd`, `bextras3b2nd`, `bwickets3b2nd`, `b4b2nd`, `bovers4b2nd`, `bruns4b2nd`, `bextras4b2nd`, `bwickets4b2nd`, `b5b2nd`, `bovers5b2nd`, `bruns5b2nd`, `bextras5b2nd`, `bwickets5b2nd`, `b6b2nd`, `bovers6b2nd`, `bruns6b2nd`, `bextras6b2nd`, `bwickets6b2nd`, `b7b2nd`, `bovers7b2nd`, `bruns7b2nd`, `bextras7b2nd`, `bwickets7b2nd`, `b8b2nd`, `bovers8b2nd`, `bruns8b2nd`, `bextras8b2nd`, `bwickets8b2nd`, `b9b2nd`, `bovers9b2nd`, `bruns9b2nd`, `bextras9b2nd`, `bwickets9b2nd`, `b10b2nd`, `bovers10b2nd`, `bruns10b2nd`, `bextras10b2nd`, `bwickets10b2nd`, `b11b2nd`, `bovers11b2nd`, `bruns11b2nd`, `bextras11b2nd`, `bwickets11b2nd`) VALUES ('".$_SESSION['match_no']."', '".$_SESSION['totalB2nd']."',  '".$_SESSION['extrasB2nd']."', '".$_SESSION['wicketsB2nd']."',  '".$_SESSION['opoversB2nd']."', '".$_SESSION['batsmenB2nd']."', '".$_SESSION['bowlersB2nd']."', '".$_SESSION['name1b2nd']."', '".$_SESSION['howout1b2nd']."', '".$_SESSION['marks1b2nd']."', '".$_SESSION['name2b2nd']."', '".$_SESSION['howout2b2nd']."', '".$_SESSION['marks2b2nd']."', '".$_SESSION['name3b2nd']."', '".$_SESSION['howout3b2nd']."', '".$_SESSION['marks3b2nd']."', '".$_SESSION['name4b2nd']."', '".$_SESSION['howout4b2nd']."', '".$_SESSION['marks4b2nd']."', '".$_SESSION['name5b2nd']."', '".$_SESSION['howout5b2nd']."', '".$_SESSION['marks5b2nd']."', '".$_SESSION['name6b2nd']."', '".$_SESSION['howout6b2nd']."', '".$_SESSION['marks6b2nd']."', '".$_SESSION['name7b2nd']."', '".$_SESSION['howout7b2nd']."', '".$_SESSION['marks7b2nd']."', '".$_SESSION['name8b2nd']."', '".$_SESSION['howout8b2nd']."', '".$_SESSION['marks8b2nd']."', '".$_SESSION['name9b2nd']."', '".$_SESSION['howout9b2nd']."', '".$_SESSION['marks9b2nd']."', '".$_SESSION['name10b2nd']."', '".$_SESSION['howout10b2nd']."', '".$_SESSION['marks10b2nd']."', '".$_SESSION['name11b2nd']."', '".$_SESSION['howout11b2nd']."', '".$_SESSION['marks11b2nd']."', '".$_SESSION['b1b2nd']."', '".$_SESSION['bovers1b2nd']."', '".$_SESSION['bruns1b2nd']."', '".$_SESSION['bextras1b2nd']."', '".$_SESSION['bwickets1b2nd']."','".$_SESSION['b2b2nd']."', '".$_SESSION['bovers2b2nd']."', '".$_SESSION['bruns2b2nd']."', '".$_SESSION['bextras2b2nd']."', '".$_SESSION['bwickets2b2nd']."', '".$_SESSION['b3b2nd']."', '".$_SESSION['bovers3b2nd']."', '".$_SESSION['bruns3b2nd']."', '".$_SESSION['bextras3b2nd']."', '".$_SESSION['bwickets3b2nd']."', '".$_SESSION['b4b2nd']."', '".$_SESSION['bovers4b2nd']."', '".$_SESSION['bruns4b2nd']."', '".$_SESSION['bextras4b2nd']."', '".$_SESSION['bwickets4b2nd']."', '".$_SESSION['b5b2nd']."', '".$_SESSION['bovers5b2nd']."', '".$_SESSION['bruns5b2nd']."', '".$_SESSION['bextras5b2nd']."', '".$_SESSION['bwickets5b2nd']."', '".$_SESSION['b6b2nd']."', '".$_SESSION['bovers6b2nd']."', '".$_SESSION['bruns6b2nd']."', '".$_SESSION['bextras6b2nd']."', '".$_SESSION['bwickets6b2nd']."', '".$_SESSION['b7b2nd']."', '".$_SESSION['bovers7b2nd']."', '".$_SESSION['bruns7b2nd']."', '".$_SESSION['bextras7b2nd']."', '".$_SESSION['bwickets7b2nd']."', '".$_SESSION['b8b2nd']."', '".$_SESSION['bovers8b2nd']."', '".$_SESSION['bruns8b2nd']."', '".$_SESSION['bextras8b2nd']."', '".$_SESSION['bwickets8b2nd']."', '".$_SESSION['b9b2nd']."', '".$_SESSION['bovers9b2nd']."', '".$_SESSION['bruns9b2nd']."', '".$_SESSION['bextras9b2nd']."', '".$_SESSION['bwickets9b2nd']."', '".$_SESSION['b10b2nd']."', '".$_SESSION['bovers10b2nd']."', '".$_SESSION['bruns10b2nd']."', '".$_SESSION['bextras10b2nd']."', '".$_SESSION['bwickets10b2nd']."', '".$_SESSION['b11b2nd']."', '".$_SESSION['bovers11b2nd']."', '".$_SESSION['bruns11b2nd']."', '".$_SESSION['bextras11b2nd']."', '".$_SESSION['bwickets11b2nd']."')";

	
			if($is_add_scorecard_query_runa=mysqli_query($connect,$add_scorecard_querya)){
				echo '<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-info" alert-dismissable">
						<a href="h_result_2day" class="close" data-dismiss="alert" arial-label="close">&times</a>
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
			
			if($is_add_scorecard_query_runb=mysqli_query($connect,$add_scorecard_queryb)){
				echo '<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-info" alert-dismissable">
						<a href="h_result_2day" class="close" data-dismiss="alert" arial-label="close">&times</a>
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
			
			if($is_add_scorecard_query_runa2nd=mysqli_query($connect,$add_scorecard_querya2nd)){
				echo '<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-info" alert-dismissable">
						<a href="h_result_2day" class="close" data-dismiss="alert" arial-label="close">&times</a>
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
			
			if($is_add_scorecard_query_runb2nd=mysqli_query($connect,$add_scorecard_queryb2nd)){
				echo '<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="alert alert-info" alert-dismissable">
						<a href="h_result_2day" class="close" data-dismiss="alert" arial-label="close">&times</a>
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

for($itr5=1;$itr5<$_SESSION["batsmenB"];$itr5++){

			$search_player_query="SELECT * FROM `2daybatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5.'b']."' ";

			$is_search_player_query_run=mysqli_query($connect,$search_player_query);

			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);



			$matches=$search_player_query_execute["Matches"];

			$matches++;

			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5.'b'];

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

			if($_SESSION['howout'.$itr5.'b']=="Not Out"){$notout++;}

			else if ($_SESSION['howout'.$itr5.'b']=="Bowled"){$bowled++;}

			else if ($_SESSION['howout'.$itr5.'b']=="Caught"){$caught++;}

			else if ($_SESSION['howout'.$itr5.'b']=="LBW"){$lbw++;}

			else if ($_SESSION['howout'.$itr5.'b']=="Run Out"){$runout++;}

			else if ($_SESSION['howout'.$itr5.'b']=="Stumped"){$stumped++;}

			else if ($_SESSION['howout'.$itr5.'b']=="Hit Wicket"){$hitwicket++;}







			//Most Runs in an individual innings

			if($_SESSION['marks'.$itr5.'b']>$most){

				$most=$_SESSION['marks'.$itr5.'b'];

			}



			//Calculating the average

			$outs=$matches-$notout;

			if($outs==0){$outs=1;}

			$average=$runs/$outs;



			//Calculating the no. hundreds

			$hundreds=$search_player_query_execute["Hundreds"];

			if($_SESSION['marks'.$itr5.'b']>99){

				$hundreds++;

			}



			//Calculating the no. fifties

			$fifties=$search_player_query_execute["Fifties"];

			if(49<$_SESSION['marks'.$itr5.'b'] && $_SESSION['marks'.$itr5.'b']<100){

				$fifties++;

			}



			

			

		

			//Adding 2daybatting place scores

			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5.'b'];}

			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5.'b'];}



			$add_2daybatting_statistics_queryb="UPDATE `2daybatting_statistics` SET `Matches`='".$matches."',

			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 

			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',

			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',

			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `2daybatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5.'b']."'";

			$is_add_2daybatting_statistics_query_runb=mysqli_query($connect,$add_2daybatting_statistics_queryb);



		}
		
		
for($itr5=1;$itr5<$_SESSION["batsmenA"];$itr5++){

	$search_player_query="SELECT * FROM `2daybatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5.'a']."' ";

	$is_search_player_query_run=mysqli_query($connect,$search_player_query);

	$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);



	$matches=$search_player_query_execute["Matches"];

	$matches++;

	$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5.'a'];

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

	if($_SESSION['howout'.$itr5.'a']=="Not Out"){$notout++;}

	else if ($_SESSION['howout'.$itr5.'a']=="Bowled"){$bowled++;}

	else if ($_SESSION['howout'.$itr5.'a']=="Caught"){$caught++;}

	else if ($_SESSION['howout'.$itr5.'a']=="LBW"){$lbw++;}

	else if ($_SESSION['howout'.$itr5.'a']=="Run Out"){$runout++;}

	else if ($_SESSION['howout'.$itr5.'a']=="Stumped"){$stumped++;}

	else if ($_SESSION['howout'.$itr5.'a']=="Hit Wicket"){$hitwicket++;}







	//Most Runs in an individual innings

	if($_SESSION['marks'.$itr5.'a']>$most){

		$most=$_SESSION['marks'.$itr5.'a'];

	}



	//Calculating the average

	$outs=$matches-$notout;

	if($outs==0){$outs=1;}

	$average=$runs/$outs;



	//Calculating the no. hundreds

	$hundreds=$search_player_query_execute["Hundreds"];

	if($_SESSION['marks'.$itr5.'a']>99){

		$hundreds++;

	}



	//Calculating the no. fifties

	$fifties=$search_player_query_execute["Fifties"];

	if(49<$_SESSION['marks'.$itr5.'a'] && $_SESSION['marks'.$itr5.'a']<100){

		$fifties++;

	}



	

	



	//Adding 2daybatting place scores

	if($itr5==1){$one=$one+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5.'a'];}

	else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5.'a'];}



	$add_2daybatting_statistics_querya="UPDATE `2daybatting_statistics` SET `Matches`='".$matches."',

	`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 

	`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',

	`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',

	`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `2daybatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5.'a']."'";

	$is_add_2daybatting_statistics_query_runa=mysqli_query($connect,$add_2daybatting_statistics_querya);



}



for($itr6=1;$itr6<$_SESSION["bowlersA"];$itr6++){



	$search_player_query2="SELECT * FROM `2daybowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6.'a']."' ";

	$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);

	$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);

	$bmatches=$search_player_query2_execute["Matches"];

	$bmatches++;

	$overs=$search_player_query2_execute["Overs"];

	$overs=$overs+$_SESSION['bovers'.$itr6.'a'];

	$wickets=$search_player_query2_execute["Wickets"];

	$wickets=$wickets+$_SESSION['bwickets'.$itr6.'a'];

	$bruns=$search_player_query2_execute["Runs"];

	$bruns=$bruns+$_SESSION['bruns'.$itr6.'a'];

	if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}

	if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}

	$five=$search_player_query2_execute["Five_wickets"];

	if($_SESSION['bwickets'.$itr6.'a']>4){

		$five++;

	}



	$add_2daybowling_statistics_querya="UPDATE `2daybowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `2daybowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6.'a']."' ";

	$is_add_2daybowling_statistics_query_runa=mysqli_query($connect,$add_2daybowling_statistics_querya);

}

for($itr6=1;$itr6<$_SESSION["bowlersB"];$itr6++){



	$search_player_query2="SELECT * FROM `2daybowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6.'b']."' ";

	$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);

	$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);

	$bmatches=$search_player_query2_execute["Matches"];

	$bmatches++;

	$overs=$search_player_query2_execute["Overs"];

	$overs=$overs+$_SESSION['bovers'.$itr6.'b'];

	$wickets=$search_player_query2_execute["Wickets"];

	$wickets=$wickets+$_SESSION['bwickets'.$itr6.'b'];

	$bruns=$search_player_query2_execute["Runs"];

	$bruns=$bruns+$_SESSION['bruns'.$itr6.'b'];

	if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}

	if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}

	$five=$search_player_query2_execute["Five_wickets"];

	if($_SESSION['bwickets'.$itr6.'b']>4){

		$five++;

	}



	$add_2daybowling_statistics_queryb="UPDATE `2daybowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `2daybowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6.'b']."' ";

	$is_add_2daybowling_statistics_query_runb=mysqli_query($connect,$add_2daybowling_statistics_queryb);

}


/*--------------------------------------------------------------------------------------------------------------------------------------------*/


for($itr5=1;$itr5<$_SESSION["batsmenB2nd"];$itr5++){

			$search_player_query="SELECT * FROM `2daybatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5.'b2nd']."' ";

			$is_search_player_query_run=mysqli_query($connect,$search_player_query);

			$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);



			$matches=$search_player_query_execute["Matches"];

			$matches++;

			$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5.'b2nd'];

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

			if($_SESSION['howout'.$itr5.'b2nd']=="Not Out"){$notout++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="Bowled"){$bowled++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="Caught"){$caught++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="LBW"){$lbw++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="Run Out"){$runout++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="Stumped"){$stumped++;}

			else if ($_SESSION['howout'.$itr5.'b2nd']=="Hit Wicket"){$hitwicket++;}







			//Most Runs in an individual innings

			if($_SESSION['marks'.$itr5.'b2nd']>$most){

				$most=$_SESSION['marks'.$itr5.'b2nd'];

			}



			//Calculating the average

			$outs=$matches-$notout;

			if($outs==0){$outs=1;}

			$average=$runs/$outs;



			//Calculating the no. hundreds

			$hundreds=$search_player_query_execute["Hundreds"];

			if($_SESSION['marks'.$itr5.'b2nd']>99){

				$hundreds++;

			}



			//Calculating the no. fifties

			$fifties=$search_player_query_execute["Fifties"];

			if(49<$_SESSION['marks'.$itr5.'b2nd'] && $_SESSION['marks'.$itr5.'b2nd']<100){

				$fifties++;

			}



			

			

		

			//Adding 2daybatting place scores

			if($itr5==1){$one=$one+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5.'b2nd'];}

			else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5.'b2nd'];}



			$add_2daybatting_statistics_queryb="UPDATE `2daybatting_statistics` SET `Matches`='".$matches."',

			`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 

			`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',

			`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',

			`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `2daybatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5.'b2nd']."'";

			$is_add_2daybatting_statistics_query_runb=mysqli_query($connect,$add_2daybatting_statistics_queryb);



		}
		
		
for($itr5=1;$itr5<$_SESSION["batsmenA2nd"];$itr5++){

	$search_player_query="SELECT * FROM `2daybatting_statistics` WHERE `Reg_no`='".$_SESSION['reg_no'.$itr5.'a2nd']."' ";

	$is_search_player_query_run=mysqli_query($connect,$search_player_query);

	$search_player_query_execute=mysqli_fetch_assoc($is_search_player_query_run);



	$matches=$search_player_query_execute["Matches"];

	$matches++;

	$runs=$search_player_query_execute["Runs"]+$_SESSION['marks'.$itr5.'a2nd'];

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

	if($_SESSION['howout'.$itr5.'a2nd']=="Not Out"){$notout++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="Bowled"){$bowled++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="Caught"){$caught++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="LBW"){$lbw++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="Run Out"){$runout++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="Stumped"){$stumped++;}

	else if ($_SESSION['howout'.$itr5.'a2nd']=="Hit Wicket"){$hitwicket++;}







	//Most Runs in an individual innings

	if($_SESSION['marks'.$itr5.'a2nd']>$most){

		$most=$_SESSION['marks'.$itr5.'a2nd'];

	}



	//Calculating the average

	$outs=$matches-$notout;

	if($outs==0){$outs=1;}

	$average=$runs/$outs;



	//Calculating the no. hundreds

	$hundreds=$search_player_query_execute["Hundreds"];

	if($_SESSION['marks'.$itr5.'a2nd']>99){

		$hundreds++;

	}



	//Calculating the no. fifties

	$fifties=$search_player_query_execute["Fifties"];

	if(49<$_SESSION['marks'.$itr5.'a2nd'] && $_SESSION['marks'.$itr5.'a2nd']<100){

		$fifties++;

	}



	

	



	//Adding 2daybatting place scores

	if($itr5==1){$one=$one+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==2){$two=$two+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==3){$three=$three+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==4){$four=$four+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==5){$five=$five+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==6){$six=$six+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==7){$seven=$seven+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==8){$eight=$eight+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==9){$nine=$nine+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==10){$ten=$ten+$_SESSION['marks'.$itr5.'a2nd'];}

	else if($itr5==11){$eleven=$eleven+$_SESSION['marks'.$itr5.'a2nd'];}



	$add_2daybatting_statistics_querya="UPDATE `2daybatting_statistics` SET `Matches`='".$matches."',

	`Runs`='".$runs."', `Most`='".$most."', `Average`='".$average."', `Hundreds`='".$hundreds."', `Fifties`='".$fifties."', 

	`one`='".$one."', `two`='".$two."', `three`='".$three."', `four`='".$four."', `five`='".$five."',

	`six`='".$six."', `seven`='".$seven."', `eight`='".$eight."', `nine`='".$nine."', `ten`='".$ten."', `eleven`='".$eleven."',

	`Bowled`='".$bowled."', `Caught`='".$caught."', `LBW`='".$lbw."', `Runout`='".$runout."', `Stumped`='".$stumped."', `Hitwicket`='".$hitwicket."', `Notout`='".$notout."' WHERE `2daybatting_statistics`.`Reg_no` = '".$_SESSION['reg_no'.$itr5.'a2nd']."'";

	$is_add_2daybatting_statistics_query_runa=mysqli_query($connect,$add_2daybatting_statistics_querya);



}



for($itr6=1;$itr6<$_SESSION["bowlersA2nd"];$itr6++){



	$search_player_query2="SELECT * FROM `2daybowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6.'a2nd']."' ";

	$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);

	$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);

	$bmatches=$search_player_query2_execute["Matches"];

	$bmatches++;

	$overs=$search_player_query2_execute["Overs"];

	$overs=$overs+$_SESSION['bovers'.$itr6.'a2nd'];

	$wickets=$search_player_query2_execute["Wickets"];

	$wickets=$wickets+$_SESSION['bwickets'.$itr6.'a2nd'];

	$bruns=$search_player_query2_execute["Runs"];

	$bruns=$bruns+$_SESSION['bruns'.$itr6.'a2nd'];

	if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}

	if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}

	$five=$search_player_query2_execute["Five_wickets"];

	if($_SESSION['bwickets'.$itr6.'a2nd']>4){

		$five++;

	}



	$add_2daybowling_statistics_querya="UPDATE `2daybowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `2daybowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6.'a2nd']."' ";

	$is_add_2daybowling_statistics_query_runa=mysqli_query($connect,$add_2daybowling_statistics_querya);

}

for($itr6=1;$itr6<$_SESSION["bowlersB2nd"];$itr6++){



	$search_player_query2="SELECT * FROM `2daybowling_statistics` WHERE `Reg_no`='".$_SESSION['breg_no'.$itr6.'b']."' ";

	$is_search_player_query2_run=mysqli_query($connect,$search_player_query2);

	$search_player_query2_execute=mysqli_fetch_assoc($is_search_player_query2_run);

	$bmatches=$search_player_query2_execute["Matches"];

	$bmatches++;

	$overs=$search_player_query2_execute["Overs"];

	$overs=$overs+$_SESSION['bovers'.$itr6.'b'];

	$wickets=$search_player_query2_execute["Wickets"];

	$wickets=$wickets+$_SESSION['bwickets'.$itr6.'b'];

	$bruns=$search_player_query2_execute["Runs"];

	$bruns=$bruns+$_SESSION['bruns'.$itr6.'b'];

	if($overs>0){$econ=$bruns/$overs;}else{$econ=0;}

	if($wickets>0){$baverage=$bruns/$wickets;}else{$baverage=0;}

	$five=$search_player_query2_execute["Five_wickets"];

	if($_SESSION['bwickets'.$itr6.'b']>4){

		$five++;

	}



	$add_2daybowling_statistics_queryb="UPDATE `2daybowling_statistics` SET `Matches`=$bmatches, `Overs`=$overs, `Wickets`=$wickets, `Runs`=$bruns, `Econ`=$econ, `Average`=$baverage, `Five_wickets`=$five WHERE `2daybowling_statistics`.`Reg_no` = '".$_SESSION['breg_no'.$itr6.'b']."' ";

	$is_add_2daybowling_statistics_query_runb=mysqli_query($connect,$add_2daybowling_statistics_queryb);

}

}
?>
</html>