<html>
<body><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gardenimages";


$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*else{
	echo "<h1>database connected successfully \n</h1>";
	}*/
?>
</body>

</html>