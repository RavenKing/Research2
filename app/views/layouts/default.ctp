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
    <?php echo $this->element('loginbar');?>
	<div id="body">
		<div id="content">
            <div class="box">
               <h1>  <?php   echo __("Welcome To Ecnu Research Expert   ");?></h1>
			   <h3> <?php echo $_SESSION['Auth']['User']['name'];?></h3>               
                <!---数据库交互说明：一个<div class="roundcont">显示一个项目-->
     <?php   echo $content_for_layout;?>

          </div>
        </div>
        
        <?php echo $this->element('sidebar');
		?>
        
        <div class="clear"></div>
    </div>
    <div id="footer">
        <div class="footer-content">
    
                <span class="sitename">ECNU Research Center</span>
                
                 <div class="clear"></div>
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
</body>
</html>
