$(document).ready(function() {
	var event_table;
	//Prevent Page Reload on all # links
	$("a[href='#']").click(function(e) {
		e.preventDefault();
	});

	//placeholder
	$("[placeholder]").each(function () {
		$(this).attr("data-placeholder", this.placeholder);

		$(this).bind("focus", function () {
			this.placeholder = '';
		});
		$(this).bind("blur", function () {
			this.placeholder = $(this).attr("data-placeholder");
		});
	});


	$(".header .dropdown .dropdown-menu li").click(function(event){
		event.stopImmediatePropagation();
	});




	$('.modal').draggable({
		start: function(event, ui) { ui.helper.addClass('move'); },
		handle: ".modal-contents"
	});

	$(".modal").click(function(){
		$(this).addClass('move').siblings().removeClass('move');
		
	});

	$(".modal").on("shown.bs.modal", function () {
		$(this).addClass('move');
		var eTop = $(this).prev().offset().top;
		var eTopp = eTop + 50;
		if ($(".modal-backdrop").length > 1) {
			$(this).css('top', eTopp);
			$(".modal-backdrop").not(':first').remove();
		}
	});

	$('button.navbar-toggle').click(function(){
		$('.tool-menu-bar').removeClass('close-menu');
		$(this).hide();
		$('.tool-menu-bar .close').show();
	})
	$(document).on('click','.tool-menu-bar .close',function(){
		$('.ui-accordion.tool-menu').accordion({
					      	active: false
					      })
		$('.tool-menu-bar').addClass('close-menu');
		$(this).hide();
		$('button.navbar-toggle').show();
	})
	initHeight(); // resize.js
	$(window).resize(function(e) {
		initHeight();
	})
});

