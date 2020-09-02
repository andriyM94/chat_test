<!-- 
	Модуль виводу повыдомлень переписки з вибраним користувачем
-->

<ul id="list-content">

	<?php
	if (isset($_GET["user"]) || isset($otpravleno_polsovatel_id)) {

		$user_id = null;

		if (isset($_GET["user"])) {
			$user_id = $_GET["user"];
		} else {
			$user_id = $otpravleno_polsovatel_id;
		}

		// створюємо запит в базу данних
		$sql = "SELECT * FROM messages WHERE (to_user_id = ". $user_id ." AND from_user_id = ".$_COOKIE["polsovatel_id"].")".
		" OR (to_user_id = ".$_COOKIE["polsovatel_id"]." AND from_user_id = ". $user_id .")";
		// отримуємо результат запиту
		$result = mysqli_query($connect, $sql);
		// отримуємо значення кількості елементів 
		$col_messages = mysqli_num_rows($result);

		$i = 0;
		// виводимо всіх користувачів з бази даних chat табличкі messages
		while ( $i < $col_messages) {
			// в змінну polsovatel заносимо дані про користувача
			$message = mysqli_fetch_assoc($result);
			// формуємо заброс на вибірку користувача по from_user_id в повідомленні
			$sql = "SELECT * FROM polsovately WHERE id = " . $message["from_user_id"];
			// в змінну polzovatel заносимо дані користувача user_id
			$polzovatel = mysqli_fetch_assoc(mysqli_query($connect, $sql));

			if ($_COOKIE["polsovatel_id"] == $polzovatel["id"]) {
				echo "<li class=\"my_messge\">";
					echo "<div class=\"avatar\">";
						echo "<a href=\"index.php?user=" . $message["from_user_id"] . "\">";
							echo "<img src='" . $polzovatel["photo"] . "'>";
						echo "</a>";
					echo "</div>";
					echo "<h2>" . $polzovatel["name"] . "</h2>";
					echo "<p>" . $message["message"] . "</p>";
					echo "<div class=\"time\">" . $message["time"] . "</div>";
				echo "</li>";	
			} else {
				echo "<li>";
					echo "<div class=\"avatar\">";
						echo "<a href=\"index.php?user=" . $message["from_user_id"] . "\">";
							echo "<img src='" . $polzovatel["photo"] . "'>";
						echo "</a>";
					echo "</div>";
					echo "<h2>" . $polzovatel["name"] . "</h2>";
					echo "<p>" . $message["message"] . "</p>";
					echo "<div class=\"time\">" . $message["time"] . "</div>";
				echo "</li>";
			}
			
			$i = $i + 1;					
		}
	} else {
		echo "Polovatel ne vibran";
	}
	
	?>

</ul>

