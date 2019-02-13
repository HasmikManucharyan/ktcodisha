$(document).ready(function(){
    
    
        var xhr5 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'master/vehiclemaster_details';
              // ADD THE URL OF THE FILE.
//alert(url);
    xhr5.onreadystatechange = function () {
      //alert("request");
        if (xhr5.readyState === XMLHttpRequest.DONE && xhr5.status === 200) {
        //  alert(xhr2.responseText);   
        var data = JSON.parse(xhr5.responseText);
       vehicleno = document.getElementById("vehicleno");
        for(var i=0; i<data.length; i++){
          vehicleno.innerHTML = vehicleno.innerHTML +
                    '<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>';
        }
           
        }
    };
   
    xhr5.open(method, url, true);
    xhr5.send();
    
  
    $( "#vehicleno" ).change(function() {
      $('#fileUploadModal').modal('show')
    });


    
    $("#vehicleno").select2({
   
   	});
    
    ///////////////////// view vehiclemaster ////////////////////
    
     function updateinfo(sdata){
      
        if(sdata != null){
        var xhr3 = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url = ''+serverUrl+'master/view_vehiclemaster?id='+vehicleno+''; 
          
              // ADD THE URL OF THE FILE.
   
    xhr3.onreadystatechange = function () {
     
        if (xhr3.readyState === XMLHttpRequest.DONE && xhr3.status === 200) {
            var data= JSON.parse(xhr3.responseText);
           
            document.getElementById("vehicleno").innerHTML= data[0]['VehicleNo'];
            document.getElementById("engineno").innerHTML=data[0]['EngineNo'];
            document.getElementById("chesisno").innerHTML=data[0]['ChesisNo'];
            document.getElementById("modelno").innerHTML=data[0]['ModelNo'];
            document.getElementById("rcbookno").innerHTML=data[0]['RcBookNo'];
            document.getElementById("regdates").innerHTML=data[0]['RegDates'];
            document.getElementById("registrationno").innerHTML=data[0]['RegistrationNo'];
            document.getElementById("vehicletype").innerHTML=data[0]['VehicleType'];
            document.getElementById("ownertypeso").innerHTML=data[0]['OwnerType'];
            document.getElementById("financername").innerHTML=data[0]['FinancerName'];
            document.getElementById("emidate").innerHTML=data[0]['EMIDate'];
            document.getElementById("emiamount").innerHTML=data[0]['EMIAmount'];
            document.getElementById("firstemi").innerHTML=data[0]['FirstEMI'];
            document.getElementById("lastemi").innerHTML=data[0]['LastEMI'];
            document.getElementById("insuranceexpirydate").innerHTML=data[0]['InsuranceExpiryDate'];
            document.getElementById("pollutionexpiry").innerHTML=data[0]['PollutionExpiry'];
            document.getElementById("fitnessexpirydate").innerHTML=data[0]['FitnessExpiryDate'];
            document.getElementById("roadtaxexpiry").innerHTML=data[0]['RoadTaxExpiry'];
            document.getElementById("permitexpiry").innerHTML=data[0]['PermitExpiry'];
            document.getElementById("ShortVehNo").innerHTML=data[0]['ShortVehNo'];
            document.getElementById("DateofPurchase").innerHTML=data[0]['DateofPurchase'];
            document.getElementById("name1").innerHTML=data[0]['name'];
            document.getElementById("uniqueid1").innerHTML=data[0]['uniqueid'];
            document.getElementById("groupid1").innerHTML=data[0]['groupid'];
            document.getElementById("model1").innerHTML=data[0]['model'];
            document.getElementById("phone1").innerHTML=data[0]['phone'];
            document.getElementById("contact1").innerHTML=data[0]['contact'];
            document.getElementById("category1").innerHTML=data[0]['category'];
          }
    };
    xhr3.open(method, url, true);
    xhr3.send();
        }
     }
    
    
    
    
    
    
//    var vehicleno = document.getElementById("vehicleno")
	var userType = localStorage["userType"];
	//VCODE,USER,SITE
	var VCODE = localStorage["vendorCode"];
	var USER = localStorage["user"];
	var SITE = localStorage["userSite"];
	//var TRACCARID = localStorage["traccarID"];
	var TRACCARID = traccarID;
    //alert(TRACCARID);
	// var TRACCARID = localStorage["traccarID"];
	var MapLoaded = false;
	var markerCluster,oTable,selectSearchTxt="";
	var map,infowindow,currentInfo,gcFuel=[],gcDNotRpt=[],gcDon=[],gcDoff=[],TripsIn=[],TripsOut=[],allGeofences=[],LoadPolySites=[],LoadPolyRoutes=[],markers=[],cmarkers=[] ,marker=[],DtripsIn=[],DtripsOut=[],DtripsLoadingTime=[],Dname=[],Dcategory=[],DuniqueId=[],Dstatus=[],DlastUpdate=[],DgroupId=[],groups=[],events=[],Etype=[],Paddress=[],Pspeed=[],positions=[],Platitude=[],Plongitude=[],myInfo=[],Pcourse=[],displayTable=[],nearestSite=[],nearestSiteLat=[],nearestSiteLng=[],nearestLocation=[],nearestRoute=[],DlastSpeed=[],distance=[],DmaxSpeed=[],DmaxSpeedC=[],Ptotaldistance=[],Pstartdistance=[],PProtocol=[],PFuel=[],SFuel=[],StolenFuelQty=[],FillFuelQty=[],FuelTheftFilled=[],MarkerStatus , markerCurrentState=[],DFitness=[],DInsurance=[],DPermit=[],DRoadtax=[],DPollution=[],Challan=[],dataposition = [];
	var smsId =[], smsPhone =[];
	MarkerStatus="";
	var callDevices = false;
	var sitePolyLoc=[];
	var monthNames = [
	"January", "February", "March",
	"April", "May", "June", "July",
	"August", "September", "October",
	"November", "December"
	];
	//var TRACCARID = 143;
function initialize() 
	{ 
	var mapOptions = {
		center: new google.maps.LatLng('21.95', '83.92'),
		zoom: 12,
		scrollwheel: true,
		gestureHandling: 'greedy',
		disableDefaultUI: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		 mapTypeControlOptions: {
		     style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
		     position: google.maps.ControlPosition.TOP_CENTER
		 },
		 zoomControl: true,
		 zoomControlOptions: {
		     position: google.maps.ControlPosition.LEFT_CENTER
		 },
		 scaleControl: true,
		 streetViewControl: true,
		 streetViewControlOptions: {
		     position: google.maps.ControlPosition.LEFT_TOP
		 },
		 fullscreenControl: true

		};

	MapLoaded = true;
	console.log(document.getElementById("map"));
    console.log(document.getElementById("floating-panel"));
	map = new google.maps.Map(document.getElementById("map"),mapOptions);
        var controlDiv = document.getElementById('floating-panel');
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(controlDiv);
console.log(map)
	zoom = map.getZoom();
	console.log('zoom',zoom)
   	google.maps.event.addListener(map, 'zoom_changed', function () {
       	var temp = map.getZoom();
       	if ((temp >= 17) && (zoom < 17)) {
           //   map.setMapTypeId(google.maps.MapTypeId.HYBRID);
       	}
       	if ((temp <= 14) && (zoom > 14)) {
           map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
       	}
       	zoom = temp;
   	});               

       
   	google.maps.event.addListener(map,'mousemove',function(point)
   	{                                        
       $('#divMapLatLngt').html(point.latLng.lat().toFixed(6) + ', ' + point.latLng.lng().toFixed(6));
   	});


	// bounds = new google.maps.LatLngBounds();
	infowindow = new google.maps.InfoWindow({maxWidth: 300}); 
	getgroups();
}
function getgroups() {
	$.ajax({
		url: ''+serverUrl+'vts/getgroups',
		type: "GET",
		data: {
		foo : "bar"
		},
		dataType: "json",
		success: function(returnedData) {
			//alert(returnedData.length);
			// GroupCount[0][0]=0;
			for( i = 0; i < returnedData.length; i++ ) {
				// $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");
				TripsIn[returnedData[i].id]=0
				TripsOut[returnedData[i].id]=0
				groups[returnedData[i].id]=returnedData[i].name;
				gcDon[returnedData[i].id]=0;
				gcDoff[returnedData[i].id]=0;
				gcDNotRpt[returnedData[i].id]=0;
				gcFuel[returnedData[i].id]=0;

				//   GroupCount[1][returnedData[i].name]=0;
				//   GroupCount[2][returnedData[i].name]=0;
				//    GroupCount[3][returnedData[i].name]=0;
			}
		}
	});
}


function getpolyLine(myData,name,i,rcColor){
	var path = [];
	var latlngset,
	    counter = 0;
	$.each(myData, function(k, v) {
       if (typeof v != 'undefined') {
       //alert(v);
       //	paths.push(v);
       //	mapCenter[0] += v[0];
       //	mapCenter[1] += v[1];
           
           latlngset = new google.maps.LatLng(v[0], v[1]);
           path.push(latlngset);
           
           counter++;
	           
	       
		var lineSymbol = {
				 path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
				};
		var myRoute = new google.maps.Polyline({
			 path: path,
			//   icons: [{
			//     icon: lineSymbol,
			//     offset: '100%'
			//   }],
			 strokeColor: rcColor,
			 strokeOpacity: 0.5,
			 strokeWeight: 4
		});

		myRoute.setMap(map); 
	}
	     });
	// Construct the polygon.

	   
	}

function LoadpolyCoords_Line(myData,name,desc,i){
//var path = [];

	var mapCenter = new Array(0, 0),
           counter = 0;
       $.each(myData, function(k, v) {
           if (typeof v != 'undefined') {
           //alert(v);
           //	paths.push(v);
           LoadPolySites.push([name,desc,v[0],v[1],"L"]);
           }
       });
     
}
	function rad(x) {
            return x * Math.PI / 180;
        }

    function loadpolygon() {
        //getDevices();
        $.ajax({
            url: ''+serverUrl+'vts/mloadpolygonNew',
            type: "GET",
            data: {
                userType: "dealer",
                parent_traccarID: 0,
                traccarID: TRACCARID
            },
            dataType: "json",
            success: function(myData) {

                allGeofences = myData;
                //drawPolygons();

                var tttemp;

                for (j = 0; j < allGeofences.length; j++) {
                    tttemp = ConvertCoords(allGeofences[j].area);
                    // getpolyCoords(tttemp,allGeofences[j].name,j);
                    if (allGeofences[j].area.substr(0, 1) == "L") {
                        // alert(tttemp+" "+allGeofences[j].name+" "+allGeofences[j].description+" "+j);
                        LoadpolyCoords_Line(tttemp, allGeofences[j].name, allGeofences[j].description, j);
                    } else {
                        LoadpolyCoords(tttemp, allGeofences[j].name, allGeofences[j].description, j);
                    }
                }


            }


        });

    }

        loadpolygon();
function getTrips(route,dir,group) {
	//callDevices = true;
	$.ajax({
		url: ''+serverUrl+'vts/ComputeTripsJson',
		type: "GET",
		data: {
			route : route,
			dir : dir
			},
		dataType: "json",
		success: function(returnedData) {
			consoe.log(returnedData);
			// $.each(returnedData, function(index, value) { 

			// console.log(returnedData[index]);
			TripsIn[group] = 0;
			TripsOut[group] = 0;
			// )};
			// obj = JSON.parse(returnedData);
			// returnedData.stringify
			// alert(returnedData.length);
			for( i = 0; i < returnedData.length; i++ ) {
				// alert(returnedData[i]+" IN:"+returnedData[i].IN);
				DtripsIn[returnedData[i].deviceID]=returnedData[i].IN;
				if( typeof DtripsIn[returnedData[i].deviceID]!='undefined'){
					TripsIn[group]+=parseInt(returnedData[i].IN);
				}
				DtripsOut[returnedData[i].deviceID]=returnedData[i].OUT;
				if( typeof DtripsOut[returnedData[i].deviceID]!='undefined'){
					TripsOut[group]+=parseInt(returnedData[i].OUT);
				}
				DtripsLoadingTime[returnedData[i].deviceID]=returnedData[i].LoadingTime;
			}
			// if(selectSearchtxt=)
		}
	});
	return false;
}
// getTrips(283,225,18);

function getDevices() {
	  //alert("true");
	callDevices = false;
	$.ajax({
		//url: ''+serverUrl+'vts/idleLogs?traccarID='+TRACCARID,
        url: 'http://www.liveratrack.com/login/vts/idleLogs?traccarID='+TRACCARID,
		type: "GET",
		data: {
			foo : "bar"
		},
		dataType: "json",
		success: function(returnedData) {
			// console.log(returnedData)
		//alert(returnedData.length);
			for( i = 0; i < returnedData.length; i++ ) {
				if(returnedData[i].lastupdate!=null){ 
					smsId[returnedData[i].id] = returnedData[i].id;
					smsPhone[returnedData[i].id] = returnedData[i].phone;
					Pspeed[returnedData[i].id]=parseInt(returnedData[i].speed);
					Platitude[returnedData[i].id]=returnedData[i].latitude;
					Plongitude[returnedData[i].id]=returnedData[i].longitude;
					Pcourse[returnedData[i].id]=returnedData[i].course;
					Dname[returnedData[i].id] = returnedData[i].name;
					Dcategory[returnedData[i].id] = returnedData[i].category;
					DFitness[returnedData[i].id] = returnedData[i].FitnessExpiryDate;
					DInsurance[returnedData[i].id] = returnedData[i].InsuranceExpiryDate;
					DPermit[returnedData[i].id] = returnedData[i].PermitExpiry;
					DRoadtax[returnedData[i].id] = returnedData[i].RoadTaxExpiry;
					DPollution[returnedData[i].id] = returnedData[i].PollutionExpiry;
				   	//if(data.uniqueId != undefined)
				   	DuniqueId[returnedData[i].id] = returnedData[i].uniqueid;
				   	//if(data.status != undefined)
				   	//Dstatus[i] = data.status;
				   	//if(data.lastUpdate != undefined)
				   	DlastUpdate[returnedData[i].id] = returnedData[i].lastupdate;
				   	DlastSpeed[returnedData[i].id] = returnedData[i].LastTime;
				   
				   	DmaxSpeed[returnedData[i].id] = returnedData[i].maxSpeed;
				   	DmaxSpeedC[returnedData[i].id] = returnedData[i].maxSpeedC;
				   	Ptotaldistance[returnedData[i].id] = returnedData[i].totalDistance;
				   	Pstartdistance[returnedData[i].id] = returnedData[i].startDistance;
				   	PProtocol[returnedData[i].id] = returnedData[i].protocol;
				   	if(returnedData[i].Fuel >0){
					   	PFuel[returnedData[i].id] = returnedData[i].Fuel;
					}
				   	SFuel[returnedData[i].id] = returnedData[i].startFuel;
				   	StolenFuelQty[returnedData[i].id] = returnedData[i].sStolen;
				   	FillFuelQty[returnedData[i].id] = returnedData[i].sFilled;
				  
				   //if(data.groupId != undefined)
				   	DgroupId[returnedData[i].id] = returnedData[i].groupid;
					if(positions.indexOf(returnedData[i].id) === -1){
						positions.push(returnedData[i].id);

					// Paddress[returnedData[i].id]=returnedData[i].address;

						if(MapLoaded){
							addMarkerMap(returnedData[i].id,returnedData[i]); 
						}
					FuelTheftFilled[returnedData[i].id]="";
					// console.log("addMarkerMap"+"  "+returnedData[i].id);
					} else {

						if(MapLoaded){
							moveMarkerMap(returnedData[i].id, returnedData[i].latitude, returnedData[i].longitude, returnedData[i].course, groups[DgroupId[returnedData[i].id]]);  
						}
						//nearestSite[returnedData[i].id]= GetNearestSite(Platitude[returnedData[i].id],Plongitude[returnedData[i].id]);
						//  console.log("moveMarkerMap"+returnedData[i].id+" "+returnedData[i].latitude+" "+returnedData[i].longitude+" "+returnedData[i].course);
					}
				}

			}
// console.log('ajax getDevices', positions)

			// CreateMapCluster();
			callDevices = false;

			console.log("called createTable");
			createTable();

		}

	});

}

function moveMarkerMap(i,newCoords,newCoords1,newCourse,group) {
	var myIcon, myRotation;
	var newLatLang = new google.maps.LatLng(newCoords,newCoords1);
	// startLocationLat[i] = marker[i].getPosition().lat();
	// startLocationLng[i] = marker[i].getPosition().lng();
	// endLocationLat[i] = newCoords;
	// endLocationLng[i] = newCoords1;

	//bounds.extend(newLatLang);
	//console.log("move marker"+" "+i+" "+newCoords+" "+newCoords1+" "+newCourse);
	//map.panTo(newLatLang);

	//if(Pspeed[i]>500){
	//AnimateMarker(i);
	//} else {

	marker[i].setPosition(newLatLang);

	//}
	//
	//alert(markerCurrentState[i]);
	if(MarkerStatus==""){
		if(selectSearchTxt!=""){
			var Target = groups.indexOf(selectSearchTxt);

		}
		marker[i].setVisible(true);
	} else {
		//alert(MarkerStatus+"  "+markerCurrentState[i]+ "i ="+i);
		if(markerCurrentState[i]==MarkerStatus){
			marker[i].setVisible(true);
		} else {
			marker[i].setVisible(false);	
		}
		if(MarkerStatus=="truck"){
			if(Dcategory[i]=="truck"){
				marker[i].setVisible(true);
			}else {
				marker[i].setVisible(false);	
		   }
		}	
	}
	if(selectSearchTxt!=""){
		if(group!=selectSearchTxt){
		   marker[i].setVisible(false);
		}
	}
	//markerCluster.addMarker(marker[i]);
	//bounds.extend(marker[i].position);
	//myRotation = parseInt(parseInt(newCourse)/6)*6;
	var srtangle = parseInt(newCourse) * 1 + 11.25;
	myRotation = parseInt(srtangle / 22.5);
	//if(parseInt(Pspeed[i])>0){
	if(markerCurrentState[i]=="Moving"){
	    myLabelColor="labelsGreen";
	    myIcon =''+serverUrl+'public/images/maps/green/'+myRotation+'.gif';
	}
	if(markerCurrentState[i]=="Idle"){
	        myIcon =''+serverUrl+'public/images/maps/yellow/'+myRotation+'.gif';
	         myLabelColor="labelsYellow";
	        }
	if(markerCurrentState[i]=="Unreachable"){
		myIcon =''+serverUrl+'public/images/maps/red/'+myRotation+'.gif';
	    myLabelColor="labelsRed";
	}		
	image = new google.maps.MarkerImage(myIcon,
	                   new google.maps.Size(32, 32),
	                   new google.maps.Point(0, 0),
	                   new google.maps.Point(16, 14),
	                   new google.maps.Size(32, 32)
	                   );	 
	marker[i].setIcon(image);
	//  markerCluster.setMap(set);
	if(currentInfo==i){
		infowindow.setContent(myInfo[i]);
		google.maps.event.trigger(map, 'resize');
		map.setCenter(marker[i].getPosition());
	}	

	/* USEFUL CODE 	*/	
	marker[i].addListener('click', function() {
		currentInfo=i;
		infowindow.setContent(myInfo[i]);
		infowindow.open(map, marker[i]);
		//  map.setZoom(12);
		google.maps.event.trigger(map, 'resize');
	 	map.setCenter(marker[i].getPosition());
	});
	google.maps.event.addListener(infowindow,'closeclick',function(){
	  currentInfo=0;
	// then, remove the infowindows name from the array
	});
	//USEFUL CODE 	

}
function addMarkerMap(i,data)
{
	console.log("addMarkerMap")
	// alert("ok");
	var localDevices=[],myLabelColor,myIcon;
	if(marker[i]==undefined ){
	homeLatLng = new google.maps.LatLng(data.latitude, data.longitude);
	//bounds.extend(homeLatLng);
	if(data.status=="online"){
	    myLabelColor="labelsGreen";
	    myIcon =''+serverUrl+'public/images/maps/green/0.gif';
	} else {
        myIcon =''+serverUrl+'public/images/maps/yellow/0.gif';
        myLabelColor="labelsYellow";
    }
	        
    var image;
    image = new google.maps.MarkerImage(myIcon,
               new google.maps.Size(32, 32),
               new google.maps.Point(0, 0),
               new google.maps.Point(16, 14),
               new google.maps.Size(32, 32)
               );
    
	marker[i] =  new MarkerWithLabel({
	           position: homeLatLng,
	           map: map,
	           flat: true,
	           labelContent: data.name,
	           labelAnchor: new google.maps.Point(-7, 32),
	           labelClass: myLabelColor, 
	           labelStyle: {opacity: 0.70}
	   });
   	marker[i].setIcon(image);
   	marker[i].addListener('click', function() {
	   	infowindow.setContent(myInfo[i]);
	   	map.setZoom(15);
	   	infowindow.open(map, marker[i]);
		//GetNearestSite();
		// nearestSite[i]= GetNearestSite(marker[i].position.lat(),marker[i].position.lng());
		// alert(nearestSite[i]);
		// map.setZoom(14);

	});
	//markerCluster.addMarker(marker[i]);
	// markerCluster.addMarker(marker[i]);

	}
}

var startLocationLat = [];
var startLocationLng = [];
var endLocationLat = [];
var endLocationLng = [];
var timerHandle = [];

function AnimateMarker(i){
	var deltaLat = (endLocationLat[i]- startLocationLat[i])/70;
	var deltaLng = (endLocationLng[i] - startLocationLng[i])/70;
	var position =[];
	// console.log(marker[i]);
	position[0] = marker[i].getPosition().lat();
	position[1] = marker[i].getPosition().lng();
	position[0] += deltaLat;
	position[1] += deltaLng;
	var latlng = new google.maps.LatLng(position[0], position[1]);
	marker[i].setPosition(latlng);
	//|| (position[0]-endLocationLat[i])<=(-1*deltaLat)
	if(position[0]-endLocationLat[i]>deltaLat){
		setTimeout("AnimateMarker("+i+")",100);
	} else {
		startLocationLat[i] = marker[i].getPosition().lat();
		startLocationLng[i] = marker[i].getPosition().lng();
		// return false;
	}
}
function GetNearestSite() {
	var R = 6371; // radius of earth in km
console.log('GetNearestSite')
	// console.log(positions.length+"  LoadPolySites.length="+LoadPolySites.length +"  "+ LoadPolySites +" "+Platitude+"  "+Plongitude+ "   "+positions);
	for( k=0;k<positions.length; k++ ) {

		var lat = Platitude[positions[k]];
		var lng = Plongitude[positions[k]];
		var distances = [];
		var closest = -1;
		var closestL = -1;
		// console.log("positions[k]="+positions[k]+"lat="+lat+" lng="+lng);
		for( i=0;i<LoadPolySites.length; i++ ) {
			if( LoadPolySites[i][4]=='P'){
			   	var mlat = LoadPolySites[i][2];
			   	var mlng = LoadPolySites[i][3];
			   	console.log("lat="+lat+" lng="+lng+" mlat="+mlat+" mlng="+mlng);
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
			if( LoadPolySites[i][4]=='L'){
			   	var mlat = LoadPolySites[i][2];
			   	var mlng = LoadPolySites[i][3];
			   	//console.log("lat="+lat+" lng="+lng+" mlat="+mlat+" mlng="+mlng);
			   	var dLat  = rad(mlat - lat);
			   	var dLong = rad(mlng - lng);
			   	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			    Math.cos(rad(lat)) * Math.cos(rad(lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
			   	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
			   	var d = R * c;
			   	distances[i] = d;
				if ( closestL == -1 || d < distances[closestL] ) {
				    closestL = i;
				}
			}
		}
		// alert("closest "+closest);
		console.log('')
		if(LoadPolySites[closest]){
			console.log('closestL=',closestL,' closest=', closest)
			nearestSite[positions[k]]= LoadPolySites[closest][0] +' '+ parseFloat(distances[closest]).toFixed(2)+' KM';
			nearestSiteLat[positions[k]]=LoadPolySites[closest][2];
			nearestSiteLng[positions[k]]=LoadPolySites[closest][3];
			nearestLocation[positions[k]] = LoadPolySites[closest][1];
		} else {
			nearestSite[positions[k]]= "undefined";
			nearestLocation[positions[k]] = "undefined";
		}
		if(LoadPolySites[closestL]){
			// console.log('closestL=',closestL,' closest=', closest)
			nearestRoute[positions[k]]= LoadPolySites[closestL][0] +' '+ parseFloat(distances[closestL]).toFixed(2)+' KM';
			if(parseFloat(distances[closestL]).toFixed(2)>0.8){
				nearestRoute[positions[k]]="Deviation";
			}
		} else {
			nearestRoute[positions[k]]= "undefined";
		}    
		Paddress[positions[k]]= nearestLocation[positions[k]] ;
		//alert(nearestSite[positions[k]]+" "+markers[closest].title +' '+ parseFloat(distances[closest]).toFixed(2)+' KM');
	}
}
function dropdownBtn(id, model) {
            if (model == 1) {
                model = "GT 06";
            }
            //alert(id);

            var smsbutton = document.getElementById(id);
            //alert(smsbutton.innerHTML);
            //if(model == data[i]['devicemodel'] ){
            //alert(dataposition.length);
            for (var i = 0; i < dataposition.length; i++) {
                if (smsbutton != null) {
                    smsbutton.innerHTML = smsbutton.innerHTML +
                        '<option value="' + smsCommand[dataposition[i]] + '">' + smsCommand[dataposition[i]] + '</option>';
                }
            }
        }
function formatDate(dtstr) {
        var dt = dtstr.split(/[: T-]/).map(parseFloat);
        var result = new Date(dt[0], dt[1] - 1, dt[2], dt[3] || 0, dt[4] || 0, dt[5] || 0, 0);
        //result.setHours(result.getHours() + 5);
        //  result.setMinutes(result.getMinutes() + 30);
        //result = result.toString(result);
        var locale = "en-gb";
        var options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            time: 'long'
        };
        return result.toLocaleString('en-gb', {
            hour12: true
        });
        //return dtstr;
    }
function getDateDifferenceColor(daten) {

        var date1 = new Date();
        var date2 = new Date(daten);
        var bgColor = "palegreen";
        if (daten != '0000-00-00' && daten != '') {
            var timeDiff = (date2.getTime() - date1.getTime());
            //alert(timeDiff);
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
            if (diffDays <= 7) {

                bgColor = "#FFE766";
            }
            if (diffDays <= 2) {

                bgColor = "#FFE0E0";
            }

            return bgColor;
        } else {
            return "";
        }
    }
function GetColor(status, speed, currentStatus) {
        var Color = "";

        if (parseInt(speed) > 0 && currentStatus == "Moving") {
            Color = "palegreen";
        } else {
            Color = "#FFE766";
        }
        if (currentStatus == "Unreachable") {
            Color = "#FFE0E0";
        }
        return Color;
    }
function OddoText(number) {
            var sNumber = number.toString();
            var numberAdd = "";
            if (sNumber.length < 8) {
                for (var j = 1; j <= (8 - sNumber.length); j++) {
                    numberAdd += "0";
                }
                sNumber = numberAdd + sNumber;
            }
            var Output = "";
            for (var i = 0, len = sNumber.length; i < len; i += 1) {
                if (sNumber.charAt(i) != '.' && i < sNumber.length - 1) {
                    Output += '<span class="span1">' + sNumber.charAt(i) + '</span>';
                }
                if (i == sNumber.length - 1) {
                    Output += '<span class="span2">' + sNumber.charAt(i) + '</span>';
                }
            }
            return Output;
        }
function CorrectTime(myTime) {
        if (myTime < 10)
            myTime = "0" + myTime;
        return myTime;
    }
function get_time_diff(datetime) {
        //var datetime = typeof datetime !== 'undefined' ? datetime : "2014-01-01 01:02:03.123456";
        //console.log( "b"+ datetime);
        var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
            datetime = new Date(arr[0], arr[1] - 1, arr[2], arr[3], arr[4], 00);
        //datetime.setHours(datetime.getHours() + 5);
        //datetime.setMinutes(datetime.getMinutes() + 30);
        datetime.getTime();
        //console.log( "a" + datetime);
        //var datetime = new Date( datetime ).getTime();
        var now = new Date().getTime();
        //console.log( datetime + " " + now);
        if (datetime < now) {
            var milisec_diff = now - datetime;
        } else {
            var milisec_diff = datetime - now;
        }

        var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

        var date_diff = new Date(milisec_diff);
        date_diff.setHours(date_diff.getHours() - 5);
        date_diff.setMinutes(date_diff.getMinutes() - 30);

        var hrTXT, minTXT, secTXT;

        hrTXT = CorrectTime(date_diff.getHours());
        minTXT = CorrectTime(date_diff.getMinutes());
        secTXT = CorrectTime(date_diff.getSeconds());
        //return days + "d "+ date_diff.getHours() + ":" + date_diff.getMinutes() + ":" + date_diff.getSeconds();
        return days + "d " + hrTXT + ":" + minTXT + ":" + secTXT;
    }

function IdleTimeColor(datetime, speed) {
        var arr = datetime.split(/[- :T]/), // from your example var date = "2012-11-14T06:57:36+0000";
            datetime = new Date(arr[0], arr[1] - 1, arr[2], arr[3], arr[4], 00);
        //datetime.setHours(datetime.getHours() + 5);
        //datetime.setMinutes(datetime.getMinutes() + 30);
        datetime.getTime();
        //console.log( "a" + datetime);
        //var datetime = new Date( datetime ).getTime();
        var now = new Date().getTime();


        //console.log( datetime + " " + now);

        if (datetime < now) {
            var milisec_diff = now - datetime;
        } else {
            var milisec_diff = datetime - now;
        }

        var days = Math.floor(milisec_diff / 1000 / 60 / (60 * 24));

        var date_diff = new Date(milisec_diff);
        date_diff.setHours(date_diff.getHours() - 5);
        date_diff.setMinutes(date_diff.getMinutes() - 30);



        var Color = "white";


        if (date_diff.getHours() < 1) {

            if (date_diff.getMinutes() < 10) {
                Color = "#FFE766";
            }
            if (date_diff.getMinutes() >= 10) {
                Color = "#FFE766";
            }

        }
        if (date_diff.getHours() >= 1 || days >= 1) {
            Color = "#FFE0E0";
        }

        if (parseInt(speed) > 0) {
            if (Color != "#FFE0E0") {
                Color = "palegreen";
            }
        }

        return Color;
    }
        function createTable() {
        	console.log("createTable");
            GetNearestSite();
            var txt = '';

            var Don = 0,
                Doff = 0,
                DNotRpt = 0,
                Dsum = 0,
                DFuel = 0,
                localSpeed, travelled_distance = 0,
                oddometer = 0,
                currentFuel = 0,
                KMPL = 0,
                FConsumed = 0;
            var currentStatus = "";
            for (i = 0; i < positions.length; i++) {
                KMPL = 0;
                var GetIdle;
                if (DlastSpeed[positions[i]] == null) {
                    DlastSpeed[positions[i]] = DlastUpdate[positions[i]];
                }
                //GetIdle = (get_time_diff(DlastSpeed[positions[i]]));
                var counterColor = IdleTimeColor(DlastUpdate[positions[i]], parseInt(Pspeed[positions[i]]));
                var OverSpeedCounterColor = "";
                if (Pstartdistance[positions[i]] != null) {
                    travelled_distance = ((Ptotaldistance[positions[i]] - Pstartdistance[positions[i]]) / 1000).toFixed(1);
                } else {
                    travelled_distance = 0;
                }
                if (Dcategory[positions[i]] == 'truck') {
                    DFuel++;
                    gcFuel[DgroupId[positions[i]]] ++;
                }
                if (groups[DgroupId[positions[i]]] == null) {
                    groups[DgroupId[positions[i]]] = 0;
                }
                if (counterColor == "palegreen") {
                    if (travelled_distance != 0) {
                        Don++;
                        gcDon[DgroupId[positions[i]]] ++;
                        // GroupCount[1][groups[DgroupId[positions[i]]]]++;
                        currentStatus = "Moving";
                    } else {
                        Doff++;
                        gcDoff[DgroupId[positions[i]]] ++;
                        //  GroupCount[2][groups[DgroupId[positions[i]]]]++;   
                        currentStatus = "Idle";

                    }
                }
                if (counterColor == "orange") {
                    Doff++;
                    gcDoff[DgroupId[positions[i]]] ++;
                    //   GroupCount[2][groups[DgroupId[positions[i]]]]++; 
                    currentStatus = "Idle";
                }
                if (counterColor == "#FFE766") {
                    Doff++;
                    gcDoff[DgroupId[positions[i]]] ++;
                    //   GroupCount[2][groups[DgroupId[positions[i]]]]++; 
                    currentStatus = "Idle";
                }
                if (counterColor == "#FFE0E0") {
                    DNotRpt++;
                    gcDNotRpt[DgroupId[positions[i]]] ++;
                    Dstatus[positions[i]] = "Unreachable";
                    //   GroupCount[3][groups[DgroupId[positions[i]]]]++; 
                    currentStatus = "Unreachable";
                }

                if (parseInt(Pspeed[positions[i]]) > 0 && currentStatus == "Moving") {

                    GetIdle = "0d 00:00:00";

                } else {
                    GetIdle = (get_time_diff(DlastSpeed[positions[i]]));

                }

                markerCurrentState[positions[i]] = currentStatus;


                oddometer = OddoText((Ptotaldistance[positions[i]] / 1000).toFixed(1));
                var tempOddometer = (Ptotaldistance[positions[i]] / 1000).toFixed(1);
                if (DmaxSpeed[positions[i]] == null) {
                    DmaxSpeed[positions[i]] = 0;
                }
                if (DmaxSpeedC[positions[i]] == null) {
                    DmaxSpeedC[positions[i]] = 0;
                }
                if (parseInt(DmaxSpeedC[positions[i]]) > 0) {
                    OverSpeedCounterColor = "#FFE0E0";
                }
                //  if(isDefined(Pspeed[positions[i]])){

                if (PProtocol[positions[i]] != 'wialon') {
                    currentFuel = parseFloat((PFuel[positions[i]]) / 10).toFixed(1);
                    initialFuel = parseFloat((SFuel[positions[i]])).toFixed(1);
                } else {
                    currentFuel = parseFloat((PFuel[positions[i]])).toFixed(1);
                    initialFuel = parseFloat((SFuel[positions[i]])).toFixed(1);

                }
                if (initialFuel == "NaN") initialFuel = 0;
                if (currentFuel == "NaN") currentFuel = 0;
                if (FConsumed == "NaN") {
                    FConsumed = 0;
                }
                if (StolenFuelQty[positions[i]] == null) {
                    StolenFuelQty[positions[i]] = 0;
                }

                if (FillFuelQty[positions[i]] == null) {
                    FillFuelQty[positions[i]] = 0;
                }

                if (travelled_distance != 0 && initialFuel != 0 && currentFuel != 0) {
                    FConsumed = parseFloat(initialFuel - currentFuel - parseFloat(StolenFuelQty[positions[i]]).toFixed(1) + parseFloat(FillFuelQty[positions[i]])).toFixed(1);
                    if (FConsumed < 0) {
                        FConsumed = 0;
                    }
                    if (FConsumed > 3) {
                        KMPL = parseFloat(travelled_distance / FConsumed).toFixed(1);
                    } else {
                        KMPL = 0;
                    }
                }


                var Vehicle, tdSno = "",
                    tdGroups = "",
                    tdDeviceID = "",
                    tdCurrentStatus = "",
                    tdCategory = "",
                    tdDname = "",
                    tdLastUpdate = "",
                    tdNearestSite = "",
                    tdSpeed = "",
                    tdMaxSpeed = "",
                    tdIdleTime = "",
                    tdOddometer = "",
                    tdTravelledDistance = "",
                    tdInitialFuel = "",
                    tdFilled = "",
                    tdConsumed = "",
                    tdStolen = "",
                    tdCurrentFuel = "",
                    tdKMPL = "",
                    tdAddress = "",
                    tdTxt = "black",
                    tdFitness = "",
                    tdInsurance = "",
                    tdPermit = "",
                    tdRoadtax = "",
                    tdPollution = "",
                    tdTripsIn = "",
                    tdTripsOut = "",
                    tdLoadingTime = "",
                    tdTripStatus = "";

                tdDeviceID = '<tr style="height:20px;" role="row"><td>' + positions[i] + '</td>';
                tdGroups = '<td class="info">' + groups[DgroupId[positions[i]]] + '</td>';
                tdCurrentStatus = '<td>' + currentStatus + '</td>';
                tdCategory = '<td>' + Dcategory[positions[i]] + '</td>';

                var Original_No = Dname[positions[i]];
                // Original_No = Original_No.replace(/\s/g,'');
                // if(Original_No.length>5){
                Vehicle = Original_No;
                //  Vehicle = substr_replace(Original_No," ",5,0);
                // }else{
                //     Vehicle = Original_No;
                // }

                // tdDname = '<td style="background-color:' + GetColor(Dstatus[positions[i]], Pspeed[positions[i]], currentStatus) + '"><a href="#" style="text-align:center;color:#000;" onClick=ShowPopUp(' + positions[i] + ') ><strong>' + Vehicle + '</strong></a></td>';
                // tdFitness = '<td style="text-align:center;background-color:' + getDateDifferenceColor(DFitness[positions[i]]) + ';">' + getDateDifference(DFitness[positions[i]]) + '</td>';
                // tdInsurance = '<td style="text-align:center;background-color:' + getDateDifferenceColor(DInsurance[positions[i]]) + ';">' + getDateDifference(DInsurance[positions[i]]) + '</td>';
                // tdPermit = '<td style="text-align:center;background-color:' + getDateDifferenceColor(DPermit[positions[i]]) + ';">' + getDateDifference(DPermit[positions[i]]) + '</td>';
                // tdRoadtax = '<td style="text-align:center;background-color:' + getDateDifferenceColor(DRoadtax[positions[i]]) + ';">' + getDateDifference(DRoadtax[positions[i]]) + '</td>';
                // tdPollution = '<td style="text-align:center;background-color:' + getDateDifferenceColor(DPollution[positions[i]]) + ';">' + getDateDifference(DPollution[positions[i]]) + '</td>';
                // tdLastUpdate = '<td style="text-align:center; background-color:' + IdleTime(DlastUpdate[positions[i]]) + '">' + formatDate(DlastUpdate[positions[i]]) + '</td>';
                // tdNearestSite = '<td><a href="#" onClick=placeSiteMarker(' + nearestSiteLat[positions[i]] + ',' + nearestSiteLng[positions[i]] + ') >' + nearestSite[positions[i]].toUpperCase() + '</a></td>';
                // nearestRoute 
                tdnearestRoute = '<td>' + nearestRoute[positions[i]].toUpperCase() + '</td>';

                tdSpeed = '<td style="text-align:center;">' + parseInt(parseInt(Pspeed[positions[i]]) * 1.852) + '</td>';
                if (parseInt((DmaxSpeed[positions[i]]) * 1.852) >= 60) {
                    tdTxt = "red";
                }
                tdMaxSpeed = '<td style="text-align:center;background-color:' + OverSpeedCounterColor + ';color:' + tdTxt + '">' + parseInt((DmaxSpeed[positions[i]]) * 1.852) + '</td>';
                tdIdleTime = '<td style="background-color:' + IdleTimeColor(DlastSpeed[positions[i]], parseInt(Pspeed[positions[i]])) + '; text-align:center;">' + GetIdle + '</td>';
                tdOddometer = '<td style="text-align:right;"><a href="#" onClick=myOddometer(' + positions[i] + ') >' + (oddometer) + '</a></td>';
                tdTravelledDistance = '<td style="text-align:right;">' + travelled_distance + '</td>';
                //DtripsLoadingTime
                if (typeof DtripsIn[positions[i]] == 'undefined') {
                    DtripsIn[positions[i]] = "";
                }
                /*
                else{
                    TripsIn+=parseInt(DtripsIn[positions[i]]);
                }
                */
                if (typeof DtripsOut[positions[i]] == 'undefined') {
                    DtripsOut[positions[i]] = "";
                }
                /*
                else{
                    TripsOut+=parseInt(DtripsOut[positions[i]]);
                }
                */
                if (typeof DtripsLoadingTime[positions[i]] == 'undefined') {
                    DtripsLoadingTime[positions[i]] = "";
                }

                //  tdTripsIn= '<td style="text-align:center;">'+DtripsIn[positions[i]]+'</td>';
                //   tdTripsOut= '<td style="text-align:center;">'+DtripsOut[positions[i]]+'</td>';
                // tdLoadingTime = '<td style="text-align:center;">' + DtripsLoadingTime[positions[i]] + '</td>';
                // tdInitialFuel = '<td style="text-align:center;">' + initialFuel + '</td>';
                // tdFilled = '<td style="text-align:center;">' + parseFloat(FillFuelQty[positions[i]]).toFixed(1) + '</td>';
                // tdConsumed = '<td style="text-align:center;">' + FConsumed + '</td>';
                // tdStolen = '<td style="text-align:center;">' + parseFloat(StolenFuelQty[positions[i]]).toFixed(1) + '</td>';
                // tdCurrentFuel = '<td style="text-align:center;">' + currentFuel + '</td>';
                // tdKMPL = '<td style="text-align:center;">' + KMPL + '</td>';
                // tdAddress = '<td>' + Paddress[positions[i]].toUpperCase() + '</td>';
                var TripStatus;
                if (Challan[positions[i]]) {
                    TripStatus = Challan[positions[i]].status;
                    if (Challan[positions[i]].unloadingpoint != null) {
                        TripStatus = "UNLOADED";
                    }

                } else {
                    TripStatus = "";
                }
                tdTripStatus = '<td>' + TripStatus + '</td></tr>';
                txt = tdDeviceID + tdGroups + tdCurrentStatus + tdCategory + tdDname + tdLastUpdate + tdNearestSite + tdnearestRoute + tdTripsIn + tdTripsOut + tdSpeed + tdMaxSpeed + tdIdleTime + tdOddometer + tdTravelledDistance + tdInitialFuel + tdFilled + tdConsumed + tdStolen + tdCurrentFuel + tdKMPL + tdFitness + tdInsurance + tdPermit + tdRoadtax + tdPollution + tdAddress + tdTripStatus;

                //    }
                // $("#txtPrint").append("name "+returnedData[i].name+" "+"id "+returnedData[i].id+"</ br>");

                //'+(IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]))+'  StolenFuelQty FillFuelQty currentStatus
                //  myInfo[positions[i]] = "Group :" +groups[DgroupId[positions[i]]] + "</br>";
                if (Challan[positions[i]]) {
                    TripStatus = Challan[positions[i]].status;
                    if (Challan[positions[i]].unloadingpoint != null) {
                        TripStatus = "UNLOADED";
                    }
                    myInfo[positions[i]] = "<h4>" + TripStatus + "</h4>";
                    myInfo[positions[i]] += "Vehicle :<strong>" + Dname[positions[i]] + "</strong></br>";
                    myInfo[positions[i]] += "IAS :" + Challan[positions[i]].gatepass_no + "</br>";
                    myInfo[positions[i]] += "CHALLAN:" + Challan[positions[i]].challanno + "</br>";
                    myInfo[positions[i]] += "VendorCode" + Challan[positions[i]].vendorCode + "</br>";
                    myInfo[positions[i]] += "Driver" + Challan[positions[i]].driver_name + "</br>";
                    myInfo[positions[i]] += "Idle Since :" + (get_time_diff(DlastSpeed[positions[i]])) + "</br>";
                    myInfo[positions[i]] += "Speed :" + parseInt(parseInt(Pspeed[positions[i]]) * 1.852) + " km/h</br>";
                    myInfo[positions[i]] += "latitude :" + (Platitude[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "longitude :" + (Plongitude[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "Nearest Site :" + nearestSite[positions[i]].toUpperCase() + "</br>";
                    myInfo[positions[i]] += "Nearest Route :" + nearestRoute[positions[i]].toUpperCase() + "</br>";
                    // myInfo[positions[i]] += "<select id="+positions[i]['id']+" onchange=smsClick("+data[i]['id']+",1,"+positions[i]['phone']+")><option value=0>Select</option></select>";
                    myInfo[positions[i]] += "<select id=" + smsId[positions[i]] + " onchange=smsClick(" + smsId[positions[i]] + ",1," + smsPhone[positions[i]] + ")><option value=0>Select</option></select>";
                } else {
                    myInfo[positions[i]] = "<h4>" + currentStatus + "</h4>";
                    myInfo[positions[i]] += "Vehicle :<strong>" + Dname[positions[i]] + "</strong></br>";
                    myInfo[positions[i]] += "Unique ID :" + DuniqueId[positions[i]] + "</br>";
                    myInfo[positions[i]] += "Last Seen :" + formatDate(DlastUpdate[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "Idle Since :" + (get_time_diff(DlastSpeed[positions[i]])) + "</br>";
                    myInfo[positions[i]] += "Speed :" + parseInt(parseInt(Pspeed[positions[i]]) * 1.852) + " km/h</br>";
                    myInfo[positions[i]] += "latitude :" + (Platitude[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "longitude :" + (Plongitude[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "Direction :" + (Pcourse[positions[i]]) + "</br>";
                    myInfo[positions[i]] += "Nearest Site :" + nearestSite[positions[i]].toUpperCase() + "</br>";
                    myInfo[positions[i]] += "Nearest Location :" + Paddress[positions[i]].toUpperCase() + "</br>";
                    // myInfo[positions[i]] += "<select id="+positions[i]['id']+" onchange=smsClick("+data[i]['id']+",1,"+positions[i]['phone']+")><option value=0>Select</option></select>";
                    myInfo[positions[i]] += "<select id=" + smsId[positions[i]] + " onchange=smsClick(" + smsId[positions[i]] + ",1," + smsPhone[positions[i]] + ")><option value=0>Select</option></select>";
                }
                dropdownBtn(smsId[positions[i]], 1);
                displayTable[i] = txt;
                //alert("fhdjsfs")


                //myInfo[positions[i]] += "maxspeed :" +devicedaylog[maxspeed[positions[i]]]+ "</br>";
                //myInfo[positions[i]] += "Color :" +IdleTimeColor(DlastUpdate[positions[i]]),parseInt(Pspeed[positions[i]]) + "</br>";
                //myInfo[positions[i]] += "GetIdle :" +get_time_diff(formatDate(DlastUpdate[positions[i]])) + "</br>";



                //events[positions[i]]



                //
            }


            //
            if (selectSearchTxt != "") {
                var Target = groups.indexOf(selectSearchTxt);
                Don = gcDon[Target];
                Doff = gcDoff[Target];
                DNotRpt = gcDNotRpt[Target];
                DFuel = gcFuel[Target];
                gcDon[Target] = 0;
                gcDoff[Target] = 0;
                gcDNotRpt[Target] = 0;
                gcFuel[Target] = 0;
            }
            Dsum = Don + Doff + DNotRpt;
            //Dsum = 42;
            allTottxt = Dsum;

            Dontxt = Don;
            Dofftxt = Doff;
            DNotRpttxt = DNotRpt;


            // $('#allTottxt').text(allTottxt);
            // $('#Dontxt').text(Dontxt);
            // $('#Dofftxt').text(Dofftxt);
            // $('#DNotRpttxt').text(DNotRpttxt);
            // $('#DFueltxt').text(DFuel);


            //oTable.CommitChanges();

            // scrollPos = $("#tblData").scrollTop();
            //scrollPosX = $("#tblData").offsetX();
            //scrollPosX = $("#tblData")scroll.offsetX();
            // oTable.clear().draw();
            // for (i = 0; i < displayTable.length; i++) {
            //     oTable.row.add($(displayTable[i]));
            // }
            // oTable.draw();
            // oTable.columns.adjust().draw();
            //oTable.fixedColumns().update();
            // $("#tblData").scrollTop(scrollPos);
            // $("#tblData").scrollX(scrollPosX);
            //console.log("create table pushed");
        }
    function UpdateInfo() {
        //if(!callDevices){
        getDevices();
        // getTrips(283,225,18);
        //  getTrips(283,225,20);
        //  getTrips(319,100,1);
        // if (selectSearchTxt != "") {
        //     var Target = groups.indexOf(selectSearchTxt);



        //     $('#DtripsInTxt').text(TripsIn[Target]);
        //     $('#DtripsOutTxt').text(TripsOut[Target]);

        // } else {
        //     $('#DtripsInTxt').text(TripsIn[18] + TripsIn[1]);
        //     $('#DtripsOutTxt').text(TripsOut[18] + TripsOut[1]);
        // }

        // createTable();
        //}
        //getCoords();
        //CreateMapCluster();
    }
initialize();
getDevices();
var myInterval;
var interval_delay = 500;
var is_interval_running = false;
$(window).focus(function() {
    clearInterval(myInterval); // Clearing interval if for some reason it has not been cleared yet
    if (!is_interval_running) //Optional
        myInterval = setInterval(function() {
        is_interval_running = true;
        UpdateInfo();
    }, 4000);
}).blur(function() {
    clearInterval(myInterval); // Clearing interval on window blur
    is_interval_running = false; //Optional
});
myInterval = setInterval(function() {
    is_interval_running = true;
    UpdateInfo();
}, 4000);
// createTable();
// AnimateMarker(1)
})