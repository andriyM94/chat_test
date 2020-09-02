<?php 
include "configs/db.php";

$polsovatel_id = null;
if (empty($_COOKIE["polsovatel_id"])) {
	header("Location: /login.php");
} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="data:;base64,=">
</head>
<body>
<!-- ***************************************************************************************************** -->
	<!-- Шапка сайта -->
	<?php 
		include "elements_site/shapka.php";
	?>
<!-- ***************************************************************************************************** -->

	<div id="content"> <!-- блок основного контенту -->

		<div id="users"> <!-- лівий блок пошуку і користувачів -->
			<form id="poisk" action="http://chat.local/search-polsovately.php" method="GET">
				<input type="text" name="poisk-text" required>
				<button>
					<img src="/images/icon-serch.png">
				</button>
			</form>

			<!-- підключаємо модуль виводу користувачів з бази данних -->
			<?php include"moduls/spisok-polsvately.php" ?>

		</div> <!-- лівий блок пошуку і користувачів -->
		
		<div id="message"> <!-- правий блок показу та відправки повідомлень -->
			<div id="list-message">
				<!-- <a href="chat.sql">*База даних для даного уроку*</a>
				<br>
				<a href="lesson11.2.rar">*Урок 2 мініуроки 1-2*</a> -->
				<?php 
					include "moduls/messages-list-content.php";
				?>			
			</div>

			<?php 
				if (isset($_GET['user'])) {
					?>
					<form id="form" action="http://chat.local/add-message.php" method="POST">
						<input type="hidden" name="to_user_id" value="<?php echo $_GET['user']?>"> 
						<input type="hidden" name="from_user_id" value="<?php echo $_COOKIE['polsovatel_id']?>"> 
						<textarea id="text-messenge" placeholder="Your MESSEGE ..." name="message"></textarea>
						<button type="submit" name="send_message" id="send_message">Send</button>
					</form>
					<?php
				}
			?>			
		</div><!-- правий блок показу та відправки повідомлень -->

	</div> <!-- блок основного контенту -->

<!-- ***************************************************************************************************** -->	

	<!-- Модальне вікно контаків -->
	<?php include "moduls/contacts.php"; ?>

	<!-- Модальне вікно друзів -->
	<?php include "moduls/friends.php"; ?>

	


<!-- ***************************************************************************************************** -->

	<script type="text/javascript" src="script.js"></script>
</body>
</html>