<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location: adminLogin.php");
	die();
}

require_once('db.php');

$selectedId = $_POST['name'];
if(is_numeric($selectedId))
{
$result=$dbh->prepare('SELECT * FROM `Ice Answers` WHERE `ID` = ?');
$result->execute(array($selectedId));
$row=$result->fetch();

echo "<table border='1' style='width:100%; border-collapse: collapse;'>";
echo "<th colspan=\"4\" style='padding:10px; background-color: #700;'>General Information</th>";
echo "<tr>";
echo "<th>Date</th>";
echo "<th colspan=\"2\">Name</th>";
echo "<th>Current Grade</th>";
echo "</tr>";


echo "<tr>";	
echo "<td>" . htmlspecialchars($row["DATE"]) . "</td>";
echo "<td  colspan=\"2\">" . htmlspecialchars($row["NAME"]) . "</td>";
echo "<td>" . htmlspecialchars($row["CURRENT_GRADE"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Date of Birth</th>";
echo "<th>Age</th>";
echo "<th>Home Number</th>";
echo "<th>Cell Number</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["DATE_OF_BIRTH"]) . "</td>";
echo "<td>" . htmlspecialchars($row["AGE"]) . "</td>";
echo "<td>" . htmlspecialchars($row["HOME_NUMBER"]) . "</td>";
echo "<td>" . htmlspecialchars($row["CELL_NUMBER"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th colspan=\"2\">Street Address</th>";
echo "<th>City Address</th>";
echo "<th>State Address</th>";
echo "</tr>";

echo "<tr>";
echo "<td colspan=\"2\">" . htmlspecialchars($row["ADDRESS_STREET"]) . "</td>";
echo "<td>" . htmlspecialchars($row["ADDRESS_CITY"]) . "</td>";
echo "<td>" . htmlspecialchars($row["ADDRESS_STATE"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th colspan=\"2\">Mother Name</th>";
echo "<th colspan=\"2\">Father Name</th>";
echo "</tr>";

echo "<tr>";
echo "<td colspan=\"2\">" . htmlspecialchars($row["MOTHER_NAME"]) . "</td>";
echo "<td colspan=\"2\">" . htmlspecialchars($row["FATHER_NAME"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th colspan=\"2\">Parent Street Address</th>";
echo "<th>Parent City Address</th>";
echo "<th>Parent State Address</th>";
echo "</tr>";

echo "<tr>";
echo "<td colspan=\"2\">" . htmlspecialchars($row["PARENT_ADDRESS_STREET"]) . "</td>";
echo "<td>" . htmlspecialchars($row["PARENT_ADDRESS_CITY"]) . "</td>";
echo "<td>" . htmlspecialchars($row["PARENT_ADDRESS_STATE"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Height</th>";
echo "<th>Weight</th>";
echo "<th>Wear Glasses</th>";
echo "<th>Physical Handicaps</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["HEIGHT"]) . "</td>";
echo "<td>" . htmlspecialchars($row["WEIGHT"]) . "</td>";
echo "<td>" . htmlspecialchars($row["WEAR_GLASSES"]) . "</td>";
echo "<td>" . htmlspecialchars($row["PHYSICAL_HANDICAPS"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th  colspan=\"5\" style='padding:10px; background-color: #700;'>Intrests after High School</th>";
echo "</tr>";

echo "<tr>";
echo "<th>Technical School</th>";
echo "<th>College</th>";
echo "<th>Business School</th>";
echo "<th>Work</th>";
echo "<th>Other</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["TECHNICAL_SCHOOL"]) . "</td>";
echo "<td>" . htmlspecialchars($row["COLLEGE"]) . "</td>";
echo "<td>" . htmlspecialchars($row["BUSINESS_SCHOOL"]) . "</td>";
echo "<td>" . htmlspecialchars($row["WORK"]) . "</td>";
echo "<td>" . htmlspecialchars($row["OTHER"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th  colspan=\"2\" style='padding:10px; background-color: #700;'>Carrer Intrests</th>";
echo "</tr>";



echo "<tr>";
echo "<th>Intrest 1</th>";
echo "<th>Reason 1</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["CAREER_INTEREST_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["CAREER_REASON_1"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Intrest 2</th>";
echo "<th>Reason 2</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["CAREER_INTEREST_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["CAREER_REASON_2"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th  colspan=\"2\">Transportation</th>";
echo "</tr>";

echo "<tr>";
echo "<td  colspan=\"2\">" . htmlspecialchars($row["TRANSPORTATION"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th  colspan=\"4\" style='padding:10px; background-color: #700;'>References</th>";
echo "</tr>";

echo "<tr>";
echo "<th>Person 1</th>";
echo "<th>Relationship</th>";
echo "<th>Work Phone</th>";
echo "<th>Home Phone</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["PERSON_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["RELATIONSHIP_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["WORK_PHONE_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["HOME_PHONE_1"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Person 2</th>";
echo "<th>Relationship</th>";
echo "<th>Work Phone</th>";
echo "<th>Home Phone</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["PERSON_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["RELATIONSHIP_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["WORK_PHONE_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["HOME_PHONE_2"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th colspan=\"3\" style='padding:10px; background-color: #700;'>Previous Work</th>";
echo "</tr>";



echo "<tr>";
echo "<th>Company 1</th>";
echo "<th>Job Duties 1</th>";
echo "<th>Dates Worked 1</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["COMPANY_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["JOB_DUTIES_1"]) . "</td>";
echo "<td>" . htmlspecialchars($row["DATES_WORKED_1"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Company 2</th>";
echo "<th>Job Duties 2</th>";
echo "<th>Dates Worked 2</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["COMPANY_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["JOB_DUTIES_2"]) . "</td>";
echo "<td>" . htmlspecialchars($row["DATES_WORKED_2"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Company 3</th>";
echo "<th>Job Duties 3</th>";
echo "<th>Dates Worked 3</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . htmlspecialchars($row["COMPANY_3"]) . "</td>";
echo "<td>" . htmlspecialchars($row["JOB_DUTIES_3"]) . "</td>";
echo "<td>" . htmlspecialchars($row["DATES_WORKED_3"]) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th  colspan=\"3\">Paragraph</th>";
echo "</tr>";

echo "<tr>";
echo "<td  colspan=\"3\">" . htmlspecialchars($row["PARAGRAPH"]) . "</td>";
echo "</tr>";
echo '</table>';

echo "<br>";
echo "<br>";


echo "<table  border='1' style='width:100%; border-collapse: collapse;'>";
echo "<tr>";
echo '<th>Extra</th>';
echo "</tr>";
echo "<tr>";
echo '<td> The file path for the transcript is http://ice.yhscs.us/' . $row["TRANSCRIPT"] . "</td>";
echo "</tr>";
echo "<tr>";
echo '<td>Put the path above into the adress bar to download the file</td>';
echo "</tr>";
echo "</table>";
} 
?>

<style type="text/css">

#selectStudent{

}
tr {
	background-color: #777;
}
th {
	color: #FFF;
	background-color: #000;
}

#logout{
	width: 75px;
	height: 45px;
}


</style>

<body background="Root Folder/blue-abstract-background-texture.jpg">
<html>
<body>
</br>
</br>

<form method="post">
<select id="selectStudent" name="name">
<?php
$result=$dbh->prepare('SELECT * FROM `Ice Answers` ORDER BY `ID`');
$result->execute();
$everything=$result->fetchAll();
foreach ($everything as $row) {
echo '<option value="' . $row['ID'] . '">' .  $row['NAME'] . '</option>';
}
?>
</select>
<input id="select" value="select" type="submit">
</form>

<form action="logout.php" method="post">
<input id='logout' type="submit" value="Logout">
</form>

</body>
</html>