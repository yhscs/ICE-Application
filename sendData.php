<?php
session_start();


require_once('db.php');

$date = $_POST['date'];
$name = $_POST['name'];
$currentGrade = $_POST['currentGrade'];
$dateOfBirth = $_POST['dateOfBirth'];
$age = $_POST['age'];
$homeNumber = $_POST['homeNumber'];
$cellNumber = $_POST['cellNumber'];
$addressStreet = $_POST['addressStreet'];
$addressCity = $_POST['addressCity'];
$addressState = $_POST['addressState'];
$motherName = $_POST['motherName'];
$fatherName = $_POST['fatherName'];
$parentAddressStreet = $_POST['parentAddressStreet'];
$parentAddressCity = $_POST['parentAddressCity'];
$parentAddressState = $_POST['parentAddressState'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$wearGlasses = $_POST['wearGlasses'];
$physicalHandicaps = $_POST['physicalHandicaps'];
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
$person1 = $_POST['person1'];
$relationship1 = $_POST['relationship1'];
$workPhone1 = $_POST['workPhone1'];
$homePhone1 = $_POST['homePhone1'];
$person2 = $_POST['person2'];
$relationship2 = $_POST['relationship2'];
$workPhone2 = $_POST['workPhone2'];
$homePhone2 = $_POST['homePhone2'];
$company1 = $_POST['company1'];
$jobDuties1 = $_POST['jobDuties1'];
$datesWorked1 = $_POST['datesWorked1'];
$company2 = $_POST['company2'];
$jobDuties2 = $_POST['jobDuties2'];
$datesWorked2 = $_POST['datesWorked2'];
$company3 = $_POST['company3'];
$jobDuties3 = $_POST['jobDuties3'];
$datesWorked3 = $_POST['datesWorked3'];
$paragraph = $_POST['paragraph'];

if($_SESSION['ID'] == "broken"){
$result=$dbh->prepare("INSERT INTO `Ice Answers` (`Date`, `Name`, `Current_Grade`, `Date_Of_Birth`, `Age`, `Home_Number`, `Cell_Number`, `Address_Street`, `Address_City`, `Address_State`, `Mother_Name`, `Father_Name`, `Parent_Address_Street`, `Parent_Address_City`, `Parent_Address_State`, `height`, `weight`, `Wear_Glasses`, `Physical_Handicaps`, `Technical_School`, `College`, `Business_School`, `Work`, `Other`, `Career_Interest_1`, `Career_Reason_1`, `Career_Interest_2`, `Career_Reason_2`, `Transportation`, `Person_1`, `Relationship_1`, `Work_Phone_1`, `Home_Phone_1`, `Person_2`, `Relationship_2`, `Work_Phone_2`, `Home_Phone_2`, `Company_1`, `Job_Duties_1`, `Dates_Worked_1`, `Company_2`, `Job_Duties_2`, `Dates_Worked_2`, `Company_3`, `Job_Duties_3`, `Dates_Worked_3`, `Paragraph`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");					


try {

$result->execute(array($date,$name,$currentGrade,$dateOfBirth,$age,$homeNumber,$cellNumber,$addressStreet,$addressCity,$addressState,$motherName,$fatherName,$parentAddressStreet,$parentAddressCity,$parentAddressState,$height,$weight,$wearGlasses,$physicalHandicaps,$technicalSchool,$college,$businessSchool,$work,$other,$careerInterest1,$careerReason1,$careerInterest2,$careerReason2,$transportation,$person1,$relationship1,$workPhone1,$homePhone1,$person2,$relationship2,$workPhone2,$homePhone2,$company1,$jobDuties1,$datesWorked1,$company2,$jobDuties2,$datesWorked2,$company3,$jobDuties3,$datesWorked3,$paragraph));

$result=$dbh->prepare("SELECT * FROM `Ice Answers` ORDER BY `Ice Answers`.`ID` DESC LIMIT 1");

$result->execute();
$result=$result->fetch();
$_SESSION['ID']=$result['ID'];

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}

else{
	$result=$dbh->prepare("UPDATE `Ice Answers` SET `Date` = ?, `Name` = ?, `Current_Grade` = ?, `Date_Of_Birth` = ?, 
					  `Age` = ? ,`Home_Number` = ?, `Cell_Number` = ?, `Address_Street` = ?, `Address_City` = ?, `Address_State` = 
					  ? ,`Mother_Name` = ?, `Father_Name` = ?, `Parent_Address_Street` = ?, `Parent_Address_City` = ?, 
					  `Parent_Address_State` = ?, `Height` = ?, `Weight` = ?, `Wear_Glasses` = ?, `Physical_Handicaps` = ? WHERE `ID` =
					  ?");					

try {

$result->execute(array($date,$name,$currentGrade,$dateOfBirth,$age,$homeNumber,$cellNumber,$addressStreet,$addressCity,$addressState,$motherName,$fatherName,$parentAddressStreet,$parentAddressCity,$parentAddressState,$height,$weight,$wearGlasses,$physicalHandicaps,$_SESSION['ID']));

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}
?>