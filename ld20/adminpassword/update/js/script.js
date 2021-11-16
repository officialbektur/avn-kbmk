const body = document.querySelector("body");
let truePass = document.querySelector(".passwords__text").getAttribute("data-pass");
let button = document.querySelector(".form__button"),
	popupBody = document.querySelector(".popup__body"),
	content = document.querySelector(".content"),
	truePassword = truePass.toLowerCase();

button.addEventListener("click", function (e) {
	e.preventDefault();
	let input = document.querySelector(".form__input"),
		pass = document.querySelector(".form__input").value;
	let passs = pass.toLowerCase();
	if (passs == truePassword) {
		popupBody.classList.add("_active");
		content.classList.remove("_done");
		localStorage.passs = truePassword;
	} else {
		input.classList.add("_error");
		document.forms[0].reset();
	}
});
if (localStorage.passs == truePassword) {
	popupBody.classList.add("_active");
	content.classList.remove("_done");
}
var isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i)
	},
	BlackBerry: function () {
		return navigator.userAgent.match(/BlackBerry/i)
	},
	iOS: function () {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i)
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera Mini/i)
	},
	Windows: function () {
		return navigator.userAgent.match(/IEMobile/i)
	},
	any: function () {
		return (
			isMobile.Android() ||
			isMobile.BlackBerry() ||
			isMobile.iOS() ||
			isMobile.Opera() ||
			isMobile.Windows());
	}
};
if (isMobile.any()) {
	document.body.classList.add('_mobile');
} else {
	document.body.classList.add('_pc');
}
const iconMenu = document.querySelector(".menu__icon");
const menuBody = document.querySelector(".menu__body");
if (iconMenu) {
	iconMenu.addEventListener('click', function (e) {
		body.classList.toggle("_lock");
		iconMenu.classList.toggle("_active");
		menuBody.classList.toggle("_active");
	});
	menuBody.classList.contains('_active');
	menuBody.addEventListener("click", function (e) {
		if (!e.target.closest(".menu__list")) {
			body.classList.remove("_lock");
			iconMenu.classList.remove("_active");
			menuBody.classList.remove("_active");
		}
	});
}

