<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creater" content="">
    <title>PRESITALKS</title>
    <link rel="stylesheet" href="./style2.css">
  </head>



  <body>


   <header>
     <div class="container">
       <div id="branding">
         <h1><span class="highlight">PRESITALKS</span></h1>
   </header>
   <div class="container1">
   <h2>Sign-Up Here</h2>

<form action="" method="POST">

 				<p>FIRST NAME</p>
				<input type="text" placeholder=" First Name" name="Fname" pattern="^[a-zA-Z\s]+$" title="Only letters" autocomplete="off" required>
				<p>LAST NAME</p>
				<input type="text" placeholder="last Name" name="Lname" pattern="^[a-zA-Z\s]+$" title="Only letters" autocomplete="off" required>
				<p>USER-NAME</p>
				<input type="text" placeholder="USERNAME" name="user" required onkeyup="valUSERNAME();" autocomplete="off" required>
				<p>E-MAIL ADDRESS</p>
				<input type="email" placeholder="EMAIL" name="email" required onkeyup="valEMAIL();" autocomplete="off" required>
				<p>PASSWORD</p>
				<input type="Password" placeholder="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpass" required>
				<br><a hreaf="login.php"><input type="submit" name="submit" value="Register"></a></br>

			</form>
</div>
<?php
if(isset($_POST["submit"]))
{
 if(!empty($_POST['Fname']) && !empty($_POST['Lname'])&& !empty($_POST['user'])&& !empty($_POST['email'])&& !empty($_POST['pass']) && !empty($_POST['cpass']))
	{
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass=$_POST['cpass'];
	$conn = new mysqli('localhost', 'root', ' ') or die (mysqli_error()); // DB Connection
	$db = mysqli_select_db($conn, 'project') or die("DB Error"); // Select DB from database
//Selecting Database
	if($pass==$cpass)

	{
					$query= "select * from sign WHERE email='$email'";
					$query_run = mysqli_query($conn,$query);
			if($query_run)
			{
					if(mysqli_num_rows($query_run)>0)
					{
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else
					{
					$sql = "insert into sign (Fname,Lname,user,email,pass) VALUES('$Fname','$Lname','$user','$email','$pass')";
					$result = mysqli_query($conn, $sql);
					if($result)
					{
						echo '<script type="text/javascript"> alert("Your Account Created Successfully") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Unsuccessfully") </script>';
					}

					}
				}
		else
		{
			echo '<script type="text/javascript">alert("DB error")</script>';
		}
}
	else
		{echo '<script type="text/javascript"> alert("password not matching") </script>';
			//echo "That Username already exists! Please try again.";
		}
	}
	else
	{
	?>
	<!--Javascript Alert -->
	<script>alert('Required all fields');</script>
	<?php
	}
}
?>
</body>
</html>
