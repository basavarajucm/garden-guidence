<!DOCTYPE html>
<!--
Template Name: Integral
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>garden guiders</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Garden Guiders</a></h1>
      <p>Your Ideas Our Designs</p>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
	  <li><a href="adminverify.php">Admin</a></li>
        <li><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Find Designs</a>
          <ul>
            <li class="active"><a href="#">Normal Designs</a></li>
            <li><a href="findgarden.php">Find Designs by Area</a></li>
           <!-- <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>-->
          </ul>
        </li>
       <!-- <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
          </ul>
        </li>-->
		
        <li><a href="#">About Us</a></li>
       <!-- <li><a href="#">Contact Us</a></li>-->
		 <li><a href="feedback.php">Feedback</a></li>
		
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </header>
</div>
</div>
<div class="wrapper row3">
  <main id="container" class="clear"> 
    <!-- container body --> 
    <!-- ################################################################################################ -->
    <div id="gallery">
      <figure>
        <header class="heading">Feedbacks</header>
		
        <ul class="nospace clear">
		<?php 
		$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gardenimages";
      $conn =  mysqli_connect($servername, $username, $password, $dbname);
	  
	  $qry= "select * from feedback";
	  $result=  mysqli_query($conn,$qry);
	  echo "<form method='post'>";
	 echo "<table border='1' cellspacing='7' cellpadding = '7'>
	 <tr>
	 <th>Name</th>
    <th>Email</th> 
	<th>Phone Number</th>
	<th>Message</th>
	
	
    </tr>";
	  while($row = mysqli_fetch_array($result))
	  {
		  echo "<tr>";
		  echo "<td>" . $row['name']. "</td>";
		  echo "<td>" . $row['email']. "</td>";
		  echo "<td>" . $row['phnumber']. "</td>";
		  echo "<td>" . $row['message']. "</td>";
		 
		  
		  echo "</tr>";
		   echo "</form>";
	  }
		?>
         
    
    <!-- ################################################################################################ --> 
    <!-- / container body -->
    <div class="clear"></div>
  </main>
</div>

    

</div>

</body>
</html>