<?php
//xprint_r($teachers);?>
<div class="projects view">
   <div id="body">
    <div>
    	<div id="dpr-content-box">
         教师详细信息
        <br>
        <br>
        <!--项目，div id="dpr-message-area"这个区域显示一个最近发布的一个项目(只有一个项目)
        项目信息：图片，文字介绍，老师信息-->
		<div id="dpr-message-area">
		<h1><?php  echo $teachers['Teacher']['name'];?></h1>
            <p>	
	<?php 	
	  $head=$this->requestAction(array('controller'=>'TeacherHeads','action'=>'gethead'),array('pass'=>array($teachers['Teacher']['id'])));
	echo $this->Html->image("images/".$head['TeacherHead']['src'],array('alt'=>'pictures','class'=>'imgbox1','height'=>'200','width'=>'200'));?>
		      Email:<?php echo $teachers['Teacher']['email'];?>
			  <br>
			  Tel:<?php echo $teachers['Teacher']['tel'];?><br>
			  Office:<?php echo $teachers['Teacher']['office']?>
			 <?php //echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
            <br>
			Faculty:<?php echo $teachers['Faculty']['name'];?>
			</p>
			<br>
			Resume:<?php echo $teachers['Teacher']['description'];?>
            <p>
			<?php //echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
			<br>
			</p>            
		</div>			 
        
        <!--这个区域显示最受关注的(人气最高的)若干个项目research highlight-->
<div>
		<div id="dpr-research-news-content">
			<div id="dpr-research-news-title">Research And Projects</div>
			<div id="dottedline1"></div>
        <?php  
		//print_r($teachers);
		if(empty($teachers['Project']))
	        {
			?>
			<div id="dpr-research-news-container" style="height:200px;"></div>
			<?php
			}
			
		?>    
            <!--一个dpr-research-news-container显示一个项目-->
<?php  foreach($teachers['Project'] as $result)
   {
?>
			<div id="dpr-research-news-container" style="height:200px;">
  <?php  $head=$this->requestAction(array('controller'=>'ProjectHeads','action'=>'gethead'),array('pass'=>array($result['id'])));
	echo $this->Html->image("images/".$head['ProjectHead']['src'],array('alt'=>'pictures','class'=>'imgbox1','height'=>'81','width'=>'81'));?>
	
			<div id="dpr-research-news-text">
					
			<?php 
   echo $this->Html->link($result['name'],array('controller'=>'projects','action'=>'view',$result['id']));?>
				</div>
			</div>	

 <?php
 }
 ?>
            </div>
		</div>
        
        <!--这个区域用于显示近期将举行的各个讲座-->
           <h2>最近发布的项目</h2>
		<?php
			$pros=$this->requestAction(array('controller'=>'projects','action'=>'getrecent'));
  foreach($pros as $pro)		
		{?><div id="dpr-research-news-content">
        	<div id="dpr-research-news-title">	<?php  echo $this->Html->link($pro['Project']['name'],array('controller'=>'projects','action'=>'view',$pro['Project']['id'])); ?><br>
		</div>
	
				<div id="dottedline1"></div>
	<?php
		$head=$this->requestAction(array('controller'=>'ProjectHeads','action'=>'gethead'),array('pass'=>array($pro['Project']['id'])));
	     echo $this->Html->image("images/".$head['ProjectHead']['src'],array('alt'=>'pictures','class'=>'imgbox1','height'=>'81','width'=>'81'));?>
			<?php  //echo $this->Html->link($pro['Project']['name'],array('controller'=>'projects','action'=>'view',$pro['Project']['id'])); ?><br>
			教师:<?php echo $pro['Teacher']['name'];?><br>
			方向:<?php echo $pro['Direction']['name'];?>
</div>
			<?php
 }?>	
        <!--一个dpr-research-news-container显示一个讲座-->
            
        </div>
        
        
	</div>

	