<!-- 
	Модуль виведення модального вікна з інформацією про користувача
-->

<!--
	<?php 
		// isset перевірка наявності змінної
		if (isset($_GET["user"])) {
			$polsovatel_id = $_GET["user"] - 1;
			$polsovatel = $polsovately[$polsovatel_id];
	?>
				<div class="modal" style="display: block;">
					<div class="close"><a href="index.php">X</a></div>
					<div class="content-modal">
						<h2>User: <?php echo $polsovatel["name"];?></h2>
						<h3>Id: <?php echo $polsovatel["id"];?></h3>
						<h3>Message: <?php echo $polsovatel["message"];?></h3>
						<h3>Email: <?php echo $polsovatel["contact"]["email"];?></h3>
						<h3>Phone: <?php echo $polsovatel["contact"]["phone"];?></h3>

					</div>
				</div>
	<?php
		}
	?>
-->