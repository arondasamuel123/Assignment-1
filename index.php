<!DOCTYPE html>
<html>
<head>
	<title>LOGIN </title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link type="text/css" rel="stylesheet" href="stylesheet2.css"/>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">

<h1 align="center">WELCOME</h1>

</head>
<body>
    <div class="row">
        <div class="form_bg">
            <form  method="post">
                 <h2 class="text-center">Login</h2>
                <br/>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtUsername" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="txtPassword" placeholder="Password" required>
                </div>
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" id="login">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once('conn.php');

if(isset($_POST['txtUsername']) && isset($_POST['txtPassword'])){

	$username= $_POST['txtUsername'];
	$password= $_POST['txtPassword'];

	$query= "SELECT username, password FROM register_users" . " WHERE username= '$username' AND password= '$password'";

	$result= mysqli_query($conn,$query);

	if($result->num_rows > 0){
		

		header("location:index.html");
	}
	else{

		echo "<p style= color:yellow>Your username and password is invalid!!</p>";
	}
}



?>
</body>
</html>