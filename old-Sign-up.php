<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="creater" content="">
  <title>PRESITALKS</title>
  <link rel="stylesheet" href="./css/style2.css">
</head>
<body style="background-color: 	aqua">
<div style="background-color:black;color:FF3300;padding:10px;">
<center><h1><font color=aqua>PresiTalks</font></h1></center>
</div>
<br>
<br>
<br>
<center>
   <header>
     <div class="container">
       <div id="branding">
         <h1><span class="highlight">PresiTalks</span></h1>
       </div>
       <nav>
         <ul>
           <li><a href="Sign-up.php">Sign Up</a></li>
           <li><a href="login.php">login</a></li>
         </ul>
       </nav>
     </div>
   </header>
   <div class="container1">
   <h2>Sign-Up Here</h2>

<form action="" method="POST">

 				<p>FIRST NAME</p>
				<input type="text" placeholder=" First Name" name="Fname" onkeyup="valFirstName();" autocomplete="off">
				<p>LAST NAME</p>
				<input type="text" placeholder="last Name" name="Lname" onkeyup="valLastName();" autocomplete="off">
				<p>USER-NAME</p>
				<input type="text" placeholder="USERNAME" name="user" required onkeyup="valUSERNAME();" autocomplete="off">
				<p>E-MAIL ADDRESS</p>
				<input type="E-MAIL" placeholder="EMAIL" name="email" required onkeyup="valEMAIL();" autocomplete="off">
				<p>PASSWORD</p>
				<input type="Password" placeholder="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"	 title="Alpha-numeric" required>

				<br><input type="submit" name="submit" value="Register"></br>

			</form>
</div>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['Fname']) && !empty($_POST['Lname'])&& !empty($_POST['user'])&& !empty($_POST['email'])&& !empty($_POST['pass']))
{
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$conn = new mysqli('localhost', 'root', ' ') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'project') or die("DB Error"); // Select DB from database
//Selecting Database
$numrows == 0;
if($numrows == 0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO sign(Fname,Lname,user,email,pass) VALUES('$Fname','$Lname','$user','$email','$pass')";
$result = mysqli_query($conn, $sql);
//Result Message
if($result)
{
echo "Your Account Created Successfully";
}
else
{
echo "Failure!";
}
}
else
{
echo "That Username already exists! Please try again.";
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
</center>
<footer>
     <p> </p>
   </footer>
</body>
</html>
