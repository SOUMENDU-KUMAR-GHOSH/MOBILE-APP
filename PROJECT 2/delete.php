<?php
if($_POST)
{
	$mn=$_POST['n12'];
	include_once("medicine.php");
	$s1=new medicine();
	$s1->delete($mn);
}
?>