<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,700">

</head>
<body>

	<style type="text/css">
	
	/* #text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	} */
/* color variables */
/* border radius */
*, *::before, *::after {
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 body {
	 font-family: Montserrat, sans-serif;
	 font-weight: 500;
	 background-color: #79ceff;
	 background-image: linear-gradient(315deg, #79ceff 0%, #dcb5ff 67%, #ffb8f0 100%);
	 height: 100vh;
	 display: grid;
	 justify-content: center;
	 align-items: center;
	 color: #425a65;
}
 .form {
	 width: 24rem;
	 padding: 2rem;
	 border-radius: 1rem;
	 background-color: white;
}
 .form__title {
	 margin-bottom: 0.5rem;
}
 .form__description {
	 margin-bottom: 2rem;
}
 .form__group {
	 position: relative;
	 height: 3rem;
	 margin-bottom: 1.5rem;
}
 .form__input {
	 width: 100%;
	 height: 100%;
	 border: 2px solid #cfd8dc;
	 border-radius: 0.5rem;
	 font-family: inherit;
	 font-weight: inherit;
	 color: inherit;
	 outline: none;
	 padding: 1.25rem;
	 background: none;
}
 .form__input:hover {
	 border-color: #9dedff;
}
 .form__input:focus {
	 border-color: #7bdff6;
}
 .form__label {
	 position: absolute;
	 left: 1rem;
	 top: 0.9rem;
	 padding: 0 0.5rem;
	 background-color: white;
	 transition: top 200ms ease-in, left 200ms ease-in, font-size 200ms ease-in;
}
 .form__button {
	 display: block;
	 margin-left: auto;
	 padding: 0.75rem 2rem;
	 background-color: #9dedff;
	 font-family: inherit;
	 font-weight: inherit;
	 border-radius: 0.5rem;
	 outline: none;
	 border: none;
	 cursor: pointer;
	 transition: background-color 200ms ease-in;
}
 .form__button:hover {
	 background-color: #7bdff6;
}
/* 1. When the input is in the focus state reduce the size of the label and move upwards 2. Keep label state when content is in input field */
 .form__input:focus ~ .form__label, .form__input:not(:placeholder-shown).form__input:not(:focus) ~ .form__label {
	 top: -0.5rem;
	 left: 0.8rem;
	 font-size: 0.8rem;
}
 


	</style>

	<!-- <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div> -->

	<div id="box" >

	<form action="" class="form" method="post">
    <h1 class="form__title">Sign Up</h1>
    <p class="form__description"></p>

    <div class="form__group">
      <input type="text" id="text" name="user_name" class="form__input" placeholder=" " autocomplete="off">
      <label for="text" class="form__label">user_name</label>
    </div>

    <div class="form__group">
      <input type="password" id="password" name="password" class="form__input" placeholder=" ">
      <label for="password" class="form__label">Password</label>
    </div>

    <button type="submit" value="Signup" class="form__button">Sign Up</button>

	<a href="login.php">Click to Login</a><br><br>


  </form>

	</div>

</body>
</html>