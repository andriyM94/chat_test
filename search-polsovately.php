<?php 
include "configs/db.php";

if (isset($_GET["poisk-text"]) && $_GET["poisk-text"] != "") {
	$sql = "SELECT * FROM polsovately WHERE name LIKE '%".$_GET["poisk-text"] ."%' AND id !=" .  $_COOKIE["polsovatel_id"];
	$result = mysqli_query($connect, $sql);
	$col_polsovately = mysqli_num_rows($result);
	// перевірка на наявність результатів пошуку			
	if ($col_polsovately == 0) {
		echo "<h2>Збігів не знайдено.</h2>";
	} else {
		?>

		
		<ul>
			<?php
				// змінна для лічильника
				$i = 0;
				// виводимо всіх користувачів з бази даних chat табличкі polsovately
				while ( $i < $col_polsovately) {
					// в змінну polsovatel заносимо дані про користувача
					$polsovatel = mysqli_fetch_assoc($result);
					echo "<a href=\"index.php?user=" . $polsovatel["id"] . "\">";
						echo "<li>";
						echo "<div class=\"avatar\">
								<img src='" . $polsovatel["photo"] . "'>
							</div>";
							echo "<h2>" . $polsovatel["name"] . "</h2>";
							echo "<p>text last message</p>";
							echo "<div class=\"time\">9:10</div>";
						echo "</li>";
					echo "</a>";
				$i = $i + 1;
				}
			?>
			</ul>
		

		<?php
	}
	
}

?>