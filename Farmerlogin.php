<?php
 include_once("config/config.php"); 
  include_once("header1.php"); 
 ?>

 <?php
if (isset($_POST['login'])) {
    if ($_POST['email_id'] == "admin" && $_POST['password'] == "admin") {
        echo '<script>alert("Login success");</script>';
        header("location:Farmerhome.php");
        exit();
    } else {
        echo '<script>alert("Login Failed");</script>';
    }
}
?>



<div align="center">


	<form action="" name="Managerlogin" id="Managerlogin"  method="post">
	<table>
	<tr>
	<td>
		<h1>Admin Login</h2>
	</td>
	</tr>
	</table>
	
	<table border="0"  class="displaycontent" bgcolor="Silver" width="300" height="200">

	<tr>
	
	<tr>
	<tr>
		<td class="col"><b>User ID:</b></td>
		<td><b><input type="text" name="email_id" value="" /></b></td>
	</tr>
	<tr>
		<td  class="col"><b>Password:</b></td>
		<td><b><input type="password" name="password" value="" class="required"/></b></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="login" value="Login" />
		     	<input type="Reset"  value="Reset" />
			
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>

	</table>
<table>
<tr>
<td>
<input type="text" name="roll" value="Driver" style="visibility:hidden"/>
</td>
</tr>
</table>


	</form>

<?php include("footer.php")?>

</div>
</div>
