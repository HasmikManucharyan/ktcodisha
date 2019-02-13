$(document).ready(function (){
	$(document).on('click','.minimize', function(){
		$(this).closest('.modal').addClass('modal-minimize')
		var id = $(this).closest('.modal').attr('id');
		var icon = $(this).closest('.modal').attr('data-icon')
		var name = $(this).closest('.modal').attr('data-name')
		var min = $('<div data-id="" ><img src="'+icon+'"/><h3>'+name+'</h3></div>');
		var width_menu=0
			min.attr('data-id', id)
			.click(function () {
				if($('#sub_menu_items').css('display') == 'block') {
					$('.menu-more').click()
				}
				if(!$('.detals-modal').hasClass('close-modal')) {
					$('.close-detals').click()
				}
				var modalId = $(this).attr('data-id');
				var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
				var height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;
				// var width_menu = $('.tool-menu-bar').width()
				var width_modal = width // - width_menu;
				$('.modal').css({'z-index': '1200'})
				$('#'+modalId).css({'top': '120px','left': width_menu+'px', 'z-index': '2000' })
				$('#'+modalId+' .modal-contents').css({'height':height - 120 +'px','width': width_modal})
				$('#'+modalId).removeClass('modal-minimize');
				$(this).remove()
			})
			$('.modal-min').append(min)
	})
	$(document).on('click','.maximize', function(){
		$(this).closest('.modal').addClass('modal-minimize')
	})
})