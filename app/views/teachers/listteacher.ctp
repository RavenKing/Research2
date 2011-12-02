<?php
//print_r($teacher);?>
<div class="projects view">
   <div id="body">
    <div>
    	<div id="dpr-content-box">
        <br>
        <br>
        <br>
        <!--项目，div id="dpr-message-area"这个区域显示一个最近发布的一个项目(只有一个项目)
        项目信息：图片，文字介绍，老师信息-->
	  <?php foreach($teacher as $teachers)
	  {
	  
	  ?>
	  <div id="dpr-message-area" style="margin:10px">
		<h1><?php  echo $this->Html->link($teachers['Teacher']['name'],array('controller'=>'teachers','action'=>'home',$teachers['Teacher']['id']));?></h1>
            <p>
		<?php 	
	  $head=$this->requestAction(array('controller'=>'TeacherHeads','action'=>'gethead'),array('pass'=>array($teachers['Teacher']['id'])));
	//print_r($head);
	echo $this->Html->image("images/".$head['TeacherHead']['src'],array('alt'=>'pictures','class'=>'imgbox1'));?>
		      Email:<?php echo $teachers['Teacher']['email'];?>
			  <br>
			  Tel:<?php echo $teachers['Teacher']['tel'];?><br>
			  Office:<?php echo $teachers['Teacher']['office']?>
			 <?php //echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
            <br>
			Faculty:<?php echo $teachers['Faculty']['name'];?>
			</p>
			Resume:<?php echo $teachers['Teacher']['description'];?>
            <p>		
			<?php //echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
			<br>
			</p>            
		</div>
		<?php
		}
		?>	 
       
        
	</div>
    </div>

