$(document).ready(function (){
// var serverUrl = localStorage['serverUrl'];
    //alert(serverUrl);
  
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
				},
				error: function (error) {
					console.error(error)
					alert(error)
				}
			})
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
	$.ajax({
		method: 'post',
		url: ''+serverUrl+'dashboard/getallmodules?employeeID='+employeeID,
		success: function (data){
			console.log(data)
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
			
			var submenu =[];
			var html ='';
			// var width = window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth;
			// var height = window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight;

			function point(one){
				for (var i = 0; i < one.length; i++) {
                    
					if(one[i].hasChild == 0){

						html="";
							html+='<a href="#" title="events" data-toggle="modal" data-target="#modal_'+one[i].id+'">'+
							'<img src="'+iconUrl+one[i].module_keyword+'.png" ><span class="link-header">'+one[i].module_name+'<span></a>'; 
							$('#modals').append('<div class="modal" id="modal_'+one[i].id+'" data-backdrop="static" data-keyboard="false">'+
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
												'</div>');
							$('.tool-menu-bar').append(html);
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
						html+='<div id="accordion_'+one[i].id+'">'
						html+='<h3><img src="'+iconUrl+one[i].module_keyword+'.png" ><span class="link-header">'+one[i].module_name+'</span></h3>';
						html+='<div data-id="submenu_'+one[i].id+'"></div>'
						html+='<div>';
						$('.tool-menu-bar').append(html);
						$( "#accordion_"+one[i].id ).accordion({
					      	collapsible: true,
					      	active: false,
					      	animate: 50,
					      	classes: {
							    "ui-accordion": "tool-menu",
							    "ui-accordion-header": "tool-menu-header",
							    "ui-state-active": "tool-menu-header-active"
							  },
							beforeActivate: function( event, ui ){
								$('.tool-menu-bar').removeClass('close-menu');
								initHeight(0);// resize.js
								ui.newPanel.css({overflow: 'hidden', height: 'auto'})
							}
					    });
					    html="";
					    submenu.push(one[i].id);
					}
				}
			}
			point(one);
			html="";
			var submenuData=[]
			var loopCount = 0;
			while(data.length != 0  ) {
				loopCount++;
				for (var i = 0; i < submenu.length; i++) {
					var ids = [];
					for (var l = 0;l < data.length; ) { 
						if(data[l].pid == submenu[i] ) {
							if(data[l].hasChild == 0){
								html+='<a href="#"  data-toggle="modal" data-target="#modal_'+data[l].id+'">'+
								'<img src="'+iconUrl+data[l].module_keyword+'.png" ><span class="link-header">'+data[l].module_name+'</span></a>'; 
								$('#modals').append('<div class="modal" id="modal_'+data[l].id+'" data-backdrop="static" data-keyboard="false">'+
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
													'</div>');
								$('div[data-id=submenu_'+data[l].pid+']').append(html);
								html="";
								reloadModal('#modal_'+data[l].id, data[l])
								// var minWidth  =one[i].size.width/100*width
								// var minHeight  =one[i].size.height/100*height
								$('#modal_'+data[l].id + ' .modal-contents').resizable({
										// minWidth: minWidth,
										// minHeight: minHeight,
										classes: {
											"ui-widget-content": "resize-modal"
										}
									});
								var a = data.splice(l, l+1)[0];
							} else {
								html+='<div id="accordion_'+data[l].id+'">'
								html+='<h3><img src="'+iconUrl+data[l].module_keyword+'.png" ><span class="link-header">'+data[l].module_name+'</span></h3>';
								html+='<div data-id="submenu_'+data[l].id+'"></div>'
								html+='<div>';
								$('div[data-id=submenu_'+data[l].pid+']').append(html);
								$( "#accordion_"+data[l].id ).accordion({
							      	collapsible: true,
							      	active: false,
							      	animate: 50,
							      	classes: {
									    "ui-accordion": "tool-menu",
									    "ui-accordion-header": "tool-menu-header",
									    "ui-state-active": "tool-menu-header-active"
									  },
									beforeActivate: function( event, ui ) {
										$('.tool-menu-bar').removeClass('close-menu');
										initHeight(0);// resize.js
										ui.newPanel.css({overflow: 'hidden', height: 'auto'})
									}
							    });
							    html="";
							    submenu.push(data.splice(l, l+1)[0].id);
							}
							
						}
						break;
					}
				}
				$('.modal').draggable({
					start: function(event, ui) { 
						ui.helper.addClass('move'); 
						$('.ui-draggable').css('z-index', 2)
						$(this).css('z-index', 2000)
					},
					handle: ".modal-contents"
				});
				$('.ui-draggable').click(function(){
					$('.ui-draggable').css('z-index', 2)
					$(this).css('z-index', 2001)
				})
			}
			
		}
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

	
