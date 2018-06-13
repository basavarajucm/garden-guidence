<!DOCTYPE html>
<html>
<head>
<style>
	div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: green;
    clear: left;
    text-align: left;
}
nav {
    float: left;
    max-width: 750px;
    margin: 0;
	
    padding: 1em;
}
label {
	color: green;  font-family:"Helvetica"; font-style:italic; font-size:15pt;}
	input {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; width:500}
	select {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; width:500}
	button {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; width:100; height:50}
	textarea {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic;}
	
	</style>
	<script>
	  function mufun()
	  {
		  confirm("Your Request is received Successfully");
	  }
	  function goBack() {
    window.history.back();
}
	</script>
</head>
<body>
<div class="container">
<header>
<h1>Feedback Form</h1>
</header>


<nav>
  <form method="post">
  <table cellspacing="20" align="center">
  <tr><td>
    <label for="fname">First Name:</label><br/></td>
    <td><input type="text" id="fname" name="firstname" size="50"  placeholder="Your name.." required><br/>
     </td></tr>
	 <tr><td>
    <label for="lname">Email:</label><br/></td>
    <td><input type="email" id="email" name="email" size="50"  placeholder="enter your email.."  required><br/></td>
	</tr>
    <tr><td>
    <label for="country">PhoneNumber:</label><br/></td>
	<td>
    <input type="text" pattern="[789][0-9]{9}" id="phno" name="phno" size="50" placeholder="enter your contact number.."  required>
    </td>
	
    <tr><td><label>Message:</label></td><br/>
    <td><textarea id="subject" name="subject" placeholder="Write something.."  required></textarea><br/>
     </td></tr>
	 
	 <tr><td></td>
	 <td>
    <input type="submit" name="submit" value="Submit">
	<input type="reset" name="Reset" value="Reset">
	<button type="submit" onclick="goBack()">Go Back</button></td></tr>
	</table>
  </form>
  
  
   
  
 </nav>
</div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gardenimages";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

         if(isset($_POST['submit']))
		 {
			 $sql= "insert into feedback(name, email, phnumber, message) values ('$_POST[firstname]', '$_POST[email]', '$_POST[phno]', '$_POST[subject]')";
			$qry = mysqli_query($conn,$sql);
			if($qry)
			{
				echo "<script type='text/javascript'>alert('Thanks For Your Valuable Feebback')</script>";
			}
			else
			{
				echo "failed";
			}
			 
		 }	
      


?>