<?php					 
include $_SERVER["DOCUMENT_ROOT"] ."/configs/db.php";
// створюємо запит в базу данних
$sql = "SELECT * FROM polsovately WHERE id !=" . $_COOKIE["polsovatel_id"];
// отримуємо результат запиту
$result = mysqli_query($connect, $sql);
// отримуємо значення кількості елементів 
$col_polsovately = mysqli_num_rows($result);

$i = 0;
while ( $i < $col_polsovately) {
	// в змінну polsovatel заносимо дані про користувача
	$polsovatel = mysqli_fetch_assoc($result);
	echo "<li>";
	echo "<div class=\"avatar\">
			<img src='" . $polsovatel["photo"] . "'>
		</div>";
		echo "<h2>" . $polsovatel["name"] . "</h2>";

		$sql = "SELECT * FROM friends WHERE
			user_1=".$polsovatel["id"]." AND user_2=".$_COOKIE["polsovatel_id"]."
			OR user_1=".$_COOKIE["polsovatel_id"]." AND user_2=".$polsovatel["id"];
		$friendResult = mysqli_query($connect, $sql);
		$col_friends = mysqli_num_rows($friendResult);
		if ($col_friends > 0) {
			echo "<div data-link='http://chat.local/delete-friends.php?user_id=".$polsovatel["id"]."' onclick=deleteFriend(this)> Видалити з друзів -</div>";
		} else {
			echo "<div data-link='http://chat.local/add-friends.php?user_id=".$polsovatel["id"]."' onclick=addFriend(this)> Додати в друзі +</div> <br>";	
		}									
	echo "</li>";

	$i = $i + 1;
}
?>