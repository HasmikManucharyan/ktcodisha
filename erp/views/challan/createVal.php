<div class="container">
	            <div class="row">
                 <div class="col-md-12">
                 <center>
TEST
<form action="">
<input type="textarea" name="FunctionInputs"  value="<?php echo $this->FunctionInputs; ?>"/>
<input type="submit" name="Submit" />
</form>
</center>
<br/>
<?php

$finputs = split(' ',$this->FunctionInputs);
//print_r($finputs);
//echo count($finputs);
$FI = "";

echo "<br/> <br/>for MODEL<br/>"	;
for($i=0;$i<count($finputs);$i++){
//echo $finputs[$i];
   $FI = $FI."&#36;".$finputs[$i]." = &#36;data['".$finputs[$i]."'];<br/>";
}
/**/
echo $FI;

/*
echo '&lt;soap:Body&gt;
				  &lt;'.$this->FunctionName.' xmlns="http://tempuri.org/"&gt;
					&lt;dtashinput&gt;&lt;![CDATA[
					&lt;table&gt;
					&lt;row&gt;';
					
*/					

echo "<br/> <br/>for SOAP<br/>"	;
					for($i=0;$i<count($finputs);$i++){
					
					echo "&lt;".strtolower($finputs[$i])."&gt;'&#36;".$finputs[$i]."'&lt;".strtolower($finputs[$i])."&gt;<br/>";
					}
					
					
					echo "<br/> <br/>for Forms<br/>"	;
						
				   for($i=0;$i<count($finputs);$i++){
					
					echo "&#36;".$finputs[$i]." = &#36;_REQUEST['".$finputs[$i]."']";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					}
					
					
					echo "<br/> <br/>for Form to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;_REQUEST['".$finputs[$i]."']";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					
					}
					echo ")";
					
					echo "<br/> <br/>for Data to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;".$finputs[$i];
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					
					}
					echo ")";
					
					echo "<br/> <br/>for DOM to arrays<br/>"	;
					
					echo " data = array( <br />";
					
					for($i=0;$i<count($finputs);$i++){
					
					echo "'".$finputs[$i]."' => &#36;doc->getElementsByTagName('".strtolower($finputs[$i])."')->item(0)->nodeValue";
					
					if($i<count($finputs)-1){
					echo ",";
					}
					echo "<br/>";
					}
					echo ")";
					/*
echo '&lt;/row&gt;
					 &lt;/table&gt;
					 ]]&gt;
					&lt;/dtashinput&gt;
					&lt;transportercode&gt;ASH001&lt;/transportercode&gt;
					&lt;authorizationcode&gt;Org&lt;/authorizationcode&gt;
				  &lt;/VL_ASH_PushVehicleDetails&gt;
				&lt;/soap:Body&gt;';
				*/
 ?>

</div>
</div>
</div>