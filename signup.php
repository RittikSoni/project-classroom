<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>SIGNUP</title>
	<style>
	#sig {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
		a{ 
			text-align: center;
		text-decoration: none;	
			border: 1px solid black;
			background-color: black;
			color: white;
			padding: 5px 5px;
		}
		a:hover{
			border: 2px solid black;
		background-color: white;
			color: black;
		}
		.submit{
			font-size:20px;
		}
		
	</style>
</head>
<body>
<center><h1>Register..!!</h1></center>
<div id="sig">
	<form action="process_register.php" method="POST">
	 	Name : &nbsp;&nbsp;<input type="text" placeholder="Name" name="name" required> <br><br>
	 	User Name : &nbsp;<input type="text" placeholder="Username" name="username" required> <br> <br>
	 	Role :  
		<select id="role" name="role" required>
			<option><!--Select--></option>
			<option value="Student">Student</option>
			<option value="Teacher">Teacher</option>
		</select> <br><br>
		E-mail :<input type="email" placeholder="E-mail" name="email" required> 
		<br><br>
		Gender:
		<select id="gender" name="gender" required>
			<option><!--Select--></option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select> 
		<br> <br>
		Password : <input type="password" placeholder="Password" name="password" required>
		<br><br>
		Confirm-Password : <input type="password" placeholder="Password" name="repassword" required> <br><br>
		Contact No. : <input type="tel" placeholder="Contact No." name="contact" pattern="[0-9]{10}" required>
		<br><br>
		<input class="submit" type="submit" value="Register" > 
	</form>
	</div>
	<br>
	<br>
	<br>
	<center><a href="index.php">Login</a><br><br>Already Registered?</center>
</body>
</html>