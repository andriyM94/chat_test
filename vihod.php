<!-- 
	видалення кукі користувача і перехід на головну сторінку
 -->

<?php 
setcookie("polsovatel_id", "", 0);
header("Location: /");
?>
