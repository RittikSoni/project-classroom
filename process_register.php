<?php
	require('config.php');
	
	if(!empty($_POST))
	{
		$msg="";
	
		if(md5($_POST['password'])!=md5($_POST['repassword']))
		{
			$msg="Please_Enter_your_Password_Again.....";
				echo $msg;
		}
		
		if(strlen($_POST['email'])<=0)
		{
			$msg.="Please-Enter_Your_Valid_Email_Address...";
		}
		
		if(strlen($_POST['role'])<=0)
		{
			$msg.="Please_Select_Your_Role...";
		}
		
		if(strlen($_POST['contact'])>10)
		{
			$msg="Please_Enter_Your_Contact_in_limited_Format....";
				echo $msg;
		}
		
		if(is_numeric($_POST['name']))
		{
			$msg="Name_must_be_in_String_Format...";
				echo $msg;
		}
		
		if($msg!="")
		{
			header("location:signup.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['name'];
			$unm=$_POST['username'];
			$role=$_POST['role'];
			$pwd=$_POST['password'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
	
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_role)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$role')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			echo "USER REGISTERED SUCCESSFULLY NEED TO LOGIN";	
			header("location: index.php?successfully=registered");
			
		}
	}

?>