	<?php
	//print_r($projects);?>	

<div>
<h1><?php  echo __('Research Page:');?></h1>
</div>
<?php

 foreach($projects as $result)
 {
?>			

 <div class="roundcont">
					<div class="roundtop" >
					<?php echo $this->Html->image('../images/tl.gif');?>
					</div>
				  <table>
					<tbody>
							<tr>
								<td valign="top" style="padding:0 10px 0 10px">
									<a href="相关项目的具体php页面.php">
									
	 <?php $head=$this->requestAction(array('controller'=>'ProjectHeads','action'=>'gethead'),array('pass'=>array($result['Project']['id'])));
	echo $this->Html->image("images/".$head['ProjectHead']['src'],array('alt'=>'pictures','class'=>'imgbox1','height'=>'100','width'=>'100'));?>
	
									</a>
								</td>
								<td>
									<strong>
									 <?php echo $this->Html->link($result['Project']['name'],array('controller'=>'projects','action'=>'view',$result['Project']['id']));?>
									</strong>
									<a id="1" name="1"></a>
									<br><?php echo $result['Direction']['name']?><br>
									<br><?php echo $result['Teacher']['name']?><br>
								</td>
							</tr>
					</tbody>
				  </table>
					<div class="roundbottom">
					<?php echo $this->Html->image('../images/bl.gif');?>
					</div>
					</div>
				   <?php
							}
							?>	
				
          </div>
        </div>
        
        <div class="sidebar">
        	<h4><span>Teacher</span></h4>
        		<ul class="styledlist" >
				<?php $teachers=$this->requestAction(array('controller'=>'teachers','action'=>'getlist'));
                 foreach($teachers as $key => $value)
				 {
                  ?>
          <li><?php 
		   echo $this->Html->link($value,array('controller'=>'teachers','action'=>'home',$key));?></li>
		  <?php				  				 
				 }
				?>
				
				</ul>
                
            <h4><span>Research Field</span></h4> 
            	<ul class="styledlist" >
                    <?php
					$directions=$this->requestAction(array('controller'=>'directions','action'=>'getlist'));
					foreach($directions as $key=>$value)
					{
					?>
					<li><?php  echo $this->Html->link($value,array('controller'=>'projects','action'=>'listproject',$key));?></li>
					<?php
					}
					
					?>
                </ul>
                
        
        </div>							
				