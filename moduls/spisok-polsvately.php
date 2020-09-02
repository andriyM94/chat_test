<!-- 
	Модуль виводу списка користувачів в лівий блок пошуку і користувачів
-->

<?php 
if (isset($_COOKIE["polsovatel_id"])) {
	# code...
	// створюємо запит в базу данних без врахування авторизованого користувача
	$sql = "SELECT * FROM polsovately WHERE id != " . $_COOKIE["polsovatel_id"];
	// отримуємо результат запиту
	$result = mysqli_query($connect, $sql);
	// отримуємо значення кількості елементів 
	$col_polsovately = mysqli_num_rows($result);


?>

<div id="spisok">
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
</div>

<?php 
}
?>