<?php
class medicine
{
	public $name,$address,$dob,$Gender,$contact_number,$location,$username,$password,$confirm_password,$type_of_user,$con,$medicine_name,$dom,$EXPIRY_DATE,$COMPANY_NAME,$quantity;
	function __construct()
	{
		$this->con=mysqli_connect("localhost","root","","soumendu");
	}
	function assign($n,$a,$d,$g,$cn,$l,$user,$pass,$cpass,$type)
	{
		$this->name=$n;
		$this->addr=$a;
		$this->dob=$d;
		$this->Gender=$g;
		$this->contact_number=$cn;
		$this->location=$l;
		$this->username=$user;
		$this->password=$pass;
		$this->confirm_password=$cpass;
		$this->type_of_user=$type;
    }
	
	function insert()
	{
		$sql="INSERT INTO user_details(`name`,`address`,`Dob`,`Username`,`Password`,`Confirm-Password`,`tou`,`location`,`Gender`,`Phone`)VALUES('$this->name','$this->addr','$this->dob','$this->username','$this->password','$this->confirm_password','$this->type_of_user','$this->location','$this->Gender','$this->contact_number')";
		if (mysqli_query($this->con,$sql))
		{
			die("SUCCESSFULLY REGISTERED");
		}
		else
		{
			echo("NOT REGISTERED SUCCESSFULLY");
			echo("REGISTER AGAIN");
		}
	}
	
	function assign1($mn,$md,$ed,$cm,$q)
	{
		$this->medicine_name=$mn;
		$this->dom=$md;
		$this->doe=$ed;
		$this->company_name=$cm;
		$this->quantity=$q;
		
    }
	
	function insert_medicine()
	{
		$sql="INSERT INTO insert_medicines(`mnd`,`MANUFACTUREDATE`,`EXPIRYDATE`,`COMPANYNAME`,`QUANTITY`)VALUES('$this->medicine_name','$this->dom','$this->doe','$this->company_name','$this->quantity')";
		if (mysqli_query($this->con,$sql))
		{
			die("SUCCESSFULLY INSERTED");
		}
		else
		{
			echo("NOT INSERTED SUCCESSFULLY");
		}
	}
	
	function select()
	{
		$sql=mysqli_query($this->con,"SELECT * FROM insert_details");
		echo "<table border=1><tr align=center><td>mnd</td><td>MANUFACTUREDATE</td><td>EXPIRYDATE</td><td>QUANTITY</td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
			echo "<tr align=center>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "</tr>";
		}
			echo "</table>";
	}
		
	function delete($mn)
	{
		$sql="DELETE FROM insert_medicines WHERE mnd='$mn'";
		if(!mysqli_query($this->con,$sql))
		{
			echo("MEDICINE RECORD IS NOT DELETED");
		}
		else
		{
			echo("MEDICINE RECORD IS DELETED");
		}
	}
		
	function update($mn,$md,$ed,$cm,$q)
	{
		$sql="UPDATE insert_medicines SET MANUFACTUREDATE='$md',EXPIRYDATE='$ed',COMPANYNAME='$cm',QUANTITY='$q' WHERE mnd='$mn'";
		if(!mysqli_query($this->con,$sql))
		{
			die("UPDATION FAILED");
		}
		else
		{
			echo("UPDATED SUCCESSFULLY");
		}
	}
	
	
}
?>
		
		
		