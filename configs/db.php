<?php 
	// дані для підключення до бази даних
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chat";

	// mysqli_connect підключення до бази даних 
	$connect = mysqli_connect( $server, $username, $password, $dbname);

	// mysqli_set_charset - задаємо котировку для клієнта
	mysqli_set_charset($connect, 'utf8');
?>