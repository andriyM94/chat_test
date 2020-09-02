// Відкриваємо модальне вікно входу користувача по кліку
var btnOpenLogInWindow = document.querySelector("#btn-open-login-window");
	btnOpenLogInWindow.onclick = function () {
		var logInModal = document.querySelector("#login-modal");
			logInModal.style.display = "block";
	}
// Закриваэмо модальне вікно входу користувача по кліку
var	btnCloseLogInWindow = document.querySelector("#login-modal .close");
	btnCloseLogInWindow.onclick = function () {
		var logInModal = document.querySelector("#login-modal");
			logInModal.style.display = "none";
	}
// Відкриваємо модальне вікно реєстрації користувача по кліку
var btnOpenRegistrationWindow = document.querySelector("#btn-open-registration-window");
	btnOpenRegistrationWindow.onclick = function () {
		var RegistrationModal = document.querySelector("#registration-modal");
			RegistrationModal.style.display = "block";
		var logInModal = document.querySelector("#login-modal");
			logInModal.style.display = "none";
	}
// Закриваэмо модальне вікно реєстрації користувача по кліку
var	btnOpenRegistrationWindow = document.querySelector("#registration-modal .close");
	btnOpenRegistrationWindow.onclick = function () {
		var RegistrationModal = document.querySelector("#registration-modal");
			RegistrationModal.style.display = "none";
	}
// Відкриваємо модальне вікно входу користувача по кліку
var btnOpenLogInWindow1 = document.querySelector("#btn-open-login-window1");
	btnOpenLogInWindow1.onclick = function () {
		var logInModal = document.querySelector("#login-modal");
			logInModal.style.display = "block";
		var RegistrationModal = document.querySelector("#registration-modal");
			RegistrationModal.style.display = "none";
	}

var qwe = document.querySelector("#loginform");
console.dir(qwe);
	if (qwe != null) {
		console.dir(qwe);
		qwe.onsubmit = function (event) {
			//event.preventDefault();
			console.dir(event);
		}
	}