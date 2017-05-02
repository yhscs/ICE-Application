<?php
session_start();

require_once('db.php');

$fileName=$_POST['file'];
$target_dir = "Transcripts/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		
		
$file="Transcripts/".$_FILES["file"]["name"];
	$result=$dbh->prepare('UPDATE `Ice Answers` SET `Transcript` = ? WHERE `ID`= ?');	
	
	try{
		
	$result->execute(array($file, $_SESSION['ID']));
		
		
	}
	
	catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	
	
	move_uploaded_file($_FILES["file"]["tmp_name"],"Transcripts/" . $_FILES["file"]["name"]);
			
	
	
?>

<style type="text/css">
#btnBack{
	width: 50px;
	height: 25px;	
}
</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<html>
<body>

</br>

<a href="index3.php">
<input id="btnBack" type="button" value="Back">
</a>

</body>
</html>