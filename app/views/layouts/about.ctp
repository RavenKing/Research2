<!DOCTYPE html>


<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
<?php  
    echo $this->Html->css('StyleHome');
	echo $this->Html->css('mask');
	echo $this->Html->css('styles');
	echo $this->Html->css('login-box');
    echo $this->Html->script('SliderForHome');
    echo $this->Html->script('jquery');
	echo $this->Html->script('slider');
	echo $this->Html->script('superfish');
	echo $this->Html->script('custom');
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
    <?php echo $this->element('navibar');?>
    
    <div id="slides-container">
        <div id="slides">
            <div>
                <div class="slide-image"><?php echo $this->Html->image('people1.jpg',array('alt'=>'people'))?></div>
                <div class="slide-text">
                    <h2>General Introduction</h2>
                    <p>This is a research information center of ECNU.Our goal of thumb is to provide a transparent,efficient,informative approach to research and related events.We hope we could make it to be the desired solution both for students and teachers.</p>
                </div>
            </div>
            
            <div>
                <div class="slide-image"><img src="images/slide-research.jpg" alt="research image" href="www.ecnu.edu.cn"/></div>
                <div class="slide-text">
            	<h2 class="slide-text">Research</h2>
                <p>A project-oriented research information center.You can get to know the current progress of the research project and join the most suitable at your wish.</p>
              </div>
          </div>
            
            <div>
                <div class="slide-image slide-image-right"><img src="images/slide-lecture.jpg" alt="lectures image" /></div>
                <div class="slide-text">
                    <h2>Activity</h2>
                    <p>Section amied at Lectures and Activities.</p>        
                </div>
            </div>
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
    </div>
        
    
    <div id="footer">
        <div class="footer-content">
    
                <span class="sitename">ECNU Research Expert</span>
                 <div class="clear"></div>
        </div>
       <div class="footer-bottom">
            <p>&copy; ECNU Research Expert 2011. Website Designed for <a href="http://www.ecnu.edu.cn">ECNU</a> | <a href="http://www.ecnu.edu.cn">Contact Us</a>All Rights Reserved</p>
         </div>
    
    </div>
</div>
<?php echo $this->element('loginform');?>
<?php echo $this->element('language');?>
</body>
</html>
