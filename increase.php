<?php
header("Content-type: application/json");
$user = $_SERVER["PHP_AUTH_USER"];
$pass = $_SERVER["PHP_AUTH_PW"];
$ID = $_POST["ID"];

/*Connet to DB*/
$conn = new PDO ("mysql:host=localhost;dbname=dftitutorials;","dftitutorials","dftitutorials");
/*Run SQL to check username and password*/
$statement = $conn->prepare("SELECT * FROM ht_users WHERE username = ? AND password = ?");
$statement->bindParam(1,$user);
$statement->bindparam(2,$pass);
$statement->execute();
$go = $statement->fetch();

/*Check if song ID has been set if previous SQL returned result from user login details*/
IF ($go == TRUE)/*<-If there is a row returned from user provided details*/
{
	IF ($ID == "" || !isset($_POST["ID"]))/*<-Check song ID is not blank*/
{
	/*If song ID is not set return error in header*/
	header ("HTTP/1.1 400 Bad Request");
}
/*If song ID is set check that is exists in the DB*/
ELSE
{
	$song = $conn->prepare("SELECT songid FROM wadsongs WHERE songid = ?");
	$song->bindParam(1,$ID);
	$song->execute();
	$sid = $song->fetch();
	IF ($sid[songid] == TRUE)

	{
		$check = $conn->prepare("SELECT balance FROM ht_users WHERE username = ?");
		$check->bindParam(1,$user);
		$check->execute();
		$bal = $check->fetch();
		IF($bal[balance]< 0.79)
	{
		header ("HTTP/1.1 402 PAYMENT REQUIRED");
	}
ELSE IF ($bal[balance] >= 0.79)
	{
		$update = $conn->prepare("UPDATE wadsongs SET downloads = downloads+1 WHERE songid = ?");
		$update->bindParam(1,$ID);
		$update->execute();
		
		$reduce = $conn->prepare("UPDATE ht_users SET balance = balance -0.79 WHERE username = ?");
		$reduce->bindParam(1,$user);
		$reduce->execute();
		header ("HTTP/1.1 200 OK");
	}
	}
ELSE IF ($sid[songid] == FALSE)
	{
		header ("HTTP/1.1 204 No Content");
	}	
}
}
ELSE
{
	header ("HTTP/1.1 401 Unauthorized");
}
/*['username'] == $user && $go['password'] == $pass*/
?>
