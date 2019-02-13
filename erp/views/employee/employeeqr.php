
				<?php foreach($this->getEmployee AS $key=>$value){ ?>
                    <div style="border: 1px solid grey; width:380px; margin-left:25px;margin-bottom:25px;float:left;" ><table width="380px">
                    
                   
									<tr>
                                    <td align="center" width="180px"><img src="<?php 
   $url =  "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=EM:".$value['name'].":".$value['id']."&choe=UTF-8";
    
    echo $url; ?> align ='center'" /></td><td><table>
     <tr><td align="left" colspan="2"><strong><?php echo $value['name'];?></strong></td>
                                              </tr>
                                               <tr> 
                                               
                                                <td align="left" colspan="2">Designation :<br /><strong><?php echo $value['designation'] ?></strong></td>
												</tr><tr> 
                                                <td align="left" colspan="2">Phone :<strong><?php echo $value['phoneno']; ?></strong></td>
                                                </tr><tr> 
                                                <td align="left" colspan="2">Blood Group :<strong><?php echo $value['bloodgroup'] ?></strong></td>      
                                               </tr>
                                               <tr> 
                                                <td align="left" >Emergency No:<br /><strong>7735097272</strong></td>      
											   </tr>
    </table></td>
                                     </tr>
											
					
</table></div>
<?php } ?>