$(document).ready(function (){
	var menu_linck_count = 0;
	var height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;
	var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
	var count = width/2/100 - 2
	count = Math.ceil(count)
	var scroll_count = count
	var scroll_index = 0

	var height_sub = 1;
	var count_sub = 0
	count_sub = Math.floor(count_sub)
	var scroll_count_sub = count_sub - 1
	var scroll_index_sub = 0
	var menu_linck_count_sub = 0;

	var menu_item_size = 100
	var sub_menu_item_size = 30
	var prevMenu = null;
	var prevMenu1 = null;
	var textShow = true;
	var mapShow = true;
	function selectModalData(id, url){
		$.ajax({
				beforeSend: function(){
				   $(id+' .refresh_modal').show()
				},
				complete: function(){
				    $(id+' .refresh_modal').hide()
				},
				url: url,
				success: function (result) {
					$(id+' .modal-dialog').html(result);
					initHeight(id); // resize.js
					$('.sub-menu').attr('style', '')
				},
				error: function (error) {
					// console.error(error)
					$('.sub-menu').attr('style', '')
				}
			})
	}
	function createModal(id){
		return '<div class="modal" id="modal_'+id+'" data-backdrop="static" data-keyboard="false">'+
					'<div class="refresh_modal" ></div>'+
					'<div class="modal-contents ui-widget-content">'+
						'<div class="close-block">'+
							'<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>'+
						'</div>'+
						'<div class="minimize-block">'+
							'<button type="button" class="minimize">_</button>'+
						'</div>'+
						'<div class="refresh-block">'+
							'<button type="button" class="refresh"></button>'+
						'</div>'+
						'<div class="modal-dialog">'+
						'</div>'+
					'</div>'+
				'</div>'
	}
	function reloadModal (id, modalData) {
		$(id).on("shown.bs.modal", function () {
			$('.ui-draggable').css('z-index', 2)
			$(this).css('z-index', 2000)
			$(this).attr({'data-icon':modalData.module_keyword,'data-name': modalData.module_name})
			selectModalData(id,modalData.module_url)
			
		})

		$(id).on("hide.bs.modal", function () {
			var min = $(' div[data-id='+$(this).attr('id')+']');
			$('#'+$(this).attr('id')).removeClass('modal-minimize')
			if(min && min.length != 0 ){
				min.remove();
				$(this).modal('show')
			} else {

			}
		})

		$(id+' .refresh').click(function(){
			selectModalData(id,modalData.module_url)

		})
	}
	function init_scroll() {
		menu_linck_count = $('.tool-menu-bar-child > ul > li').length;
		// var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
		
			if(menu_linck_count > count) {
				// $('.tool-menu-bar-scrol-0').show()
				// $('.tool-menu-bar-child > ul').css({ position: 'absolute'})
				// $('.tool-menu-bar-child').on('wheel',function(e){
					// if(e.originalEvent.deltaY > 0) {
					// 	scroll_next (e)
					// } else {
					// 	scroll_prev (e);
					// }
					// point_sroll_button()
					
				// })
				// var lastX;
				// $('.tool-menu-bar-child').bind('touchmove', function (e){
				     // var currentX = e.originalEvent.touches[0].clientX;
				     // if(currentX > lastX){
				     //  	scroll_prev (e);
				     // }else if(currentX < lastX){
				     //    scroll_next (e)
				     // }
				     // point_sroll_button()
				     // lastX = currentX;
				// });
				// point_sroll_button()
				$('.tool-menu-bar-child > ul > li').each(function(index,el){
					if(index > count){
						el.className = 'sub_menu_li'
						$('#sub_menu_items ul').append(el)
						
					}
				})
				$('.menu1 ').append('<button class="menu-more">...</button>')
				$(document).on('click', '.menu-more', function(){
					if(a){
					//if($('#sub_menu_items').hasClass('close_sub_menu')){
						//$('#sub_menu_items').removeClass('close_sub_menu')
						$('#sub_menu_items').hide(200)
						a=false
					} else {
						//$('#sub_menu_items').addClass('close_sub_menu')
						$('#sub_menu_items').show(200)
						a=true
					}
					$('.sub-menu').css({opacity:0})
				})
			} else {
				// $('.tool-menu-bar-scrol-0').hide()
			}
	}
	var a = false
	function show_item (){
		var index = Math.abs(scroll_index / menu_item_size)
		var condition =  menu_linck_count - count + Math.round(index)
		for(var r = Math.round(index); r <= condition+1 ; r++ ){
			$($('.tool-menu-bar-child > ul > li')[r]).css({visibility:'visible'})
		}
	}
	function menu_scrol_point_next (position) {
			$('.tool-menu-bar-child > ul').css({left: scroll_index})
			var index = Math.abs(scroll_index/menu_item_size)
	}
	function menu_scrol_point_prev (position) {
			$('.tool-menu-bar-child > ul').css({left: scroll_index})
			var index = Math.abs(scroll_index / menu_item_size)
	}
	function point_sroll_button () {
		var W = width/2 -(menu_linck_count - count) * menu_item_size
		W= W < 20 ? 20 : W
		$('.tool-menu-bar-scrol-button-0').css({width: W, left: Math.abs(scroll_index)+'px'} )

	}
	function scroll_prev () {
		if(scroll_index < 0) {
			scroll_index+=10
		} else {
			scroll_index = 0
		}
		menu_scrol_point_prev()
	}
	function scroll_next () {
		var abs_scroll_index = Math.abs(scroll_index)
		var control_next = menu_linck_count * menu_item_size - abs_scroll_index < width/2 
		if(control_next){
			scroll_index = scroll_index
		} else {
			scroll_index-=10 
		}
		menu_scrol_point_next()
	}

	function init_scroll_sub(obj_sub) {
		menu_linck_count_sub = obj_sub.children('.sub-menu-content').children('.link').length;
		height_sub = obj_sub.height()
		count_sub = height_sub/sub_menu_item_size - 1
		count_sub = Math.floor(count_sub)
		scroll_count_sub = count_sub 
		scroll_index_sub = 0

		if(menu_linck_count_sub > count_sub) {
			obj_sub.children('.tool-menu-bar-scrol').show()
			obj_sub.on('wheel', function(e){
				if(e.originalEvent.deltaY > 0) {
					scroll_next_sub (obj_sub)
				} else {
					scroll_prev_sub (obj_sub);
				}
				point_sroll_button_sub(obj_sub)
			})
			var lastY_sub;
			obj_sub.bind('touchmove', function (e){
			     var currentY = e.originalEvent.touches[0].clientY;
			     if(currentY > lastY_sub){
			      	scroll_prev_sub (obj_sub);
			     }else if(currentY < lastY_sub){
			        scroll_next_sub (obj_sub)
			     }
			     point_sroll_button_sub(obj_sub)
			     lastY_sub = currentY;
			});
			point_sroll_button_sub(obj_sub)
		} else {
			obj_sub.children('.tool-menu-bar-scrol').hide()
		}
	}
	function point_sroll_button_sub (obj_sub) {
		var h = height_sub-100-(menu_linck_count_sub - count_sub) * sub_menu_item_size
		h= h < sub_menu_item_size ? sub_menu_item_size : h
		obj_sub.children('.tool-menu-bar-scrol').children('.tool-menu-bar-scrol-button').css({height: h, top: Math.abs(scroll_index_sub)+'px'} )
	}
	function scroll_prev_sub (obj_sub) {
		if(scroll_index_sub < 0) {
			scroll_index_sub+=5
		} else {
			scroll_index_sub = 0
		}
		menu_scrol_point_prev_sub(obj_sub)
	}
	function scroll_next_sub (obj_sub) {
		var abs_scroll_index_sub = Math.abs(scroll_index_sub)
		var control_next_sub = menu_linck_count_sub * sub_menu_item_size - abs_scroll_index_sub < height_sub - 50
		if(control_next_sub){
			scroll_index_sub = scroll_index_sub
		} else {
			scroll_index_sub -= 10 
		}
		menu_scrol_point_next_sub(obj_sub)
	}
	function menu_scrol_point_next_sub (obj_sub) {
		obj_sub.children('.sub-menu-content').css({top: scroll_index_sub})
		var index_sub = Math.abs(scroll_index_sub/sub_menu_item_size)
	}
	function menu_scrol_point_prev_sub (obj_sub) {
		obj_sub.children('.sub-menu-content').css({top: scroll_index_sub})
		var index_sub = Math.abs(scroll_index_sub/sub_menu_item_size)
	}
	function init_menu_li_hover_event(e, obj){
		if($('div[data-id=submenu_'+obj.attr('data-id')+']').css('opacity') < 1) {
			var position = obj.position()
			var top_position = position.top+80  //+scroll_index
			// if(top_position + 500 > height){
			// 	top_position = top_position - $('div[data-id=submenu_'+obj.attr('data-id')+']').height()
			// 	top_position = top_position < 0? menu_item_size : top_position
			// }
			if(prevMenu1 && prevMenu1.length > 0) {
				prevMenu1.css({'opacity': 0, 'z-index':'-1'})
			}
			if(prevMenu && prevMenu.length > 0) prevMenu.css({'opacity': '0px', 'z-index':'-1'})
			$('div[data-id=submenu_'+obj.attr('data-id')+']').css({top: top_position, left: position.left+(width/4)+scroll_index, opacity: 1, 'z-index':2001})
			$('div[data-id=submenu_'+obj.attr('data-id')+'] .sub_menu_header').html(obj.children('.menu-slide').html())
			init_scroll_sub($('div[data-id=submenu_'+obj.attr('data-id')+']'))
			prevMenu1 = $('div[data-id=submenu_'+obj.attr('data-id')+']');
		}
	}
	function init_sub_menu_li_hover_event(e, obj){
		// console.log(obj.offset())
		var position = obj.offset()
		var top_position = position.top + scroll_index_sub
		var sub_menu_height = $('div[data-id=submenu_'+obj.attr('data-id')+']').height()
		if(top_position+sub_menu_height > height){
			top_position = top_position-sub_menu_height
			top_position = top_position < 0? 50 : top_position
		}
		var parent_position = obj.closest('.sub-menu').position()
		var posLeft =  width - parent_position.left < 300 ? parent_position.left - 203 : parent_position.left + 203
		if(prevMenu && prevMenu.length > 0) prevMenu.css({'opacity': '0px', 'z-index':'-1'})
		$('div[data-id=submenu_'+obj.attr('data-id')+']').css({top: top_position, left: posLeft, opacity:1, 'z-index':2002})
		$('div[data-id=submenu_'+obj.attr('data-id')+'] .sub_menu_header').html('<a><span>'+obj.children('div').children('h5').html()+'</span></a>')
		init_scroll_sub($('div[data-id=submenu_'+obj.attr('data-id')+']'))
		prevMenu = $('div[data-id=submenu_'+obj.attr('data-id')+']');
	}
	function init_more_menu_li_hover_event (e, obj){
		var position = obj.offset()
		var top_position = position.top + scroll_index_sub
		var sub_menu_height = $('div[data-id=submenu_'+obj.attr('data-id')+']').height()
		if(top_position+sub_menu_height > height){
			top_position = top_position-sub_menu_height
			top_position = top_position < 0? 50 : top_position
		}
		var parent_position = obj.closest('#sub_menu_items').position()
		var posLeft =  width - parent_position.left < 300 ? parent_position.left - 203 : parent_position.left + 203
		if(prevMenu1 && prevMenu1.length > 0) prevMenu1.css({'opacity': '0px', 'z-index':'-1'})
			$('.sub-menu').css({'opacity': '0px', 'z-index':'-1'})
		$('div[data-id=submenu_'+obj.attr('data-id')+']').css({top: top_position, left: posLeft, opacity:1, 'z-index':2002})
		$('div[data-id=submenu_'+obj.attr('data-id')+'] .sub_menu_header').html('<a><span>'+obj.children('div').children('h5').html()+'</span></a>')
		init_scroll_sub($('div[data-id=submenu_'+obj.attr('data-id')+']'))
		prevMenu1 = $('div[data-id=submenu_'+obj.attr('data-id')+']');
	}
	function init_menu_li_hover() {
		$('.tool-menu-bar-child > ul > li').on('mouseover', function (e) {
			var obj = $(this)
			if($(this).parent('li').length > 0){
				obj = $(this).parent('li')
			}
			a = true
			$('.menu-more').click()
			init_menu_li_hover_event(e, obj)
		})
		$('#sub_menu_items > ul > li').on('mouseover', function (e) {
			var obj = $(this)
			if($(this).parent('li').length > 0){
				obj = $(this).parent('li')
			}
			init_more_menu_li_hover_event(e, obj)
		})
		$('.sub-menu-block').on('mouseover', function (e) {
			var obj = $(this)
			if($(this).parent('li').length > 0){
				obj = $(this).parent('li')
			}
			init_sub_menu_li_hover_event(e, obj)
		})
		$('.tool-menu-bar-child > ul > li').on('touchstart', function (e) {
			init_menu_li_hover_event(e, $(this))
		})
		$('#sub_menu_items > ul > li').on('touchstart', function (e) {
			init_more_menu_li_hover_event(e, $(this))
		})
		$('.sub-menu-block').on('touchstart', function (e) {
			init_sub_menu_li_hover_event(e, $(this))
		})
	}
	$.ajax({
		method: 'post',
		url: ''+serverUrl+'dashboard/getallmodules?employeeID='+employeeID,
		success: function (data){
			// console.log(data)
			var one=[];
			var id_data_menu = [];
			for (var i = 0; i < data.length; i++) {
				if(Number(data[i].pid) === 0 ){
					id_data_menu.push(data[i].id);
					one.push(data.slice(i, i+1)[0]);
				} 
			}
			
			for (var l = 0; l < id_data_menu.length; l++) {
				for (var i = 0; i < data.length; i++) {
					if(data[i].id == id_data_menu[l] ) {
						data.splice(i, i+1);
					}
				}
			}

			// console.log(one)
			var submenu =[];
			var html ='';
			// var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
			// var height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;

			function point(one){
				html="";
				var ul = document.createElement("ul")
				for (var i = 0; i < one.length; i++) {
					if(one[i].hasChild == 0){
							$(ul).append('<li  data-id="'+one[i].id+'">'+
											'<div ><img src="'+one[i].module_keyword+'" /></div>'+
											'<div class="menu-slide">'+
												'<a href="#" title="events" data-toggle="modal" data-target="#modal_' + one[i].id + '">'+
													'<span>'+one[i].module_name+'</span>'+
												'</a>'+
											'</div>'+
										'</li>');

							$('#modals').append(createModal(one[i].id));
							$('.tool-menu-bar-child').append($(ul));
							html="";
							reloadModal('#modal_'+one[i].id, one[i]);
							// var minWidth  =one[i].size.width/100*width
							// var minHeight  =one[i].size.height/100*height
			
							$('#modal_'+one[i].id+' .modal-contents').resizable({
								// minWidth: minWidth,
								// minHeight: minHeight,
								classes: {
									"ui-widget-content": "resize-modal"
								}
							});
					} else {
						html="";
						$(ul).append('<li  data-id="'+one[i].id+'">'+
							'<div ><img src="'+one[i].module_keyword+'" /></div>'+
								'<div class="menu-slide">'+
									'<a href="#" title="events" data-toggle="modal" data-target="#modal_'+one[i].id+'">'+
										'<span>'+one[i].module_name+'</span>'+
									'</a>'+
								'</div>'+
							'</li>');
						$('.tool-menu-bar-child').append(html);
						$('#all-sub-menu').append('<div class="sub-menu" data-id="submenu_'+one[i].id+'">'+
										'<div class="sub_menu_header"></div>'+
										'<div class="tool-menu-bar-scrol tool-menu-bar-scrol-'+one[i].id+'">'+
											'<div class="tool-menu-bar-scrol-button tool-menu-bar-scrol-button-'+one[i].id+'">'+
											'</div>'+
										'</div>'+
										'<div  class="sub-menu-content">'+
										'</div>'+
									'</div>')
					    html="";
					    submenu.push(one[i].id);
					}
				}
			}
			point(one);

			// var minWidth  =one[i].size.width/100*width
			// var minHeight  =one[i].size.height/100*height

			html="";
			var submenuData=[]
			var loopCount = 0;
			
			while(data.length != 0  ) {
				loopCount++;
				for (var i = 0; i < submenu.length; i++) {
					var divs = document.createElement("div")
					divs.className = "link"
					var ids = [];
					for (var l = 0;l < data.length; ) { 
						if(data[l].pid == submenu[i] ) {
							if(data[l].hasChild == 0){
								$(divs).append(//'<li class="first-li">' +
										'<a href="#" title="events" data-toggle="modal" data-target="#modal_'+data[l].id+'">'+
											'<img src="'+data[l].module_keyword+'" />'+
											'<h5>'+data[l].module_name+'</h5>'+
										'</a>'
									//'</li>'
									);
								$('#modals').append(createModal(data[l].id));
								$('div[data-id=submenu_'+data[l].pid+'] .sub-menu-content').append($(divs));
								reloadModal('#modal_'+data[l].id, data[l])
								$('#modal_'+data[l].id + ' .modal-contents').resizable({
										// minWidth: minWidth,
										// minHeight: minHeight,
										classes: {
											"ui-widget-content": "resize-modal"
										}
									});
								var a = data.splice(l, l+1)[0];
							} else {
								divs.setAttribute('data-id', data[l].id)
								divs.className = 'sub-menu-block'
								$(divs).append(
										'<div >'+
											'<img src="'+data[l].module_keyword+'" />'+
											'<h5>'+data[l].module_name+'</h5>'+
										'</div>');
							    submenu.push(data.splice(l, l+1)[0].id);
							    $('div[data-id=submenu_'+data[l].pid+'] .sub-menu-content').append($(divs)) ;
							    $('#all-sub-menu').append('<div class="sub-menu" data-id="submenu_'+data[l].id+'">'+
							    	'<div class="sub_menu_header"></div>'+
								    	'<div class="tool-menu-bar-scrol tool-menu-bar-scrol-'+data[l].id+'">'+
											'<div class="tool-menu-bar-scrol-button tool-menu-bar-scrol-button-'+data[l].id+'">'+
											'</div>'+
										'</div>'+
										'<div  class="sub-menu-content">'+
										'</div>'+
									'</div>')
							}
						}
						break;
					}
				}
				
				
			}
			$('.ui-draggable').click(function(){
					$('.ui-draggable').css('z-index', 2)
					$(this).css('z-index', 2001)
				})
			$('.modal').draggable({
				start: function(event, ui) { 
					ui.helper.addClass('move'); 
					$('.ui-draggable').css('z-index', 2)
					$(this).css('z-index', 2000)
				},
				handle: ".modal-contents"
			});
			init_scroll();
			init_menu_li_hover()
		}
	})
	var menu = true
	$('.open-close').click(function (){
		if(menu){
			$('.menu1').css({'height': '50px', 'overflow': 'hidden'})
			$(this).addClass('close-button')
			menu = false;
		} else {
			$(this).removeClass('close-button')
			$('.menu1').css({'height': '100%', 'overflow': 'unset'})
			menu = true;
		}
		$('.sub-menu').attr('style', '')
	})
	$('#map').on('click', function(){
		$('.sub-menu').attr('style', '')
		a = true
		$('.menu-more').click()
	})
	
	$('.text-show').on('click', function(){
			$('.textcontent').addClass('show')
			$('.map-block').removeClass('min')
			$('.textcontent').removeClass('show-text-map')
	})
	$('.map-show').on('click', function(){
			$('.textcontent').removeClass('show-text-map')
			$('.map-block').removeClass('min')
		$('.textcontent').removeClass('show')
	})
	$('.map-text-show').on('click', function(){
		$('.textcontent').addClass('show-text-map')
		$('.map-block').addClass('min')
		$('.textcontent').removeClass('show')
	})
	$(document).on('click', '.text-show, .map-show, .map-text-show', function(){
		$('.sub-menu').attr('style', '')
	})
})

/*
there is Parent_ID and haschild

if Parent_id = 0 , that means they are top links

if haschild = 0 that means it has no sub items , if haschild=1 that means the the item has sub items
id denotes the "item id"

module_url decides if there is a link which would open in modal box

if its null , that means its a main item with sub links...

the sub links would have module_url to decide which link content loads into modal_box

module_name is the TITLE of the Link as well as modal TITLE
*/

	
