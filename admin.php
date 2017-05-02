<?php
session_start();

require_once('db.php');


$adminName = stripslashes(trim($_POST["adminName"]));
$adminPassword = trim($_POST["adminPassword"]);

$result=$dbh->prepare("SELECT `Admin_Name`,`Admin_Pass` FROM `adminTable` WHERE `Admin_Name` = ? AND aes_decrypt(`Admin_Pass`, '{094M1C(nGn>V3X') = ? LIMIT 1");
$result->execute(array($adminName,$adminPassword));
$count=$result->rowCount();

if($count==0)
{
	exit('ERROR admin account was not recognized');
}
$_SESSION['login_user'] = $_POST['adminName'];
if(isset($_SESSION['login_user'])){
header('Location: adminTables.php'); 
}

?>