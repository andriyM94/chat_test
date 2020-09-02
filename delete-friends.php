<?php 
include "configs/db.php";

if (isset($_GET["user_id"])) {
	$sql = "DELETE FROM friends WHERE user_1=".$_COOKIE["polsovatel_id"]." AND user_2="
		.$_GET["user_id"];
	if (mysqli_query($connect, $sql)) {
	 	include "moduls/contact-list.php";
	 } else {
	 	echo "<h2> ERROR </h2>";
	 }
}
?>