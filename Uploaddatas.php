<?php 
	include_once("config/config.php");
	include_once("Farmerheader.php");
?>	
<?php
error_reporting(0);

$query2 = "select mobile from tab_user where U_name='".$_SESSION['loggedIn']."'";
			//echo $query2;
			$result1 = mysql_query($query2);
			if(mysql_num_rows($result1))
				{
			$row1 = mysql_fetch_assoc($result1);
		
       }

?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
-->
</style>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
<br>
<center>

<br>
<center><font color="red" size="14">Upload Datas</font></center>
<br>
<br>
 Farmer Name<br />
 <input name="uname" type="text" class="ed" id="unameid" value=""/>
 <br />
  Item name<br />
 <input name="NH" type="text" class="ed" id="NH" />
 <br />
  Price<br />
 <input name="pric" type="text" class="ed" id="pric" />
<br>
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Description<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
 Location<br />
 <input name="loc" type="text" class="ed" id="loc" />
 <br />
  Quantity<br />
 <input name="qty" type="text" class="ed" id="qty" />
 <br />
 <br />
  Mobile:<br />
    <input name="Mob" type="text" id="Mob" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required />
    <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </center>
 </form>
<br />
Photo Archieve
<br />

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var mobField = document.getElementById('Mob');
        if (mobField.value.length !== 10 || isNaN(mobField.value)) {
            alert('Please enter a valid 10-digit phone number.');
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>



<?php
//include('config.php');
$result = mysql_query("SELECT * FROM item where Uname='".$_SESSION['loggedIn']."'");

while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['Ipath'].'"></p>';
echo '<p id="caption">'.$row['Description'].' </p>';
echo '</div>';
}
?>
<br>
<br>
<br>
<br>
<br>
