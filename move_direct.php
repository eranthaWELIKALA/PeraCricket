<?php
ob_start();
session_start();
require "connect.php";
function count_queries($attribute){
	require 'connect.php';
	if($is_count_query_run=mysqli_query($connect,$attribute)){
		while($count_query_execute=mysqli_fetch_assoc($is_count_query_run)){
			return $count_query_execute['COUNT(*)'];
		}
	}
}


$search_query="SELECT * FROM player_informations WHERE `Reg_no`='".$_GET['moved_reg_no']."'";
$is_search_query_run=mysqli_query($connect,$search_query);
$search_query_execute=mysqli_fetch_assoc($is_search_query_run);
if($search_query_execute['Reg_no']==null){
	header("location:move");
}
else{
	$count_query="SELECT COUNT(*) FROM past_player_informations";
	$player_reg_no="oba".count_queries($count_query);
	$add_player_query="INSERT INTO `past_player_informations` (`Firstname`, `Lastname`, `Reg_no`, `Pics`) VALUES ('".$search_query_execute['Firstname']."', '".$search_query_execute['Lastname']."', '".$player_reg_no."', NULL)";
	$is_add_player_query_run=mysqli_query($connect,$add_player_query);
	
	$move_query1="UPDATE `2daybatting_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$move_query2="UPDATE `2daybowling_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$move_query3="UPDATE `batting_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$move_query4="UPDATE `bowling_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$move_query5="UPDATE `t20batting_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$move_query6="UPDATE `t20bowling_statistics` SET `Reg_no`='".$player_reg_no."' WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	
	$is_move_query_run1=mysqli_query($connect,$move_query1);
	$is_move_query_run2=mysqli_query($connect,$move_query2);
	$is_move_query_run3=mysqli_query($connect,$move_query3);
	$is_move_query_run4=mysqli_query($connect,$move_query4);
	$is_move_query_run5=mysqli_query($connect,$move_query5);
	$is_move_query_run6=mysqli_query($connect,$move_query6);
	
	$delete_query1="DELETE FROM `interunibatting_statistics` WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$delete_query2="DELETE FROM `interunibowling_statistics` WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	$delete_query3="DELETE FROM `player_informations` WHERE `Reg_no`='".$search_query_execute['Reg_no']."'";
	unlink($search_query_execute['Pics']);
	
	$is_delete_query1=mysqli_query($connect,$delete_query1);
	$is_delete_query2=mysqli_query($connect,$delete_query2);
	$is_delete_query3=mysqli_query($connect,$delete_query3);
	
	
	
	if($is_add_player_query_run && $is_move_query_run1 && $is_move_query_run2 && $is_move_query_run3 && $is_move_query_run4 && $is_move_query_run5 && $is_move_query_run6 && $is_delete_query1 && $is_delete_query2 && $is_delete_query3){
		header("location:move?moved=Successfully Moved");
	}
	else{
		header("location:move?moved=Moving Failed");
	}
}


?>
