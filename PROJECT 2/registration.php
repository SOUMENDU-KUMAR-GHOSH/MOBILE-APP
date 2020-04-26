<?php 
if(!empty($_POST['p1']))
{
include_once("database_connection.php");
$N=$_POST['n1'];
$l=$_POST['n2'];
$Name=$N." ".$l;
$Address=$_POST['n3'];
$DOB=$_POST['n4'];
$Gender=$_POST['n5'];
$Phone=$_POST['n6'];
$Location=$_POST['n7'];
$Username=$_POST['n8'];
$Password=$_POST['n9'];
$Confirm_Password=$_POST['n10'];
$tou=$_POST['s'];

$sql="insert into user_details(Name,Address,Dob,Username,Password,tou,location,Gender,Phone) values('$Name','$Address','$DOB','$Username','$Password','$tou','$Location','$Gender',$Phone)";
if(!mysqli_query($con,$sql))
{
die("Give different username");
}
}
?>
