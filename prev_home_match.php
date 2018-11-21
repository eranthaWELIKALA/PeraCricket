<?php
ob_start();
session_start();

require 'connect.php';
$retrieve_query="SELECT * FROM `home_matches_scorecarda` WHERE `match_no` = '".$_POST['prev1']."'";
$retrieve_query2="SELECT * FROM `home_matches_scorecardb` WHERE `match_no` = '".$_POST['prev1']."'";
$is_retrieve_query_run=mysqli_query($connect,$retrieve_query);
$is_retrieve_query2_run=mysqli_query($connect,$retrieve_query2);
$retrieve_query_execute=mysqli_fetch_assoc($is_retrieve_query_run);
$retrieve_query2_execute=mysqli_fetch_assoc($is_retrieve_query2_run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match Team A</title>
    <link type="image/jpg" rel="icon" href="logo.jpg"/>
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
			
				<li><a href="index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="view"><span class="glyphicon glyphicon-file"></span> View Match Details</a></li>
				<li><a href="player"><span class="glyphicon glyphicon-user"></span> View Player Details</a></li>
				<li><a href="rankings"><span class="glyphicon glyphicon-star"></span> View Rankings</a></li>
				<li><a href="records"><span class="glyphicon glyphicon-star-empty"></span> View Records</a></li>
		
		</ul>
      </div>
    </div>
  </div>
</nav><br><br>

<?php

if(isset($retrieve_query_execute['decision'])){
	if($retrieve_query_execute['decision']=="AWon"){
		echo "<br><h3>UOP Team A Won</h3><br>";
	}
	else if($retrieve_query_execute['decision']=="BWon"){
		echo "<br><h3>UOP Team B Won</h3><br>";
	}
	else if($retrieve_query_execute['decision']=="Tie"){
		echo "<br><h3>It's a tie</h3><br>";
	}
	else if($retrieve_query_execute['decision']=="Drawn"){
		echo "<br><h3>It's Drawn</h3><br>";
	}
}
echo "<br><div class='row' >
            <br>
            <div class='col-md-4' align='center' ><label>";echo $retrieve_query_execute['date'];echo "</label></div><div class='col-md-4' align='center' ><label>";echo $retrieve_query_execute['format'];echo "</label></div>
            <div class='col-md-4' align='center' ><label>Match No. : ";echo $retrieve_query_execute['match_no'];echo "</label></div>
        </div>";

?>
<div class='container'><div class='col-md-6'>
<?php
echo "<h3>Team A</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$retrieve_query_execute["batsmenA"];$itr++){
    if($retrieve_query_execute['howout'.$itr.'a']=='dnb'){$retrieve_query_execute['howout'.$itr.'a']="Did Not Bat";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='no'){$retrieve_query_execute['howout'.$itr.'a']="Not Out";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='b' ){$retrieve_query_execute['howout'.$itr.'a']="Bowled";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='l' ){$retrieve_query_execute['howout'.$itr.'a']="LBW";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='c' ){$retrieve_query_execute['howout'.$itr.'a']="Caught";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='ro'){$retrieve_query_execute['howout'.$itr.'a']="Run Out";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='s' ){$retrieve_query_execute['howout'.$itr.'a']="Stumped";}
    else if($retrieve_query_execute['howout'.$itr.'a']=='ht'){$retrieve_query_execute['howout'.$itr.'a']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$retrieve_query_execute['name'.$itr.'a']."</div>
                <div class='col-md-3'>".$retrieve_query_execute['howout'.$itr.'a']."</div>
                <div class='col-md-2' align='right'>".$retrieve_query_execute['marks'.$itr.'a']."</div>
                <div class='col-md-1'></div>
            </div>";
            if($itr==$retrieve_query_execute["batsmenA"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$retrieve_query_execute['extrasA']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$retrieve_query_execute['totalA']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team A Scored ".$retrieve_query_execute['totalA']." for ".$retrieve_query_execute['wicketsA']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$retrieve_query2_execute['opoversB']." Overs</h4></div>
        </div>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team A Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$retrieve_query_execute["bowlersA"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$retrieve_query_execute['b'.$itr2.'a']."</div>
            <div class='col-md-2'>".$retrieve_query_execute['bovers'.$itr2.'a']."</div>
            <div class='col-md-1'>".$retrieve_query_execute['bruns'.$itr2.'a']."</div>
            <div class='col-md-1'>".$retrieve_query_execute['bextras'.$itr2.'a']."</div>
            <div class='col-md-1'>".$retrieve_query_execute['bwickets'.$itr2.'a']."</div>
        </div>";
    
}
?>

</div><div class='col-md-6'>
<?php
echo "<h3>Team B</h3>";

echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B Batting Statistics</h3></div>
    </div>";

for($itr=1;$itr<$retrieve_query2_execute["batsmenB"];$itr++){
    if($retrieve_query2_execute['howout'.$itr.'b']=='dnb'){$retrieve_query2_execute['howout'.$itr.'b']="Did Not Bat";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='no'){$retrieve_query2_execute['howout'.$itr.'b']="Not Out";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='b' ){$retrieve_query2_execute['howout'.$itr.'b']="Bowled";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='l' ){$retrieve_query2_execute['howout'.$itr.'b']="LBW";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='c' ){$retrieve_query2_execute['howout'.$itr.'b']="Caught";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='ro'){$retrieve_query2_execute['howout'.$itr.'b']="Run Out";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='s' ){$retrieve_query2_execute['howout'.$itr.'b']="Stumped";}
    else if($retrieve_query2_execute['howout'.$itr.'b']=='ht'){$retrieve_query2_execute['howout'.$itr.'b']="Hit Wicket";}
    echo "<br>
            <div class='row' >
                <div class='col-md-2'></div>
                <div class='col-md-4'>".$retrieve_query2_execute['name'.$itr.'b']."</div>
                <div class='col-md-3'>".$retrieve_query2_execute['howout'.$itr.'b']."</div>
                <div class='col-md-1' align='right'>".$retrieve_query2_execute['marks'.$itr.'b']."</div>
                <div class='col-md-2'></div>
            </div>";
            if($itr==$retrieve_query2_execute["batsmenB"]-1){
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Extras</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$retrieve_query2_execute['extrasB']."</div><div class='col-md-2'></div></div>";
                echo "<br><div class='row' ><div class='col-md-2' ></div><div class='col-md-4' >Total</div><div class='col-md-2' ></div><div class='col-md-2' align='right'>".$retrieve_query2_execute['totalB']."</div><div class='col-md-2'></div></div>";
            }
        
}
echo "<br><br>
        <div class='row' >
            <div class='col-md-12' align='center' ><h4>UOP Team B Scored ".$retrieve_query2_execute['totalB']." for ".$retrieve_query2_execute['wicketsB']."</h4></div>
        </div>
        <div class='row' >    
            <div class='col-md-12' align='center' ><h4>In ".$retrieve_query_execute['opoversA']." Overs</h4></div>
        </div>";
		
echo "<div class='row' >
    <br><div class='col-md-12' align='center' ><h3>Team B Bowling Statistics</h3></div>
    </div>";
for($itr2=1;$itr2<$retrieve_query2_execute["bowlersB"];$itr2++){

echo "<br>
        <div class='row' >
            <div class='col-md-2'></div>
            <div class='col-md-3'>".$retrieve_query2_execute['b'.$itr2.'b']."</div>
            <div class='col-md-2'>".$retrieve_query2_execute['bovers'.$itr2.'b']."</div>
            <div class='col-md-1'>".$retrieve_query2_execute['bruns'.$itr2.'b']."</div>
            <div class='col-md-1'>".$retrieve_query2_execute['bextras'.$itr2.'b']."</div>
            <div class='col-md-1'>".$retrieve_query2_execute['bwickets'.$itr2.'b']."</div>
        </div>";
    
}
?></div>

</html>