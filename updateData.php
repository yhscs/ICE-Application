<?php
session_start();

require_once('db.php');


$technicalSchool = $_POST['technicalSchool'];
$college = $_POST['college'];
$businessSchool = $_POST['businessSchool'];
$work = $_POST['work'];
$other = $_POST['other'];
$careerInterest1 = $_POST['careerInterest1'];
$careerReason1 = $_POST['careerReason1'];
$careerInterest2 = $_POST['careerInterest2'];
$careerReason2 = $_POST['careerReason2'];
$transportation = $_POST['transportation'];

$result=$dbh->prepare('UPDATE `Ice Answers` SET `Technical_School` = ?, `College` = ?, `Business_School` = ?, `Work` = ?, 
					  `Other` = ?, `Career_Interest_1` = ?, `Career_Reason_1` = ?, `Career_Interest_2` = ?, 
					  `Career_Reason_2` = ?, `Transportation` = ? WHERE `ID`= ?');	
					  
try {

$result->execute(array($technicalSchool,$college,$businessSchool,$work,$other,$careerInterest1,$careerReason1,$careerInterest2,$careerReason2,$transportation,$_SESSION['ID']));

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>