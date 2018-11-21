<?php
ob_start();
session_start();
require "connect.php";
$check_query="SELECT Reg_no FROM player_informations WHERE Reg_no='".$_SESSION['player']."'";
$is_check_query_run=mysqli_query($connect,$check_query);
if($is_check_query_run){
  $_SESSION['player']=$_GET['direct_searched_Reg_no'];
  header('location:view_player');
}
else{
  //header ("location:player.php");
}

?>
