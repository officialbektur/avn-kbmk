setTimeout(() => {
	let noScript = document.querySelector("noScript");
	let script = document.querySelector("script");
	if (noScript) {
		let logoBanRek = noScript.nextElementSibling;
		if (!logoBanRek == 0) {
			logoBanRek.style.opacity = "0";
			logoBanRek.style.visibility = "hidden";
		}
	} else if (script) {
		let logoBanRek = script.nextElementSibling;
		if (!logoBanRek == 0) {
			logoBanRek.style.opacity = "0";
			logoBanRek.style.visibility = "hidden";
		}
	}
}, 0);
let bgdnone = document.querySelector(".bgdnone");
if (localStorage.bgdnone === "_white") {
	bgdnone.classList.toggle("_white");
	document.body.classList.add("_lock");
}
document.onkeydown = function (e) {
	if (e.keyCode === 144) {
		bgdnone.classList.toggle("_white");
		document.body.classList.add("_lock");
		if (bgdnone.classList.contains("_white")) {
			localStorage.bgdnone = "_white";
		} else {
			localStorage.bgdnone = "";
			document.body.classList.remove("_lock");
		}
	}
}
let id = 1;
const arrays = document.querySelectorAll('.page__text_numer');
arrays.forEach(function (el) {
	el.innerHTML = id++ + ")";
});
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
/* ===================================  Progress Bar  --Start--  =================================== */
const progress = document.querySelector(".progress");
window.addEventListener("scroll", progressBar)
function progressBar() {
	let windowScrollTop = document.body.scrollTop || document.documentElement.scrollTop;
	let windowHeight = document.body.scrollHeight - document.documentElement.clientHeight;
	let percent = windowScrollTop / windowHeight * 100;
	progress.style.width = percent + "%";
}
/* ===================================  Progress Bar  --End--  =================================== */
$(document).ready(function () { $('.form__search_input').hideseek({ highlight: true }); });
let formButtonBack = document.querySelector(".form__search_back");
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

const body = document.querySelector("body");
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
		body.classList.remove("_lock");
		iconMenu.classList.remove("_active");
		menuBody.classList.remove("_active");
	});
}
