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
	if (e.which === 27) {
	   const popupActive = document.querySelector('.popup__info._active');
		popupClose(popupActive);
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