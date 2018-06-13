<!DOCTYPE html>
<html>
<style>


input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 18px;
    margin: 7px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 15px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 2px 0 2px 0;
}

img.avatar {
    width: 10%;
    border-radius: 40%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body bgcolor="black"><br><br><br>

<center><font size="10" color="red">Admin Login</font></center>

<form method="post">
  <div class="imgcontainer">
    <img src="images/2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <center>
    <label><font size="5" style="color:white;"><b>Username:</b></font></label>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label><font size="5" style="color:white;"><b>Password:</b></font></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
	<table cellspacing="1" cellpadding="5">
	<tr align="center"><td>
    <label><button type="submit"style="color:blue;height:50px; width:100px">LOGIN</button></label>
	</td><td><button type="reset"style="color:red;height:50px; width:100px">RESET</button></td></tr></table>
    
  </div>

  
</form>
<?php
      
   if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['username'];
		$password =$_POST['password'];
	
	 if($name == 'admin' && $password == 'mca')
	 {
		 session_start();
		 $_SESSION['name']=$_POST['username'];
		 header("location:admin.php");
	 }
	 else
	 {
		 echo "<center><h3 style='color:red'> Please Enter a Valid User Name and Password!!!!</h3></center>";
	 
	}
	}
?>

</body>
</html>



 <!--<html>
  <head>
     <title>login form</title>
  </head>
  <body background="images1\bg.jpg">
   <fieldset align="center" color="yellow">
    
	<center>
	<h1>Admin Login Form</h1>
  <form action="adminverify1.php" method="post">
   <table border="0" cellpadding="0" cellspacing="0">
    <tr>
	   
        <td>
		  <font size="5">Username:</font><input type="text" name="username" placeholder="username" style="height:40px;width:150px;"required/><br/><br/>
		</td>
    </tr>
    
    <tr>
      	  <td>
           <font size="5">Password:</font><input type="password"name="password" placeholder="password" style="height:40px;width:150px;" required/><br/><br/>
		 </td>
    </tr>		 
                   
	<tr>
       <td>		
               <button type="submit" name="login" style="height:30px; width:100px">LOGIN</button>
			        <input type="reset" value="RESET" style="height:30px; width:100px"><br/><br/>
		</td>
    </tr>
    <table>	
	
	</form>
	</center>
	</fieldset>
	</body>
	</html>


