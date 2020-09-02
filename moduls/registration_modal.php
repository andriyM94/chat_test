<!-- модальне вікно реєстрації --> 

<div class="modal" id="registration-modal">  
	<div class="close">X</div>
	<div class="content-modal">
		<form id="registration-form" method="POST" action="../registration.php">		
			<label for="name">Enter your name:</label>			
			<input type="name"  name="name"size="30" required placeholder="your_name">			
			<label for="email">Enter your email:</label>			
			<input type="email" id="email-login" name="email"size="30" required placeholder="your_email@gmail.com">			
		    <label for="pass">Password (min 8 symbol):</label>		    
		    <input type="password" id="password" name="password" minlength="8" required placeholder="your_password">		
			<input type="submit" value="Registration" id="registration-btn">
		</form>
		<a href="#" id="btn-open-login-window1">LogIN</a>
	</div>
</div>