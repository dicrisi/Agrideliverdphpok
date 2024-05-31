<?php
 include_once("config/config.php");  
 if(isset($_POST['login'])){
	$t=time();
	$dt=date("Y-m-d",$t);
	$time=date("h:i:sa");
	$set=$dt.':'.$time;
	 $query ="select * from  tab_user where U_name='".$_POST['email_id']."' and password ='".$_POST['password']."' and Roll='".$_POST['roll']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		$row = mysql_fetch_assoc($result);
		if($row['status']=='1'){
		$_SESSION['loggedIn'] = $row['U_name'];
			$query="insert into finishedtask (Userid,login) VALUES('".$_SESSION['loggedIn']."','".$set."')";
			$result=mysql_query($query);
				$row=mysql_fetch_array($result);
			if($row['id']==1){
				$_SESSION['login_type'] = 'A';
			}else{			
				$_SESSION['login_type'] = 'U';
			}
			header('Location:Userhome.php');
			exit;
		}
		else{
			$_SESSION['message']='<span class="fail">Invalid UserName</span>';
		}
	}
	else{
		$_SESSION['message']='<span class="fail">Invalid UserName / Password</span>';
	}
	header("location:login.php");
	exit;
 }
 



 include_once("header1.php"); 
 
function Panel1_BeforeShow(& $sender) {
global $Panel1;
global $UserLogin;

  if (CCGetUserID()) {
     $UserLogin->SetValue(CCGetUserLogin());
  } else {
     $Panel1->Visible = false;
  }
}
?>



<script type="text/javascript">	
  $(document).ready(function(){
    $("#login_form").validate();
  });
</script>
<div align="center" background="red">
</br>

</br>


	<form action="" name="login_form" id="login_form"  method="post">
	<br />
	<table>
<tr>
<td>
<h1>User Login</h1>
</td>
</tr>
	</table>
	<table border="0"  class="displaycontent" bgcolor="Silver" width="300" height="200">
	<caption><?php echo $_SESSION['message'];$_SESSION['message']=''; ?></caption>

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
	<tr>
	<td>
		<td><a href="register.php">Create New Account</a></td>
		</td>
	</tr>
	</table>

<table>
<tr>
<td>
<input type="text" name="roll" value="User" style="visibility:hidden"/>
</td>
</tr>
</table>
	</form>

<?php include("footer.php")?>

</div>
</div>
