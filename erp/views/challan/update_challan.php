
         <script>
function UpdateChallan(id,challan){
  $.ajax({
        url: "<?php echo URL; ?>challan/VL_ASH_PullVehicleDetailsNEW",
        type: "GET",
        data: {
        id : id,
        challan : challan
        },
        dataType: "text/html",
        success: function(returnedData) {
       // alert("called");,
      //  async: false
        }
});
return false;
}
</script>
         <?php foreach($this->complete_challan AS $key=>$value){
           
           if( $value['status']!="EXIT DONE" && $value['status']!="CANCEL" && $value['status']!="UNLOADING DONE"){
           ?>
     
              <script> UpdateChallan(<?php 	echo $value['deviceid'];?>,<?php echo $value['challanno'];?>); </script>
                     						    
											
          <?php 
        echo "updated ".$value['challanno']."<br/>";
           }
        } ?>
                  
   
