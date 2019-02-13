
				<?php foreach($this->getDriver AS $key=>$value){ ?>
                    <div style="border: 1px solid grey; width:220px;height:365px; margin:25px;float:left;" >
                   <table>
									<tr>
                                    <td align="center" width="180px"><img src="<?php 
   $url =  "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=DR:".$value['name'].":".$value['id']."&choe=UTF-8";
    
    echo $url; ?> align ='center'" /></td></tr>
     <tr><td align="left" ><strong><?php echo strtoupper($value['name']);?></strong></td>
                                              </tr>
                                               <tr> 
                                                <td align="left" >License No :<br/><strong><?php echo $value['attributes']['licenseno'] ?></strong></td>
												</tr><tr> 
                                                <td align="left" >License Expiry :<strong><?php echo date('d M Y',strtotime($value['attributes']['expirydate'])); ?></strong></td>
                                                </tr><tr> 
                                                <td align="left" >Blood Group :<strong><?php echo $value['attributes']['bloodgroup'] ?></strong></td>      
                                               </tr>
                                               <tr> 
                                                <td align="left" >Emergency No:<strong>7735097272</strong></td>      
											   </tr>
</table></div>
<?php } ?>