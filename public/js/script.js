var map,
	recorderMode = false,
    ButtonMode = false,
	polygon = false,
	actMarkerId = false;
$(document).ready(function() {

	var markerAutoincrement = 0;

	/*	Map initialisieren	*/
	map = new GMaps({
		div: '#map',
		lat: mapCenterLat,
		lng: mapCenterLng,
		click: function(e) {
			if (recorderMode) {
				//&& polygon == false
				var markerId = genMarkerId(),
					lat = e.latLng.lat(),
					lng = e.latLng.lng();
				map.addMarker({
					id: markerId,
					lat: lat,
					lng: lng,
					icon: pinImage,
					shadow: pinShadow,
					draggable: true,
					dragstart: function(e) {
					//	if (polygon != false) {
							polygon.setMap(null);
					//	}
					},
					dragend: function(e) {
						markerUpdatePosition(this.id);
						markerControl(this.id);
					//	if (polygon != false) {
							draw();
					//	}
					},
					click: function(e) {
						markerControl(this.id);
                      
					}
				});
				addMarkerInfo(markerId);
                 ButtonMode=false;
                setRecorderMode(false);
                        //alert(ButtonMode);
			}
		}
	});
	map.setOptions({gestureHandling: 'greedy'});

	setdrawmode = function() {
		clearMap();
		$('.draw-mode').show();
		$('.Manage-mode').hide();
		$('#mode-draw').removeClass('btn-default').addClass('btn-info');
		$('#mode-manage').addClass('btn-default').removeClass('btn-info');
		$('#panel-polygon-details').addClass("sr-only").removeClass('animated fadeInDown');
		polygon = false;
	}

	setManagemode = function() {
		clearMap();
		$('.draw-mode').hide();
		$('.Manage-mode').show();
		$('#modus-manage').removeClass('btn-default').addClass('btn-info');
		$('#modus-draw').addClass('btn-default').removeClass('btn-info');
		$('#polygone').load('polygon');
		$('#marker-info .panel-element').remove();
		$('#panel-save').addClass('sr-only').removeClass('animated flipInX');
		$('#panel-marker-edit').addClass('sr-only').removeClass('animated flipInX');
		$('#marker-info i.hinweis1').show();
		$('#marker-info i.hinweis2').addClass('sr-only').removeClass('animated flipInX');
		polygon = true;
	}

	addMarkerInfo = function(id) {
		var lat = false,
			lng, html, el;
		el = getMarker(id)[0];
		lat = el.position.lat();
		lng = el.position.lng();
		html = '<div class="panel-element" data-id="' + id + '"><span class="marker-title">Marker #' + id + '</span><span class="marker-lat">lat: <span class="latlng" data-id="lat">' + lat + '</span></span><span class="marker-lng">lng: <span class="latlng" data-id="lng">' + lng + '</span></span></div>';
		$('#marker-info').append(html);
	}

	clearMap = function() {
		map.removePolygons();
		map.removeMarkers();
	}

	deleteMarker = function(id) {
		/* Marker-Informationen pick up */
		var el = getMarker(id)[0],
			key = getMarker(id)[1];

		/*	Marker Erase	*/
		map.markers[key].setMap(null);
		map.markers.splice(key, 1);
		$('#marker-info .panel-element[data-id="' + id + '"]').remove();

		/* 'Edit Marker 'panel */
		$('#marker-form').html('<i>To edit a marker, select the appropriate marker on the map.</i>');

		/* Polygon redraw if it is already displayed */
		if (polygon) {
			polygon.setMap(null);
			if (map.markers.length > 3) {
				draw();
			} else {
				$('#panel-save').addClass('sr-only').removeClass('animated flipInX');
			}
		}
		if (map.markers.length < 3) {
			$('#todraw').attr('disabled', 'disabled');
		}
	}

	deletePolygon = function(id) {
		/*	Remove the polygon from the card	*/
		clearMap();
		/*	Remove the polygon from the panel*/
		$('#polygone .panel-element[data-id="' + id + '"]').remove();
		/*	Polygon Remove from DB	*/
		$.ajax({
			url: "deletePolygon",														//changed file path
			data: {
				id: id
			}
		})
			.done(function(data) {
				var html;
				if(data == 'success'){
					html = '<div class="alert alert-success">Polygon Was successfully removed!<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a></div>';
				}
				else{
					html = '<div class="alert alert-error">Polygon has been <b>Not</b> Successfully removed!<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a></div>';					
				}
				$('#msg').append(html);
			});
		/* Polygon Details Change the contents of the panel */
		$('#panel-polygon-details .panel-body').html('<i>Click on a polygon for more information</i>');
	}

	getMarker = function(id) {
		var el = false,
			key;
		$.each(map.markers, function(k, v) {
			if (typeof v != 'undefined') {
				v.setIcon(pinImage);
				if (v.id == id) {
					el = v;
					key = k;
				}
			}
		});
		if (!el) {
			//alert('Markernummer ' + id + ' is not present!');
			return false;
		}
		/* return array(Marker Element,map.markers Array key) */
		return [el, key];
	}


	setMarkerIcon = function(id, icon) {
		var el = getMarker(id)[0];
		el.setIcon(icon);
	}

	markerControl = function(id) {
		/*	Marker-Informationen pick up	*/
		var el = getMarker(id)[0];

		/* Panel-Content(HTML) to generate */
		var markerInfo = '';
		markerInfo += 'Marker #' + id + ' selected<br />';
		markerInfo += '<form class="form-horizontal" role="form"><div class="form-group"><label class="col-lg-2 control-label">lat</label><div class="col-lg-10">';
		markerInfo += '<input type="text" class="form-control" name="lat" placeholder="lat" data-id="' + el.id + '" value="' + el.position.lat() + '">';
		markerInfo += '</div></div><div class="form-group"><label class="col-lg-2 control-label">lng</label><div class="col-lg-10">';
		markerInfo += '<input type="text" class="form-control" name="lng" placeholder="lng" data-id="' + el.id + '" value="' + el.position.lng() + '">';
		markerInfo += '</div></div><div class="form-group"><div class="col-lg-offset-2 col-lg-10">';
		markerInfo += '<button type="button" class="btn btn-danger delete-marker" id="' + el.id + '">Delete this marker</button><br />'; // delete Marker
		markerInfo += '</div></div></form>';

		/* Edit Markers panel*/
		$('#marker-form').html(markerInfo);
		$('#panel-marker-edit').removeClass("sr-only").addClass('animated fadeInDown');

		/* Mark this marker as active */
		actMarkerId = id;
		setMarkerIcon(id, pinImage_active);
	}

	genMarkerId = function() {
		markerAutoincrement++;

		if (markerAutoincrement > 2) {
			$('#todraw').removeAttr('disabled');
		}else{
			$('#todraw').attr('disabled', 'disabled');
		}
		return markerAutoincrement;
	}

	markerUpdatePosition = function(id) {
		var el = getMarker(id)[0],
			lat = el.position.lat(),
			lng = el.position.lng();
		/* Input Update fields	*/
		if (actMarkerId == id) {
			$('#marker-form input[name="lat"]').val(lat);
			$('#marker-form input[name="lng"]').val(lng);
		}

		/*	Info's im Marker-Panel updaten */
		$('#marker-info .panel-element span[data-id="lat"]').html(lat);
		$('#marker-info .panel-element span[data-id="lng"]').html(lng);
	}

	setRecorderMode = function(toggle) {
		recorderMode = toggle;
		if (toggle) {
			$('p[data-element="recorderMode"] span').addClass('icon-on');
            //setButtonMode(true);
		} else {
			$('p[data-element="recorderMode"] span').removeClass('icon-on');
             //setButtonMode(false);
		}
	}
    
    setButtonMode = function(toggle) {
        //clearMap();
        //ButtonMode=toggle;
        //alert(ButtonMode);
		//setRecorderMode(true);
		if (toggle) {
            ButtonMode=true;
			$('p[data-element="ButtonMode"] span').addClass('icon-on');
		} else {
           ButtonMode=false;
			$('p[data-element="ButtonMode"] span').removeClass('icon-on');
		}
	}
    
	loadPolygon = function(mid,id,nid,did) {
		$('#marker-info').html("");
		markerAutoincrement=0;
		$.ajax({
			url: 'coords',
			data: {
				id: mid
			},
		})
			.done(function(data) {
				data = jQuery.parseJSON(data);
				/* Remove all markers and polygons from the map */
				clearMap();
                 // alert(data);
				/* Edit coordinates */
				var paths = new Array(),
					mapCenter = new Array(0, 0),
					counter = 0;
				$.each(data, function(k, v) {
					if (typeof v != 'undefined') {
						paths.push(v);
						//alert(v);
						mapCenter[0] += v[0];
						mapCenter[1] += v[1];
						/*	Marker Add */
						if(!recorderMode){
						// map.addMarker({
						// 	lat: v[0],
						// 	lng: v[1],
						// 	icon: pinImage,
						// 	shadow: pinShadow
						// });
						}else {
						var markerId = genMarkerId(),
					lat = v[0],
					lng = v[1];
				map.addMarker({
					id: markerId,
					lat: lat,
					lng: lng,
					icon: pinImage,
					shadow: pinShadow,
					draggable: true,
					dragstart: function(e) {
						//if (recorderMode ) {
							polygon.setMap(null);
						//}
					},
					dragend: function(e) {
						markerUpdatePosition(this.id);
						markerControl(this.id);
						//if (recorderMode ) {
							draw();
						//}
					},
					click: function(e) {
						markerControl(this.id);
					}
				});
				addMarkerInfo(markerId);

			}	
						counter++;
					}
				});
			
				mapCenter[0] = mapCenter[0] / counter;
				mapCenter[1] = mapCenter[1] / counter;

				map.setCenter(mapCenter[0], mapCenter[1]);
				//alert(paths +"   "+ mapCenter[0] +"   "+ mapCenter[1]);
				/* Polygon Add */
				polygon = map.drawPolygon({
					paths: paths,
					strokeColor: polygonStrokeColor,
					strokeOpacity: 1,
					strokeWeight: 1,
					fillColor: polygonFillColor,
					fillOpacity: 0.6
				});
				var form = $('#panel-save form');
				form.find('[name="name"]').val(nid);
				form.find('[name="description"]').val(did);
				form.find('[name="gid"]').val(id);
				/* Informationen To the polygon */
				var html = 'description: <b>' + $('#polygone .panel-element[data-id="' + id + '"] .poly-description').html() + '</b><br /><button class="btn btn-danger delete-poylgon" id="' + id + '">Remove this polygon</button>';
				$('#panel-polygon-details .panel-body').html(html);
				$('#panel-polygon-details').removeClass("sr-only").addClass('animated fadeInDown');
			});

	}

	draw = function() {
		/*	Store all the coordinates in array arr */
		var arr = new Array();
		$.each(map.markers, function(k, v) {
			if (typeof v != 'undefined') {
				el = map.markers[k];
				var latLng = new Array(el.position.lat(), el.position.lng());
				arr.push(latLng);
			}
		});

		/*	Remove already selected polygons	*/
		map.removePolygons();

		/*	Polygon to draw */
		polygon = map.drawPolygon({
			paths: arr,
			strokeColor: polygonStrokeColor,
			strokeOpacity: 1,
			strokeWeight: 1,
			fillColor: polygonFillColor,
			fillOpacity: 0.6
		});

		/*	Customize panel info	*/
		$('#marker-info i.hinweis1').hide();
		$('#marker-info i.hinweis2').removeClass('sr-only').addClass('animated flipInX');
		$('#panel-save').removeClass('sr-only').addClass('animated flipInX');
	}

	save = function() {
		var form = $('#panel-save form'),
		    id = form.find('[name="gid"]').val(),
			name = form.find('[name="name"]').val(),
            description = form.find('[name="description"]').val(),
			typ = form.find('[name="typ"]:checked').val(),
			markers = Array(),
			temp;
           alert(id);
           alert(name);
           alert(typ);

		/*	Prepare the coordinates for sending	*/
		$.each(map.markers, function(k, v) {
			if (typeof v != 'undefined') {
				temp = new Array(map.markers[k].position.lat(), map.markers[k].position.lng());
				markers.push(temp.join(','));
			}
		});
		markers = markers.join('|');
		//alert("type id ="+id);
        if(id==0){
		$.ajax({
			type: "POST",
			url: "save",
			data: {
				name: name,
				description: description,
				typ: typ,
				coords: markers
			}
		})
			.done(function(data) {
				//data = jQuery.parseJSON(data);
				//alert(data);
				var html = '<div class="alert alert-success">Polygon has been successfully saved!'+data +'<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a></div>';
				$('#msg').append(html);
				setManagemode();
				location.reload();
			});

		}else{

			$.ajax({
				type: "POST",
				url: "editPolygon",
				data: {
					id :id,
					name: name,
					description: description,
					typ: typ,
					coords: markers
				}
			})
				.done(function(data) {
					//data = jQuery.parseJSON(data);
					//alert(data);
					var html = '<div class="alert alert-success">Polygon has been successfully Updated!'+data +'<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a></div>';
					$('#msg').append(html);
					setManagemode();
					location.reload();
				});


		}

		return false;
	}

	/*	Eventlistener on key input	*/
	$('html').keydown(function(e) {
		if (e.keyCode == keyCode && ButtonMode == true) {
			setRecorderMode(true);
            //setButtonMode(true);
		}
	});
	$('html').keyup(function(e) {
		if (e.keyCode == keyCode && ButtonMode == false) {
			setRecorderMode(false);
            //setButtonMode(false);
            
		}
	});

	$('#marker-form').on('keyup', 'input', function(e) {
		var el = $(this),
			val = el.val(),
			type = el.attr('name'),
			markerId = el.attr('data-id'),
			marker = false,
			lat, lng;
		marker = getMarker(markerId)[0];

		lat = parseFloat($('#marker-form input[name="lat"]').val());
		lng = parseFloat($('#marker-form input[name="lng"]').val());
		marker.setPosition(new google.maps.LatLng(lat, lng));
		if (polygon) {
			draw();
		}
		markerUpdatePosition(markerId);
	});

	/*	Events */
	$('#panel-marker-edit').on('click', '.delete-marker', function() {
		$('#delete-marker').attr('data-id',$(this).attr('id'));
		$('#delete-marker').removeClass('sr-only').addClass('animated flipInX');
	});
	$('#panel-polygon-details').on('click', '.delete-poylgon', function() {
		$('#delete-polygon').attr('data-id',$(this).attr('id'));
		$('#delete-polygon').removeClass('sr-only').addClass('animated flipInX');
	});
	$('#button-delete-marker').click(function(){
		deleteMarker($('#delete-marker').attr('data-id'));
		$('#delete-marker').addClass('sr-only').removeClass('animated flipInX');
	});
	$('#button-delete-polygon').click(function(){
		deletePolygon($('#delete-polygon').attr('data-id'));
		//alert($('#delete-polygon').attr('data-id'));
		$('#delete-polygon').addClass('sr-only').removeClass('animated flipInX');
	});
	$('.dismiss-alert').click(function(){
		$(this).parent().removeClass('flipInX').addClass('sr-only');
	});
	$('#todraw').click(function() {
		draw();
		//$('#panel-menu').hide();
	});
	$('#marker-info').on('click', '.panel-element', function() {
		markerControl($(this).attr('data-id'));
	});
	$('#marker-info').on('mouseover', '.panel-element', function() {
		setMarkerIcon($(this).attr('data-id'), pinImage_active);
	});
	$('#marker-info').on('mouseout', '.panel-element', function() {
		if (actMarkerId != $(this).attr('data-id')) {
			setMarkerIcon($(this).attr('data-id'), pinImage);
		}
		if(actMarkerId){
			setMarkerIcon(actMarkerId, pinImage_active);
		}
	});
	$('#panel-save').on('click', '#panel-save-button', function() {
		save();
	});

	$('#panel-save').on('click', '#panel-save-cancel', function() {
		setManagemode();
		e.stopPropagation();
	});
	
	$('#modus-manage').click(function(e) {
		$('#marker-info').html("");
		markerAutoincrement=0;
		setManagemode();
		e.stopPropagation();
	});
	$('#modus-draw').click(function(e) {
		setdrawmode();
		e.stopPropagation();
	});
	$('#panel-polygon-overview').on('click', '.panel-element', function() {
		recorderMode=false;
		
		loadPolygon($(this).attr('data-mid'),0,"","");
	});

	$('#panel-polygon-overview').on('click', '.panel-element-edit', function() {
		recorderMode=true;
		loadPolygon($(this).attr('data-mid'),$(this).attr('data-id'),$(this).attr('data-nid'),$(this).attr('data-did'));
	});
//    $('#map').click(function(e) {
//       
//        if(ButtonMode == false){
//            setRecorderMode(true);
//             ButtonMode = true;
//        }
//          
////        }else{
////            setRecorderMode(false); 
////            ButtonMode = false;
////        }
//		//setRecorderMode(true);
//       // setButtonMode(true);
//	});
var startTime, endTime;  
  $("#map").on('mousedown', function () {      
  startTime = new Date().getTime();      
 // alert(startTime);  
 });
   $("#map").on('mouseup', function () {    
    endTime = new Date().getTime();      
  longpress = (endTime - startTime < 500) ? false : true;  
      if(longpress){    if(ButtonMode == false){  
  setRecorderMode(true);    
 ButtonMode = true;    }   }     }); 
	$("[data-toggle='tooltip']").tooltip();
});
