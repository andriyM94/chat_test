<?php 
include "configs/db.php";

// добавлення повідомлення в базу даних
if (isset($_POST["send_message"]) && ($_POST["send_message"] != "") ) {
	$sql = "INSERT INTO messages (to_user_id, from_user_id, message) VALUES ('".$_POST["to_user_id"]."', '".$_POST["from_user_id"]."', '".$_POST["message"]."')";
	mysqli_query($connect, $sql);

	$myMessageId = $_POST["from_user_id"];

	$otpravleno_polsovatel_id = $_POST["to_user_id"];
}

?>
<!-- підключаємо модуль з виводом повідомлень -->
<?php include "moduls/messages-list-content.php";?>