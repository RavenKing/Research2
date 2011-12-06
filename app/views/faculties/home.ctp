

<table width="640" border="0" cellpadding="7" cellspacing="1" bgcolor="#d7ddea">
     <tbody><tr>
  <td height="35" bgcolor="#edf3ff" style="width: 257px"><strong><?php echo __("Faculties and Schools");?><a name="1" id="1"></a></strong></td>
                <td width="352" bgcolor="#edf3ff"><strong><?php echo __("Faculties and Schools");?>
				<span lang="zh-cn"></span></strong></td>
   
         <?php
		 $faculties=$this->requestAction(array('controller'=>'faculties','action'=>'getfaculties'));
		// print_r($faculties);
		 foreach($faculties as $key=>$value)
		 {
		 ?>
		   <tr>
                <td align="left" valign="top" bgcolor="#FFFFFF">
				<?php echo $this->Html->link($value,array('controller'=>'projects','action'=>'listproject',$key));?></td>
                <td align="left" valign="top" bgcolor="#FFFFFF"><ul class="bullet-arrow">
                <?php 
				$xi=$this->requestAction(array('controller'=>'xis','action'=>'getxis'),array('pass'=>array($key)));
			    foreach($xi as $first => $second)
				{?>
                <li><?php  echo $second;?></li>
				<?php
				}?>
                </ul></td>
                </tr>
	    <?php
		}
		 ?>       
             
                </tbody></table>