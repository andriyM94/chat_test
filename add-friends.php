<?php 
include "configs/db.php";

if (isset($_GET["user_id"])) {
	$sql = "INSERT INTO friends (user_1, user_2) VALUES ('".$_COOKIE["polsovatel_id"]."', '"
		.$_GET["user_id"]."')";
	if (mysqli_query($connect, $sql)) {
	 	include "moduls/contact-list.php";
	 } else {
	 	echo "<h2> ERROR </h2>";
	 }
}
?>