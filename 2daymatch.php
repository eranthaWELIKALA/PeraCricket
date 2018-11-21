<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index");
}
require "connect.php";
if(isset($_POST['submit'])){
    header("location:2dayresult");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Match</title>
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
<form action="2daymatch.php" method="post">
<h3>2nd Innings Details</h3>
<br>
<h3>2nd Innings Batting Statistics</h3>
<table>
<tr>
<th>Batsman's Reg no.</th><th>How Out</th><th>Marks</th>
</tr>

<tbody>
    <?php
	
	$player_query="SELECT * FROM player_informations";
	$player_query1="SELECT * FROM past_player_informations";
	
    $wickets2nd=0;    $total2nd=0;    $dnbat2nd=0;   $max_players=12;
    for($itr=1;$itr<12;$itr++){
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='".$itr."2nd' list='".$itr."2nd' />";
		echo "<datalist id='".$itr."2nd'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        if(isset($_POST['howout'.$itr.'2nd'])){
            if($_POST['howout'.$itr.'2nd']=='no'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
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
            else if($_POST['howout'.$itr.'2nd']=='b'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='l'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='c'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='ro'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='s'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='ht'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='ht'>Hit Wicket</option>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                </select></td>";
                $wickets2nd++;
            }
            else if($_POST['howout'.$itr.'2nd']=='dnb'){
                echo "<select class='form-control' name='howout".$itr."2nd'>
                <option class='form-control' value='dnb'>Did not bat</option>
                <option class='form-control' value='no'>Not Out</option>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='l'>LBW</option>
                <option class='form-control' value='c'>Caught</option>
                <option class='form-control' value='ro'>Run Out</option>
                <option class='form-control' value='s'>Stumped</option>
                <option class='form-control' value='ht'>Hit Wicket</option>
                </select></td>";
                $dnbat2nd++;
            }
        }
        else{
            echo "<select class='form-control' name='howout".$itr."2nd'>
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

            echo "<td><input class='form-control' type='number' min='0' name='marks".$itr."2nd' value='";
            if(isset($_POST['marks'.$itr.'2nd'])){
                echo $_POST['marks'.$itr.'2nd'];
            }
            echo "' /></td></tr>";
            if(isset($_POST["marks".$itr.'2nd']) && is_numeric($_POST["marks".$itr.'2nd'])){ $total2nd=$total2nd+$_POST["marks".$itr.'2nd'];}

    }
    ?>
    <tr>
        <td>Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='extras2nd' value='";
                                 if(isset($_POST['extras2nd']) && is_numeric($_POST["extras2nd"])){
                                    $total=$total+$_POST['extras2nd'];
									echo $_POST['extras2nd'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='total2nd' value='<?php echo $total2nd; ?>' /></td><td>for <?php echo $wickets2nd; ?> wickets</td>
    </tr>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='overs2nd' required value='";
                                if(isset($_POST['overs2nd'])){
									echo $_POST['overs2nd'];
                                    }
                                    echo "'></td><td>overs</td>";?>
    </tr>
    <tr>
        <td></td>

    </tr>




</tbody>
</table>
<br><br>
<h3>2nd Inninigs Bowling Statistics</h3>
<table>

<tr>
<th>Bowler's Reg no.</th><th>???</th><th>Overs</th><th>Runs</th><th>Extras</th><th>Wickets</th><th>Econ</th>
</tr>

<tbody>
    <?php
    $dnbowl2nd=0; $optotal2nd=0;  $opextras2nd=0;    $opwickets2nd=0;
    $player_query="SELECT * FROM player_informations";
    $player_query1="SELECT * FROM past_player_informations";
	
    for($itr2=1;$itr2<12;$itr2++){
        
        $is_player_query_run=mysqli_query($connect,$player_query);
        $is_player_query_run1=mysqli_query($connect,$player_query1);
		echo "<tr><td><input class='form-control' type='text' name='b".$itr2."2nd' list='b".$itr2."2nd' />";
		echo "<datalist id='b".$itr2."2nd'>";

		while($player_query_execute=mysqli_fetch_assoc($is_player_query_run)){
	
			echo   "<option value='".$player_query_execute['Reg_no']."'>".$player_query_execute['Firstname']." ".$player_query_execute['Lastname']."</option>";
	
		}
		while($player_query_execute1=mysqli_fetch_assoc($is_player_query_run1)){
	
			echo   "<option value='".$player_query_execute1['Reg_no']."'>".$player_query_execute1['Firstname']." ".$player_query_execute1['Lastname']."</option>";
	
		}
		echo "</datalist>";
		echo "</td><td>";
        //echo "<tr><td><input class='form-control' type='text' name='b".$itr2."' value='";
        if(isset($_POST['b'.$itr2.'2nd'])){echo $_POST['b'.$itr2.'2nd'];}
        //echo "'/></td><td>";
        if(isset($_POST['bowled'.$itr2.'2nd'])){
            if($_POST['bowled'.$itr2.'2nd']=='no'){
                echo "<select class='form-control' name='bowled".$itr2."2nd'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
                $dnbowl2nd++;
            }
            else if($_POST['bowled'.$itr2.'2nd']=='b'){
                echo "<select class='form-control' name='bowled".$itr2."2nd'>
                <option class='form-control' value='b'>Bowled</option>
                <option class='form-control' value='no'>Did Not</option>
                </select></td>";
            }

        }
        else{
                echo "<select class='form-control' name='bowled".$itr2."2nd'>
                <option class='form-control' value='no'>Did Not</option>
                <option class='form-control' value='b'>Bowled</option>
                </select></td>";
        }

        echo "<td><input class='form-control' type='text' name='bovers".$itr2."2nd' value='";
        if(isset($_POST['bovers'.$itr2.'2nd'])){echo $_POST['bovers'.$itr2.'2nd'];}
        echo "'/></td>";

        echo "<td><input class='form-control' type='number' min='0' name='bruns".$itr2."2nd' value='";
        if(isset($_POST['bruns'.$itr2.'2nd']) && is_numeric($_POST['bruns'.$itr2.'2nd'])){echo $_POST['bruns'.$itr2.'2nd'];}
        echo "'/></td>";
        if(isset($_POST["bruns".$itr2.'2nd']) && is_numeric($_POST['bruns'.$itr2.'2nd'])){ $optotal2nd=$optotal2nd+$_POST["bruns".$itr2.'2nd'];}

        echo "<td><input class='form-control' type='number' min='0' name='bextras".$itr2."2nd' value='";
        if(isset($_POST['bextras'.$itr2.'2nd']) && is_numeric($_POST['bextras'.$itr2.'2nd'])){echo $_POST['bextras'.$itr2.'2nd'];}
        echo "'/></td>";
        if(isset($_POST["bextras".$itr2.'2nd']) && is_numeric($_POST['bextras'.$itr2.'2nd'])){ $opextras2nd=$opextras2nd+$_POST["bextras".$itr2.'2nd'];}

        echo "<td><input class='form-control' type='number' min='0' name='bwickets".$itr2."2nd' value='";
        if(isset($_POST['bwickets'.$itr2.'2nd']) && is_numeric($_POST['bwickets'.$itr2.'2nd'])){echo $_POST['bwickets'.$itr2.'2nd'];}
        echo "'/></td>";
        if(isset($_POST["bwickets".$itr2.'2nd']) && is_numeric($_POST['bwickets'.$itr2.'2nd'])){ $opwickets2nd=$opwickets2nd+$_POST["bwickets".$itr2.'2nd'];}

        echo "<td><input class='form-control' type='text' name='becon".$itr2."2nd' value='";
        if(isset($_POST['becon'.$itr2.'2nd'])){echo $_POST['becon'.$itr2.'2nd'];}
        echo "'/></td></tr>";

    }
    ?>
    <tr>
        <td>Other Wickets</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='opwickets2nd' value='";
                                 if(isset($_POST['opwickets2nd']) && is_numeric($_POST["opwickets2nd"])){
                                    echo $_POST['opwickets2nd'];
                                    $opwickets2nd=$opwickets2nd+$_POST['opwickets2nd'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
        <td>Other Extras</td><td></td><td><?php echo "<input class='form-control' type='number' min='0' name='opoextras2nd' value='";
                                 if(isset($_POST['opoextras2nd']) && is_numeric($_POST["opoextras2nd"])){
                                    echo $_POST['opoextras2nd'];
                                    $optotal2nd=$optotal2nd+$_POST['opoextras2nd'];
                                    $opextras2nd=$opextras2nd+$_POST['opoextras2nd'];
                                    }
                                    echo "' ></td>";?>
    </tr>
    <tr>
    <td>Extras</td><td></td><td><input class='form-control' type='number' min='0' name='opextras2nd' value='<?php echo $opextras2nd; ?>' /></td>
    </tr>
    <tr>
        <td>Total</td><td></td><td><input class='form-control' type='number' min='0' name='optotal2nd' value='<?php echo $optotal2nd; ?>' /></td><td>for <?php echo $opwickets2nd; ?> wickets</td>
    </tr>
    <tr>
        <td></td><td></td><td><?php echo "<input class='form-control' type='text' name='opovers2nd' required value='";
                                if(isset($_POST['opovers2nd'])){
									echo $_POST['opovers2nd'];
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
    $batsmen2nd=$max_players-$dnbat2nd;
    $bowlers2nd=$max_players-$dnbowl2nd;
    $_SESSION['batsmen2nd']=$batsmen2nd;
    $_SESSION['bowlers2nd']=$bowlers2nd;
    $_SESSION['total2nd']=$total2nd;
    $_SESSION['optotal2nd']=$optotal2nd;
    $_SESSION['opextras2nd']=$opextras2nd;
    $_SESSION['wickets2nd']=$wickets2nd;
    $_SESSION['opwickets2nd']=$opwickets2nd;
    if(isset($_POST['overs2nd'])){$_SESSION['overs2nd']=$_POST['overs2nd'];}else{$_SESSION['overs2nd']=NULL;}
    if(isset($_POST['opovers2nd'])){$_SESSION['opovers2nd']=$_POST['opovers2nd'];}else{$_SESSION['opovers2nd']=NULL;}
    if(isset($_POST['extras2nd'])){$_SESSION['extras2nd']=$_POST['extras2nd'];}else{$_SESSION['extras2nd']=NULL;}
		

    for($itr2=1;$itr2<$batsmen2nd;$itr2++){
        if(isset($_POST[$itr2."2nd"])){
            $batsmen_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST[$itr2.'2nd']."' ";
            $batsmen_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST[$itr2.'2nd']."' ";
            $is_batsmen_query_run=mysqli_query($connect,$batsmen_query);
            $batsmen_query_execute=mysqli_fetch_assoc($is_batsmen_query_run);
            if($batsmen_query_execute['Firstname']!=NULL){
                $_SESSION['name'.$itr2.'2nd']=$batsmen_query_execute['Firstname'];
    			$_SESSION['reg_no'.$itr2.'2nd']=$_POST[$itr2.'2nd'];
            }
            else{
                $is_batsmen_query_run1=mysqli_query($connect,$batsmen_query1);
                $batsmen_query_execute1=mysqli_fetch_assoc($is_batsmen_query_run1);
                $_SESSION['name'.$itr2.'2nd']=$batsmen_query_execute1['Firstname'];
    			$_SESSION['reg_no'.$itr2.'2nd']=$_POST[$itr2.'2nd'];
            }
        }
        if(isset($_POST['howout'.$itr2.'2nd'])){$_SESSION['howout'.$itr2.'2nd']=$_POST['howout'.$itr2.'2nd'];}
        if(isset($_POST['marks'.$itr2.'2nd'])){$_SESSION['marks'.$itr2.'2nd']=$_POST['marks'.$itr2.'2nd'];}
    }
    for($itr3=1;$itr3<$bowlers2nd;$itr3++){
        if(isset($_POST['b'.$itr3.'2nd'])){
            $bowler_query="SELECT Firstname FROM player_informations WHERE Reg_no='".$_POST['b'.$itr3.'2nd']."' ";
            $bowler_query1="SELECT Firstname FROM past_player_informations WHERE Reg_no='".$_POST['b'.$itr3.'2nd']."' ";
            $is_bowler_query_run=mysqli_query($connect,$bowler_query);
            $bowler_query_execute=mysqli_fetch_assoc($is_bowler_query_run);
            if($bowler_query_execute['Firstname']!=NULL){
                $_SESSION['b'.$itr3.'2nd']=$bowler_query_execute['Firstname'];
    			$_SESSION['breg_no'.$itr3.'2nd']=$_POST['b'.$itr3.'2nd'];
            }
            else{
                $is_bowler_query_run1=mysqli_query($connect,$bowler_query1);
                $bowler_query_execute1=mysqli_fetch_assoc($is_bowler_query_run1);
                $_SESSION['b'.$itr3.'2nd']=$bowler_query_execute1['Firstname'];
    			$_SESSION['breg_no'.$itr3.'2nd']=$_POST['b'.$itr3.'2nd'];
            }
        }
        if(isset($_POST['bruns'.$itr3.'2nd'])){$_SESSION['bruns'.$itr3.'2nd']=$_POST['bruns'.$itr3.'2nd'];}
        if(isset($_POST['bovers'.$itr3.'2nd'])){$_SESSION['bovers'.$itr3.'2nd']=$_POST['bovers'.$itr3.'2nd'];}
        if(isset($_POST['bextras'.$itr3.'2nd'])){$_SESSION['bextras'.$itr3.'2nd']=$_POST['bextras'.$itr3.'2nd'];}
        if(isset($_POST['bwickets'.$itr3.'2nd'])){$_SESSION['bwickets'.$itr3.'2nd']=$_POST['bwickets'.$itr3.'2nd'];}
    }

  
	

?>
