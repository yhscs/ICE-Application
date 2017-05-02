<?php
	require_once('db.php');	
?>


<!Doctype Html>
<html>
<head>
<style type="text/css">

#btnBack{
	float:left;
	width: 150px;
	height: 100px;	
}

#btnNext2{
	float:right;
	width: 150px;
	height: 100px;		
}

#p1{
	text-align:right; 
	font-size: 18px;
}

#div1{
	max-width: 750px;
	display: block;
	margin: auto;
}

.absolute {
	position: absolute;
	left: 195px;
	top: -701px;
	height: 865px;
}

</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
</head>
<body>

<p id="p1"><img src="Root Folder/app.png" width="612" height="792" class="absolute"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p id="p2">
Future Plans: (Please answer Yes or No)
<br>
Technical School:
<input id="technicalSchool" type="text" name="technicalSchool"  size="10">

College:
<input id="college" type="text" name="college" size="10">
  
Business School:
<input id="businessSchool" type="text" name="businessSchool" size="10">
  
Work:
<input id="work" type="text" name="work" size="10">
  
Other:
<input id="other" type="text" name="other" size="10">
</p>
<p id="p3">
  What are your future career Intrests?
</p>


<p id="p4">
1st Choice:
<input id="careerInterest1" type="text" name="careerInterest1">

Reason:
<input id="careerReason1" type="text" name="careerReason1">
</p>


<p id="p5">
2nd Choice:
<input id="careerInterest2" type="text" name="careerIntrest2">

Reason:
<input id="careerReason2" type="text" name="careerReason2">
</p>

<p id="p6">
Transportation: Do you own a car? If not, how do you plan to get to your job?
</p>


<textarea id="transportation" name="transportation"></textarea>


<div id="div1">
<a href="index1.php">
<input id="btnBack" type="button" value="Back">
</a>

<input id="btnNext2" type="button" value="Next">

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src='javascript.js'></script>
</body>
</html>