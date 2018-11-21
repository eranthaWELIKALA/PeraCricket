<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}session_destroy();
session_start();
require "connect.php";
$login_query = "SELECT * FROM login_details";
$is_login_query_run = mysqli_query($connect,$login_query);
$login=mysqli_fetch_assoc($is_login_query_run);
$_SESSION["memID"]=$login["Username"];
$_SESSION["password"]=md5($login['Password']);
if(isset($_POST['submit'])){
	if($_POST['format']=="2_Day"){
		header("location:h_match2nd");
	}
	else{
		header("location:h_b_match");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match Info & Team A</title>
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
<form action="h_match.php" method="post">
<h3>Match Details</h3>
<table>
<tbody>
<tr>
<td><b>Date</b></td><td><input type="date" class="form-control"  name="date" required value="<?php if(isset($_POST['date'])){
	                   echo $_POST['date'];
                      } ?>"></td>
</tr>
<tr>
<td><b>Venue</b></td><td>
<?php
$ground_query="SELECT Ground_name FROM venues";
$is_ground_query_run=mysqli_query($connect,$ground_query);

	echo "<input type='text' class='form-control' name='venue' list='venue'><datalist id='venue'>";

while($ground_query_execute=mysqli_fetch_assoc($is_ground_query_run)){
	
	echo   "<option value='".$ground_query_execute['Ground_name']."'>";
	
}echo "</datalist>";
?> </td>
</tr>
<tr>
<td><b>Format</b></td><td>
<?php
$format_query="SELECT Format FROM formats";
$is_format_query_run=mysqli_query($connect,$format_query);

	echo "<input type='text' class='form-control' name='format' list='format'><datalist id='format'>";

while($format_query_execute=mysqli_fetch_assoc($is_format_query_run)){
	
	echo   "<option value='".$format_query_execute['Format']."'>";
	
}echo "</datalist>";
?> </td>
</tr>
</tbody>
</table>
<br>
<h3>Team A Batting Statistics</h3>
<table>
<tr>
<th>Batsman's Reg no.</th><th>How Out</th><th>Marks</th>
</tr>

<tbody>
    <?php
	
	$player_query="SELECT * FROM player_informations";
	$player_query1="SELECT * FROM past_player_informations";
	
    $wicketsA=0;    $totalA=0;    $dnbatA=0;   $max_players=12;
    for($itr=1;$itr<12;$itr++){
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='".$itr."a"."' list='".$itr."a"."' />";
		echo "<datalist id='".$itr."a"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        if(isset($_POST['howout'.$itr.'a'])){
            if($_POST['howout'.$itr.'a']=='no'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
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
            else if($_POST['howout'.$itr.'a']=='b'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='l'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='c'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='ro'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='s'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='ht'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='ht'>Hit Wicket</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                </select></td>";
                $wicketsA++;
            }
            else if($_POST['howout'.$itr.'a']=='dnb'){
                echo "<select class='form-control' name='howout".$itr."a"."'>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $dnbatA++;
            }
        }
        else{
            echo "<select class='form-control' name='howout".$itr."a"."'>
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

            echo "<td><input class='form-control' type='number' min='0' name='marks".$itr."a"."' value='";
            if(isset($_POST['marks'.$itr.'a'])){
                echo $_POST['marks'.$itr.'a'];
            }
            echo "' /></td></tr>";
            if(isset($_POST["marks".$itr.'a']) && is_numeric($_POST["marks".$itr.'a'])){ $totalA=$totalA+$_POST["marks".$itr.'a'];}

    }
    ?>
    <tr>
        <td>Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='extrasA' value='";
                                 if(isset($_POST['extrasA']) && is_numeric($_POST["extrasA"])){
                                    $totalA=$totalA+$_POST['extrasA'];
									echo $_POST['extrasA'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='total' value='<?php echo $totalA; ?>' /></td><td>for <?php echo $wicketsA; ?> wickets</td>
    </tr>
    <tr>
        <td></td>

    </tr>




</tbody>
</table>
<br><br>
<h3>Team A Bowling Statistics</h3>
<table>

<tr>
<th>Bowler's Reg no.</th><th>???</th><th>Overs</th><th>Runs</th><th>Extras</th><th>Wickets</th><th>Econ</th>
</tr>

<tbody>
    <?php
    $dnbowlA=0;
    $player_query="SELECT * FROM player_informations";
    $player_query1="SELECT * FROM past_player_informations";
	
    for($itr2=1;$itr2<12;$itr2++){
        
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='b".$itr2."a"."' list='b".$itr2."a"."' />";
		echo "<datalist id='b".$itr2."a"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        //echo "<tr><td><input class='form-control' type='text' name='b".$itr2."' value='";
        if(isset($_POST['b'.$itr2.'a'])){echo $_POST['b'.$itr2.'a'];}
        //echo "'/></td><td>";
        if(isset($_POST['bowled'.$itr2.'a'])){
            if($_POST['bowled'.$itr2.'a']=='no'){
                echo "<select class='form-control' name='bowled".$itr2."a"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
                $dnbowlA++;
            }
            else if($_POST['bowled'.$itr2.'a']=='b'){
                echo "<select class='form-control' name='bowled".$itr2."a"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Did Not</option>
                </select></td>";
            }

        }
        else{
                echo "<select class='form-control' name='bowled".$itr2."a"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
        }

        echo "<td><input class='form-control' type='text' name='bovers".$itr2."a' value='";
        if(isset($_POST['bovers'.$itr2.'a'])){echo $_POST['bovers'.$itr2.'a'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bruns".$itr2."a' value='";
        if(isset($_POST['bruns'.$itr2.'a']) && is_numeric($_POST['bruns'.$itr2.'a'])){echo $_POST['bruns'.$itr2.'a'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bextras".$itr2."a' value='";
        if(isset($_POST['bextras'.$itr2.'a']) && is_numeric($_POST['bextras'.$itr2.'a'])){echo $_POST['bextras'.$itr2.'a'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bwickets".$itr2."a' value='";
        if(isset($_POST['bwickets'.$itr2.'a']) && is_numeric($_POST['bwickets'.$itr2.'a'])){echo $_POST['bwickets'.$itr2.'a'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='text' name='becon".$itr2."a' value='";
        if(isset($_POST['becon'.$itr2.'a'])){echo $_POST['becon'.$itr2.'a'];}
        echo "'/></td></tr>";

    }
    ?>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='opoversA' required value='";
                                if(isset($_POST['opoversA'])){
									echo $_POST['opoversA'];
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
	$count_match_no_query="SELECT COUNT(*) FROM home_matches_scorecarda";
	$is_count_match_no_query_run=mysqli_query($connect,$count_match_no_query);
	$count_match_no_query_execute=mysqli_fetch_assoc($is_count_match_no_query_run);
	$match_no=$count_match_no_query_execute['COUNT(*)'];
	$match_no++;
	$_SESSION['match_no']=$match_no;


    $batsmenA=$max_players-$dnbatA;
    $bowlersA=$max_players-$dnbowlA;
    $_SESSION['batsmenA']=$batsmenA;
    $_SESSION['bowlersA']=$bowlersA;
    $_SESSION['totalA']=$totalA;
    $_SESSION['wicketsA']=$wicketsA;
    if(isset($_POST['opoversA'])){$_SESSION['opoversA']=$_POST['opoversA'];}else{$_SESSION['opoversA']=NULL;}
	if(isset($_POST['extrasA'])){$_SESSION['extrasA']=$_POST['extrasA'];}else{$_SESSION['extrasA']=NULL;}
	if(isset($_POST['venue'])){$_SESSION['venue']=$_POST['venue'];}
	if(isset($_POST['format'])){$_SESSION['format']=$_POST['format'];}
	if(isset($_POST['date'])){$_SESSION['date']=$_POST['date'];}

    for($itr2=1;$itr2<$batsmenA;$itr2++){
        if(isset($_POST[$itr2.'a'])){
            $batsmen_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST[$itr2.'a']."' ";
            $batsmen_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST[$itr2.'a']."' ";
            $is_batsmen_query_run=mysqli_query($connect,$batsmen_query);
            $batsmen_query_execute=mysqli_fetch_assoc($is_batsmen_query_run);
            if($batsmen_query_execute['Firstname']!=NULL){
                $_SESSION['name'.$itr2.'a']=$batsmen_query_execute['Firstname'];
		    	$_SESSION['reg_no'.$itr2.'a']=$_POST[$itr2.'a'];
            }
            else{
                $is_batsmen_query_run1=mysqli_query($connect,$batsmen_query1);
                $batsmen_query_execute1=mysqli_fetch_assoc($is_batsmen_query_run1);
                $_SESSION['name'.$itr2.'a']=$batsmen_query_execute1['Firstname'];
		    	$_SESSION['reg_no'.$itr2.'a']=$_POST[$itr2.'a'];
            }
            
        }
        if(isset($_POST['howout'.$itr2.'a'])){$_SESSION['howout'.$itr2.'a']=$_POST['howout'.$itr2.'a'];}
        if(isset($_POST['marks'.$itr2.'a'])){$_SESSION['marks'.$itr2.'a']=$_POST['marks'.$itr2.'a'];}
    }
    for($itr3=1;$itr3<$bowlersA;$itr3++){
        if(isset($_POST['b'.$itr3.'a'])){
            $bowler_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST['b'.$itr3.'a']."' ";
            $bowler_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST['b'.$itr3.'a']."' ";
            $is_bowler_query_run=mysqli_query($connect,$bowler_query);
            $bowler_query_execute=mysqli_fetch_assoc($is_bowler_query_run);
            if($bowler_query_execute['Firstname']!=NULL){
                $_SESSION['b'.$itr3.'a']=$bowler_query_execute['Firstname'];
			    $_SESSION['breg_no'.$itr3.'a']=$_POST['b'.$itr3.'a'];
            }else{
                $is_bowler_query_run1=mysqli_query($connect,$bowler_query1);
                $bowler_query_execute1=mysqli_fetch_assoc($is_bowler_query_run1);
                $_SESSION['b'.$itr3.'a']=$bowler_query_execute1['Firstname'];
			    $_SESSION['breg_no'.$itr3.'a']=$_POST['b'.$itr3.'a'];
            }
        }
        if(isset($_POST['bruns'.$itr3.'a'])){$_SESSION['bruns'.$itr3.'a']=$_POST['bruns'.$itr3.'a'];}
        if(isset($_POST['bovers'.$itr3.'a'])){$_SESSION['bovers'.$itr3.'a']=$_POST['bovers'.$itr3.'a'];}
        if(isset($_POST['bextras'.$itr3.'a'])){$_SESSION['bextras'.$itr3.'a']=$_POST['bextras'.$itr3.'a'];}
        if(isset($_POST['bwickets'.$itr3.'a'])){$_SESSION['bwickets'.$itr3.'a']=$_POST['bwickets'.$itr3.'a'];}
    }
    
	

?>
