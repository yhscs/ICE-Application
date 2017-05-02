<style type="text/css">

#h1{
	text-align:center;
}

#p1{
	text-align:center;	
}

#p2{
	text-align:center;
}

#submit{
	width: 100px;
	height: 50px;
}

#back{
	width: 100px;
	height: 50px;
}

#div1
{
	text-align:center;
}
</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<!Doctype Html>
<html>
<body>

<h1 id="h1">
  <p>Login Page </p>
</h1>

<form action="admin.php" method="post">
<p id="p1">
Admin Name:
<input id="adminName" type="text"  name="adminName">  
</p>

<p id="p2">
Admin Password:
<input id="adminPassword" type="password"  name="adminPassword"> 
</p>

<div id="div1">
<input id='submit' type="submit" value="Submit">
</form>
</div>

<div id="div1">
<a href="index.php">
<input id="back" type="button" value="Back">
</a>
</div>

</body>
</html>