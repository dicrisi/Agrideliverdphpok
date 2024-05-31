<?php
include('config/config.php');
if (!isset($_FILES['image']['tmp_name'])) 
	{
	echo "";
	}
	else
		
		{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$path="photos/" . $_FILES["image"]["name"];
			$Description=$_POST['caption'];
			$location=$_POST['loc'];
			$NH1=$_POST['NH'];
			$price=$_POST['pric'];
			$Qty=$_POST['qty'];
			$Mob=$_POST['Mob'];
			$save=mysql_query("INSERT INTO item (Itemname, Price, Ipath, location, Description, Qty, Uname, Mob) VALUES ('$NH1','$price','$path','$location','$Description','$Qty','".$_SESSION['loggedIn']."','$Mob')");
			header("location: Uploaddatas.php");
			exit();	
			//echo $save;
	}
?>
