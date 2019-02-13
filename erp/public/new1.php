<?php
//define('URL', 'http://www.ktcodisha.com/erp/');	
define('URL', 'http://localhost/erp/');	
 ?>
<link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/animate.min.css" rel="stylesheet">
		<link href="<?php echo URL; ?>public/css/style1.css" rel="stylesheet">
         <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" />
           <link href="<?php echo URL; ?>public/css/jquery.dataTables.min.css" rel="stylesheet">
           <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
		<!-- JS -->
		<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>

		<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.dataTables.min.js"></script>
	  	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyDvoRDqzE5AutQBzNBrYna6c0e3FyJPJ1g&country=IN"></script>
		 <script src="<?php echo URL; ?>public/js/gmaps.js"></script>
        <script src="<?php echo URL; ?>public/js/markerwithlabel.js"></script>
		<script src="<?php echo URL; ?>public/js/fancywebsocket.js"></script>
		<script src="<?php echo URL; ?>public/js/markerclusterer.js"></script>
	<style type="text/css">
    .labelsSite {
     color: black;
     font-family: "Arial";
     font-size: 12px;
	 margin: 2px;
	  text-shadow: 2px 2px #fff;
     text-align: left;
     white-space: nowrap;
	
   }
   .labelsGreen {
     color: white;
     background-color: white;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 10px;
     text-align: center;
     width: 60px;
     white-space: nowrap;
	
   }
	body{
		background-color:#eee;
		}
		body, div, p, span, input, select, textarea, label, td, th, ul {
   		 font-family: Helvetica, sans-serif;
		}
	 #pnlLeft {
            overflow: auto;
            float: left;
            margin-right: 3px;
            pading-left: 2px;
            border-right: solid 1px #BDBDBD;
        }

        #pnlRight {
            overflow: auto;
            position: relative;
        }
        
         #divMapLatLngt {
            bottom: 0px;
            position: absolute;
            margin-left: 80px;
            padding: 2px;
            z-index: 99;
            background-color: rgba(255,255,255, 0.8);
        }

    </style>	

<script>

var   polygonFillColor    = '#ff4444',
    polygonStrokeColor  = '#ff0000',
	 pinColor_default = "FF7E73",
    pinColor_active = "FFC9C4";

var map,bounds,infowindow, markers=[],Dname=[],DuniqueId=[],Dstatus=[],DlastUpdate=[],DgroupId=[],groups=[],events=[],Etype=[],Paddress=[],Pspeed=[],positions=[],Platitude=[],Plongitude=[],myInfo=[],center;

var sitePolyLoc=[];

 /*
 function attachPolygonInfoWindow(polygon,name)
    {
        var infoWindow = new google.maps.InfoWindow();
        google.maps.event.addListener(polygon, 'mouseover', function (e) {
            infoWindow.setContent(name);
            var latLng = e.latLng;
            infoWindow.setPosition(latLng);
            infoWindow.open(map);
        });
        google.maps.event.addListener(polygon, 'mouseout', function(){
          infowindow.close();
       });
    }
    */
    
function rad(x) {return x*Math.PI/180;}

function initialize() 
{ 

    var mapOptions = {
    zoom: 12,
    scrollwheel: true,
    disableDefaultUI: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 
  map = new google.maps.Map(document.getElementById("map"),mapOptions);
  /*
   google.maps.event.addListener(map,'mousemove',function(point)
                {                                        
                    $('#divMapLatLngt').html(point.latLng.lat().toFixed(6) + ', ' + point.latLng.lng().toFixed(6));
                });
                
                */
 google.maps.event.addListener(map, 'mousemove', function(event) {
    var lat = event.latLng.lat();
    var lng = event.latLng.lng();
    var R = 6371; // radius of earth in km
    var distances = [];
    var closest = -1;
    
    for( i=0;i<markers.length; i++ ) {
        var mlat = markers[i].position.lat();
        var mlng = markers[i].position.lng();
        var dLat  = rad(mlat - lat);
        var dLong = rad(mlng - lng);
        var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
            Math.cos(rad(lat)) * Math.cos(rad(lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        var d = R * c;
        distances[i] = d;
        if ( closest == -1 || d < distances[closest] ) {
            closest = i;
        }
    }
     
//alert(markers[closest].title + parseFloat(distances[closest]).toFixed(2)+' KM');
   // alert();
     $('#divMapLatLngt').html(event.latLng.lat().toFixed(6) + ', ' + event.latLng.lng().toFixed(6)+'  '+markers[closest].title + parseFloat(distances[closest]).toFixed(2)+' KM');
});    
  map.setCenter(new google.maps.LatLng(20.0,84.0));
  //bounds = new google.maps.LatLngBounds();
 infowindow = new google.maps.InfoWindow({maxWidth: 300}); 
var center = new google.maps.LatLng(37.4419, -122.1419);
var options = {
  'zoom': 13,
  'center': center,
  'mapTypeId': google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("map"), options);

var markers = [];
for (var i = 0; i < 100; i++) {
  var latLng = new google.maps.LatLng(data.photos[i].latitude,
      data.photos[i].longitude);
  var marker = new google.maps.Marker({'position': latLng});
  markers.push(marker);
}
var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'images/m'});
 }

        	 
function loadpolygon() {
//getDevices();
$.ajax({
url: "<?php echo URL; ?>vts/loadpolygon",
type: "GET",
data: {
foo : "bar"
},
dataType: "json",
success: function(allGeofences) {
      //alert(allGeofences[9].id);
	  
       // alert(allGeofences.length);
		//getpolyCoords(allGeofences[7].area);
		//allGeofences.length
		//alert(allGeofences[7].area);
		//allGeofences =  jQuery.parseJSON(allGeofences);
		var tttemp;
		//getpolyCoords(ConvertCoords("POLYGON((21.82519 84.04511000000002, 21.822859 84.04506700000002, 21.8226 84.04339299999992, 21.82507 84.04187000000002))"));

		
	
		
	   // getpolyCoords(tttemp);
		
		/**/
	  for( j =0; j < allGeofences.length; j++ ) {
	   
	   tttemp=ConvertCoords(allGeofences[j].area);
	  // alert(j+"  "+tttemp);
	  getpolyCoords(tttemp,allGeofences[j].name,j);
	  
	 //getpolyCoords(tttemp);
	 //alert("proceed");
	  	}
	  	
	  	//map.fitBounds(bounds);
	}	
	
	  // }
});


}

//POLYGON((21.82519 84.04511000000002, 21.822859 84.04506700000002, 21.8226 84.04339299999992, 21.82507 84.04187000000002))

function ConvertCoords(resulot){
//alert(resulot);
 resulot=resulot.substr(9);
  //alert(resulot1);
 resulot = resulot.substr(0,resulot.length-2);
// alert(resulot2);
 var TempRes =[];
 TempRes = 	resulot.split(',');
	//$TempRes=split(',',$resulot);
	//print_r($TempRes);
	
 var num=TempRes.length;

var latlng = [];
for (i=0; i < num; i++) {
var finalRes =[];
finalRes=TempRes[i].split(' ');
//echo "<pre>";
//print_r($finalRes);	
//alert(finalRes.length);

var x,y;

 var mapCentre = [];
if(finalRes.length==2){
	  y = finalRes[0];
    x = finalRes[1];
	}else {
		y = finalRes[1];
    x = finalRes[2];
		}
		
	// alert (i+"  "+finalRes.length+ "   "+x+ " "+y);	

    mapCentre.push(parseFloat(y));
    mapCentre.push(parseFloat(x));
  // mapCentre[0]=y;
  // mapCentre[1]=x;
   //alert(mapCentre);
   latlng.push(mapCentre);
  
}
//alert(latlng);
return latlng;

}


function getpolyCoords(myData,name,i){
	var path = [];
	
     //alert(myData.length);
	 // alert(data);
     //data =  jQuery.parseJSON(data);
      //data = data instanceof Array ? data : [data];
     //alert(data.length);
				//clearMap();
          //data =[[21.82519,84.04511],[21.822859,84.045067],[21.8226,84.043393],[21.82507,84.04187]];
        //data = jQuery.parseJSON(myData);
       //  alert(data);
		 var latlngset,marker,
					mapCenter = new Array(0, 0),
					counter = 0;
				$.each(myData, function(k, v) {
					if (typeof v != 'undefined') {
					//alert(v);
					//	paths.push(v);
						mapCenter[0] += v[0];
						mapCenter[1] += v[1];
						
						latlngset = new google.maps.LatLng(v[0], v[1]);
						path.push(latlngset);
						/*	Marker Add 
						map.addMarker({
							lat: v[0],
							lng: v[1]
						});
						
	            marker = new google.maps.Marker({  
      map: map, title: 'test' , position: latlngset  
    });
             map.setCenter(marker.getPosition());
				*/		
						counter++;
					}
				});

				mapCenter[0] = mapCenter[0] / counter;
				mapCenter[1] = mapCenter[1] / counter;

            mySite = '<?php echo URL; ?>public/images/maps/sitemarker.png';
            latlngset = new google.maps.LatLng(mapCenter[0], mapCenter[1]);
             //  map.setCenter(marker.getPosition());
             /*
                
                mySite = '<php echo URL; ?>public/images/maps/sitemarker.png'
                 marker = new google.maps.Marker({  
      				map: map, title: name , position: latlngset ,icon: mySite
    			});
    			*/
    			
    			 markers[i] =  new MarkerWithLabel({
					position: latlngset,
					map: map,
					flat: true,
					title: name,
					labelContent: name,
					labelAnchor: new google.maps.Point(0, 4),
					labelClass: "labelsSite", 
					labelStyle: {opacity: 0.70}
            });
			markers[i].setIcon(mySite);
    
             //   map.setCenter(marker.getPosition());
			map.setCenter(latlngset);
			//bounds.extend(latlngset);

				//alert("ok");
				
//alert("marker added" +path);
//var triangleCoords = JSON.parse("[" +path+"]");
//var trial = [{lat:21.82519, lng:84.04511},{lat:21.822859, lng:84.045067},{lat:21.8226, lng:84.043393},{lat:21.82507, lng:84.04187}];        

	
        // Construct the polygon.
        sitePolyLoc[i] = new google.maps.Polygon({
          paths: path,
          strokeColor: '#FF0000',
          strokeOpacity: 0.3,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.15
        });
        sitePolyLoc[i].setMap(map);
//attachPolygonInfoWindow(sitePolyLoc[i],name);
//return null;
//alert("ok");

}

function createSiteMarker() {
                var txtSite = $.trim($("#txtMapSiteSearch").val()).toLowerCase();                
                var flgHide = false;
                if ($("#btnMapSiteSearch").val().indexOf("Show") == -1) {         
               
                for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(null);
                    }
               
                    if (typeof sitePolyLoc !== "undefined" && sitePolyLoc != null) {
                        for (var i = sitePolyLoc.length - 1; i >= 0 ; i--) {
                            if (typeof sitePolyLoc[i] !== "undefined") {
                                sitePolyLoc[i].setMap(null);
                                sitePolyLoc[i] = null;
                            }
                        }
                    }
                    sitePolyLoc = [];
                    //--------------------------------------------------------------------------------------

                   
                }
                else {
                   
                    flgHide = true;  
                     loadpolygon();          

                }//End else
        
                if(flgHide == true)
                {            
                    $("#btnMapSiteSearch").val("Hide Sites");
                    $("#txtMapSiteSearch").hide();
                }
                else
                {
                    $("#btnMapSiteSearch").val("Show Sites");
                    $("#txtMapSiteSearch").show();
                }                 
            }

</script>
<BODY onLoad="initialize();">
<div id="map" style="width:100%; height:90%;">&nbsp;</div>
<div id="divMapSite" style='position: absolute; top: 8px; left: 130px; z-index: 9;'>
                                <input type="text" id="txtMapSiteSearch" size="12" />
                                <input type="button" id="btnMapSiteSearch" value="Show Sites" onclick="createSiteMarker();" />
                            </div>
                            <div id="divMapLatLngt">
                            </div>