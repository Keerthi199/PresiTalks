<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creater" content="">
    <title>PresiTalks</title>
    <link rel="stylesheet" href="./style1.css">
  </head>



  <body>


   <header>
     <div class="container">
       <div id="branding">
         <h1><span class="highlight">PRESITALKS</span></h1>
       </div>
       <nav>
         <ul>
           <li><a href="Sign-up.php">Sign Up</a></li>
	   <li class="current"><a href="#">Login</a></li>
         </ul>
       </nav>
     </div>
   </header>

	 <div class="container1">

	 				<h2>Log in Here</h2>
	 			<form method="post">
	 				<p>Email</p>
	 				<input type="email" placeholder=" Email" name="email" required>

	 				<p>Password</p>
	 				<input type="Password" placeholder="Password" name="pass"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Enter proper password"" required>
	 				<input type="submit" name="submit" value="submit">
	 				<a href="#"> Forgot password </a></br>
	 				<a href="Sign-up.php"> Sign-up </a>
	 			</form>
	 		</div>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['email']) && !empty($_POST['pass'])){
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', ' ') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'project') or die("database error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM sign WHERE email='".$email."' AND pass='".$pass."'") or die("table");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $email=$row['email'];

 $pass=$row['pass'];
 echo "<br/>".$email."<br/>".$pass."<br/>";
 }
 if($email == $email && $pass == $pass)
 {
 session_start();
 $_SESSION['sess_email']=$email;
 //Redirect Browser
 header("Location:course.html");
 }
 }
 else
 {
 echo "Invalid emailname or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>


  </body>
</html>
