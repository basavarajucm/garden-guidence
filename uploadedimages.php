<?php
	  $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gardenimages";
      $conn =  mysqli_connect($servername, $username, $password, $dbname);
	  
	  $qry= "select * from images";
	  $result=  mysqli_query($conn,$qry);
	  while($row = mysqli_fetch_array($result))
	  {
		  echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
	  }
?>