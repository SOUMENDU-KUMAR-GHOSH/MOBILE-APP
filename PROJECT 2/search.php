<?php 
$con=mysqli_connect("localhost","root","","soumendu");
$sql=mysqli_query($con,"SELECT mnd FROM insert_medicines ordered by MEDICINE NAME");
$row=mysqli_query($con,$sql);
if(!empty($_POST['n12']))
{
	$mnd=$_POST['n12'];
	$sql=mysqli_query($con,"SELECT * FROM insert_medicines WHERE mnd='$mnd'");
	echo"<table border=1><tr align=center><td>mnd</td><td>MANUCTUREDATE</td><td>EXPIRYDATE</td><td>QUANTITY</td></tr>";
}
	while($r=mysqli_fetch_assoc($row))
{
	print "<tr>";
	print "<td>".$r['mnd']."</td><td>".$r['MANUFACTURE DATE']."</td><td>".$r['EXPIRY DATE']."</td><td>".$r['COMPANY NAME']."</td><td>".$r['QUANTITY']."</td></tr>";
}

echo"</table>";
mysqli_close($con);

?>