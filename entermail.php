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
	
    padding: 4em;
}
label {
	color: green;  font-family:"Helvetica"; font-style:italic; font-size:15pt;}
	input {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic; width:350}
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
     <h1 align="center">Please Enter Your Details</h1>
  </header>
  <nav>
      <form method="post">
	<br/>
	   <table cellspacing="20" align="center">
	   <tr>
	      <td>
		  <label>Enter your Request No:</label>
		  </td>
	      <td>
		    <input type="text" pattern="[0-9]{2}" name="oid" size="50" placeholder="enter request number" required/>
		  </td>
	   </tr>
	   <tr>
	      <td>
		  <label>Enter your Name:</label>
		  </td>
	      <td>
		    <input type="text" name="name" size="50" placeholder="Name" required/>
		  </td>
	   </tr>
	   
        <tr>
		<td>
		  <label>Enter Email-id:</label>
		  </td>
	      <td>
		    <input type="email" name="email" size="50" placeholder="enter a valid email-id" required/>
		  </td>
	   </tr>
	   <tr>
		<td>
		  <label>Enter Your Contact Number:</label>
		  </td>
	      <td>
		  <!--  <input type="number" name="num" size="50" placeholder="enter a valid contact Number" required/>-->
		 <!-- <input type="text" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}"-->

      <input type="text" pattern="[789][0-9]{9}" name="num" placeholder="enter a valid number" required>


		    
		  </td>
	   </tr>
	   <tr>
	   <td>
		  <label>Enter your Adress:</label>
		  </td>
		  <td>
			<textarea name="add" rows="3" cols="47" placeholder="type here"/></textarea>
			</td>
		</tr>
		
     
	  <tr>
	  <td>
		  
		  </td>
	   <td>
     	  <button type="submit" name="submit" value="Submit" onclick="mufun()">Submit</button>
		  <button type="reset" name="Reset" value="Reset">Reset</button>
		   <button onclick="goBack()">Back</button>
     </td>
</tr>	 
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
	       
		   $sql= "insert into customer (cname, email, phone, address, ono) values ('$_POST[name]', '$_POST[email]', '$_POST[num]', '$_POST[add]', '$_POST[oid]')";
		   $query= mysqli_query($conn,$sql);
		   if($query)
		   {
			  //echo "data saved";
		   }
		   
		   else
		   {
			   echo "failed";
		   }
		 }
		 
		   
           ?>




