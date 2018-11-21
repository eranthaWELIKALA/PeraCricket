<?php
session_start();session_destroy();
session_start();
require "connect.php";
if(isset($_POST['submit'])){
    header("location:result.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <style>
        #two{
            background-color:grey;
            padding:15px;
            color:white;
        }
    </style>
</head>

<div style="float:left; width:75%" >
<br>
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
				<li><a href="index.php"><span class="glyphicon glyphicon-pushpin"></span> Home</a></li>
				<li><a href="view.php"><span class="glyphicon glyphicon-plus"></span> View Details</a></li>
			</ul>
			</li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br><br>	
<form action="match.php" method="post">
<h3>Match Details</h3>
<table class="form-control" >
<tbody>
<tr class="form-control" >
<td class="form-control" ><b>Date</b></td><td class="form-control" ><input type="date" class="form-control"  name="date" required value="<?php if(isset($_POST['date'])){
	                   echo $_POST['date'];
                      } ?>"></td>
</tr>
<tr class="form-control" >
<td class="form-control" ><b>Opponent Team</b></td><td class="form-control" >
<?php
$team_query="SELECT Team_name FROM opponents";
$is_team_query_run=mysqli_query($connect,$team_query);

	echo "<input type='text' class='form-control' name='op' list='op'><datalist id='op'>";
	//echo "<select class='form-control' name='op'>";

while($team_query_execute=mysqli_fetch_assoc($is_team_query_run)){
	
	echo   "<option value='".$team_query_execute['Team_name']."'>";
	//echo "<option class='form-control' value='".$team_query_execute['Team_name']."'>".$team_query_execute['Team_name']."</option>";
	
}
echo "</datalist>";
//echo "</select>";
?> </td>
</tr>
<tr class="form-control" >
<td class="form-control" ><b>Venue</b></td><td class="form-control" >
<?php
$ground_query="SELECT Ground_name FROM venues";
$is_ground_query_run=mysqli_query($connect,$ground_query);

	echo "<input type='text' class='form-control' name='venue' list='venue'><datalist id='venue'>";

while($ground_query_execute=mysqli_fetch_assoc($is_ground_query_run)){
	
	echo   "<option value='".$ground_query_execute['Ground_name']."'>";
	
}echo "</datalist>";
?> </td>
</tr>
</tbody>
</table>
<br>
<h3>Batting Statistics</h3>
<table>
<tr>
<th>Batsman's Reg no.</th><th>How Out</th><th>Marks</th>
</tr>

<tbody>
    <?php
	
	$player_query="SELECT * FROM player_informations";
	$is_player_query_run=mysqli_query($connect,$player_query);

	
	
    $wickets=0;    $total=0;    $dnbat=0;   $max_players=12;
    for($itr=1;$itr<12;$itr++){
		echo "<tr><td><input class='form-control' type='text' name='".$itr."' list='".$itr."' />";
		echo "<datalist id='".$itr."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        if(isset($_POST['howout'.$itr])){
            if($_POST['howout'.$itr]=='no'){
                echo "<select class='form-control' name='howout".$itr."'>
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
            else if($_POST['howout'.$itr]=='b'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='l'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='c'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='ro'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='s'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='ht'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='ht'>Hit Wicket</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                </select></td>";
                $wickets++;
            }
            else if($_POST['howout'.$itr]=='dnb'){
                echo "<select class='form-control' name='howout".$itr."'>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $dnbat++;
            }
        }
        else{
            echo "<select class='form-control' name='howout".$itr."'>
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

            echo "<td><input class='form-control' type='number' min='0' name='marks".$itr."' value='";
            if(isset($_POST['marks'.$itr])){
                echo $_POST['marks'.$itr];
            }
            echo "' /></td></tr>";
            if(isset($_POST["marks".$itr])){ $total=$total+$_POST["marks".$itr];}

    }
    ?>
    <tr>
        <td>Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='extras' value='";
                                 if(isset($_POST['extras'])){
                                    $total=$total+$_POST['extras'];
									echo $_POST['extras'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='total' value='<?php echo $total; ?>' /></td><td>for <?php echo $wickets; ?> wickets</td>
    </tr>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='overs' required value='";
                                if(isset($_POST['overs'])){
									echo $_POST['overs'];
                                    }
                                    echo "'></td><td>overs</td>";?>
    </tr>
    <tr>
        <td></td>

    </tr>




</tbody>
</table>
<br><br>
<h3>Bowling Statistics</h3>
<table>

<tr>
<th>Bowler's Reg no.</th><th>???</th><th>Overs</th><th>Runs</th><th>Extras</th><th>Wickets</th><th>Econ</th>
</tr>

<tbody>
    <?php
    $dnbowl=0; $optotal=0;  $opextras=0;    $opwickets=0;
    for($itr2=1;$itr2<12;$itr2++){
        echo "<tr><td><input class='form-control' type='text' name='b".$itr2."' value='";
        if(isset($_POST['b'.$itr2])){echo $_POST['b'.$itr2];}
        echo "'/></td><td>";
        if(isset($_POST['bowled'.$itr2])){
            if($_POST['bowled'.$itr2]=='no'){
                echo "<select class='form-control' name='bowled".$itr2."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
                $dnbowl++;
            }
            else if($_POST['bowled'.$itr2]=='b'){
                echo "<select class='form-control' name='bowled".$itr2."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Did Not</option>
                </select></td>";
            }

        }
        else{
                echo "<select class='form-control' name='bowled".$itr2."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
        }

        echo "<td><input class='form-control' type='text' name='bovers".$itr2."' value='";
        if(isset($_POST['bovers'.$itr2])){echo $_POST['bovers'.$itr2];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bruns".$itr2."' value='";
        if(isset($_POST['bruns'.$itr2])){echo $_POST['bruns'.$itr2];}
        echo "'/></td>";
        if(isset($_POST["bruns".$itr2])){ $optotal=$optotal+$_POST["bruns".$itr2];}

        echo "<td><input class='form-control' type='number' min='0' name='bextras".$itr2."' value='";
        if(isset($_POST['bextras'.$itr2])){echo $_POST['bextras'.$itr2];}
        echo "'/></td>";
        if(isset($_POST["bextras".$itr2])){ $opextras=$opextras+$_POST["bextras".$itr2];}

        echo "<td><input class='form-control' type='number' min='0' name='bwickets".$itr2."' value='";
        if(isset($_POST['bwickets'.$itr2])){echo $_POST['bwickets'.$itr2];}
        echo "'/></td>";
        if(isset($_POST["bwickets".$itr2])){ $opwickets=$opwickets+$_POST["bwickets".$itr2];}

        echo "<td><input class='form-control' type='text' name='becon".$itr2."' value='";
        if(isset($_POST['becon'.$itr2])){echo $_POST['becon'.$itr2];}
        echo "'/></td></tr>";

    }
    ?>
    <tr>
        <td>Other Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='opoextras' value='";
                                 if(isset($_POST['opoextras'])){
                                    echo $_POST['opoextras'];
                                    $optotal=$optotal+$_POST['opoextras'];
                                    $opextras=$opextras+$_POST['opoextras'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
    <td>Extras</td><td></td><td><input class='form-control' type='number' min='0' name='opextras' value='<?php echo $opextras; ?>' /></td>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='optotal' value='<?php echo $optotal; ?>' /></td><td>for <?php echo $wickets; ?> wickets</td>
    </tr>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='opovers' required value='";
                                if(isset($_POST['opovers'])){
									echo $_POST['opovers'];
                                    }
                                    echo "'></td><td>overs</td>";?>
    </tr>
    <tr>
        <td><select class='form-control' name='decision' required>
                <option class='form-control' value='Won'>Won</option>
                <option class='form-control' value='Lost'>Lost</option>
				<option class='form-control' value='Tie'>Tie</option>
				<option class='form-control' value='Drawn'>Drawn</option>
                </select></td>
        <td align="right">Authorize</td>
        <td><input class="form-control" type="checkbox" name="authorize" id="authorize" align="left" required></td>
        <td><input class="form-control" type="submit" value="SUBMIT" name="submit"></td>
    </tr>




</tbody>
</table>

</form><br><br>
</div><br>
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

</html>
<?php
	$count_match_no_query="SELECT COUNT(*) FROM matches_scorecard";
	$is_count_match_no_query_run=mysqli_query($connect,$count_match_no_query);
	$count_match_no_query_execute=mysqli_fetch_assoc($is_count_match_no_query_run);
	$match_no=$count_match_no_query_execute['COUNT(*)'];
	$match_no++;
	$_SESSION['match_no']=$match_no;


    $batsmen=$max_players-$dnbat;
    $bowlers=$max_players-$dnbowl;
    $_SESSION['batsmen']=$batsmen;
    $_SESSION['bowlers']=$bowlers;
    $_SESSION['total']=$total;
    $_SESSION['optotal']=$optotal;
    $_SESSION['opextras']=$opextras;
    $_SESSION['wickets']=$wickets;
    $_SESSION['opwickets']=$opwickets;
    if(isset($_POST['overs'])){$_SESSION['overs']=$_POST['overs'];}else{$_SESSION['overs']=NULL;}
    if(isset($_POST['opovers'])){$_SESSION['opovers']=$_POST['opovers'];}else{$_SESSION['opovers']=NULL;}
    if(isset($_POST['extras'])){$_SESSION['extras']=$_POST['extras'];}else{$_SESSION['extras']=NULL;}
	if(isset($_POST['op'])){$_SESSION['op']=$_POST['op'];}
	if(isset($_POST['decision'])){$_SESSION['decision']=$_POST['decision'];}
	if(isset($_POST['venue'])){$_SESSION['venue']=$_POST['venue'];}
	if(isset($_POST['date'])){$_SESSION['date']=$_POST['date'];}

    for($itr2=1;$itr2<$batsmen;$itr2++){
        if(isset($_POST[$itr2])){
            $batsmen_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST[$itr2]."' ";
            $is_batsmen_query_run=mysqli_query($connect,$batsmen_query);
            $batsmen_query_execute=mysqli_fetch_assoc($is_batsmen_query_run);
            $_SESSION['name'.$itr2]=$batsmen_query_execute['Firstname'];
			$_SESSION['reg_no'.$itr2]=$_POST[$itr2];}
        if(isset($_POST['howout'.$itr2])){$_SESSION['howout'.$itr2]=$_POST['howout'.$itr2];}
        if(isset($_POST['marks'.$itr2])){$_SESSION['marks'.$itr2]=$_POST['marks'.$itr2];}
    }
    for($itr3=1;$itr3<$bowlers;$itr3++){
        if(isset($_POST['b'.$itr3])){
            $bowler_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST['b'.$itr3]."' ";
            $is_bowler_query_run=mysqli_query($connect,$bowler_query);
            $bowler_query_execute=mysqli_fetch_assoc($is_bowler_query_run);
            $_SESSION['b'.$itr3]=$bowler_query_execute['Firstname'];
			$_SESSION['breg_no'.$itr3]=$_POST['b'.$itr3];}
        if(isset($_POST['bruns'.$itr3])){$_SESSION['bruns'.$itr3]=$_POST['bruns'.$itr3];}
        if(isset($_POST['bovers'.$itr3])){$_SESSION['bovers'.$itr3]=$_POST['bovers'.$itr3];}
        if(isset($_POST['bextras'.$itr3])){$_SESSION['bextras'.$itr3]=$_POST['bextras'.$itr3];}
        if(isset($_POST['bwickets'.$itr3])){$_SESSION['bwickets'.$itr3]=$_POST['bwickets'.$itr3];}
    }
	

?>
