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
	input {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic;}
	select {color: green; font-size:15pt; font-family:"Helvetica"; font-style:italic;}
	</style>
</head>
  <body>
  <div class="container">
  <header>
     <h1 align="center">Enter the Area and type of Garden</h1>
  </header>
  <nav>
      <form method="post" action="gal2.php">
	<br/>
	   <table cellspacing="20" align="center">
	   <tr>
	      <td>
		  <label>Enter a Width in square feet:</label>
		  </td>
	      <td>
		    <input type="number" name="wid" size="50" placeholder="enter a width" required/>
		  </td>
	   </tr>
	   
        <tr>
		<td>
		  <label>Enter a Length in square feet:</label>
		  </td>
	      <td>
		    <input type="number" name="len" size="50" placeholder="enter a length" required/>
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
		  
		  </td>
	   <td>
     	  <input type="submit" name="submit" value="Search">
     </td>
</tr>	 
	 </table>
	</form>
  </nav>
  
  
    
	</div>
  </body>
  
</html>