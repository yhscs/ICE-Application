<?php
	require_once('db.php');	
	session_start();
?>

<style type="text/css">

#btnBack{
	float:left;
	width: 150px;
	height: 100px;	
}

#btnNext1{
	float:right;
	width: 150px;
	height: 100px;		
}

#p3{
	text-align:left;
}

#p4{
	text-align:left;
}

#p5{
	position:relative; left:466px;
}

#div1{
	max-width: 750px;
	display: block;
	margin: auto;
}

#absolute {
	position: absolute;
}

.absolute {
	position: absolute;
	left: -3px;
	top: -515px;
}

</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<!Doctype Html>
<html>
<body>

<p id="p3"><img src="Root Folder/real app.png" width="612" height="792" class="absolute"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

Date:
<input id="date" type="date"  name="date">

Name:
<input name="name" type="text" id="name" value="">

Current Grade:
<input id="currentGrade" type="text"  name="currentGrade">
</p>

<p id="p4">Date of Birth:
  <input id="dateOfBirth" type="date" name="dateOfBirth">
  
  Age:
  <input id="age" type="text" name="age">
  
  Home Number:
  <input id="homeNumber" type="text" name="homeNumber">
</p>


<p id="p5">
  Cell Number:
<input id="cellNumber" type="text" name="cellNumber">
</p>


<p id="p6">
address:

Street:
<input id="addressStreet" type="text" name="addressStreet">

City:
<input id="addressCity" type="text" name="addressCity">

State:
<input id="addressState" type="text" name="addressState">


<p id="p7">
Mother's Name:
<input id="motherName" type="text" name="motherName">

Father's Name:
<input id="fatherName" type="text" name="fatherName">
</p>

<p id="p8">
Parent's address:

Street:
<input id="parentAddressStreet" type="text" name="parentAddressStreet">

City:
<input id="parentAddressCity" type="text" name="parentAddressCity">

State:
<input id="parentAddressState" type="text" name="parentAddressState">

</p>


<p id="p9">
Height:
<input id="height" type="text" name="height">

Weight:
<input id="weight" type="text" name="weight">

Wear Glasses?:
<input id="wearGlasses" type="text" name="wearGlasses">

Physical Handicaps?:
<input id="physicalHandicaps" type="text" name="physicalHandicaps">
</p>

<div id="div1">
<a href="index.php">
<input id="btnBack" type="button" value="Back">
</a>

<input id="btnNext1" type="button" value="Next">

</div>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src='javascript.js'></script>
</html>

