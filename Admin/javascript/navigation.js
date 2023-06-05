//Declaring variabels
const btn_menu = document.querySelector(".btn-menu");
const nav_g = document.querySelector('nav');

        //function for when menu buttton is clicked
		btn_menu.addEventListener("click", function(){
			nav_g.classList.toggle("expand");
			changebtn();
		});

		function changebtn(){
			if(nav_g.classList.contains("expand")){
				btn_menu.classList.replace("bx-menu","bx-menu-alt-right")
			}
			else{
				btn_menu.classList.replace("bx-menu-alt-right","bx-menu")
			}
		}