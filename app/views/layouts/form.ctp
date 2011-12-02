<!DOCTYPE HTML PUBLIC "-//W3C//DATD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo __("ECNU Research Expert");?></title>
<link rel="stylesheet" href="StyleHome.css" type="text/css" />
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
      <?php
	  echo $this->element('loginbar');
	  ?>
    <div id="body">
    	<b>
			<a href="home.html"><?php echo __("Home");?></a>
				&gt;
			<a href="#"> <?php echo __("Activity");?></a>
				&gt;
			<a href="register.html"><?php echo __("Register");?></a></b>
            	<p>&nbsp;</p>
        </b>
        
        <!--报名信息区域--->
        
        <div id="contentLeft">
         <?php echo $content_for_layout;?>
        </div>
        
        
      <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="footer-content">
    
                <span class="sitename"><?php echo __("ECNU Research Expert");?></span>
                 
                 <div class="clear"></div>
        </div>
    <div class="footer-bottom">
            <p>&copy; ECNU Research Expert 2011. Website Designed for<a href="http://www.ecnu.edu.cn">ECNU</a> | <a href="www.ecnu.edu.cn">Contact Us</a> | All Rights Reserved</p>
         </div>
    
    </div>
</div>
</body>
</html>