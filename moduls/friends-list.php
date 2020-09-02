<?php					 
include $_SERVER["DOCUMENT_ROOT"] ."/configs/db.php";
// створюємо запит в базу данних
$sql = "SELECT * FROM friends WHERE	user_1=" . $_COOKIE["polsovatel_id"];
// отримуємо результат запиту
$result = mysqli_query($connect, $sql);
// отримуємо значення кількості елементів 
$col_polsovately = mysqli_num_rows($result);

$i = 0;
while ( $i < $col_polsovately) {
	// в змінну polsovatel заносимо дані про користувача
	$friends_list = mysqli_fetch_assoc($result);
	$sql = "SELECT * FROM polsovately WHERE	id=" .$friends_list["user_2"];
	// echo "<pre>";
	// var_dump($friends_list["user_2"]);
	echo "<li>";
	$resPolsovatel = mysqli_query($connect, $sql);
	$polsovatel = mysqli_fetch_assoc($resPolsovatel);
	// var_dump($polsovatel["name"]);
	echo "<div class=\"avatar\">
			<img src='" . $polsovatel["photo"] . "'>
		</div>";
		echo "<h2>" . $polsovatel["name"] . "</h2>";		
		echo "<div data-link='http://chat.local/delete-friends-list.php?user_id=".$polsovatel["id"]."' onclick=deleteFriendsList(this)> Видалити з друзів -</div>";
									
	echo "</li>";

	$i = $i + 1;
}
?>