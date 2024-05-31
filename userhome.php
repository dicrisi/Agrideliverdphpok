<?php 
	include_once("config/config.php");
//	isLoggedIn();
	$error = false;
	
	include_once("Userheader.php");
?>	
<style>
table.tab tr td,table.tab tr th{
	padding:5px;
	border:1px solid #000;
}
</style>
		</br>
		<div align=center>		
		<b><f1>Welcome</f1></b></br>
		<?php  echo $_SESSION['loggedIn']; ?>	
														</div>





<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<div id="right_navi" align="center">
	<br />
	<form action="" name="Searchform"  id="Searchform"  method="post">
	<br>
	<br>
	<br>
	<table border="0"   class="displaycontent"  width="500">

	<tr>
		<th colspan="2">Search Here</th>
	<tr>
	<tr>
		<td class="col">Enter Item Name Here:</td>
		<td><input type="text" name="txt1" class="required" value="" /></td>
	</tr>

	<br>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Search" />
		     
		</td>
	</tr>
	</table>

	<br>
	<br>
	<br>
	</form>
	<form action="searchdes.php" name="contactform" class="row" method="post">
	<?php
	 if(isset($_POST['register'])){

	echo '<h2> Item Details: </h2>
	<center >
	<table border="2" cellspacing="2" class="displaycontent" width="800" style="border:10px solid gray;">
	<tr>
	   <th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Item Name</font></th>
			<th bgcolor=Black><font color=white size=2>Price</font></th>
			<th bgcolor=Black><font color=white size=2>Photos</font></th>
			<th bgcolor=Black><font color=white size=2>Location </font></th>
			<th bgcolor=Black><font color=white size=2>Description </font></th>
			<th bgcolor=Black><font color=white size=2>Quantity </font></th>
			<th bgcolor=Black><font color=white size=2>Farmer Name</font></th>
			<th bgcolor=Black><font color=white size=2>Mobile</font></th>
			<th bgcolor=Black><font color=white size=2>Select</font></th>
		
      
	</tr>';
	

	
	
 

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
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['location']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Description']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Qty']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Mob']; ?></font></td>
        <td bgcolor=white><font color=#000000 size=2><a href="Orderupdate.php?select=<?php echo $row['id'];?>">Select</a></font></td>
	 
		
        
	</tr>
	<?php } }?>
	
	</table>
	<br>
	<br>
</form>

</div>
</div>


																						
<?php			
	include_once("footer.php");
?>
