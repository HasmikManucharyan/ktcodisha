<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108931566-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){
	  dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-108931566-1');
</script>
-->
<title>LiveraTrack - VTS</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<meta charset="utf-8">
<meta name="keywords" content="" />
<link href="<?php echo URL; ?>public/dynamic-header/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/dynamic-header/css/style.css" rel="stylesheet">
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo URL; ?>public/dynamic-header/js/bootstrap.min.js"></script>
<style>
.dropdown {
    display: none;
    padding-left: 8px;
}
</style>
<nav class="navbar navbar-default cstm_navBar">
  <div class="">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="hidden-sm hidden-md hidden-lg" href="#"><img src="<?php echo URL; ?>public/ktc_erp.svg" class="img-responsive logo_img"></a>
    </div>
    <div class="collapse navbar-collapse cstm_navCollapse" id="myNavbar">
      <ul class="nav navbar-nav left_side_nav" id="menuModule">
          <li class="btn2"> <img src="<?php echo URL; ?>public/ktc_erp.svg" class="img-responsive tab_img" style="padding-top:20px;"></li>
<!--
          <li class="btn2"> <img src="<?php echo URL; ?>public/headerliveratrack/images/ktc_erp.svg" class="img-responsive tab_img" style="padding-top:20px;"></li>
          <li class="btn2"> <img src="<?php echo URL; ?>public/headerliveratrack/images/ktc_erp.svg" class="img-responsive tab_img" style="padding-top:20px;"></li>
          <li class="btn2"> <img src="<?php echo URL; ?>public/headerliveratrack/images/ktc_erp.svg" class="img-responsive tab_img" style="padding-top:20px;"></li>
-->
           <?php if(Session::get('loggedIn')==true) { ?>
<!--          <div id="menuModule"></div>-->
      </ul>
      <ul class="nav navbar-nav navbar-right right_navItems">
        <li><a href="<?php echo URL; ?>vts/settings"><img src="<?php echo URL; ?>public/newheader/images/10.png" class="img-responsive" id="img_setting">
        </a></li>
        <li class="dropdown"><a data-toggle="dropdown" href="" class="dropdown-toggle"><img src="<?php echo URL; ?>public/newheader/images/11.png" class="img-responsive" id="img_bell"></a>
    <ul class="dropdown-menu dropdown-menu-right msg_drp arrow_box">
    <li role="presentation" class="dropdown-header">MARK ALL AS READ</li>
    <li role="presentation" class="divider"></li>  
    <li><a href="#">Lorem Ipsum is simply dummy text of the printing </a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="#">Lorem Ipsum is simply dummy text of the printing </a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="#">Lorem Ipsum is simply dummy text of the printing </a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="#">Lorem Ipsum is simply dummy text of the printing </a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="#">Lorem Ipsum is simply dummy text of the printing </a></li>
    <h6 style="text-align: center;">See All</h6>
    </ul></li>
    <li class="dropdown"><a data-toggle="dropdown" href="" class="dropdown-toggle"><img src="<?php echo URL; ?>public/newheader/images/12.png" class="img-responsive" id="img_user">
    <span id="tapas_txt"><?php echo Session::get('username'); ?></span></a>
    <ul class="dropdown-menu dropdown-menu-right msg_drp arrow_box">
    <li role="presentation" class="dropdown-header"><a href="<?php echo URL; ?>login/logout">LOGOUT</a></li>
  <?php }else{  ?>
           
    <li class="btn2"><a data-toggle="" href="<?php echo URL; ?>index/index">
    <img class="img-responsive tab_img" src="<?php echo URL; ?>public/newheader/images/home1.png" id="tab_imghome">
    <span class="tab_txt">HOME</span>
  </a></li>
        		<?php } ?>
      </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>
<script>
// Add active class to the current button (highlight it)

   $(document).ready(function(){
         dashboard();
//$('.pop').click(function(){
//    var pageTitle=$(this).attr('pageTitle');
//    var pageName =$(this).attr('pageName');
//   
//    $('body').append(customModal);
//    $(this).find($('h3')).clone().appendTo('#myModal1 .modal-header');
////     alert("ndgch");
//    $(this).find('.device-product, .device-details').clone().appendTo('#myModal1 .modal-body');
//    $('#myModal1 .hide').show();
//    $('#myModal1').modal();
//     $("#modaltitle1").html(pageTitle);
//   $("#modalbody1").load(pageName);
//    alert("bnbmn");
//  	$('#myModal1').on('hidden', function(){
// 		console.log("hidden");
//    	$('#myModal1').remove();
//	   });
//    });
});
</script>
<script>
               // var serverUrl = localStorage['serverUrl'];
        //alert(serverUrl);
        var serverUrl ='<?php echo URL; ?>';
    var employeeID= '<?php echo Session::get('employeeID'); ?>';
    //alert(employeeID);
       // var moduleurl;
        //alert(traccarID)
        var menu = document.getElementById("menuModule");
        //var elements = document.getElementsByClassName("column");

              
                var menu;
        
                document.addEventListener("backbutton", onBackKeyDown, false);
        
    function dashboard(){
       
            var txt='', display = [];
        var customModal ="";
       // $("#menuModule").empty();
            var name="";
                    var xhr = new XMLHttpRequest(), 
        method = 'GET',
        overrideMimeType = 'application/json',
        url =   ''+serverUrl+'dashboard/getallmodules?employeeID='+employeeID+'';
        //alert(url);
        xhr.onreadystatechange = function () {
        //alert("request");
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          //alert(xhr.responseText);   
        var data = JSON.parse(xhr.responseText);
      for(var i=0; i<data.length; i++){
     var modulename= data[i]['module_name'];
    var moduleurl= data[i]['module_url'];
  var id=data[i]['id'];
  var haschild = data[i]['hasChild'];
   var parentId = data[i]['pid'];
   var dataId = data[i]['id'];
        var erp_web = data[i]['erp_web'];

  if(moduleurl != null && haschild == 0 ){
    moduleurl = ""+serverUrl+""+data[i]['module_url']+"";
   
}else{
    moduleurl = "#a";
   // localStorage['parentId'] = parentId;
   
}


  //  var moduleurl= data[i]['module_url'];


  // parentid = parentId;
  // moduleName = data[i]['module_name'];
 var style;
       //   alert(parentId);
 //   if(modulename == "Tracking" || modulename == "Geofences" || modulename == "Trips Report" || modulename == "Tracking" || modulename == "Fuel Report" )  {
//if(erp_web == 1 ){
              

if(parentId == 0 ){
     // alert("hfghg")
 //alert(moduleurl);
//    $("#menuModule").append('<li class="dropdown"><a pageTitle='+modulename+' pageName='+moduleurl+' data-toggle="dropdown" href="#a" class="dropdown-toggle"><img class="img-responsive tab_img" src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" id="tab_img1"><span class="tab_txt">'+modulename+'</span></a></li>');
  if(haschild == 1)  {
      
       $("#menuModule").append('<li class="dropdown"><a pageTitle='+modulename+' pageName='+moduleurl+' data-toggle="dropdown" href="#a" class="dropdown-toggle"><img class="img-responsive tab_img" src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" id="tab_img1"><span class="tab_txt">'+modulename+'</span></a><ul class="dropdown-menu cstm_drpdwn" id="container'+dataId+'"></ul></li>');
  }else{
      $("#menuModule").append('<li class="dropdown"><a class="pop" pageTitle='+modulename+' pageName='+moduleurl+' data-toggle="dropdown" href="#a" class="dropdown-toggle"><img class="img-responsive tab_img" src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" id="tab_img1"><span class="tab_txt">'+modulename+'</span></a></li>');
  }
}else{
    
    $("#container"+parentId+"").append('<li><a class="pop" pageTitle='+modulename+' pageName='+moduleurl+' data-toggle="dropdown" href="#a" class="dropdown-toggle"><img src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" class="img-responsive icon_img"><span class="option_txt">'+modulename+'</span></a></li>');
}
  
    
//  $("#menuModule").append('<li class="btn2"><a class="dropdown-btn" data-toggle="" href="'+moduleurl+'"><img class="img-responsive tab_img" src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" id="tab_imghome"><span class="tab_txt">'+modulename+'</span></a><div class="dropdown" id="container'+dataId+'"></div></li>');
//}else{
//    //alert("jhgwdhs");
//    $("#container"+parentId+"").append('<ul class="dropdown-menu cstm_drpdwn"><li><a data-toggle="modal" data-target="#myModal1" href="'+serverUrl+'+'+moduleurl+'"><img src="'+serverUrl+'public/images/erp/'+data[i]['module_keyword']+'.png" class="img-responsive icon_img"><span class="option_txt">'+modulename+ '</span></a>'); 
//    }        
//}
      }
$(".pop").on("click", function(event){
    event.preventDefault()
   });         
                     
var header = document.getElementById("myNavbar");
var btns = header.getElementsByClassName("btn2");
    //var btns = document.getElementsByClassName("btn2");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
      
//    $(document).ready(function(){
 customModal = $('<div class="modal fade" id="myModal1" role="dialog" style="height:700px;"><div class="modal-dialog" style="width:90%;"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title" id="modaltitle1"></h4></div><div class="modal-body" id="modalbody1"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>');
            $('.pop').click(function(){
    var pageTitle=$(this).attr('pageTitle');
    var pageName =$(this).attr('pageName');
    //alert(pageName);
    $('body').append(customModal);
    $(this).find($('h3')).clone().appendTo('#myModal1 .modal-header');
//     alert("ndgch");
    $(this).find('.device-product, .device-details').clone().appendTo('#myModal1 .modal-body');
    $('#myModal1').show();
   $('#myModal1').modal();
     $("#modaltitle1").html(pageTitle);
   $("#modalbody1").load(pageName);
   
  	$('#myModal1').on('hidden', function(){
 		console.log("hidden");
    	$('#myModal1').remove();
	   });
    });
//     var dropdown = document.getElementsByClassName("dropdown-btn");
//var i;
////alert(dropdown.length)
//for (i = 0; i < dropdown.length; i++) {
//dropdown[i].addEventListener("click", function() {
//  this.classList.toggle("active");
//  var dropdownContent = this.nextElementSibling;
//  if (dropdownContent.style.display === "block") {
//    dropdownContent.style.display = "none";
//  } else {
//    dropdownContent.style.display = "block";
//  }
//});
//}  
        }
        };
        
        xhr.open(method, url, true);
        xhr.send(); 
                }
        
        function onBackKeyDown() {
            dashboard(0, " ");
            }   
        
        
            </script>