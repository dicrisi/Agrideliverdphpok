<?php
// include_once("config/config.php");
include("Userheader.php");
error_reporting(0);

?>
<center>
    <h2>View Products Here</h2></center>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #D33C10;" align="center">
		<tr>
	   <th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Item Name</font></th>
			<th bgcolor=Black><font color=white size=2>Price</font></th>
			<th bgcolor=Black><font color=white size=2>Photos</font></th>
			
			<th bgcolor=Black><font color=white size=2>Description </font></th>
			<th bgcolor=Black><font color=white size=2>Quantity </font></th>
			<th bgcolor=Black><font color=white size=2>Farmer Name</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
			<th bgcolor=Black><font color=white size=2>Action</font></th>
		
      
	</tr>
	<?php

		mysql_connect("localhost","root","")  or die(mysql_error());
mysql_select_db("Agri")  or die(mysql_error());
	$query = "select * from item where Itemname LIKE '%".$_POST['txt1']."%'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
	  ?>
	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>	
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Itemname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Price']; ?></font></td>
       	<td bgcolor=white><font color=#000000 size=2><img src=<?php echo $row['Ipath'];?> width=120 height=120></font></td>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Description']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Qty']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Mob']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><a href="Orderupdate.php?select=<?php echo $row['id'];?>">Add to Cart</a></font></td>
	 
		
        
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>



<?php include("footer.php");?>