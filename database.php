<?php
	$dsn = 'mysql:dbname=rc443;host=sql2.njit.edu';
	$username = 'rc443';
	$password = 'Gpsc539F';

	try{
		$db = new PDO($dsn, $username, $password);
		$dbh->setAttribute(PDO;:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
$sql = "CREATE TABLE users1 (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";
try {

$dbh->exec($sql);
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();

}
echo 'done';
?>
