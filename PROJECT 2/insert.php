<?php
if($_POST)
{
	$mn=$_POST['n12'];
	$md=$_POST['n13'];
	$ed=$_POST['n14'];
	$cm=$_POST['n15'];
	$q=$_POST['n16'];
	include_once("medicine.php");
	$s1=new medicine();
	$s1->assign1($mn,$md,$ed,$cm,$q);
	$s1->insert_medicine();
}
?>
