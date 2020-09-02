<!-- 
	Сторінка авторизації користувача
 -->

<?php 

include "configs/db.php";
// перевірка введених данних на співпадіння з базою даних і вхід 
if (isset($_POST["email"]) && isset($_POST["password"])) {
	//запит на перевірку відповідності
	$sql = "SELECT * FROM `polsovately` WHERE `email` LIKE '".$_POST["email"]."' AND `password` LIKE '".$_POST["password"]."'";
	$result = mysqli_query($connect, $sql);
	$col_polsovately = mysqli_num_rows($result);

	if ($col_polsovately == 1) {
		$polsovatel = mysqli_fetch_assoc($result);
		// створення кукі з часом життя 1 день
		setcookie("polsovatel_id", $polsovatel["id"], time()+60*60*24);
		// перенаправлення на головну сторінку
		header("Location: /");
	} else {
		echo "<h2>Error<h2>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
		include "elements_site/shapka.php";
	?>
	
	<div id="content">	
		<div id="welcome_page">
			<h2>Ласкаво просимо до WebChat-у</h2>
			<h3>Для того щоб почати користуватися чатом автроризуйтеся, якщо ви не маєте акаунта - можете зареєструватися</h3>
			<img src="images/help_login.png">
		</div>
	</div>

	<!-- модальне вікно входу в чат -->
  	<?php include "moduls/log_in.php"?>

  	<!-- модальне вікно реєстрації в чаті -->
  	<?php include "moduls/registration_modal.php"?>

<script type="text/javascript" src="script_in_out.js"></script>
</body>
</html>

