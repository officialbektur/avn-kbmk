$(document).ready(function () { $('.form__search_input').hideseek({ highlight: true });});
let formButtonBack = document.querySelector(".form__search_back");
if (formButtonBack) {
	formButtonBack.addEventListener("click", function () {
		let formSearch = document.querySelector(".form__search_input"),
		allpagesBlock = document.querySelectorAll(".allpages__block");
		formSearch.value = null;
		for (let index = 0; index < allpagesBlock.length; index++) {
			let allpagesBlocks = allpagesBlock[index];
			allpagesBlocks.style.display = null;
		}
		$("mark.highlight").each(function () {
			$(this).replaceWith($(this).html());
		})
	});
}