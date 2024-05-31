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

$query2 = "select * from item where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
//echo $query2;
?>




<?php
include('Userheader.php');

 ?>

<div align="center">

<script type="text/javascript">	
  $(document).ready(function(){
    $("#Allocatetomanager").validate();
  });
</script>
<div class="content">
    <div class="content_resize">

    
<form action="Orderupdate.php" name="Orderupdate_form" id="Orderupdate_form"   method="post">
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
		<td class="col"><b>id:</b></td>
		<td><input type="text" name="Iid" value="<?php echo $row['id']; ?>" class="required email"  readonly /></td>
	</tr>
	
	<tr>
		<td class="col"><b>Itemname:</b></td>
		<td><input type="text" name="Iname" value="<?php echo $row['Itemname']; ?>" class="required" readonly /></td>
	</tr>
	<tr>
		<td class="col"><b>Price:</b></td>
		<td><input type="text" name="Pric" value="<?php echo $row['Price']; ?>" class="required" id="Pric"  readonly/></td>
	</tr>
	<tr>
    <td class="col"><b>Location (detailed location):</b></td>
    <td><input type="text" name="loc" value="" class="required" style="width: 300px; height: 60px;" required /></td>
</tr>

	<tr>
		<td class="col"><b>Description:</b></td>
		<td><input type="text" name="des" value="<?php echo $row['Description']; ?>" class="required" style="width: 300px; height: 60px;"  required/></td>
	</tr>
	<tr>
		<td class="col"><b>Date:</b></td>
		<td><input type="date" name="Adate" value="<?php echo date("d/m/Y");?>" class="required"  id="Adate"  required/></td>
	</tr>
	<tr>
		<td class="col"><b>Farmer name</b></td>
		<td><input type="text" name="Fname" value="<?php echo $row['Uname']; ?>" class="required"   readonly  /></td>
	</tr>
	<tr>
		<td class="col"><b>Required Qty</b></td>
		<td><input type="text" name="qty" value="" class="required" required /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Add To Cart" />
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
	$query = "INSERT INTO `uorder` (iid,Iname,Price,Location,Description,Odate,Fname,Uname,Rqty) "; 		
	$query .= " VALUES ('".$_POST['Iid']."', '".$_POST['Iname']."', '".$_POST['Pric']."', '".$_POST['loc']."', '".$_POST['des']."',  '".$_POST['Adate']."','".$_POST['Fname']."','".$_SESSION['loggedIn']."','".$_POST['qty']."')";
	//echo $query;
       //echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
	
	
   
 if(mysql_query($query)) {
        echo '<script>alert("Add To the Cart  added successfully"); window.location.href = "ViewOrders.php";</script>';
    } else {
        echo '<script>alert("Failed to add Add To the Cart ");</script>';
    }
}

?>

<?php
include('footer.php');
?>
 

