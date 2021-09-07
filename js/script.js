let button 			= document.querySelector(".form__button"),
 	popupBody 		= document.querySelector(".popup__body"),
	content 		= document.querySelector(".content"),
	truePass 		= "ff",
	truePassword 	= truePass.toLowerCase(),
	rozahunTextEngs = "Rozahun",
	rozahunTextRuss = "Розахун",
	dianaTextEngs 	= "diana",
	dianaTextRuss 	= "Диана",
	rozahunTextEng 	= rozahunTextEngs.toLowerCase(),
	rozahunTextRus 	= rozahunTextRuss.toLowerCase(),
	dianaTextEng 	= dianaTextEngs.toLowerCase(),
	dianaTextRus 	= dianaTextRuss.toLowerCase();
button.addEventListener("click", function (e) {
	e.preventDefault();
    let input = document.querySelector(".form__input"),
        pass = document.querySelector(".form__input").value;
	let passs = pass.toLowerCase();
    if(passs == truePassword || passs == rozahunTextEng || passs == rozahunTextRus || passs == dianaTextEng || passs == dianaTextRus) {
        popupBody.classList.add("_active");
        content.classList.remove("_done");
        localStorage.passs = truePassword;
    } else {
        input.classList.add("_error");
		document.forms[0].reset();
	}
});
if(localStorage.passs == truePassword) {
    popupBody.classList.add("_active");
    content.classList.remove("_done");
}
let passwords = document.querySelector(".passwords"),
	passwordtNumber = document.querySelector(".passwords__number"),
	passwordtText = document.querySelector(".passwords__text");
	passwordtText.innerHTML = truePass;

	passwords.addEventListener("click", function () {
		passwordtNumber.innerHTML ++;
		if (passwordtNumber.innerHTML == 8) {
			passwordtNumber.innerHTML = 0;
			passwordtText.classList.toggle("_done");
			setTimeout(() => {
				if (!passwordtText.classList.contains("_active")) {
					passwordtText.classList.remove("_done");
				}
			}, 1400);
		}
});
setTimeout(() => {
	passwordtText.classList.remove("_active");
}, 800);
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
$(document).ready(function() {$('#search').hideseek({highlight: true});});
let formButtonBack 	= document.querySelector(".form__search_back");
formButtonBack.addEventListener("click", function () {
	let formSearch = document.querySelector(".form__search_input"),
		pageBodyP = document.querySelectorAll(".page__body_p");
	formSearch.value = "";
	for (let index = 0; index < pageBodyP.length; index++) {
		const pageBodyPs = pageBodyP[index];
		pageBodyPs.style.display = null;
	}
});
// Кнопка на верх + плавный скролл наверх
document.addEventListener('DOMContentLoaded', () => {
	let toTopBtn = document.querySelector('.up__button');
	window.onscroll = function () {
		if (window.pageYOffset > 60) {
			toTopBtn.classList.add("_active");
		} else {
			toTopBtn.classList.remove("_active");
		}
	}
	// плавный скролл наверх 
	toTopBtn.addEventListener('click', function () {
		window.scrollBy({
			top: -document.documentElement.scrollHeight,
			behavior: 'smooth'
		});
	});
});

// Мену бургер
const bodyLock = document.body;
const iconMenu = document.querySelector(".menu__icon");
const menuBody = document.querySelector(".menu__body");
if (iconMenu) {
	iconMenu.addEventListener('click', function (e) {
		bodyLock.classList.toggle("_lock");
		iconMenu.classList.toggle("_active");
		menuBody.classList.toggle("_active");
	});
	menuBody.classList.contains('_active');
	menuBody.addEventListener("click", function (e) {
		if (!e.target.closest(".menu__list")) {
			bodyLock.classList.remove("_lock");
			iconMenu.classList.remove("_active");
			menuBody.classList.remove("_active");
		}
	});
}
// Прокрутка при клике на меню
const menuLinks = document.querySelectorAll(".menu__link[data-goto]");
if (menuLinks.length > 0) {
	menuLinks.forEach(menuLink => {
		menuLink.addEventListener("click", onMenuLinkClick);
	});

	function onMenuLinkClick(e) {
		const menuLink = e.target;
		if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
			const gotoBlock = document.querySelector(menuLink.dataset.goto);
			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector("header").offsetHeight;
			if (iconMenu.classList.contains("_active")) {
				document.body.classList.remove("_lock");
				iconMenu.classList.remove("_active");
				menuBody.classList.remove("_active");
			}
			window.scrollTo({
				top: gotoBlockValue,
				behavior: "smooth"
			});
			e.preventDefault();
		}
	}
}