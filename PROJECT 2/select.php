<html>
<head><h1 align="center">MEDICINE DETAILS</h1>
<title>SKFGI</title>
</head>
<body>
<style>
body{background:url("https://everything-pr.com/wp-content/uploads/2018/04/Medicines-Vaccines-and-Pharmaceuticals-MVP-Issues-Communications-RFP.jpg")no-repeat center fixed;
background-size:cover;
}
</style>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","soumendu");
$sql="SELECT * FROM insert_medicines";
$row=mysqli_query($con,$sql);
print "<table border=1>";
print "<tr><td>MEDICINE NAME</td><td>MANUFACTURE DATE</td><td>EXPIRY DATE</td><td>COMPANY NAME</td><td>QUANTITY</td></tr>";
while($r=mysqli_fetch_assoc($row))
{
	print "<tr>";
	print "<td>".$r['mnd']."</td><td>".$r['MANUFACTUREDATE']."</td><td>".$r['EXPIRYDATE']."</td><td>".$r['COMPANYNAME']."</td><td>".$r['QUANTITY']."</td></tr>";
}
print "</table>";
mysqli_close($con);
?>