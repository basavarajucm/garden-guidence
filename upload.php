<?php
include('serverconnect.php')
?>
<html>
<head>
  <script type="text/javascript">
 
function goBack() {
    window.history.back();
}
</script>
<style>
label {color: white;  font-family:"Helvetica"; font-style:italic; font-size:15pt;}
h1 {color: red; font-size:20pt; font-family:"Helvetica"; font-style:italic; }
a { color: red; font-size:20pt; font-family:"Helvetica"; font-style:italic;}
input {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic;}
select {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic;}
button { color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; }
textarea { color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; }
</style>
</head>
  <body background="images/7.jpg">
  <h1 align="center">Enter the Area of the GARDEN</h1>
  
    <form method="post" enctype="multipart/form-data">
	<br/>
	   <table border="1" cellspacing="15" cellpadding="1" align="center">
	   <tr>
	      <td>
		  <label>Enter a Width of garden in square feet:</label>
		  </td>
	      <td>
		    <input type="number" name="wid" size="50" placeholder="width" required/>
		  </td>
	   </tr>
	   
        <tr>
		<td>
		  <label>Enter a Length of garden in square feet:</label>
		  </td>
	      <td>
		     <input type="number" name="len" size="100" placeholder="length" required/>
		  </td>
	   </tr>
	   <tr>
	   <td>
		  <label>Enter a garden type:</label>
		  </td>
			<!--<td><font size="5" style="color:white;">Course</font></td>-->
			<td><select name="type" placeholder="garden type" width="100px">
			<option value="-1" selected>select..</option>
			<option value="yard">yard</option>
			<option value="flower">flower garden</option>
			<option value="greenroof">green roof</option>
			<option value="roadverge">roadverge</option>
			</select></td>
		</tr>
		
		<tr>
		<td>
		  <label>Enter a details about garden:</label>
		  </td>
		  <td>
		   <textarea name="desc" rows="6" cols="40" placeholder="description"/></textarea>
		  </td>
		  </tr>
      <tr>
	  <td>
		  <label>Upload an Garden Image:</label>
		  </td>
        <td>	  
	  <input type="file" name="image" required/>
	  </td>
	  </tr>
	  <tr>
	  <td>
		  
		  </td>
	   <td>
     	  <input type="submit" name="submit" value="upload">
		  <input type="Reset" value="Reset"/></form>
		  <button onclick="goBack()">Go Back</button>
     </td>
</tr>	 
	 </table>
	</form>
  </body>
</html>
<?php
 if(isset($_POST['submit']))
 {
	 if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
	 {
		 echo "please select an image";
		 
	 }
	 
	 else
	 {
		 $image= addslashes($_FILES['image']['tmp_name']);
		 $name= addslashes($_FILES['image']['name']);
		 $image= file_get_contents($image);
		 $image= base64_encode($image);
		
		 $qry="insert into images (name, image, type, grwidth, grlength, desp) values ('$name', '$image', '$_POST[type]', '$_POST[wid]', '$_POST[len]', '$_POST[desc]')";
	    $result= mysqli_query($conn,$qry);
	    if($result)
	    {
		  echo "<h1>Design Uploaded successfully</h1>";
		  
	    }
	  else
	  {
		  echo "image not uploaded";
	   }
		
	 }
	// displayimage();
 }
 
 /* function displayimage()
  {
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
  }*/
?>  
