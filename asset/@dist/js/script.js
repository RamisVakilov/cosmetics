window.onload = function () {

    let burger = document.querySelector('.burger');
	    burger_footer = document.querySelector('.burger-footer');
			let menu = document.querySelector('.burger__menu');
			let menu_footer = document.querySelector('.burger__menu-footer');
			//верхнее меню
			burger.onclick = function() {
			    burger.classList.toggle('burger_active');
				menu.classList.toggle('burger__menu_active');  
				burger_footer.classList.toggle('burger-footer_destroy'); 
				
 			}
			//нижнее меню
			burger_footer.onclick = function() {
				burger_footer.classList.toggle('burger_active');
				menu_footer.classList.toggle('burger__menu_active');
				burger.classList.toggle('burger_destroy'); 
				}
		}