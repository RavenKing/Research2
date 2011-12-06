<!DOCTYPE HTML PUBLIC "-//W3C//DATD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo __("ECNU Research Expert");?></title>
<link rel="stylesheet" href="StyleHome.css" type="text/css" />
<?php  
    echo $this->Html->css('StyleHome');
	echo $this->Html->css('mask');
	echo $this->Html->css('login-box');
    echo $this->Html->script('SliderForHome');
    echo $this->Html->script('jquery');
	echo $this->Html->script('slider');
	echo $this->Html->script('superfish');
	echo $this->Html->script('custom');
	echo $this->Html->css('styles');
?>
<style type="text/css">
.auto-style1 {
	margin-top: 23;
}
</style>
</head>

<body>
<div id="container">
  <div id="header" class="auto-style1">
    	<h1><a href="home.html"><?php echo __("ECNU");?><strong><?php echo __("Research Expert");?></strong></a></h1>
        <h2><?php echo __("Transparent, Efficient, Informative");?></h2>
        <div class="clear"></div>
    </div>
 <?php 
   echo $this->element('navibar');
 ?>
	<div id="center">
		<div id="slider">
			<div class="slide">
				<a href="/research2/faculties/home"> 		  <?php  echo $this->Html->image('../images/slide-home.jpg',array('alt'=>'picture','class'=>'diapo'))?>
</a>
				<div class="text">
				  <span class="title"><?php echo __("General Introduction");?>简介</span>
                 <?php echo __("This is a research information center of ECNU.Our goal of thumb is to provide a transparent,efficient,informative approach to research and related events.We hope we could make it to be the desired solution both for students and teachers.");?>
				 这是一个为华东师范大学打造的科研信息中心。我们旨在提供一个透明、高效、内容翔实的科研系统，让更多的同学参与到科研和相关活动中去。希望这可以很好的服务于学生和老师。
			</div>
		</div>
		<div class="slide">
		<a href="/research2/teachers/listteacher">   <?php  echo $this->Html->image('../images/slide-faculty.jpg',array('alt'=>'picture','class'=>'diapo'))?>
			</a><div class="text">
				<span class="title"><?php echo __("Research");?>科研项目</span>
				<?php echo __("A project-oriented research information center.You can get to know the current progress of the research project and join the most suitable at your wish.");?>一个以项目为中心的科研信息平台。你可以了解到项目进展，并选择参与到你所适合的项目中去。
			</div>
		</div>
		<div class="slide">		  
		<a href="/research2/lectures/home"> <?php  echo $this->Html->image('../images/slide-lecture.jpg',array('alt'=>'picture','class'=>'diapo'))?>
</a>
			<div class="text">
				  <span class="title"><?php echo __("Lecture and Activity");?>活动与竞赛</span>
				  <?php echo __("Section amied to provide information about lectures and related events");?>用于提供讲座、活动的相关信息。
			</div>
		</div>
		<div class="slide">
		<a href="/research2/messageboards/index">	  <?php  echo $this->Html->image('../images/slide-message.jpg',array('alt'=>'picture','class'=>'diapo'))?></a>
<div class="text">
				<span class="title"><?php echo __("Message");?>留言板</span>
				<?php echo __("Leave us any message about research information or advice on impovement of the websited.We will give a response at our earliest convenience.");?>留下您的建议或疑问，我们将在最短的时间内给予回复。
			</div>
		</div>
				
		
	</div>
</div>

<script type="text/javascript">
/* ==== start script ==== */
slider.init();
</script>
<div id="footer">
       
       <div class="footer-bottom">
            <p>&copy; ECNU Research Expert 2011. Website Design for <a href="http://www.ecnu.edu.cn">ECNU</a> | <a href="http://www.ecnu.edu.cn">Contact Us</a> | <a href="#">All Rights Reserved</a></p>
    </div>
  </div>
</div>
<?php echo $this->element('language');?>
</div>
<?php echo $this->element('loginform');?>
</div>
</body>
</html>
