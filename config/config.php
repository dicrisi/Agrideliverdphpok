<?php
	session_start();
	mysql_connect('localhost','root','') or die("Database  not connect");
	mysql_select_db('Agri') or die("No database selected");
	$keyword ='';
	if(!isset($_SESSION['cat_id']) || $_SESSION['cat_id']!='')
		{$_SESSION['cat_id'] = '';}
	if(!isset($_SESSION['sub_id']) || $_SESSION['sub_id']='')
		{$_SESSION['sub_id']='';}
	if(!isset($_SESSION['message']))
		{$_SESSION['message']='';}
	if(!isset($_SESSION['login_type']))
		{$_SESSION['login_type']='';}
	function isLoggedIn(){
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!=''){
			return true;
		}
		else{
			return false;
		}
	}
	function isUserLoggedIn(){
		if(isLoggedIn()){
			return  true;
		}
		else{
			$_SESSION['message'] ='<span class="fail">Please Login Again To Post Your Adds</span>';
			header("Location:login.php");
			exit;
		}
	}
	$configVars = array();
	$configVars['my_email'] = 'packtemp1@gmail.com';
	$configVars['user_name'] = 'packtemp1@gmail.com';
	$configVars['password'] = 'packtemp1234';
	function isAdminLoggedIn(){
		if(isLoggedIn()){
			if(isset($_SESSION['login_type']) && $_SESSION['login_type']=='A'){
				return true;
			}
			else{
				header("Location:unauthorised.php");
				exit;
			}
		}
		else{
			$_SESSION['message'] ='Please Login Again';
			header("Location:login.php");
			exit;
		}
	}
	function sendMail($param){
		$to = $param['to'];
		$from = "admin@admin.com";
		$subject = $param['subject'];

	    
		    $message = '
			<html>
			  <body bgcolor="#DCEEFC">
			    <center>
				'.$param['message'].'
				Thanks
  			    </center>
			  </body>
			</html>';


		    $headers  = "From: ".$from ."\r\n";
		    $headers .= "Content-type: text/html\r\n";
		    // now lets send the email.
		    mail($to, $subject, $message, $headers);
	}
?>
