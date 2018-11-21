<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
require "connect.php";
if(isset($_POST['submit'])){
	header("location:h_b_match");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match Team A 2nd Innings</title>
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
<div style="float:left; width:75%" >
<br><br><br>
<form action="h_match2nd.php" method="post">
<h3>Match Details</h3>
<br>
<h3>Team A 2nd Innings Batting Statistics</h3>
<table>
<tr>
<th>Batsman's Reg no.</th><th>How Out</th><th>Marks</th>
</tr>

<tbody>
    <?php
	
	$player_query="SELECT * FROM player_informations";
	$player_query1="SELECT * FROM past_player_informations";
	
    $wicketsA2nd=0;    $totalA2nd=0;    $dnbatA2nd=0;   $max_players=12;
    for($itr=1;$itr<12;$itr++){
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='".$itr."a2nd"."' list='".$itr."a2nd"."' />";
		echo "<datalist id='".$itr."a2nd"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        if(isset($_POST['howout'.$itr.'a2nd'])){
            if($_POST['howout'.$itr.'a2nd']=='no'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
            }
            else if($_POST['howout'.$itr.'a2nd']=='b'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='l'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='c'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='ro'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='s'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='ht'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='ht'>Hit Wicket</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                </select></td>";
                $wicketsA2nd++;
            }
            else if($_POST['howout'.$itr.'a2nd']=='dnb'){
                echo "<select class='form-control' name='howout".$itr."a2nd"."'>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $dnbatA2nd++;
            }
        }
        else{
            echo "<select class='form-control' name='howout".$itr."a2nd"."'>
            <option class='form-control' value='dnb'>Did not bat</option>
            <option class='form-control' value='no'>Not Out</option>
            <option class='form-control' value='b'>Bowled</option>
            <option class='form-control' value='l'>LBW</option>
            <option class='form-control' value='c'>Caught</option>
            <option class='form-control' value='ro'>Run Out</option>
            <option class='form-control' value='s'>Stumped</option>
            <option class='form-control' value='ht'>Hit Wicket</option>
        </select></td>";
        }

            echo "<td><input class='form-control' type='number' min='0' name='marks".$itr."a2nd"."' value='";
            if(isset($_POST['marks'.$itr.'a2nd'])){
                echo $_POST['marks'.$itr.'a2nd'];
            }
            echo "' /></td></tr>";
            if(isset($_POST["marks".$itr.'a2nd']) && is_numeric($_POST["marks".$itr.'a2nd'])){ $totalA2nd=$totalA2nd+$_POST["marks".$itr.'a2nd'];}

    }
    ?>
    <tr>
        <td>Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='extrasA2nd' value='";
                                 if(isset($_POST['extrasA2nd']) && is_numeric($_POST["extrasA2nd"])){
                                    $totalA2nd=$totalA2nd+$_POST['extrasA2nd'];
									echo $_POST['extrasA2nd'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='total2nd' value='<?php echo $totalA2nd; ?>' /></td><td>for <?php echo $wicketsA2nd; ?> wickets</td>
    </tr>
    <tr>
        <td></td>

    </tr>




</tbody>
</table>
<br><br>
<h3>Team A 2nd Innings Bowling Statistics</h3>
<table>

<tr>
<th>Bowler's Reg no.</th><th>???</th><th>Overs</th><th>Runs</th><th>Extras</th><th>Wickets</th><th>Econ</th>
</tr>

<tbody>
    <?php
    $dnbowlA2nd=0;
    $player_query="SELECT * FROM player_informations";
    $player_query1="SELECT * FROM past_player_informations";
	
    for($itr2=1;$itr2<12;$itr2++){
        
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='b".$itr2."a2nd"."' list='b".$itr2."a2nd"."' />";
		echo "<datalist id='b".$itr2."a2nd"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        //echo "<tr><td><input class='form-control' type='text' name='b".$itr2."' value='";
        if(isset($_POST['b'.$itr2.'a2nd'])){echo $_POST['b'.$itr2.'a2nd'];}
        //echo "'/></td><td>";
        if(isset($_POST['bowled'.$itr2.'a2nd'])){
            if($_POST['bowled'.$itr2.'a2nd']=='no'){
                echo "<select class='form-control' name='bowled".$itr2."a2nd"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
                $dnbowlA2nd++;
            }
            else if($_POST['bowled'.$itr2.'a2nd']=='b'){
                echo "<select class='form-control' name='bowled".$itr2."a2nd"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Did Not</option>
                </select></td>";
            }

        }
        else{
                echo "<select class='form-control' name='bowled".$itr2."a2nd"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
        }

        echo "<td><input class='form-control' type='text' name='bovers".$itr2."a2nd' value='";
        if(isset($_POST['bovers'.$itr2.'a2nd'])){echo $_POST['bovers'.$itr2.'a2nd'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bruns".$itr2."a2nd' value='";
        if(isset($_POST['bruns'.$itr2.'a2nd']) && is_numeric($_POST['bruns'.$itr2.'a2nd'])){echo $_POST['bruns'.$itr2.'a2nd'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bextras".$itr2."a2nd' value='";
        if(isset($_POST['bextras'.$itr2.'a2nd']) && is_numeric($_POST['bextras'.$itr2.'a2nd'])){echo $_POST['bextras'.$itr2.'a2nd'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bwickets".$itr2."a2nd' value='";
        if(isset($_POST['bwickets'.$itr2.'a2nd']) && is_numeric($_POST['bwickets'.$itr2.'a2nd'])){echo $_POST['bwickets'.$itr2.'a2nd'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='text' name='becon".$itr2."a2nd' value='";
        if(isset($_POST['becon'.$itr2.'a2nd'])){echo $_POST['becon'.$itr2.'a2nd'];}
        echo "'/></td></tr>";

    }
    ?>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='opoversA2nd' required value='";
                                if(isset($_POST['opoversA2nd'])){
									echo $_POST['opoversA2nd'];
                                    }
                                    echo "'></td><td>overs</td>";?>
    </tr>
	<tr>
        <td align="right">Authorize</td>
        <td><input class="form-control" type="checkbox" name="authorize" id="authorize" align="left" required></td>
        <td><input class="form-control" type="submit" value="SUBMIT" name="submit"></td>
    </tr>



</tbody>
</table>

</form><br><br>
</div><br><br><br>
<div id="two" style="float:right;width:20%" >

<div id="search1" >
  <input type="text" id="myInput1" placeholder="Search..." >
  <?php
  $query="SELECT * FROM player_informations";
  $is_query_run=mysqli_query($connect,$query);
  echo "<table><th>Player Name</th><th>Reg_no</th><tbody id='myTable1'>";
  while($query_execute=mysqli_fetch_assoc($is_query_run)){
      echo "<tr><td>".$query_execute['Firstname']." ".$query_execute['Lastname']."</td><td>".$query_execute['Reg_no']."</td></tr>";
  }
  echo "</tbody><table>";

  ?>
</div>


</div>
</body>
</html>
<?php

    $batsmenA2nd=$max_players-$dnbatA2nd;
    $bowlersA2nd=$max_players-$dnbowlA2nd;
    $_SESSION['batsmenA2nd']=$batsmenA2nd;
    $_SESSION['bowlersA2nd']=$bowlersA2nd;
    $_SESSION['totalA2nd']=$totalA2nd;
    $_SESSION['wicketsA2nd']=$wicketsA2nd;
    if(isset($_POST['opoversA2nd'])){$_SESSION['opoversA2nd']=$_POST['opoversA2nd'];}else{$_SESSION['opoversA2nd']=NULL;}
	if(isset($_POST['extrasA2nd'])){$_SESSION['extrasA2nd']=$_POST['extrasA2nd'];}else{$_SESSION['extrasA2nd']=NULL;}

    for($itr2=1;$itr2<$batsmenA2nd;$itr2++){
        if(isset($_POST[$itr2.'a2nd'])){
            $batsmen_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST[$itr2.'a2nd']."' ";
            $batsmen_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST[$itr2.'a2nd']."' ";
            $is_batsmen_query_run=mysqli_query($connect,$batsmen_query);
            $batsmen_query_execute=mysqli_fetch_assoc($is_batsmen_query_run);
            if($batsmen_query_execute['Firstname']!=NULL){
                $_SESSION['name'.$itr2.'a2nd']=$batsmen_query_execute['Firstname'];
		    	$_SESSION['reg_no'.$itr2.'a2nd']=$_POST[$itr2.'a2nd'];
            }
            else{
                $is_batsmen_query_run1=mysqli_query($connect,$batsmen_query1);
                $batsmen_query_execute1=mysqli_fetch_assoc($is_batsmen_query_run1);
                $_SESSION['name'.$itr2.'a2nd']=$batsmen_query_execute1['Firstname'];
		    	$_SESSION['reg_no'.$itr2.'a2nd']=$_POST[$itr2.'a2nd'];
            }
            
        }
        if(isset($_POST['howout'.$itr2.'a2nd'])){$_SESSION['howout'.$itr2.'a2nd']=$_POST['howout'.$itr2.'a2nd'];}
        if(isset($_POST['marks'.$itr2.'a2nd'])){$_SESSION['marks'.$itr2.'a2nd']=$_POST['marks'.$itr2.'a2nd'];}
    }
    for($itr3=1;$itr3<$bowlersA2nd;$itr3++){
        if(isset($_POST['b'.$itr3.'a2nd'])){
            $bowler_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST['b'.$itr3.'a2nd']."' ";
            $bowler_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST['b'.$itr3.'a2nd']."' ";
            $is_bowler_query_run=mysqli_query($connect,$bowler_query);
            $bowler_query_execute=mysqli_fetch_assoc($is_bowler_query_run);
            if($bowler_query_execute['Firstname']!=NULL){
                $_SESSION['b'.$itr3.'a2nd']=$bowler_query_execute['Firstname'];
			    $_SESSION['breg_no'.$itr3.'a2nd']=$_POST['b'.$itr3.'a2nd'];
            }else{
                $is_bowler_query_run1=mysqli_query($connect,$bowler_query1);
                $bowler_query_execute1=mysqli_fetch_assoc($is_bowler_query_run1);
                $_SESSION['b'.$itr3.'a2nd']=$bowler_query_execute1['Firstname'];
			    $_SESSION['breg_no'.$itr3.'a2nd']=$_POST['b'.$itr3.'a2nd'];
            }
        }
        if(isset($_POST['bruns'.$itr3.'a2nd'])){$_SESSION['bruns'.$itr3.'a2nd']=$_POST['bruns'.$itr3.'a2nd'];}
        if(isset($_POST['bovers'.$itr3.'a2nd'])){$_SESSION['bovers'.$itr3.'a2nd']=$_POST['bovers'.$itr3.'a2nd'];}
        if(isset($_POST['bextras'.$itr3.'a2nd'])){$_SESSION['bextras'.$itr3.'a2nd']=$_POST['bextras'.$itr3.'a2nd'];}
        if(isset($_POST['bwickets'.$itr3.'a2nd'])){$_SESSION['bwickets'.$itr3.'a2nd']=$_POST['bwickets'.$itr3.'a2nd'];}
    }
    
	

?>
