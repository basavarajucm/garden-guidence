<html>
  <head>
     <title>view Orders</title>
  </head>
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 3px;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}


</style>
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
		
		$sql="select * from customer c,images i where c.ono=i.id";
		$qry=mysqli_query($conn,$sql);
		if($qry)
		{
			echo "<table border='1' id='t01'>
			<tr>
         	 <th>NAME</th>
             <th>EMAIL</th> 
             <th>CONTACT NUMBER</th>
	         <th>ADDRESS</th>
	         <th>REQUEST NUMBER</th>
			 <th>GARDEN TYPE</th>
	         <th>DESIGN</th>
	       
	        </tr>";
			while($row = mysqli_fetch_array($qry))
			{
				echo "<tr>";
		        echo "<td>" . $row['cname']. "</td>";
				echo "<td>" . $row['email']. "</td>";
				echo "<td>" . $row['phone']. "</td>";
		        echo "<td>" . $row['address']. "</td>";
		        echo "<td>" . $row['ono']. "</td>";
				echo "<td>" . $row['type']. "</td>";
		        echo '<td><img height="200" width="200" src="data:image;base64,'.$row['image'].'"></td>';
		        
		        echo "</tr>";
				     
			}
			echo "</table>";
	    }
		else
		{
			echo "<h1>NO orders</h1>";
		}
	    ?>
  </body>  
	 