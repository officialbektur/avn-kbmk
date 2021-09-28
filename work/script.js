let id = 1;
const arrays = document.querySelectorAll('.page__text_numer');
arrays.forEach(function(el) {
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

