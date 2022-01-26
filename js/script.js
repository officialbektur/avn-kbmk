setTimeout(() => {
	banerDNone();
}, 0);
setTimeout(() => {
	banerDNone();
}, 5000);
setTimeout(() => {
	banerDNone();
}, 10000);
setTimeout(() => {
	banerDNone();
}, 12000);
setTimeout(() => {
	banerDNone();
}, 15000);
function banerDNone() {
	let body = document.body;
	let f = body.firstElementChild;
	if (f.tagName == "DIV") {
		f.style.display = "none";
	} else {
		let ff = f.nextElementSibling;
		if (ff.tagName == "DIV") {
			ff.style.display = "none";
		}
	}
}
/* ====================  Strict regime  ==================== */
'use strict';
/* =============================================  Default  --Start--  ============================================= */
/* =============================================  Meta Viewport Adaptation for a mobile device  --Start--  ============================================= */
function minWindowScreen250() {
	let screenWidth = screen.width;
	let metaViewport = document.getElementById("metaViewport");
	if (screenWidth < 250) {
		document.body.classList.add("_minWindowScreen250");
		metaViewport.setAttribute("content", "width=1200");
	} else {
		document.body.classList.remove("_minWindowScreen250");
		metaViewport.setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");
	}
}
minWindowScreen250();
/* =============================================  Meta Viewport Adaptation for a mobile device  --End--  ============================================= */
/* ===================================  Identify Computer or Mobile  --Start--  =================================== */
function defineСomputerOrMobile() {
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
		if (document.body.classList.contains("_pc")) {
			document.body.classList.remove("_pc");
		}
		document.body.classList.add("_mobile");
	} else {
		if (document.body.classList.contains("_mobile")) {
			document.body.classList.remove("_mobile");
		}
		document.body.classList.add("_pc");
	}
}
defineСomputerOrMobile();
/* ===================================  Identify Computer or Mobile  --End--  =================================== */
/* ====================  Checking the screen resizing  --Start--  ==================== */
window.addEventListener("resize", function () {
	/* ====================  Launching Functions  --Start--  ==================== */
	defineСomputerOrMobile();
	minWindowScreen250();
	deleteActiveAtSublistOnPc();
	/* ====================  Launching Functions  --End--  ==================== */
});
/* ====================  Checking the screen resizing  --End--  ==================== */
/* ====================  Delete the active one in the Sublist on the PC, if there is one  --Start--  ==================== */
function deleteActiveAtSublistOnPc() {
	if (document.body.classList.contains("_pc")) {
		let menuListSublists = document.querySelectorAll(".menu__list_sublist");
		if (menuListSublists.length > 0) {
			for (let index = 0; index < menuListSublists.length; index++) {
				const menuListSublist = menuListSublists[index];
				if (menuListSublist.classList.contains("_active")) {
					menuListSublist.classList.remove("_active");
				}
			}
		}
	}
}
/* ====================  Delete the active one in the sublist on the PC, if there is one  --End--  ==================== */
/* ====================  Dropdown List  --Start--  ==================== */
let menuListSublists = document.querySelectorAll(".menu__list_sublist");
if (menuListSublists.length > 0) {
	for (let index = 0; index < menuListSublists.length; index++) {
		const menuListSublist = menuListSublists[index];
		menuListSublist.addEventListener("click", function (e) {
			if (!menuListSublist.classList.contains("_active")) {
				document.querySelectorAll(".menu__list_sublist").forEach((el) => {
					if (el.classList.contains("_active")) {
						el.classList.remove("_active");
					}
				});
				menuListSublist.classList.add("_active");
			} else {
				menuListSublist.classList.remove("_active");
			}
		});
	}
}
/* ====================  Dropdown List  --End--  ==================== */
/* ===================================  Progress Bar  --Start--  =================================== */
const progress = document.querySelector(".progressbar");
window.addEventListener("scroll", progressBar)
function progressBar() {
	if (progress) {
		let windowScrollTop = document.body.scrollTop || document.documentElement.scrollTop;
		let windowHeight = document.body.scrollHeight - document.documentElement.clientHeight;
		let percent = windowScrollTop / windowHeight * 100;
		progress.style.width = percent + "%";
	}
}
progressBar();
/* ===================================  Progress Bar  --End--  =================================== */
$(document).ready(function () { $('.form__search_input').hideseek({ highlight: true });});
let formButtonBack = document.querySelector(".form__search_back");
if (formButtonBack) {
	formButtonBack.addEventListener("click", function () {
		let formSearch = document.querySelector(".form__search_input");
		if (document.querySelector(".allpages__block")) {
			let allpagesBlock = document.querySelectorAll(".allpages__block");
			formSearch.value = null;
			for (let index = 0; index < allpagesBlock.length; index++) {
				let allpagesBlocks = allpagesBlock[index];
				allpagesBlocks.style.display = null;
			}
		}
		$("mark.highlight").each(function () {
			$(this).replaceWith($(this).html());
		})
		if (document.querySelector(".boss__column")) {
			let bossColumn = document.querySelectorAll(".boss__column");
			formSearch.value = null;
			for (let index = 0; index < bossColumn.length; index++) {
				let bossColumns = bossColumn[index];
				bossColumns.style.display = null;
			}
		}
	});
}
/* ===================================  Menu Burger  --Start--  =================================== */
let body = document.querySelector("body");
let wrapper = document.querySelector(".wrapper");
setTimeout(() => {
	if (wrapper.classList.contains("_done")) {
		wrapper.classList.remove("_done");
	}
	if (body.classList.contains("_lock")) {
		body.classList.remove("_lock");
	}
}, 300);
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
		if (!e.target.closest(".menu__list_body li")) {
			body.classList.remove("_lock");
			iconMenu.classList.remove("_active");
			menuBody.classList.remove("_active");
		}
	});
}
/* ====================  Scrolling when Clicking on a data-goto=""  ==================== */
if (document.querySelector("[data-goto]")) {
	const menuLinks = document.querySelectorAll("[data-goto]");
	menuLinks.forEach(menuLink => {
		menuLink.addEventListener("click", onMenuLinkClick);
	});
	function onMenuLinkClick(e) {
		const menuLink = e.target.closest("[data-goto]");
		if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
			const gotoBlock = document.querySelector(menuLink.dataset.goto);
			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;
			if (iconMenu) {
				if (iconMenu.classList.contains("_active")) {
					body.classList.remove("_lock");
					iconMenu.classList.remove("_active");
					menuBody.classList.remove("_active");
				}
			}
			window.scrollTo({
				top: gotoBlockValue,
				behavior: "smooth",
			});
			e.preventDefault();
		}
	}
}
/* ===================================  Menu Burger  --End--  =================================== */
/* ====================  Activation when Scrolling   --Start--  ==================== */
document.addEventListener('DOMContentLoaded', () => {
	let toTopBtn = document.querySelector('.up__button');
	if (toTopBtn) {
		if (window.pageYOffset > 50) {
			toTopBtn.classList.add("_active");
		}
		window.onscroll = function () {
			if (window.pageYOffset > 50) {
				toTopBtn.classList.add("_active");
			} else {
				toTopBtn.classList.remove("_active");
			}
		}
	}
});
let hrefId = (window.location).href;
let id = hrefId.substring(hrefId.lastIndexOf("=") + 1);
let hrefAvn = [
   "http://avnanswers.ezyro.com",
   "http://avnanswers.ezyro.com/",
   "http://avnanswers.ezyro.com/index.php",
   "http://avnanswers.ezyro.com/new.php",
   "http://avnanswers.ezyro.com/all.php"
];

// let hrefAvn = [
// 	 "http://avnanswers",
// 	 "http://avnanswers/",
// 	 "http://avnanswers/index.php",
// 	 "http://avnanswers/new.php"
// ];
let hrefAvnpopupChange = hrefAvn[1] + "popup-change.php";
let hrefAvnpopupChanges = (hrefId  == hrefAvnpopupChange);
let hrefs = (hrefId == hrefAvn[0] || hrefId == hrefAvn[1] || hrefId == hrefAvn[2] || hrefId == hrefAvn[3] || hrefId == hrefAvn[4]);
if (hrefId.indexOf(`${hrefAvn[1]}?`) == 0) {
	window.location = hrefAvn[0];
}
if (id > 0 && hrefId.indexOf("info.php") > 0) {
	localStorage.idURL = id;
}
let menuLink = document.querySelectorAll(".menu__link_href");
for (let index = 0; index < menuLink.length; index++) {
	let menuLinks = menuLink[index];
	let menuLinksHref = menuLinks.getAttribute('href', '');
	menuLinks.setAttribute('href', menuLinksHref + "?id=" + localStorage.idURL);
}
if (!(id > 0) && !(localStorage.idURL == undefined) && !(localStorage.idURL == "") && !hrefs && hrefId.indexOf("popup-change.php") > 0) {
	window.location = `?id=${localStorage.idURLTest}`;
}
if (!(id > 0) && !(localStorage.idURL == undefined) && !(localStorage.idURL == "") && !hrefs && !(hrefId.indexOf("popup-change.php") > 0)) {
	window.location = `?id=${localStorage.idURL}`;
}
if (!(id > 0) && ((localStorage.idURL == undefined) || (localStorage.idURL == "") || hrefs)) {
	if (!hrefId == hrefs) {
		window.location = hrefAvn[0];
	}
}
function bossTextNumer() {
	let number = 1;
	const bossTextNumer = document.querySelectorAll('.boss__text_numer');
	if (bossTextNumer) {
		bossTextNumer.forEach(function (el) {
			el.innerHTML = number++;
		});	
	}
}
bossTextNumer();
/* ====================  Activation when Scrolling  --End--  ==================== */
if (document.querySelector(".passwords__text[data-pass]")) {
	let truePass = document.querySelector(".passwords__text").getAttribute("data-pass");
	truePass = truePass.toLowerCase();
	let formPasswordBtn = document.querySelector(".form__password_button"),
		popupPassword = document.querySelector(".popup__password"),
		content = document.querySelector("._content");
	formPasswordBtn.addEventListener("click", function (e) {
		e.preventDefault();
		let formPasswordInput = document.querySelector(".form__password_input"),
			formPasswordInputValue = document.querySelector(".form__password_input").value;
			formPasswordInputValue = formPasswordInputValue.toLowerCase();
		if (formPasswordInputValue == truePass) {
			if (document.querySelector("._menu__icon_white")) {
				document.querySelector("._menu__icon_white").classList.remove("_menu__icon_white");
			}
			body.classList.remove("_lock");
			popupPassword.classList.add("_active");
			content.classList.remove("_done");
			localStorage.contentPassword = truePass;
		} else {
			formPasswordInput.classList.add("_error");
			document.forms[0].reset();
		}
	});
	if (localStorage.contentPassword == truePass) {
		if (document.querySelector("._menu__icon_white")) {
			document.querySelector("._menu__icon_white").classList.remove("_menu__icon_white");
		}
		body.classList.remove("_lock");
		popupPassword.classList.add("_active");
		content.classList.remove("_done");
	}
}
if (document.querySelector(".passwords__text[data-adminpass]")) {
	let truePass = document.querySelector(".passwords__text").getAttribute("data-adminpass");
	truePass = truePass.toLowerCase();
	let formPasswordBtn = document.querySelector(".form__password_button"),
		popupPassword = document.querySelector(".popup__password"),
		content = document.querySelector("._content");
	formPasswordBtn.addEventListener("click", function (e) {
		e.preventDefault();
		let formPasswordInput = document.querySelector(".form__password_input"),
			formPasswordInputValue = document.querySelector(".form__password_input").value;
			formPasswordInputValue = formPasswordInputValue.toLowerCase();
		if (formPasswordInputValue == truePass) {
			if (document.querySelector("._menu__icon_white")) {
				document.querySelector("._menu__icon_white").classList.remove("_menu__icon_white");
			}
			body.classList.remove("_lock");
			popupPassword.classList.add("_active");
			content.classList.remove("_done");
			localStorage.adminPassword = truePass;
		} else {
			formPasswordInput.classList.add("_error");
			document.forms[0].reset();
		}
	});
	if (localStorage.adminPassword == truePass) {
		if (document.querySelector("._menu__icon_white")) {
			document.querySelector("._menu__icon_white").classList.remove("_menu__icon_white");
		}
		body.classList.remove("_lock");
		popupPassword.classList.add("_active");
		content.classList.remove("_done");
	}
}
if (document.querySelector(".passwords__text[data-recovery]")) {
	let truePassrecovery = document.querySelector(".passwords__text[data-recovery]").getAttribute("data-recovery");
	truePassrecovery = truePassrecovery.toLowerCase();
	let recoveryQuestionsButton = document.getElementById("recoveryQuestionsButton"),
		popupNewAdminPassword = document.getElementById("popup_newadminpassword"),
		popupNewContentPassword = document.getElementById("popup_newcontentpassword");
	recoveryQuestionsButton.addEventListener("click", function (e) {
		e.preventDefault();
		let recoveryQuestions = document.querySelector("#recoveryQuestions"),
			recoveryQuestionsValue = document.querySelector("#recoveryQuestions").value;
			recoveryQuestionsValue = recoveryQuestionsValue.toLowerCase();
		if (recoveryQuestionsValue == truePassrecovery) {
			if (popupNewAdminPassword) {
				popupNewAdminPassword.classList.add("_active");
			}
			if (popupNewContentPassword) {
				popupNewContentPassword.classList.add("_active");
			}
		} else {
			recoveryQuestions.classList.add("_error");
			document.forms[0].reset();
		}
	});
}
if (document.querySelector(".passwords__text[data-deleteaccount]")) {
	let truePassrecovery = document.querySelector(".passwords__text[data-deleteaccount]").getAttribute("data-deleteaccount");
	truePassrecovery = truePassrecovery.toLowerCase();
	let adminPassword = document.getElementById("adminPasswordButton"),
		popupNewAdminPassword = document.getElementById("popup_13");
	adminPassword.addEventListener("click", function (e) {
		e.preventDefault();
		let adminPassword = document.querySelector("#adminPassword"),
			adminPasswordValue = document.querySelector("#adminPassword").value;
			adminPasswordValue = adminPasswordValue.toLowerCase();
		if (adminPasswordValue == truePassrecovery) {
			if (popupNewAdminPassword) {
				popupNewAdminPassword.classList.add("_active");
			}
		} else {
			adminPassword.classList.add("_error");
			document.forms[0].reset();
		}
	});
}
let bgdnone = document.querySelector(".bgdnone");
if (localStorage.bgdnone === "_white") {
	bgdnone.classList.toggle("_white");
	document.body.classList.add("_lock");
}
document.onkeydown = function (e) {
	if (e.keyCode === 106) {
		if (document.querySelector(".boss__content") && document.querySelector(".passwords__text")) {
			let truePass = document.querySelector(".passwords__text").getAttribute("data-pass");
			truePass = truePass.toLowerCase();
			if (localStorage.contentPassword == truePass) {
				localStorage.contentPassword = "";
			} else {
				localStorage.contentPassword = truePass;
			}
		}
	} else if  (e.keyCode === 144) {
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

document.addEventListener("DOMContentLoaded", function () {
	const form = document.getElementById("form");
	let alertMessege = document.querySelector(".alert__messege");
	let alertMessegeText = document.querySelector(".alert__messege_text");
	if (alertMessege) {
		alertMessege.addEventListener("click", function() {
			if (alertMessege.classList.contains("_sending")) {
				alertMessege.classList.remove("_sending");
			}
			alertMessegeText.innerText = "";
		});
	}
	if (form) {
		form.addEventListener("submit", formSend);
	}
	async function formSend(e) {
		e.preventDefault();
		let error = formValidate(form);
		let formData = new FormData(form);
		trueClassActiveInClassFilePrewiew1();
		trueClassActiveInClassFilePrewiew2();
		if (formImageInput1) {
			formData.append("image", formImageInput1.files[0]);
			formData.append("image", formImageInput2.files[0]);
		}
		if (error === 0) {
			form.classList.add("_sending");
			var linkform;
			const formNew = document.querySelector(".form-new");
			const formNewTitle = document.querySelector("._updatepassword#form__newtitle");
			const formAdd = document.querySelector(".form-add");
			const formChange = document.querySelector(".form-change");
			const popupChange = document.querySelector(".popup-change");
			const formNewContentPassword = document.querySelector("._updatepassword#popup_newcontentpassword");
			const popupNewContentPassword = document.getElementById("popup_newcontentpassword");
			const popupNewAdminPassword = document.getElementById("popup_newadminpassword");
			if (formNew) {
				linkform ='formnew.php';
			} else if (formNewTitle) {
				linkform = 'formnewtitle.php';
			} else if (formAdd) {
				linkform = 'formadd.php';
			} else if (formChange) {
				linkform = 'formchange.php';
			} else if (formNewContentPassword) {
				linkform = 'updatecontentpassword.php';
			} else if (popupNewContentPassword) {
				if (popupNewContentPassword.classList.contains("_active")) {
					linkform = 'updatecontentpassword.php';
				}
			} else if (popupNewAdminPassword) {
				if (popupNewAdminPassword.classList.contains("_active")) {
					linkform = 'updateadminpassword.php';
				}
			} else if (popupChange) {
				linkform = 'formupdate.php';
			}
			let response = await fetch('/vendor/' + linkform, {
				method: "POST",
				body: formData
			});
			if (response.ok) {
				let result = await response.json();
				setTimeout(() => {
					alertMessege.classList.add("_sending");
					alertMessegeText.innerText = result.message;
					if (formPreviewImgDelete1) {
						formPreviewImgDelete1();
						formPreviewImgDelete2();
					}
					setTimeout(() => {
						alertMessege.classList.remove("_sending");
						alertMessegeText.innerText = "";
					}, 2000);
					
					if (popupChange) {
						setTimeout(() => {
							window.location = hrefAvn[0] + "/" + "popup-change.php";
						}, 200);
					}
					if (formNewTitle) {
						setTimeout(() => {
							window.location = hrefAvn[0] + "/" + "updatetitle.php";
						}, 140);
					}
					form.reset();
					form.classList.remove("_sending");
					if (formNew) {
						setTimeout(() => {
							window.location = hrefAvn[0];
						}, 2000);
					}
					if (popupNewContentPassword || popupNewAdminPassword) {
						setTimeout(() => {
							window.location = hrefAvn[0] + "/" + "info.php";
						}, 2000);
					}
					if (popupChange) {
						setTimeout(() => {
							window.location = hrefAvn[0] + "/" + "popup-change.php";
						}, 200);
					}
				}, 600);
			} else {
				setTimeout(() => {
					alertMessege.classList.add("_sending");
					alertMessegeText.innerText = "Ошибка";
					form.classList.remove("_sending");
				}, 2000);
			}		
		} else {
			alertMessege.classList.add("_sending");
			alertMessegeText.innerText = "Заполните объязательные поля";
			setTimeout(() => {
				alertMessege.classList.remove("_sending");
				alertMessegeText.innerText = "";
			}, 2000);
		}
	}
	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll("._req");
		for (let index = 0; index < formReq.length; index++) {
			const input = formReq[index];
			formRemoveError(input);
			if (input.value === "" || input.value === " ") {
				formAddError(input);
				error++;
			}
		}
		return error;
	}
	let formReq = document.querySelectorAll("._req");
	if (formReq) {
		for (let index = 0; index < formReq.length; index++) {
			const formReqs = formReq[index];
			formReqs.addEventListener("click", function() {
				if (formReqs.classList.contains("_error")) {
					this.classList.remove("_error");
				}
			});
		}
	}
	let alertFormNewLabelButton = document.querySelectorAll(".form__new_label-button");
	let _adminPasswords = 'Админ Пароль - это уникальный пароль, который используется  для входа в раздел "Редактирование" и для входа в раздел "Изменение Пароля"';
	if (alertFormNewLabelButton) {
		for (let index = 0; index < alertFormNewLabelButton.length; index++) {
			let alertFormNewLabelButtons = alertFormNewLabelButton[index];
			let alertAdminPopup = document.querySelector(".alert__popup");
			let alertAdminPopupText = document.querySelector(".alert__popup_text");
			alertFormNewLabelButtons.addEventListener("click", function() {
				if (this.classList.contains("_adminPasswords")) {
					alertAdminPopup.classList.add("_sending");
					alertAdminPopupText.innerText = _adminPasswords;
				} 
			});
			alertAdminPopup.addEventListener("click", function() {
				alertAdminPopup.classList.remove("_sending");
				alertAdminPopupText.innerText = '';
			});
		}
	}
	function formAddError(input) {
		input.parentElement.classList.add("_error");
		input.classList.add("_error");
	}
	function formRemoveError(input) {
		input.parentElement.classList.remove("_error");
		input.classList.remove("_error");
	}
	// Получаем инпут file в переменную
	const formImageInput1 = document.getElementById("formImageInput1");
	const formImageInput2 = document.getElementById("formImageInput2");
	const filePrewiew1 = document.querySelector(".file__prewiew-1");
	const filePrewiew2 = document.querySelector(".file__prewiew-2");
	const formPreviewBack1 = document.querySelector(".file__prewiew_back-1");
	const formPreviewBack2 = document.querySelector(".file__prewiew_back-2");
	// Получаем див для превью в переменную
	const formPreviewImg1 = document.getElementById("formPreviewImg1");
	const formPreviewImg2 = document.getElementById("formPreviewImg2");
	if (formImageInput1) {
		let filePrewiewBoolean = filePrewiew1.firstElementChild.querySelector("a[data-fancybox]");
		if (Boolean(filePrewiewBoolean)) {
			filePrewiew1.classList.add("_active");
		}
		// Слушаем изменения в инпуте file
		formImageInput1.addEventListener("change", () => {
			uploadFile1(formImageInput1.files[0]);
			setTimeout(() => {
				trueClassActiveInClassFilePrewiew1();
				trueClassActiveInClassFilePrewiew2();
			}, 100);
		});
		formPreviewBack1.addEventListener("click", formPreviewImgDelete1);
		function formPreviewImgDelete1() {
			formPreviewImg1.innerHTML = "";
			filePrewiew1.classList.remove("_active");
			setTimeout(() => {
				trueClassActiveInClassFilePrewiew1();
				trueClassActiveInClassFilePrewiew2();
			}, 100);
		}
		function uploadFile1(file) {
			// Проверяем тип файла
			if (!["image/jpeg", "image/png", "image/gif"].includes(file.type)) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Разрешены толко изображения.";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
				formImageInput1.value = "";
				return;
			}
			// Проверим размер файла (< 2 mb)
			if (file.size > 20 * 10024 * 10024) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Файл должен быть менее 8 mb";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
				return;
			}
			var reader = new FileReader();
			reader.onload = function (e) {
				formPreviewImg1.innerHTML = `<a href="${e.target.result}" data-fancybox="gallery_boss"><img src="${e.target.result}" alt="img">`;
				filePrewiew1.classList.add("_active");
			};
			reader.onerror = function (e) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Ошибка";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
			};
			reader.readAsDataURL(file);
		}
	}
	if (formImageInput2) {
		let filePrewiewBoolean = filePrewiew2.firstElementChild.querySelector("a[data-fancybox]");
		if (Boolean(filePrewiewBoolean)) {
			filePrewiew2.classList.add("_active");
		}
		formImageInput2.addEventListener("change", () => {
			uploadFile2(formImageInput2.files[0]);
			setTimeout(() => {
				trueClassActiveInClassFilePrewiew1();
				trueClassActiveInClassFilePrewiew2();
			}, 100);
		});
		formPreviewBack2.addEventListener("click", formPreviewImgDelete2);
		function formPreviewImgDelete2() {
			formPreviewImg2.innerHTML = "";
			filePrewiew2.classList.remove("_active");
			setTimeout(() => {
				trueClassActiveInClassFilePrewiew1();
				trueClassActiveInClassFilePrewiew2();
			}, 100);
		}
		function uploadFile2(file) {
			// Проверяем тип файла
			if (!["image/jpeg", "image/png", "image/gif", "image/jpg", "image/webp", "image/gif"].includes(file.type)) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Разрешены толко изображения.";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
				formImageInput2.value = "";
				return;
			}
			// Проверим размер файла (< 2 mb)
			if (file.size > 8 * 4024 * 4024) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Файл должен быть менее 8 mb";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				formPreviewImg2.innerHTML = `<a href="${e.target.result}" data-fancybox="gallery_boss"><img src="${e.target.result}" alt="img">`;
				filePrewiew2.classList.add("_active");
			};
			reader.onerror = function (e) {
				alertMessege.classList.add("_sending");
				alertMessegeText.innerText = "Ошибка";
				setTimeout(() => {
					alertMessege.classList.remove("_sending");
					alertMessegeText.innerText = "";
				}, 2000);
			};
			reader.readAsDataURL(file);
		}
	}
	const popupChange = document.querySelector(".popup-change");
	function trueClassActiveInClassFilePrewiew1() {
		if (popupChange) {
			const trueClassActiveInClassFilePrewiew1 = document.getElementById("trueClassActiveInClassFilePrewiew1");
			if (trueClassActiveInClassFilePrewiew1) {
				if (filePrewiew1.classList.contains("_active")) {
					trueClassActiveInClassFilePrewiew1.value = "true";
				} else {
					trueClassActiveInClassFilePrewiew1.value = "false";
				}
			}
		}
	}
	trueClassActiveInClassFilePrewiew1();
	function trueClassActiveInClassFilePrewiew2() {
		if (popupChange) {
			const trueClassActiveInClassFilePrewiew2 = document.getElementById("trueClassActiveInClassFilePrewiew2");
			if (trueClassActiveInClassFilePrewiew2) {
				if (filePrewiew2.classList.contains("_active")) {
					trueClassActiveInClassFilePrewiew2.value = "true";
				} else {
					trueClassActiveInClassFilePrewiew2.value = "false";
				}
			}
		}
	}
	trueClassActiveInClassFilePrewiew2();
});
let inputValide = document.querySelectorAll('._inputValide');
function deleteNonLatin(text) {
	return text.replace(/[^A-Za-z 0-9 !@#$%^&*()_+-="|';:]/ig, '');
}
if (inputValide) {
	for (let index = 0; index < inputValide.length; index++) {
		const inputValides = inputValide[index];
		inputValides.addEventListener('input', (e) => {
			let cleanValue = deleteNonLatin(e.target.value);
			e.target.value = cleanValue;
		});
	}
}
let bossNoContent = document.querySelector("._boss__nocontent");
let bossColumn = document.querySelector(".boss__column");
if (bossNoContent) {
	if (!bossColumn) {
		bossNoContent.style.justifyContent = "center";
		bossNoContent.innerHTML = "<a href=\"admin-add.php\" style=\"max-width: 320px;\" class=\"allpages__block\"><div class=\"allpages__title\">Пока нету данных, ДОБАВИТЬ ЗАПИСЬ</div></a>";
	}
}

const popupButton = document.querySelectorAll(".popup__button");
const popup = document.querySelector(".popup");
const lockPaddings = document.querySelector(".back__icons");
if (popupButton.length > 0) {
	for (let index = 0; index < popupButton.length; index++) {
		const popupButtons = popupButton[index];
		popupButtons.addEventListener("click", function (e) {
			popup.classList.toggle("_active");
			bodyLocks();
		});
	};
}
function bodyLocks() {
   const lockPaddingValue = window.innerWidth - document.querySelector(".wrapper").offsetWidth + 'px';

   if (lockPaddings.length > 0) {
      for (let index = 0; index < lockPaddings.length; index++) {
         const el = lockPaddings[index];
         el.style.paddingRight = lockPaddingValue;
      }
   }  
   menuBodyLock.style.paddingRight = lockPaddingValue;
   menuBodyLock.classList.add('_lock');
}
const popupLinks = document.querySelectorAll('.popup-link');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout = 600;

if (popupLinks.length > 0) {
	for (let index = 0; index < popupLinks.length; index++) {
		const popupLink = popupLinks[index];
		popupLink.addEventListener("click", function (e) {
			const popupName = popupLink.getAttribute('href').replace('#', '');
			const curentPopup = document.getElementById(popupName);
			if (this.getAttribute("data-deleteormove")) {
				let idBossText = this.getAttribute("data-deleteormove");
				let formPasswordContentButtonDelete = document.querySelectorAll(".formPasswordContentButtonDelete");
				let formPasswordContentButtonMove = document.querySelectorAll(".formPasswordContentButtonMove");
				for (let index = 0; index < formPasswordContentButtonDelete.length; index++) {
					const formPasswordContentButtonDeletes = formPasswordContentButtonDelete[index];
					formPasswordContentButtonDeletes.addEventListener("click", function () {
						window.location = `vendor/delete.php?id=${idBossText}`;
					});
				}
				for (let index = 0; index < formPasswordContentButtonMove.length; index++) {
					const formPasswordContentButtonMoves = formPasswordContentButtonMove[index];
					formPasswordContentButtonMoves.addEventListener("click", function () {
						window.location = `vendor/move.php?id=${idBossText}`;
					});
				}
			}
			if (this.getAttribute("data-movedelete")) {
				let idBossText = this.getAttribute("data-movedelete");
				let formPasswordContentButtonDelete = document.querySelectorAll(".formPasswordContentButtonDelete");
				for (let index = 0; index < formPasswordContentButtonDelete.length; index++) {
					const formPasswordContentButtonDeletes = formPasswordContentButtonDelete[index];
					formPasswordContentButtonDeletes.addEventListener("click", function () {
						window.location = `vendor/movedelete.php?id=${idBossText}`;
					});
				}
			}
			if (this.getAttribute("data-deletepermanentlyormove")) {
				let idBossText = this.getAttribute("data-deletepermanentlyormove");
				let formPasswordContentButtonDelete = document.querySelectorAll(".formPasswordContentButtonDelete");
				let formPasswordContentButtonMove = document.querySelectorAll(".formPasswordContentButtonMove");
				for (let index = 0; index < formPasswordContentButtonDelete.length; index++) {
					const formPasswordContentButtonDeletes = formPasswordContentButtonDelete[index];
					formPasswordContentButtonDeletes.addEventListener("click", function () {
						window.location = `vendor/deletepermanently.php?id=${idBossText}`;
					});
				}
				for (let index = 0; index < formPasswordContentButtonMove.length; index++) {
					const formPasswordContentButtonMoves = formPasswordContentButtonMove[index];
					formPasswordContentButtonMoves.addEventListener("click", function () {
						window.location = `vendor/move.php?id=${idBossText}`;
					});
				}
			}
			popupOpen(curentPopup);
			e.preventDefault();
		});
 	}
}
const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
	for (let index = 0; index < popupCloseIcon.length; index++) {
		const el = popupCloseIcon[index];
		el.addEventListener("click", function (e) {
			popupClose(el.closest('.popup__info'));
			e.preventDefault();
		});
	}
}
	
function popupOpen(curentPopup) {
   if (curentPopup && unlock) {
      const popupActive = document.querySelector('.popup__info._active');
      if (popupActive) {
         popupClose(popupActive, false);
      } else {
         bodyLock();
      }
      curentPopup.classList.add('_active');
      curentPopup.addEventListener("click", function (e) {
         if (!e.target.closest('.popup__body')) {
            popupClose(e.target.closest('.popup__info'));
         } 
      });
   }
}
function popupClose(popupActive, doUnlock = true) {
   if (unlock){
      popupActive.classList.remove('_active');
      if (doUnlock) {
         bodyUnLock();
      }
   };
}

function bodyLock() {
   const lockPaddingValue = window.innerWidth - document.querySelector(".wrapper").offsetWidth + 'px';

   if (lockPadding.length > 0) {
      for (let index = 0; index < lockPadding.length; index++) {
         const el = lockPadding[index];
         el.style.paddingRight = lockPaddingValue;
      }
   }  
   body.style.paddingRight = lockPaddingValue;
   body.classList.add('_lock');

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

function bodyUnLock() {
   setTimeout(function () {
      if (lockPadding.length > 0) {
         for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = "0px";
         }
      }
      body.style.paddingRight = '0px';
      body.classList.remove('_lock');
   }, timeout);

   unlock = false;
   setTimeout(function () {
      unlock = true;
   }, timeout);
}

document.addEventListener("keydown", function (e) {
	const popupActive = document.querySelector('.popup__info._active');
	if (popupActive) {
		if (e.which === 27) {
			popupClose(popupActive);
	   	}
	}
});

(function () {
   // проверяет, поддержку
   if (!Element.prototype.closest) {
      // peализуем
      Element.prototype.closest = function (css) {
         var node = this;
         while (node) {
            if (node.matches (css)) return node;
            else node = node.parentElement;
         }
         return null;
      };
   }
})();
(function () {
   // проверяеме поддержку
   if (!Element.prototype.matches) {
      // определяем свойство
      Element.prototype.matches = Element.prototype.matchesSelector ||
         Element.prototype.webkitMatchesSelector ||
         Element.prototype.mozMatchesSelector ||
         Element.prototype.msMatchesSelector;
   }
})();
/* =============================================  Default  --End--  ============================================= */