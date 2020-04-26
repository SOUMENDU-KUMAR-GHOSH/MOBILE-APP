<?php
if($_POST)
{
	$mn=$_POST['n12'];
	$md=$_POST['n13'];
	$ed=$_POST['n14'];
	$cm=$_POST['n15'];
	$q=$_POST['n16'];
	include_once("medicine.php");
	$s=new medicine();
	$s->update($mn,$md,$ed,$cm,$q);
	
}
?>