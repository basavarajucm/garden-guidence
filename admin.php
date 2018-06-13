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
    text-align: center;
}

nav {
    float: left;
    max-width: 250px;
    margin: 0;
	
    padding: 2em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
	 background-color: black;
    overflow: hidden;
}
</style>
</head>
<body>

<div class="container">

<header>
  <?php 
    session_start();
    if($_SESSION['name'])
        echo "<h1>Welcome,".$_SESSION['name']."!</h1>";
    else
        die("you must logged in");
?>
</header>
  
<nav>
  <ul>
    <li><a href="vieworders.php">VIEW DESIGN REQUESTS</a></li><BR/>
    <li><a href="viewfeedback.php">VIEW FEEDBACKS</a></li><BR/>
    <li><a href="upload.php">UPLOAD GARDEN DESIGNS</a></li></BR>
	<li><a href="index.html">LOGOUT</a></li></BR>
  </ul>
</nav>

<article>
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
</article>

<!--<footer>Copyright &copy; W3Schools.com</footer>-->

</div>

</body>
</html>
