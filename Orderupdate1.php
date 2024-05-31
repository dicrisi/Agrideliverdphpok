<link href="jsDatePick_ltr.min.css" type="text/css" rel="stylesheet"  />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"Adate",
			dateFormat:"%d-%M-%Y",
			selectedDate:{		
				day:31,		
				month:1,
				year:2017
			},
			yearsRange:[1984,1996],
			limitToToday:false,
			//cellColorScheme:"beige",
			dateFormat:"%d-%m-%Y",
			//imgPath:"img/",
			weekStartDay:1
		});
	};
</script>

<?php
error_reporting(0);

include('config/config.php');
if(isset($_GET['select'])){

$query2 = "select * from uorder where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
//echo $query2;
?>

<?php
include('Farmerheader.php');

 ?>

<div align="center">

<script type="text/javascript">	
  $(document).ready(function(){
    $("#Allocatetomanager").validate();
  });
</script>
<div class="content">
    <div class="content_resize">

    
<form action="Orderupdate1.php" name="Orderupdate1_form" id="Orderupdate1_form"   method="post">
<br>
<div align="center">
<br>
<br>
<h2> Order: </h2>
	<center >
	</table>
	
	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  bgcolor="Orange" class="displaycontent"  width="500" height="350">
	<caption></caption>
	
		<tr>
		<td class="col"><b>Item id:</b></td>
		<td><input type="text" name="iid" value="<?php echo $row['iid']; ?>" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Itemname:</b></td>
		<td><input type="text" name="Iname" value="<?php echo $row['Iname']; ?>" class="required" /></td>
	</tr>
	<tr>
		<td class="col"><b>User Name:</b></td>
		<td><input type="text" name="uname" value="<?php echo $row['Uname']; ?>" class="required" id="Pric"/></td>
	</tr>
	
	<tr>
		<td class="col"><b>Farmer name</b></td>
		<td><input type="text" name="Fname" value="<?php echo $row['Fname']; ?>" class="required"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Required Qty</b></td>
		<td><input type="text" name="qty" value="<?php echo $row['Rqty']; ?>" class="required"  /></td>
	</tr>
	<tr>
		<td class="col"><b>Status:</b></td>
		<td><select name="Roll">
    <option value="Confirm">Confirm</option>
    <option value="Not Confirm">Not Confirm</option>
   </select>
</td>
	</tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>

	</form>
</div>
    </div>
</div>


<?php
 include_once("config/config.php");  
 
if(isset($_POST['register'])){
// echo '<script> alert("DETAILS");</script>';
	 //if($_POST['CEmail']=="" || $_POST['Userid']=="" || $_POST['Edate']=="" || $_POST['Cproject']==""|| $_POST['sub']=="" )
	// {
	//	 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	// }
	// else
	//{
	$query = "INSERT INTO `statustbl` (iid,Iname,Uname,Fname,Rqty,Status) "; 		
	$query .= " VALUES ('".$_POST['iid']."', '".$_POST['Iname']."', '".$_POST['uname']."', '".$_POST['Fname']."', '".$_POST['qty']."',  '".$_POST['Roll']."')";
	echo $query;
       echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
	
	
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:ViewfarmerOrders.php");
	exit;
//}
 }

?>

<?php
include('footer.php');
?>
 

