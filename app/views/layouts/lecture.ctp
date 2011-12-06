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
      <?php echo $this->element('navibar');?>
 <?php echo $content_for_layout;?>        

    <div id="footer">
        <div class="footer-content">
    
                <span lang="zh-cn">
    
                <span class="sitename">ECNU Research Center</span></span>
                 <p class="footer-links">
                    	<a href="#container" class="backtotop">Back to top</a>
               	 </p>
                 <div class="clear"></div>
        </div>
    <div class="footer-bottom">
            <p>&copy; YourSite 2011. Website Design by <a href="http://www.spyka.net">Free CSS Templates</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a> | Converted to <a href="http://www.html-templates.co.uk">HTML5</a></p>
         </div>
    
    </div>
</div>
<?php
echo $this->element('loginform');
echo $this->element('language');
?>
</body>
</html>
