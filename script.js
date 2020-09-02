// Відкриваємо модальне вікно контактів при кліку
var btnOpenContacts = document.querySelector("#btn-open-contacts");
	btnOpenContacts.onclick = function () {
		var contactsModal = document.querySelector("#contacts-modal");
			contactsModal.style.display = "block";
		var friendsModal = document.querySelector("#friends-modal");
			friendsModal.style.display = "none";
	}
// Закриваємо модальне вікно контактів при кліку
var	btnCloseContacts = document.querySelector("#contacts-modal .close");
	btnCloseContacts.onclick = function () {
		var contactsModal = document.querySelector("#contacts-modal");
			contactsModal.style.display = "none";

	}
// Відкриваємо модальне вікно друзів при кліку
var btnOpenfriends = document.querySelector("#btn-open-friends");
	btnOpenfriends.onclick = function () {
		var friendsModal = document.querySelector("#friends-modal");
			friendsModal.style.display = "block";
		var contactsModal = document.querySelector("#contacts-modal");
			contactsModal.style.display = "none";

	}
// Закриваємо модальне вікно друзів при кліку
var	btnClosefriends = document.querySelector("#friends-modal .close");
	btnClosefriends.onclick = function () {
		var friendsModal = document.querySelector("#friends-modal");
			friendsModal.style.display = "none";
	}

function addFriend (element) {
	var contactList = document.querySelector("#contact-list");
	//console.dir(element);
	var link = element.dataset.link;
	//console.dir(link);
	var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
		ajax.send();
	//console.log(ajax);
	contactList.innerHTML = ajax.response;

	friendsList_now()
}


function deleteFriend (element) {
	var contactList = document.querySelector("#contact-list");
	//console.dir(element);
	var link = element.dataset.link;
	//console.dir(link);
	var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
		ajax.send();
	//console.log(ajax);
	contactList.innerHTML = ajax.response;

	friendsList_now()
}

/*========================================*/
/* Функція оновлення списку друзів*/

function friendsList_now() {
	var friendsList = document.querySelector("#friends-list");
	var link = "http://chat.local/moduls/friends-list.php";
	//console.dir(link);
	var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
		ajax.send();
	//console.log(ajax.response);
	friendsList.innerHTML = ajax.response;
}

/* Функція оновлення списку контактів*/
function contactsList_now() {
	var contactList = document.querySelector("#contact-list");
	var link = "http://chat.local/moduls/contact-list.php";
	//console.dir(link);
	var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
		ajax.send();
	//console.log(ajax.response);
	contactList.innerHTML = ajax.response;
}

/*========================================*/

function deleteFriendsList (element) {
	var friendsList = document.querySelector("#friends-list");
	//console.dir(element);
	var link = element.dataset.link;
	//console.dir(link);
	var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
		ajax.send();
	//console.log(ajax);
	friendsList.innerHTML = ajax.response;
	contactsList_now();
}


var form = document.querySelector("#form");
	if (form != null) {
		form.onsubmit = function (event) {

			event.preventDefault();

			var to_user_id = form.querySelector("input[name='to_user_id']");
			var from_user_id = form.querySelector("input[name='from_user_id']");
			var message = form.querySelector("textarea");

			var dannie = "send_message=1&" + 
						"to_user_id=" + to_user_id.value +
						"&from_user_id=" + from_user_id.value +
						"&message=" + message.value;
			//console.dir(dannie);
			var ajax = new XMLHttpRequest();
				ajax.open("POST", form.action, false);
				ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				ajax.send(dannie);

			//console.dir(ajax);
			var messageList = document.querySelector("#list-content");
				messageList.innerHTML = ajax.response;

			message.value = "";
		}
	}
	
var poisk = document.querySelector("#poisk");
	console.dir(poisk);
	poisk.onsubmit = function (event) {
		event.preventDefault();
		var link = poisk.action + "?poisk-text=" + poisk.querySelector("input[name='poisk-text']").value;
		console.dir(link);

		var ajax = new XMLHttpRequest();
		ajax.open("GET", link, false);
			ajax.send();
		console.log(ajax);
		var spisokPolsovateley = document.querySelector("#spisok");
		spisokPolsovateley.innerHTML = ajax.response;
	poisk.querySelector("input[name='poisk-text']").value = ""; 

	}