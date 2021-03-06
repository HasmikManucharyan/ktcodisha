/*  Marker Icons    */
var pinColor_default = "FF7E73",
    pinColor_active = "FFC9C4",
    pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor_default,
        new google.maps.Size(21, 34),
        new google.maps.Point(0, 0),
        new google.maps.Point(10, 34)),
    pinImage_active = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor_active,
        new google.maps.Size(21, 34),
        new google.maps.Point(0, 0),
        new google.maps.Point(10, 34)),
    pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35)),

    polygonFillColor    = '#ff4444',
    polygonStrokeColor  = '#ff0000',
//'21.70', '84.03'
    mapCenterLat = 21.70,
    mapCenterLng = 84.03,

/*
    keyCode n = 78
    To find other keycodes
    The following code in the console
    Of the browser:

        function getCode(e){
            console.log(e.keyCode);
        }
        document.onkeydown = getCode;

   Then press the desired keys

    The respective keyCode is now in the console
*/
    keyCode = 78;