
<div id="shapka"> <!-- шапка чата з логотипом та меню -->
	<a href="/" id="glavnaya">
	<div id="logo">
		<img src="/images/logo.png"> <span><b>Web</b><i>Chat</i></span>
	</div>
	</a>
	<div id="menu">
		
		<?php 
		// якщо користувач авторизований показувати кнопку LogOUT якщо ні то LogIN
		if (isset($_COOKIE["polsovatel_id"])) {
			$sql = "SELECT * FROM polsovately WHERE id = " . $_COOKIE["polsovatel_id"];
			?>
				<a href="#" id="btn-open-friends">Friends</a>
				<a href="#" id="btn-open-contacts">Contacts</a>
				<!-- <a href="#">Setting</a> -->
			<?php
			// в змінну polzovatel заносимо дані користувача $_COOKIE["polsovatel_id"]
			$polzovatel = mysqli_fetch_assoc(mysqli_query($connect, $sql));
			?>
			<a href="vihod.php" id=""><?php echo $polzovatel["name"].": "?>LogOUT</a> <!-- LogOUT -->
			<?php
		}else{
			?>
			<a id="btn-open-login-window">LogIN/Registration</a> <!-- LogIN -->
			<?php
		}

		?>
		
	</div>
</div> <!-- шапка чата з логотипом та меню -->