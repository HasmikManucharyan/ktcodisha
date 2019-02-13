var width_window;
var height_window
function initHeight(id=false) {
		var width = window.innerWidth
		|| document.documentElement.clientWidth
		|| document.body.clientWidth;

		var height = window.innerHeight
		|| document.documentElement.clientHeight
		|| document.body.clientHeight;
		document.querySelector('.main-container').style.height = height+'px';
		if(width_window == width && height_window == height && id === false ) {
			return
		} else {
			width_window = width ;
			height_window = height;
		}
		// modals
		var width_menu = 0//$('.tool-menu-bar').width();
		// width_menu+=40;
		var width_modal = width  //- width_menu;
		if(id){
			$(id).css({'top': '120px','left': width_menu+'px' })
			$(id+' .modal-contents').css({'height': height - 120 +'px','width': width_modal+'px'})
		} else {
			$('.modal').css({'top': '120px','left': width_menu+'px' })
			$('.modal .modal-contents').css({'height': height - 120 +'px','width': width_modal+'px'})
		}
		
	}