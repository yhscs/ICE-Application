<?php
	require_once('db.php');	
	
	echo '<script type="text/javascript">alert("WARNING: UPLOAD THE TRANSCRIPT FIRST (AT THE BOTTOM OF THE PAGE) THEN FILL OUT THE FORM OTHERWISE YOU WILL LOSE ALL OF YOUR PROGRESS ' . $to . '");</script>';
?>

<style type="text/css">

#btnBack{
	float:left;
	width: 150px;
	height: 100px;	
}

#btnNext3{
	float:right;
	width: 150px;
	height: 100px;		
}

#p5{
	position:relative;
	left:497px;
}

#p7{
	position:relative;
	left:497px;
}

#p13{
	text-align:center:
}

#p14{
	text-align:center:
}

#p15{
	text-align:center:
}

#p16{
	text-align:center:
}

#div1{
	max-width: 750px;
	display: block;
	margin: auto;
}

#file{
	
}

#fileSubmit{
	
}

.abso {
	position: absolute;
	left: 213px;
	top: -782px;
	height: 957px;
}
</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<!Doctype Html>
<html>
<body>

<p id="p2"><img src="Root Folder/app.png" width="612" height="792" class="abso">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p id="p3">
List two people <b>(Neither relatives nor teenage friends)</b> who you feel would give you a good reference:
</p>

<p id="p4">
1.
<input id="person1" type="text" name="person1">

Relationship
<input id="relationship1" type="text" name="relationship1">

Phone
(work)
<input id="workPhone1" type="text" name="workPhone1">
</p>

<p id="p5">
(home)
<input id="homePhone1" type="text" name="homePhone1">
</p>


<p id="p6">
2.
<input id="person2" type="text" name="person2">

Relationship
<input id="relationship2" type="text" name="relationship2">

Phone
(work)
<input id="workPhone2" type="text" name="workPhone2">
</p>

<p id="p7">
(home)
<input id="homePhone2" type="text" name="homePhone2">
</span>


<p id="p8">
Previous work experience(if any)(list more recent jobs first)
</p>


<p id="9">
<b>
Name of Company
</b>

<span style="position:relative;left:450px">
<b>
Job Duties
</b>
</span>


<span style="position:relative;left:875px">
<b>
Dates Worked
</b>
</span>
</p>


<p id="p10">
<input id="company1" type="text" name="company1">

<span style="position:relative;left:350px">
<input id="jobDuties1" type="text" name="jobDuties1">
</span>

<span style="position:relative;left:700px">
<input id="datesWorked1" type="text" name="datesWorked1">
</span>
</p>


<p id="p11">
<input id="company2" type="text" name="company2">

<span style="position:relative;left:350px">
<input id="jobDuties2" type="text" name="jobDuties2">
</span>

<span style="position:relative;left:700px">
<input id="datesWorked2" type="text" name="dateWorked2">
</span>
</p>


<p id="p12">
<input id="company3" type="text" name="company3">

<span style="position:relative;left:350px">
<input id="jobDuties3" type="text" name="jobDuties3">
</span>

<span style="position:relative;left:700px">
<input id="datesWorked3" type="text" name="datesWorked3">
</span>
</p>


<p id="p13">
In addition to filling out the application, I will need a copy of your school transcripts. 
<ins><b>You can obtain a copy from your counsler or from the guidance office.</ins>
Please turn this in to Mrs. Wojowski</b>
</p>


<p id="p14">
Write five sentences explaining your desire to be in Co-operative education.
</p>


<p id="p15">
(Use the bottom right tab of the text area to resize as needed.)
</p>


<p id="16">
<textarea id="paragraph" name="coopsentences"></textarea>
</p>

</br>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" size="50px" id="file">

<input type="submit" value="Upload" name="submit" id="fileSubmit">
</form>

</br>

<div id="div1">
<a href="index2.php">
<input id="btnBack" type="button" value="Back">
</a>

<input id="btnNext3" type="button" value="Next">

</div>

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src='javascript.js'></script>
</html>