<!-- 
	Сторінка реєстрації користувача
 -->

<?php 

include "configs/db.php";
// якщо дані користувача існують то реєструємо
if (isset($_POST["email"]) && isset($_POST["password"])) {
	// запит на додавання нового користувача
	$sql = "INSERT INTO polsovately (email, password, name, photo) VALUES ('".$_POST["email"]."', '".$_POST["password"]."', '".$_POST["name"]."', 'images/user1.webp');";
	if (mysqli_query($connect, $sql)) {
		header("Location: /");
	} else {
		// якщо сталася помилка вивести її на екран
		echo "<h2> Помилка: </h2>".mysqly_error($connect);
	}
}

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
		//include "elements_site/shapka.php";
	?>

	<div id="content">	
		<h2 class="avtoris">REGISTRATION</h2>
		<form  class="form" id="" method="POST" action="registration.php" style="margin-top: -16px;">
			<p>
			<label for="name">Enter your name:</label>
			<br>
			<input type="name"  name="name"size="30" required placeholder="your_name">
			</p>
			<p>
			<label for="email">Enter your email:</label>
			<br>
			<input type="email" id="email-login" name="email"size="30" required placeholder="your_email@gmail.com">
			</p>
			<p>
		    <label for="pass">Password (8 symbol minimum):</label>
		    <br>
		    <input type="password" id="password" name="password" minlength="8" required placeholder="your_password">
			</p>
			<input type="submit" value="Registration" id="loginbtn">
		</form>
		<a href="login.php">Авторизация</a>
	</div>
</body>
</html> -->