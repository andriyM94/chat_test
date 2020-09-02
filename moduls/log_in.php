<!-- модальне вікно входу в чат --> 

<div class="modal" id="login-modal">  
	<div class="close">X</div>
	<div class="content-modal">
		<form id="loginform" method="POST" action="../login.php">
			<label for="email">Enter your email:</label>
			<input type="email" id="email-login" name="email" size="30" required placeholder="your_email@gmail.com">
		    <label for="pass">Password (min 8 symbol):</label>
		    <input type="password" id="password" name="password" minlength="8" required placeholder="your_password">
			<input type="submit" value="Sign in" id="loginbtn">
		</form>
		<a href="#" id="btn-open-registration-window">Registration</a>
	</div>
</div>