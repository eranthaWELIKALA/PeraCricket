<?php
ob_start();
session_start();
if(!isset($_SESSION["memID"]) && !isset($_SESSION["password"])){
    header("location:index");
}
?>
<!DOCTYPE html>

<html>
<head>
<title>Pera Cricket</title>
<link type="image/jpg" rel="icon" href="logo.jpg"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<!--login logo-->
	<fieldset>
	<div class="container" align="center" >
		<div>
		<img src="logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="176" height="176">
		</div>
	</div>
	</fieldset>
</div>

<div class="container" id="one" style="width:60%;background-color:#800000;border-radius: 25px;"><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='new_match1.php';"><font size=3 color="#800000">New Match</font></button>
        </div>
            
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='h_match.php';"><font size=3 color="#800000">Home-Home Match</font></button>
        </div>
            
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='addplayer.php';"><font size=3 color="#800000">Add Player</font></button>
        </div>
        
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='add_past_player.php';"><font size=3 color="#800000">Add Past Player</font></button>
        </div>
                
        </div><br>
		<div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='editplayer.php';"><font size=3 color="#800000">Edit Player</font></button>
        </div>
        
        </div><br>
		<div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='editpastplayer.php';"><font size=3 color="#800000">Edit Past Player</font></button>
        </div>
                
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='view.php';"><font size=3 color="#800000">View Details</font></button>
        </div>
               
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='change_password';"><font size=3 color="#800000">Change Password</font></button>
        </div>
               
        </div><br>
        <div class="row" >
        <div class="col-md-4" ></div>
        <div class="col-md-4" >
        <button class="form-control" type="button" class="btn btn-default"  onclick="location.href='index';"><font size=3 color="#800000">Log Out</font></button>
        </div>
               
        </div>
    </div>
    
    

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>