
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
background-color: LIGH;
	}
#selection {
	position: absolute;
  width: 40%;
	left: 50%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  margin-left:50px;
	border: 1px solid black;
}
	#selectiont {
		
  width: 40%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 43px;
  margin-left: 70px;
	border: 1px solid black;
}
	
	#login {
		display: none;
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
}
	h1{
		
		color: darkblue;
	}
</style>
</head>
<body>

	<center><h1>Login as </h1></center>


<div id="selection">
<div><a href="#" onclick="myFunctions()"><img src="user.jpg" alt="Teacher" width="20%" height="20%"><h1>Student</h1></a></div>
</div>


<div id="selectiont">
<div><a href="#" onclick="myFunctiont()"><img src="user.jpg" alt="Teacher" width="20%" height="20%"><h1>Teacher</h1></a></div>
</div>

<div>

	<center><p style="font-size:21px">New to Start? <a href="signup.php" >Sign Up</a></p></center>
</div>


<div id="login">
<form action="process_login.php" method="POST">
	 Username :<input type="name" placeholder="Username" name="usernm"> <br> <br>
	 Password :<input type="password" placeholder="Password" name="pwd"> <br><br>
	 <input type="submit" >
</form>
	
</div>

<script>
function myFunctions() {
  var x = document.getElementById("login");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	function myFunctiont() {
  var x = document.getElementById("login");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	
</script>

</body>
</html>