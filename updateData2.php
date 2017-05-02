<?php
session_start();


require_once('db.php');


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

$result=$dbh->prepare("UPDATE `Ice Answers` SET `Person_1` = ?, `Relationship_1` = ?, `Work_Phone_1` = ?, `Home_Phone_1` = ?, 
					  `Person_2` = ? ,`Relationship_2` = ?, `Work_Phone_2` = ?, `Home_Phone_2` = ?, `Company_1` = ?, `Job_Duties_1` = 
					  ? ,`Dates_Worked_1` = ?, `Company_2` = ?, `Job_Duties_2` = ?, `Dates_Worked_2` = ?, `Company_3` = ?, 
					  `Job_Duties_3` = ?, `Dates_Worked_3` = ?, `Paragraph` = ? WHERE `ID` = ?");			


try {

$result->execute(array($person1,$relationship1,$workPhone1,$homePhone1,$person2,$relationship2,$workPhone2,$homePhone2,$company1,$jobDuties1,$datesWorked1,$company2,$jobDuties2,$datesWorked2,$company3,$jobDuties3,$datesWorked3,$paragraph,$_SESSION['ID']));

}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>