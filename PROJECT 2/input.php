<?php
if($_POST)
{
	$n=$_POST['n1'];
	$a=$_POST['n3'];
	$d=$_POST['n4'];
	$g=$_POST['n5'];
	$cn=$_POST['n6'];
	$l=$_POST['n7'];
	$user=$_POST['n8'];
	$pass=$_POST['n9'];
	$cpass=$_POST['n10'];
	$type=$_POST['n11'];
	include_once("medicine.php");
	$s=new medicine();
	$s->assign($n,$a,$d,$g,$cn,$l,$user,$pass,$cpass,$type);
	$s->insert();
}
?>
	