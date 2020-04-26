<?php
$con=mysqli_connect("localhost","root","","soumendu");
if(isset($_POST['LOGIN']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$usertype=$_POST['usertype'];
$query="SELECT * FROM `user_details` WHERE Username='".$user."' and Password='".$pass."' and tou='".$usertype."'";
$result=mysqli_query($con,$query);
if($result)
{
while($row=mysqli_fetch_array($result))
{
echo('<script type="text/javascript">alert("YOU ARE LOGIN SUCCESSFUL AND U LOGGED IN AS '.$row['usertype'].'")</script>');
}

if(mysqli_num_rows($result)>0)
{
?>
<script type="text/javascript">
window.location.href="insertadmin.html"</script>
<?php
}else{
?>
<script type="text/javascript">
window.location.href="checkuser.html"</script>

<?php
}
}else{
echo 'NO RESULT';
}
}


?>