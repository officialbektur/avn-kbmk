let id = 1;
const arrays = document.querySelectorAll('.page__text_numer');
arrays.forEach(function(el) {
  el.innerHTML = id++ + ")";
});
setTimeout(() => {
    let script = document.querySelector("script");
    let noScript = document.querySelector("noscript");
    let logoBanRek; 
	if (noScript) {
		logoBanRek = noScript.nextElementSibling
	} else {
		logoBanRek = script.nextElementSibling
	}
    logoBanRek.style.display = "none";   
}, 0);
let button 			= document.querySelector(".form__button"),
 	popupBody 		= document.querySelector(".popup__body"),
	content 		= document.querySelector(".content"),
	truePass 		= "ggg",
	truePassword 	= truePass.toLowerCase();
button.addEventListener("click", function (e) {
	e.preventDefault();
    let input = document.querySelector(".form__input"),
        pass = document.querySelector(".form__input").value;
	let passs = pass.toLowerCase();
    if(passs == truePassword) {
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
		if (passwordtNumber.innerHTML == 12) {
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

