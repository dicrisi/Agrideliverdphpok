<?php
include('header1.php');
?>
<div align="center">
<script type="text/javascript">	
  $(document).ready(function(){
    $("#register_form").validate();
  });
</script>
<form action="register.php" name="register_form"  id="register_form"  method="post">
		<table>
<tr>
<td>
<h1>Register</h1>
</td>
</tr>
	</table>
	<table border="1" cellspacing="4" cellspadding="4"  bgcolor="red" class="displaycontent"  width="500" height="300">
	<caption></caption>
	<tr>
		
	<tr>
	<tr>
		<td class="col">Name:</td>
		<td><input type="text" name="first_name"  value="" /></td>
	</tr>

	<tr>
		<td class="col">User ID:</td>
		<td><input type="text" name="U_name" value="" class="required" /></td>
	</tr>
	<tr>
		<td class="col">Email:</td>
		<td><input type="text" name="email_id" value="" class="required email"  /></td>
	</tr>
	<tr>
		<td class="col">Password:</td>
		<td><input type="password" name="password" value="" class="required" /></td>
	</tr>
	
	<tr>
		<td class="col">Address:</td>
		<td><input type="text" name="address" value="" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  >Mobile:</td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="mobile" value="" /></td>
	</tr>
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register" />
		     	<input type="Reset"  value="Reset" />
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">BACK</a>
	</form>
</div>


<?php
 include_once("config/config.php");  
 if(isset($_POST['register'])){
	 if($_POST['first_name']=="" || $_POST['U_name']=="" || $_POST['email_id']=="" || $_POST['password']=="" || $_POST['address']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `tab_user` (`first_name`, `U_name`, `email_id`, `password`, `address`, `mobile`, `Roll`,`status`)"; 		$query .= " VALUES ('".$_POST['first_name']."', '".$_POST['U_name']."', '".$_POST['email_id']."', '".$_POST['password']."', '";
	$query .=  $_POST['address']."', '";
	$query .= $_POST['mobile']."','User',  '1')";
        echo '<script> alert("PREGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:login.php");
	exit;
 }
 }

?>

<?php
include('footer.php');
?>
 

