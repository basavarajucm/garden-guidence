<html>
   <head>
	<body>
 <?php
           
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gardenimages";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

		   
		   
		   $sql= "insert into customer (name, email, phone, address) values ('$_POST[name]', '$_POST[email]', '$_POST[num]', '$_POST[add]')";
		   $query= mysqli_query($conn,$sql);
		   if($query)
		   {
			   echo "data saved";
		   }
		   else
		   {
			   echo "failed";
		   }
		   
           ?>