<?php //print_r($lectures);?> 
  <div id="body">
    <div  id="content">
  <div id="breadcrumb">
    <p><h1>我们提供最及时的讲座信息</h1></p>
  </div>
  <!-- InstanceBeginEditable name="Main Content" -->
<br>
<br>
 <?php
 foreach($lectures as $result)
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
	<?php
	$pic=$this->requestAction(array('controller'=>'LectureHeads','action'=>'gethead'),array('pass'=>array($result['Lecture']['id'])));
    //print_r($pic);
	 echo $this->Html->image('images/'.$pic['LectureHead']['src'],array('class'=>'lecturepic'));
	?>
								</td>
								<td>
									<strong>
						讲座：<?php echo $result['Lecture']['name'];?>
									</strong>
					
        <li>演讲人：<?php echo $result['Lecture']['speechmaker'];?></li>
        <li>地点：<?php echo $result['Lecture']['place'];?></li>
        <li>时间：<?php echo $result['Lecture']['time'];?></li>
								</td>
							</tr>
					</tbody>
				  </table>
					<div class="roundbottom">
					<?php echo $this->Html->image('../images/bl.gif');?>
					</div>
					</div>

    <br class="clear">
<?php
}
?>
<div style="float:right"><?php echo $paginator->numbers(); ?></div>
    <!-- InstanceEndEditable -->
</div>
        <div class="sidebar">
            <ul>	
               <li>
                  
           <?php echo $this->Html->image('../images/pic0.jpg',array('alt'=>'pictuer'));?>
            </li>
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>