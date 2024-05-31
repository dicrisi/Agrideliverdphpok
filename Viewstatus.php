<?php
include_once("config/config.php");

 include_once("Userheader.php"); 
 error_reporting(0);
mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("Agri")  or die(mysql_error());
		$query = "select * from statustbl Where Uname='".$_SESSION['loggedIn']."'";
		$result = mysql_query($query) or die(mysql_error());
?>
<div    align="center">
	<br>
	
	<h2> Order Status </h2>
	<center >
	
		<table border="2" cellspacing="6" class="displaycontent" width="800" style="border:10px solid Green;" align="center">  
			<tr>
			
			<th bgcolor=Black><font color=white size=2>Item ID</font></th>
			<th bgcolor=Black><font color=white size=2>Item Name</font></th>
			<th bgcolor=Black><font color=white size=2>User Name</font></th>
			
			<th bgcolor=Black><font color=white size=2>Farmer Name </font></th>
				<th bgcolor=Black><font color=white size=2>Required Qty </font></th>
					<th bgcolor=Black><font color=white size=2>Status </font></th>
	
		
			
		            
	</tr>
		<?php
    while($row=mysql_fetch_array($result))
	{

?>
			<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Iid']; ?></font></td>	
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Iname']; ?></font></td>
	   
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uname']; ?></font></td>
	
						<td bgcolor=white><font color=#000000 size=2><?php echo $row['Fname']; ?></font></td>
					<td bgcolor=white><font color=#000000 size=2><?php echo $row['Rqty']; ?></font></td>
					<td bgcolor=white><font color=#000000 size=2><?php echo $row['Status']; ?></font></td>
		
 	</tr>
		<?php
		}	

?>	


<?php

mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("Agri")  or die(mysql_error());
if(isset($_GET['delete']))
	{
	
	$query = "delete from uorder where id=".$_GET['delete']."";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	//	$_SESSION['message']='<span class="succuess">Record Delete succussfully</span>';
		
header("location:ViewOrders.php");
	exit;
	}
 
	
?>
</table>
<br>
<br>
<br><br>
<br>

</div>	 
<?php include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>



