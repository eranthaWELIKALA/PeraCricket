<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index.php");
}
require "connect.php";
if(isset($_POST['submit'])){
	if($_SESSION['format']=="2_Day"){
		header("location:h_b_match2nd");
	}
	else{
		header("location:h_result");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match Team B</title>
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
<form action="h_b_match.php" method="post">
<h3>Match Details</h3>

<br>
<h3>Team B Batting Statistics</h3>
<table>
<tr>
<th>Batsman's Reg no.</th><th>How Out</th><th>Marks</th>
</tr>

<tbody>
    <?php
	
	$player_query="SELECT * FROM player_informations";
	$player_query1="SELECT * FROM past_player_informations";
	
    $wicketsB=0;    $totalB=0;    $dnbatB=0;   $max_players=12;
    for($itr=1;$itr<12;$itr++){
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='".$itr."b"."' list='".$itr."b"."' />";
		echo "<datalist id='".$itr."b"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        if(isset($_POST['howout'.$itr.'b'])){
            if($_POST['howout'.$itr.'b']=='no'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
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
            else if($_POST['howout'.$itr.'b']=='b'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='l'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='c'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='ro'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='s'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='ht'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='ht'>Hit Wicket</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                </select></td>";
                $wicketsB++;
            }
            else if($_POST['howout'.$itr.'b']=='dnb'){
                echo "<select class='form-control' name='howout".$itr."b"."'>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $dnbatB++;
            }
        }
        else{
            echo "<select class='form-control' name='howout".$itr."b"."'>
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

            echo "<td><input class='form-control' type='number' min='0' name='marks".$itr."b"."' value='";
            if(isset($_POST['marks'.$itr.'b'])){
                echo $_POST['marks'.$itr.'b'];
            }
            echo "' /></td></tr>";
            if(isset($_POST["marks".$itr.'b']) && is_numeric($_POST["marks".$itr.'b'])){ $totalB=$totalB+$_POST["marks".$itr.'b'];}

    }
    ?>
    <tr>
        <td>Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='extrasB' value='";
                                 if(isset($_POST['extrasB']) && is_numeric($_POST["extrasB"])){
                                    $totalB=$totalB+$_POST['extrasB'];
									echo $_POST['extrasB'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='totalB' value='<?php echo $totalB; ?>' /></td><td>for <?php echo $wicketsB; ?> wickets</td>
    </tr>




</tbody>
</table>
<br><br>
<h3>Team B Bowling Statistics</h3>
<table>

<tr>
<th>Bowler's Reg no.</th><th>???</th><th>Overs</th><th>Runs</th><th>Extras</th><th>Wickets</th><th>Econ</th>
</tr>

<tbody>
    <?php
    $dnbowlB=0;
    $player_query="SELECT * FROM player_informations";
    $player_query1="SELECT * FROM past_player_informations";
	
    for($itr2=1;$itr2<12;$itr2++){
        
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='b".$itr2."b"."' list='b".$itr2."b"."' />";
		echo "<datalist id='b".$itr2."b"."'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        //echo "<tr><td><input class='form-control' type='text' name='b".$itr2."' value='";
        if(isset($_POST['b'.$itr2.'b'])){echo $_POST['b'.$itr2.'b'];}
        //echo "'/></td><td>";
        if(isset($_POST['bowled'.$itr2.'b'])){
            if($_POST['bowled'.$itr2.'b']=='no'){
                echo "<select class='form-control' name='bowled".$itr2."b"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
                $dnbowlB++;
            }
            else if($_POST['bowled'.$itr2.'b']=='b'){
                echo "<select class='form-control' name='bowled".$itr2."b"."'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Did Not</option>
                </select></td>";
            }

        }
        else{
                echo "<select class='form-control' name='bowled".$itr2."b"."'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
        }

        echo "<td><input class='form-control' type='text' name='bovers".$itr2."b"."' value='";
        if(isset($_POST['bovers'.$itr2.'b'])){echo $_POST['bovers'.$itr2.'b'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bruns".$itr2."b"."' value='";
        if(isset($_POST['bruns'.$itr2.'b']) && is_numeric($_POST['bruns'.$itr2.'b'])){echo $_POST['bruns'.$itr2.'b'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bextras".$itr2."b"."' value='";
        if(isset($_POST['bextras'.$itr2.'b']) && is_numeric($_POST['bextras'.$itr2.'b'])){echo $_POST['bextras'.$itr2.'b'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bwickets".$itr2."b"."' value='";
        if(isset($_POST['bwickets'.$itr2.'b']) && is_numeric($_POST['bwickets'.$itr2.'b'])){echo $_POST['bwickets'.$itr2.'b'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='text' name='becon".$itr2."b"."' value='";
        if(isset($_POST['becon'.$itr2.'b'])){echo $_POST['becon'.$itr2.'b'];}
        echo "'/></td></tr>";

    }
    ?>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='opoversB' required value='";
                                if(isset($_POST['opoversB'])){
									echo $_POST['opoversB'];
                                    }
                                    echo "'></td><td>overs</td>";?>
    </tr>
    <tr>
        <td><select class='form-control' name='decision' required>
                <option class='form-control' value='AWon'>Team A Won</option>
                <option class='form-control' value='BWon'>Team B Won</option>
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

    $batsmenB=$max_players-$dnbatB;
    $bowlersB=$max_players-$dnbowlB;
    $_SESSION['batsmenB']=$batsmenB;
    $_SESSION['bowlersB']=$bowlersB;
    $_SESSION['totalB']=$totalB;
    $_SESSION['wicketsB']=$wicketsB;
    if(isset($_POST['opoversB'])){$_SESSION['opoversB']=$_POST['opoversB'];}else{$_SESSION['opoversB']=NULL;}
    if(isset($_POST['extrasB'])){$_SESSION['extrasB']=$_POST['extrasB'];}else{$_SESSION['extrasB']=NULL;}
	if(isset($_POST['decision'])){$_SESSION['decision']=$_POST['decision'];}

    for($itr2=1;$itr2<$batsmenB;$itr2++){
        if(isset($_POST[$itr2.'b'])){
            $batsmen_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST[$itr2.'b']."' ";
            $batsmen_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST[$itr2.'b']."' ";
            $is_batsmen_query_run=mysqli_query($connect,$batsmen_query);
            $batsmen_query_execute=mysqli_fetch_assoc($is_batsmen_query_run);
            if($batsmen_query_execute['Firstname']!=NULL){
            $_SESSION['name'.$itr2.'b']=$batsmen_query_execute['Firstname'];
			$_SESSION['reg_no'.$itr2.'b']=$_POST[$itr2.'b'];
            }else{
                $is_batsmen_query_run1=mysqli_query($connect,$batsmen_query1);
                $batsmen_query_execute1=mysqli_fetch_assoc($is_batsmen_query_run1);
                $_SESSION['name'.$itr2.'b']=$batsmen_query_execute1['Firstname'];
    			$_SESSION['reg_no'.$itr2.'b']=$_POST[$itr2.'b'];
            }
        }
        if(isset($_POST['howout'.$itr2.'b'])){$_SESSION['howout'.$itr2.'b']=$_POST['howout'.$itr2.'b'];}
        if(isset($_POST['marks'.$itr2.'b'])){$_SESSION['marks'.$itr2.'b']=$_POST['marks'.$itr2.'b'];}
    }
    for($itr3=1;$itr3<$bowlersB;$itr3++){
        if(isset($_POST['b'.$itr3.'b'])){
            $bowler_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST['b'.$itr3.'b']."' ";
            $bowler_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST['b'.$itr3.'b']."' ";
            $is_bowler_query_run=mysqli_query($connect,$bowler_query);
            $bowler_query_execute=mysqli_fetch_assoc($is_bowler_query_run);
            if($bowler_query_execute['Firstname']!=NULL){
                $_SESSION['b'.$itr3.'b']=$bowler_query_execute['Firstname'];
			    $_SESSION['breg_no'.$itr3.'b']=$_POST['b'.$itr3.'b'];
            }else{
                $is_bowler_query_run1=mysqli_query($connect,$bowler_query1);
                $bowler_query_execute1=mysqli_fetch_assoc($is_bowler_query_run1);
                $_SESSION['b'.$itr3.'b']=$bowler_query_execute1['Firstname'];
			    $_SESSION['breg_no'.$itr3.'b']=$_POST['b'.$itr3.'b'];
            }
        }
        if(isset($_POST['bruns'.$itr3.'b'])){$_SESSION['bruns'.$itr3.'b']=$_POST['bruns'.$itr3.'b'];}
        if(isset($_POST['bovers'.$itr3.'b'])){$_SESSION['bovers'.$itr3.'b']=$_POST['bovers'.$itr3.'b'];}
        if(isset($_POST['bextras'.$itr3.'b'])){$_SESSION['bextras'.$itr3.'b']=$_POST['bextras'.$itr3.'b'];}
        if(isset($_POST['bwickets'.$itr3.'b'])){$_SESSION['bwickets'.$itr3.'b']=$_POST['bwickets'.$itr3.'b'];}
    }
	

?>
