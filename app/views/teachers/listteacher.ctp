<?php
//print_r($teacher);?>
<div class="projects view">
   <div id="body">
    <div>
    	<div id="dpr-content-box">
        <br>
        <br>
        <br>
        <!--��Ŀ��div id="dpr-message-area"���������ʾһ�����������һ����Ŀ(ֻ��һ����Ŀ)
        ��Ŀ��Ϣ��ͼƬ�����ֽ��ܣ���ʦ��Ϣ-->
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

