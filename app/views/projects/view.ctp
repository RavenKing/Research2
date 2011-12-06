<?php
//print_r($project);?>
<div class="projects view">
   <div id="body">
    <div>
    	<div id="dpr-content-box">
        <br>
        <br>
        <br>
        <!--项目，div id="dpr-message-area"这个区域显示一个最近发布的一个项目(只有一个项目)
        项目信息：图片，文字介绍，老师信息-->
		<div id="dpr-message-area">
            <p>
			
	<?php 
	
	  $head=$this->requestAction(array('controller'=>'ProjectHeads','action'=>'gethead'),array('pass'=>array($project['Project']['id'])));
	echo $this->Html->image("images/".$head['ProjectHead']['src'],array('alt'=>'pictures','class'=>'imgbox1','height'=>'200','width'=>'200'));?>
 项目名称：<br><h3>	<?php echo $project['Project']['name']; ?></h3>
           <br> 项目介绍project  description
			<br>老师<?php echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'home', $project['Teacher']['id'])); ?>
            各种信息:
			</p>
			
            <p>
			项目负责人
			<?php echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
				<br>
			负责人联系方式
			<?php echo $project['Teacher']['tel'];?>
			</p>            
		</div>
        
        
        <!--这个区域显示最受关注的(人气最高的)若干个项目research highlight-->
		<div id="dpr-research-news-content">
			<div id="dpr-research-news-title">Research Highlight</div>
			<div id="dottedline1"></div>
            
            <!--一个dpr-research-news-container显示一个项目-->
			<div id="dpr-research-news-container">
              	<strong>
					研究方向：<?php echo $this->Html->link($project['Direction']['name'], array('controller' => 'projects', 'action' => 'listproject', $project['Direction']['id'])); ?>
				</strong>  
				<div id="dpr-research-news-text">
			
				</div>
			</div>
			
            
            <div id="dpr-research-news-container">
            	科研进度：	<?php echo $this->Html->link($project['Progress']['name'], array('controller' => 'progresses', 'action' => 'view', $project['Progress']['id'])); ?>
	
			</div>
            
			开始时间：<?php echo $project['Project']['starttime']; ?>
			结束时间:<?php echo $project['Project']['endtime']; ?>
            <div id="dpr-research-news-container">
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
			<?php echo $pro['Teacher']['name'];?><br>
			<?php echo $pro['Direction']['name'];?>
</div>
			<?php
 }?>	

            <!--一个dpr-research-news-container显示一个讲座-->
            
            
        
	</div>
    </div>

