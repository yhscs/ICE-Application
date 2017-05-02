<?php
session_start();
$_SESSION['ID'] = "broken";
?>

<style type="text/css">

#info{
	position:absolute;
	width: 300px;
	height: 300px;
}

#application{
	position:absolute;
	width: 300px;
	height: 300px;		
}

#admin{
	position:absolute;
	width: 300px;
	height: 300px;	
}

#div1{
	width: 450px;
	display: block;
	margin: auto;
}

.appli {
	position: absolute;
	left: 260px;
	top: -187px;
}

.absolute {
	position: absolute;
	left: 42px;
	top: 258px;
	width: 236px;
	height: 192px;
}

.otherab {
	position: absolute;
	left: 706px;
	top: 240px;
	width: 248px;
	height: 180px;
}
.lastab {
	position: absolute;
	left: 389px;
	top: 238px;
	width: 283px;
	height: 181px;
}
.why {
	position: absolute;
	left: 62px;
	top: 241px;
	width: 231px;
	height: 181px;
}

</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<!Doctype Html>
<html>
<body>

<img src="Root Folder/title.png" width="612" height="792" class="appli">
<div id="div1">
<a href="info.php">
<input type="submit" class="why" id="info" value="Info">
</a>
<a href="index1.php">
<input type="submit" class="otherab" id="application" value="Application">
</a>
<a href="adminLogin.php">
<input type="submit" class="lastab" id="admin" value="Admin">
</a>
</div>

</body>
</html>