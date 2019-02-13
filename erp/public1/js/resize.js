var width_window;
var height_window
function initHeight(id=false) {
	var top = 120
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
		// var width_menu = $('.tool-menu-bar').width();
		// width_menu+=40;
		var width_modal = width //- width_menu;
		if(id){
			$(id).css({'top': top + 'px','left': '0px' })
			$(id+' .modal-contents').css({'height': (height - top) +'px','width': width_modal+'px', padding: '10px 10px 40px'})
			$(id+' iframe').css({'height': (height - top) +'px','width': width_modal+'px'})
		} else {
			$('.modal').css({'top': '120px','left': '0px' })
			$('.modal .modal-contents').css({'height': (height - top) +'px','width': width_modal+'px', padding: '10px 10px 40px'})
			$('.modal iframe').css({'height': (height - top) +'px','width': width_modal+'px'})
		}
		
	}