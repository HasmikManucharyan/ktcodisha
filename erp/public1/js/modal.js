$(document).ready(function (){
	var top = 120;
	$(document).on('click','.minimize', function(){
		$(this).closest('.modal').addClass('modal-minimize')
		var id = $(this).closest('.modal').attr('id');
		var icon = $(this).closest('.modal').attr('data-icon')
		var name = $(this).closest('.modal').attr('data-name')
		var min = $('<div data-id="" ><img src="'+iconUrl+icon+'.png"/><h3>'+name+'</h3></div>');
			min.attr('data-id', id)
			.click(function () {
				var modalId = $(this).attr('data-id');
				var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
				var height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;
				// var width_menu = $('.tool-menu-bar').width()
				// width_menu+=40
				var width_modal = width //- width_menu;
				$('.modal').css({'z-index': '1200'})
				$('#'+modalId).css({'top': top + 'px','left': '0px', 'z-index': '2000' })
				$('#'+modalId+' .modal-contents').css({'height':height - top +'px','width': width_modal, padding: '10px 10px 40px'})
				$('#'+modalId).removeClass('modal-minimize');
				$(this).remove()
			})
			$('.modal-min').append(min)
	})
	$(document).on('click','.maximize', function(){
		$(this).closest('.modal').addClass('modal-minimize')
	})
})